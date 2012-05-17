<?php
  //get MadSwag's custom functions, exception handling, and database connection info
  require_once("madswag_fns.php");
  
  //create and show header
  do_header("Men's College Basketball, Week of February 27, 2011 - MadSwag");
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
          
          //check to make sure form is complete
          try
          {
            if (!$winner1 || !$spread1 || !$winner2 || !$spread2 || !$winner3 || !$spread3 || !$winner4 || !$spread4 || !$winner5 || !$spread5)
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

          //set variable for the userID, grabbed from the session array
          $userID = $_SESSION['identifier'];
          
          //set a variable to hold the name of the table
          $table = "collbballmen2011feb27";
          
          //check if the user already made picks, function returns the number of rows in the table containing their userID
          $numRows = check_already_made_picks($db, $userID, $table);
          
          //check if $numRows is greater than 0
          if ($numRows > 0)
          {
            //update their picks
            update_picks_five($db, $userID, $table, $winner1, $spread1, $winner2, $spread2, $winner3, $spread3, $winner4, $spread4, $winner5, $spread5);
          } else {
            //if $numRows is not greater than 0, the user has not made packs, so insert their picks into the table
            insert_picks_five($db, $userID, $table, $winner1, $spread1, $winner2, $spread2, $winner3, $spread3, $winner4, $spread4, $winner5, $spread5);
          }
          
          //find user's e-mail address by their user ID, and set it as a variable
          $email = find_email($db, $userID);
          
          //set up e-mail information to send a record of their picks to the user
          $toAddress = "$email";
          
          $subject = "Your MadSwag Picks";

          $fromAddress = "From: picks@madswag.com";
          
          //take the info from $reply, modify it to e-mail format, and assign to variable $mailContent
          $mailContent =  "You picked $winner1 to win by $spread1 points, $winner2 to win by $spread2 points, $winner3 to win by $spread3 points, $winner4 to win by $spread4 points, and $winner5 to win by $spread5 points.\n\n".
                          "You can change your picks at any time before 1:00pm EST, February 27, 2011. Just go back to the form on the game page and enter your new picks. Good luck!";
                          
          //use wordwrap to limit lines of $mailContent to 70 characters
          $mailContent = wordwrap($mailContent, 70, "\n");
          
          //send the e-mail
          send_picks_mail($toAddress, $subject, $mailContent, $fromAddress);
          
          //if everything succeeded, write reply and close database
          generate_picks_accepted("1:00pm EST, February 27, 2011");
          $db->close();
        ?>
      </div>
<?php
  //show footer
  do_footer();
?>