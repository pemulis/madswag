<?php
  //get MadSwag's custom functions, exception handling, and database connection info
  require_once("madswag_fns.php");
  
  //create and show header
  do_header("Men's College Basketball - Round of 16 - MadSwag");
  
  //show menu
  do_menu();
?>
      <div id = "oneCol">
        <?php
          //get variables from the form
          $winner1 = $_POST['winner1'];
          $spread1 = $_POST['spread1'];
          $winner2 = $_POST['winner2'];
          $spread2 = $_POST['spread2'];
          $winner3 = $_POST['winner3'];
          $spread3 = $_POST['spread3'];
          $winner4 = $_POST['winner4'];
          $spread4 = $_POST['spread4'];
          $winner5 = $_POST['winner5'];
          $spread5 = $_POST['spread5'];
          $winner6 = $_POST['winner6'];
          $spread6 = $_POST['spread6'];
          $winner7 = $_POST['winner7'];
          $spread7 = $_POST['spread7'];
          $winner8 = $_POST['winner8'];
          $spread8 = $_POST['spread8'];
          
          //check to make sure form is complete
          try
          {
            if (!$winner1 || !$winner2 || !$winner3 || !$winner4 || !$winner5 || !$winner6 || !$winner7 || !$winner8)
            {
              throw new swagexception("You didn't complete all of your picks! Press the back button on your browser and try again.");
            }
          }
          catch (swagexception $e)
          {
            include 'error.html';
            echo $e;
            do_footer();
            exit;
          }
          
          //open connection to the database
          $db = do_connect_to_database();
          
          //use real_escape_string to prepare data for entry
          $winner1 = $db->real_escape_string($winner1);
          $spread1 = $db->real_escape_string($spread1);
          $winner2 = $db->real_escape_string($winner2);
          $spread2 = $db->real_escape_string($spread2);
          $winner3 = $db->real_escape_string($winner3);
          $spread3 = $db->real_escape_string($spread3);
          $winner4 = $db->real_escape_string($winner4);
          $spread4 = $db->real_escape_string($spread4);
          $winner5 = $db->real_escape_string($winner5);
          $spread5 = $db->real_escape_string($spread5);
          $winner6 = $db->real_escape_string($winner6);
          $spread6 = $db->real_escape_string($spread6);
          $winner7 = $db->real_escape_string($winner7);
          $spread7 = $db->real_escape_string($spread7);
          $winner8 = $db->real_escape_string($winner8);
          $spread8 = $db->real_escape_string($spread8);

          //set variable for the userID, grabbed from the session array
          $userID = $_SESSION['identifier'];
          
          //set a variable to hold the name of the table
          $table = "m_c_bball_roundof16_2011";
          
          //check if the user already made picks, function returns the number of rows in the table containing their userID
          $numRows = check_already_made_picks($db, $userID, $table);
          
          //check if $numRows is greater than 0
          if ($numRows > 0)
          {
            //update their picks
            update_picks_eight($db, $userID, $table, $winner1, $spread1, $winner2, $spread2, $winner3, $spread3, $winner4, $spread4, $winner5, $spread5, $winner6, $spread6, $winner7, $spread7, $winner8, $spread8);
          } else {
            //if $numRows is not greater than 0, the user has not made packs, so insert their picks into the table
            insert_picks_eight($db, $userID, $table, $winner1, $spread1, $winner2, $spread2, $winner3, $spread3, $winner4, $spread4, $winner5, $spread5, $winner6, $spread6, $winner7, $spread7, $winner8, $spread8);
          }
          
          //find user's e-mail address by their user ID, and set it as a variable
          $email = find_email($db, $userID);
          
          //set up e-mail information to send a record of their picks to the user
          $toAddress = "$email";
          
          $subject = "Copy of your MadSwag picks";

          $fromAddress = "From: picks@madswag.com";
          
          //take the info from $reply, modify it to e-mail format, and assign to variable $mailContent
          $mailContent =  "These are your current picks for the 2011 men's college basketball tournament round of sixteen.\n\n".
                          "$winner1: Win by $spread1 points\n".
                          "$winner2: Win by $spread2 points\n".
                          "$winner3: Win by $spread3 points\n".
                          "$winner4: Win by $spread4 points\n".
                          "$winner5: Win by $spread5 points\n".
                          "$winner6: Win by $spread6 points\n".
                          "$winner7: Win by $spread7 points\n".
                          "$winner8: Win by $spread8 points\n".
                          "You can change your picks at any time before tipoff of the first game on March 24. Just go back to the form on the game page and enter your new picks.\n\n".
                          "Good luck,\n".
                          "The MadSwag Team";
                          
          //use wordwrap to limit lines of $mailContent to 70 characters
          $mailContent = wordwrap($mailContent, 70, "\n");
          
          //send the e-mail
          send_picks_mail($db, $toAddress, $subject, $mailContent, $fromAddress);
          
          //if everything succeeded, write reply and close database
          generate_picks_accepted("tipoff of the first game on March 24");
          $db->close();
        ?>
      </div>
<?php
  //show footer
  do_footer();
?>