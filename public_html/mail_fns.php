<?php
// Mail Functions
//
// This file contains all of the functions for sending e-mails to bars and users.



function send_passchange_mail($toAddress, $subject, $mailContent, $fromAddress)
{
   //send e-mail
  $isMailed = mail($toAddress, $subject, $mailContent, $fromAddress);
  
  //catch exception if e-mail failed
  try
  {
    if ($isMailed == false)
    {
      throw new swagexception("Your password has been successfully changed, but we were unable to send you an e-mail with your new password.");
    }
  }
  catch (swagexception $e)
  {
    include 'error.html';
    echo $e;
    do_footer();
    exit;
  }
}

function send_passreset_mail($toAddress, $subject, $mailContent, $fromAddress)
{
  //send e-mail to user including non-encypted version of new password
  $isMailed = mail($toAddress, $subject, $mailContent, $fromAddress);
  
  //catch exception if e-mail failed
  try
  {
    if ($isMailed == false)
    {
      throw new swagexception("We were unable to send you an e-mail with your new password. Your password has not been reset.");
    }
  }
  catch (swagexception $e)
  {
    include 'error.html';
    echo $e;
    do_footer();
    exit;
  }
}

function send_picks_mail($db, $toAddress, $subject, $mailContent, $fromAddress)
{
  //send the e-mail
  $isMailed = mail($toAddress, $subject, $mailContent, $fromAddress);
  
  //check if it mailed
  try
  {
    if ($isMailed == false)
    {
      throw new swagexception("Your picks were successfully entered, but we were unable to send you an e-mail containing a record of them.");
    }
  }
  catch (swagexception $e)
  {
    include 'error.html';
    echo $e;
    $db->close();
    do_footer();
    exit;
  }
}

function send_results_mail($toAddress, $subject, $mailContent, $fromAddress)
{
  //send e-mail
  $isMailed = mail($toAddress, $subject, $mailContent, $fromAddress);
  
  //let us know if an e-mail failed to send
  if ($isMailed == false)
  {
    echo "Failed to send e-mail to $toAddress <br \>";
  }


  // // Set the user's initial rank to 0.     Man, all this code is crazy. Result of lack of sleep.
  // $i = 0;
  
  // while ($row = $results->fetch_assoc())
  // {
    // //assign variables with the user's information
    // $userID = $row['userID'];
    // $username = $row['u_name'];
    // $email = $row['email'];
    // $grade = $row['grade'];
    // $rank = ++$i;
    
    // // Figure out what place they finished in based on their rank.
    // $place = '';
    
    // if ($rank == 1){ $place = 'first'; }
    // if ($rank == 2){ $place = 'second'; }
    // if ($rank == 3){ $place = 'third'; }
    // if ($rank == 4){ $place = 'fourth'; }
    // if ($rank == 5){ $place = 'fifth'; }
    // if ($rank == 6){ $place = 'sixth'; }
    // if ($rank == 7){ $place = 'seventh'; }
    // if ($rank == 8){ $place = 'eighth'; }
    // if ($rank == 9){ $place = 'ninth'; }
    // if ($rank == 10){ $place = 'tenth'; }
    
    // // Generate the custom congratulatory message for the user.
    // $mailContent = "Hey, $username!\n\n
                    // You finished $place in the pick set for $pickset, with a grade of $grade%.
                    // \n\n
                    // You can see the full results for this pick set at http://madswag.com/results/$tourneyID
                    // \n\n
                    // Until next time,\n
                    // The MadSwag Team\n\n
                    // P.S. We apologize if you get this e-mail more than once! We're still working out the kinks in our system.";
                    
    // $toAddress = $email;
    
    // $fromAddress = 'results@madswag.com';
    
    // //use wordwrap to limit lines of $mailContent to 70 characters
    // $mailContent = wordwrap($mailContent, 70, "\n");
    
    // //send the e-mail
    // mail($toAddress, $subject, $mailContent, $fromAddress) or die ("The script failed to send an e-mail to $toAddress");
    
    // echo "mailed to $toAddress \n";
  // }
}

function send_bars_signup_mail($toAddress, $subject, $mailContent, $fromAddress) {
  //send the e-mail
  $isMailed = mail($toAddress, $subject, $mailContent, $fromAddress);
  
  //check if it mailed
  try
  {
    if ($isMailed == false)
    {
      throw new swagexception("Your sign-up was successful, but we were unable to send you a confirmation e-mail. Please write to <a href = 'mailto:john@madswag.com'>john@madswag.com</a> so that we can welcome you properly!");
    }
  }
  catch (swagexception $e)
  {
    include 'error.html';
    echo $e;
    $db->close();
    do_footer();
    exit;
  }
}

// INCOMPLETE FUNCTIONS
function send_bars_winnerlist_mail()
{
}

?>
