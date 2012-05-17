<?php
  //get MadSwag's custom functions, exception handling, and database connection info
  require_once("madswag_fns.php");
  
  //show header
  do_header("Password Changed - MadSwag");
  do_menu();
?>
      <div class = 'oneCol'>
<?php
  //get user ID value from session array
  $userID = $_SESSION['identifier'];
  
  //get data from form
  $oldpass = $_POST['txtOldPassword'];
  $newpass1 = $_POST['txtNewPassword'];
  $newpass2 = $_POST['txtNewPassword2'];
  
  //check if newpass1 and newpass2 match
  test_passwords_match($newpass1, $newpass2);
  
  //test password for length and against regular expressions
  test_password($newpass1);
  
  //connect to database
  $db = do_connect_to_database();
  
  //clean data with real_escape_string
  $oldpass = $db->real_escape_string($oldpass);
  $newpass1 = $db->real_escape_string($newpass1);
  $newpass2 = $db->real_escape_string($newpass2);
  
  //check old password against password in the database
  check_is_password($db, $userID, $oldpass);
  
  //update password in the database
  update_password($db, $userID, $newpass1);
  
  //find user's e-mail address
  $email = find_email($db, $userID);
  
  //generate e-mail header and content with new password
  $toAddress = "$email";
  
  $fromAddress = "From: service@madswag.com";
  
  $subject = "New MadSwag Password";
  
  $mailContent = "Your new password is: $newpass1. Please keep this file in your records.";
  
  $mailContent = wordwrap($mailContent, 70, "\n");
  
  //send e-mail
  send_passchange_mail($toAddress, $subject, $mailContent, $fromAddress);
  
  //close the database and include successful reply if all went well
  $db->close();
  include 'passwordchanged.html';
?>
      </div>
<?php
  do_footer();
?>