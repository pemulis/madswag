<?php
  //get MadSwag's custom functions, exception handling, and database connection info
  require_once("madswag_fns.php");
  
  //create and show header
  do_header("Leaderboard - MadSwag");
  
  //show menu
  do_menu();
?>
      <div class = 'oneCol'>
        <h1 class = "center">Leaderboard</h1>
        <?php
          //connect to database
          $db = do_connect_to_database();
          
          //define the variable with the name of the table with the player's overall scores
          $table = "userscores";

          //see if user is logged in
          if (isset($_SESSION['identifier'])) {
          
            //set variable for $userID, grabbed from the session array
            $userID = $_SESSION['identifier'];
            
            //see if $userID matches a user ID in the userscores table
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
              
              //find the number of games they've played
              $gamesPlayed = find_games_played($db, $userID);
              
              //echo their personalized statement with their username, grade, and number of games played
              echo "<h4 class = 'center'>$username".", you are ranked $prettyRank out of $numPlayers with an overall grade of $grade"."%. You have played $gamesPlayed game(s). | <a href = 'scoring.php'>How does scoring work?</a></h4>";
              
            } else { //if they haven't played a game, echo a statement to that effect
              echo "<h4 class = 'center'>Play a game to get a grade! | <a href = 'scoring.php'>How does scoring work?</a></h4>";
            }
          } else { //if they aren't logged in, echo the default statement
            echo "<h4 class = 'center'>Log in to see your grade! | <a href = 'scoring.php'>How does scoring work?</a></h4>";
          }
            
          //create the top-25 leaderboard
          create_global_leaderboard($db, $table);
          
          //close the connection to the database
          $db->close();
        ?>
      </div>
      <div class = 'comments'>
        <script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:comments href="http://www.madswag.com/leaderboard.php" num_posts="5" width="500"></fb:comments>
      </div>
<?php
  do_footer();
?>