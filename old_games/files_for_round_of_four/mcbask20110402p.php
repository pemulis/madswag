<?php
  //get MadSwag's custom functions, exception handling, and database connection info
  require_once("madswag_fns.php");
  
  //create and show header
  do_header("Men's College Basketball - Round of Four - MadSwag");
  
  //show menu
  do_menu();
?>
      <div id = "oneCol">
        <?php
          //get variables from the form
          //use only as many as you need
          $winner1 = $_POST['winner1'];
          $spread1 = $_POST['spread1'];
          $winner2 = $_POST['winner2'];
          $spread2 = $_POST['spread2'];
          
          //check to make sure form is complete
          //template: use only as many as you need
          try
          {
            if (!$winner1 || !$winner2)
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
          //template: use only as many as you need
          $winner1 = $db->real_escape_string($winner1);
          $spread1 = $db->real_escape_string($spread1);
          $winner2 = $db->real_escape_string($winner2);
          $spread2 = $db->real_escape_string($spread2);

          //set variable for the userID, grabbed from the session array
          $userID = $_SESSION['identifier'];
          
          //set a variable to hold the name of the table
          $table = "m_c_bball_roundof4_2011";
          
          //check if the user already made picks, function returns the number of rows in the table containing their userID
          $numRows = check_already_made_picks($db, $userID, $table);
          
          //check if $numRows is greater than 0
          if ($numRows > 0)
          {
            //update their picks
            //template: use only as many as you need - you will likely have to use a different function
            update_picks_two($db, $userID, $table, $winner1, $spread1, $winner2, $spread2);
          } else {
            //if $numRows is not greater than 0, the user has not made packs, so insert their picks into the table
            //template: use only as many as you need - you will likely have to use a different function
            insert_picks_two($db, $userID, $table, $winner1, $spread1, $winner2, $spread2);
          }
          
          //find user's e-mail address by their user ID, and set it as a variable
          $email = find_email($db, $userID);
          
          //set up e-mail information to send a record of their picks to the user
          $toAddress = "$email";
          
          $subject = "Copy of your MadSwag picks";

          $fromAddress = "From: picks@madswag.com";
          
          //take the info from $reply, modify it to e-mail format, and assign to variable $mailContent
          //template: use only as many as you need
          $mailContent =  "These are your current picks for the round of four in the 2011 men's college basketball tournament.\n\n".
                          "$winner1: Win by $spread1 points\n".
                          "$winner2: Win by $spread2 points\n\n".
                          "You can change your picks at any time before 6:09pm EST on April 2nd. Just go back to the form on the game page and enter your new picks.\n\n".
                          "Good luck,\n".
                          "The MadSwag Team";
                          
          //use wordwrap to limit lines of $mailContent to 70 characters
          $mailContent = wordwrap($mailContent, 70, "\n");
          
          //send the e-mail
          send_picks_mail($db, $toAddress, $subject, $mailContent, $fromAddress);
          
          //if everything succeeded, write reply and close database
          generate_picks_accepted("6:09pm EST on April 2nd");
          $db->close();
        ?>
      </div>
<?php
  //show footer
  do_footer();
?>