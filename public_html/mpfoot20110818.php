<?php
  //get MadSwag's custom functions, exception handling, and database connection info
  require_once("madswag_fns.php");
  
  //create and show header
  do_header("Pro Football Results - 2011 Preseason Week 2 - MadSwag");
  
  //show menu
  do_menu();
?>
      <div id = "oneCol">
        <h1 class = "center">Pro Football Results</h1>
        <h3 class = "center">Preseason Week 2</h3>
        <?php
          //connect to database
          $db = do_connect_to_database();
          
          //define the variable with the name of the tournament ID
          $tourneyID = "mpfoot20110818";
          
          //define the variable with the name of the template table
          $table = "mpfoot20110818_scores";

          //see if user is logged in
          if (isset($_SESSION['identifier'])) {
          
            //set variable for $userID, grabbed from the session array
            $userID = $_SESSION['identifier'];
            
            //see if $userID matches a user ID in the template_scores table
            $findUserID = "SELECT * FROM $table WHERE userID = '".$userID."'";
            $result = $db->query($findUserID);
            $numRows = $result->num_rows;
            if ($numRows > 0) {
              //find their username
              $username = find_username($db, $userID);
              
              //find their grade
              $grade = find_grade($db, $table, $userID);
              
              //find their rank
              $rank = find_rank($db, $table, $grade);
              
              //show the ordinal (-st, -nd, -rd, -th) after their rank
              $prettyRank = show_ordinal($rank);
              
              //find the number of players in the pickset
              $numPlayers = find_num_players($db, $table);
              
              //echo their personalized statement with their username, rank, and grade
              echo "<h4 class = 'center'>$username".", you finished $prettyRank out of $numPlayers with a grade of $grade"."%. | <a href = 'scoring.php'>How does scoring work?</a></h4>";
              
            } else { //if they didn't play this game, echo a statement to that effect
              echo "<h4 class = 'center'>You didn't enter any picks for this set. | <a href = 'scoring.php'>How does scoring work?</a></h4>";
            }
          } else { //if they aren't logged in, echo the default statement
            echo "<h4 class = 'center'>Log in to see your grade! | <a href = 'scoring.php'>How does scoring work?</a></h4>";
          }
            
          //create the display of the high scores for the game
          create_local_leaderboard($db, $table);
          
          //close the connection to the database
          $db->close();
        ?> 
      </div>
      <div class = 'comments'>
        <?php
          echo "<script src='http://connect.facebook.net/en_US/all.js#xfbml=1'></script><fb:comments href='http://www.madswag.com/$tourneyID.php' num_posts='10' width='500'></fb:comments>"
        ?>
      </div>
<?php
  do_footer();
?>