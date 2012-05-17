<?php
  //get MadSwag's custom functions, exception handling, and database connection info
  require_once("madswag_fns.php");
  
  //create and show header
  do_header("Reset Password - MadSwag");
  
  //show menu
  do_menu();
?>
        <div class = 'oneCol'>
          <?php
            //get username and e-mail from forgotpassword.php
            $username = trim($_POST["txtUsername"]);
            $email = trim($_POST["txtEmail"]);
            
            //connect to database
            $db = do_connect_to_database();
            
            //use real_escape_string to clean submitted data
            $username = $db->real_escape_string($username);
            $email = $db->real_escape_string($email);
            
            //write query to see if a record with both the username and e-mail exists in the database
            does_record_exist_username_and_email($db, $username, $email);
            
            //if the record exists, create random eight-character password
            $newpassword = eight_random_characters();
            
            //create e-mail to send to user
            $toAddress = "$email";
            
            $subject = "Your new password";
            
            $fromAddress = "From: service@madswag.com";
            
            $mailContent = "Username: $username\n\n".
                           "Password: $newpassword\n\n".
                           "Log in at MadSwag.com to change this password to one of your own choosing.";
            
            //use wordwrap to limit lines of $mailContent to 70 characters
            $mailContent = wordwrap($mailContent, 70, "\n");
            
            //send e-mail to user including non-encypted version of new password
            send_passreset_mail($toAddress, $subject, $mailContent, $fromAddress);
            
            //get user ID from the username so that we can update the password using the update_password function
            $userID = get_userID_from_username($db, $username);
            
            //update password in the database
            update_password($db, $userID, $newpassword);
            
            //include a success message if everything worked
            include 'resetpasswordsuccess.html';
            $db->close();
          ?>
        </div>
<?php
  do_footer();
?>