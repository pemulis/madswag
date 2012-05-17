<?php
  //get MadSwag's custom functions, exception handling, and database connection info
  require_once("madswag_fns.php");
  
  //create and show header
  do_header("Demo - MadSwag");
  
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
          $winner9 = $_POST['winner9'];
          $spread9 = $_POST['spread9'];
          $winner10 = $_POST['winner10'];
          $spread10 = $_POST['spread10'];
          $winner11 = $_POST['winner11'];
          $spread11 = $_POST['spread11'];
          $winner12 = $_POST['winner12'];
          $spread12 = $_POST['spread12'];
          $winner13 = $_POST['winner13'];
          $spread13 = $_POST['spread13'];
          $winner14 = $_POST['winner14'];
          $spread14 = $_POST['spread14'];
          $winner15 = $_POST['winner15'];
          $spread15 = $_POST['spread15'];
          $winner16 = $_POST['winner16'];
          $spread16 = $_POST['spread16'];
          
          //check to make sure form is complete
          try
          {
            if (!$winner1 || !$winner2 || !$winner3 || !$winner4 || !$winner5 || !$winner6 || !$winner7 || !$winner8 || !$winner9 || !$winner10 || !$winner11 || !$winner12 || !$winner13 || !$winner14 || !$winner15 || !$winner16)
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
          $winner9 = $db->real_escape_string($winner9);
          $spread9 = $db->real_escape_string($spread9);
          $winner10 = $db->real_escape_string($winner10);
          $spread10 = $db->real_escape_string($spread10);
          $winner11 = $db->real_escape_string($winner11);
          $spread11 = $db->real_escape_string($spread11);
          $winner12 = $db->real_escape_string($winner12);
          $spread12 = $db->real_escape_string($spread12);
          $winner13 = $db->real_escape_string($winner13);
          $spread13 = $db->real_escape_string($spread13);
          $winner14 = $db->real_escape_string($winner14);
          $spread14 = $db->real_escape_string($spread14);
          $winner15 = $db->real_escape_string($winner15);
          $spread15 = $db->real_escape_string($spread15);
          $winner16 = $db->real_escape_string($winner16);
          $spread16 = $db->real_escape_string($spread16);

          //set variable for the userID, grabbed from the session array
          $userID = $_SESSION['identifier'];
          
          //set a variable to hold the name of the table
          $table = "demo";
          
          //check if the user already made picks, function returns the number of rows in the table containing their userID
          $numRows = check_already_made_picks($db, $userID, $table);
          
          //check if $numRows is greater than 0
          if ($numRows > 0)
          {
            //update their picks
            update_picks_sixteen($db, $userID, $table, $winner1, $spread1, $winner2, $spread2, $winner3, $spread3, $winner4, $spread4, $winner5, $spread5, $winner6, $spread6, $winner7, $spread7, $winner8, $spread8, $winner9, $spread9, $winner10, $spread10, $winner11, $spread11, $winner12, $spread12, $winner13, $spread13, $winner14, $spread14, $winner15, $spread15, $winner16, $spread16);
          } else {
            //if $numRows is not greater than 0, the user has not made packs, so insert their picks into the table
            insert_picks_sixteen($db, $userID, $table, $winner1, $spread1, $winner2, $spread2, $winner3, $spread3, $winner4, $spread4, $winner5, $spread5, $winner6, $spread6, $winner7, $spread7, $winner8, $spread8, $winner9, $spread9, $winner10, $spread10, $winner11, $spread11, $winner12, $spread12, $winner13, $spread13, $winner14, $spread14, $winner15, $spread15, $winner16, $spread16);
          }
          
          //find user's e-mail address by their user ID, and set it as a variable
          $email = find_email($db, $userID);
          
          //set up e-mail information to send a record of their picks to the user
          $toAddress = "$email";
          
          $subject = "Copy of your MadSwag picks";

          $fromAddress = "From: picks@madswag.com";
          
          //take the info from $reply, modify it to e-mail format, and assign to variable $mailContent
          $mailContent =  "These are your current picks for The Demo Game.\n\n".
                          "$winner1: Win by $spread1 points\n".
                          "$winner2: Win by $spread2 points\n".
                          "$winner3: Win by $spread3 points\n".
                          "$winner4: Win by $spread4 points\n".
                          "$winner5: Win by $spread5 points\n".
                          "$winner6: Win by $spread6 points\n".
                          "$winner7: Win by $spread7 points\n".
                          "$winner8: Win by $spread8 points\n".
                          "$winner9: Win by $spread9 points\n".
                          "$winner10: Win by $spread10 points\n".
                          "$winner11: Win by $spread11 points\n".
                          "$winner12: Win by $spread12 points\n".
                          "$winner13: Win by $spread13 points\n".
                          "$winner14: Win by $spread14 points\n".
                          "$winner15: Win by $spread15 points\n".
                          "$winner16: Win by $spread16 points\n\n".
                          "You can change your picks at any time. Just go back to the form on the game page and enter your new picks.\n\n".
                          "Good luck,\n".
                          "The MadSwag Team";
                          
          //use wordwrap to limit lines of $mailContent to 70 characters
          $mailContent = wordwrap($mailContent, 70, "\n");
          
          //send the e-mail
          send_picks_mail($db, $toAddress, $subject, $mailContent, $fromAddress);
          
          //if everything succeeded, write reply and close database
          generate_picks_accepted("the end of the world (or at least the end of this website)");
          $db->close();
        ?>
      </div>
<?php
  //show footer
  do_footer();
?>
