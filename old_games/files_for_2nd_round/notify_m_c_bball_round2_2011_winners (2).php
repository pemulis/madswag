<?php
  //get MadSwag's custom functions, exception handling, and database connection info
  require_once("madswag_fns.php");
  
  //open connection to the database
  $db = do_connect_to_database();
  
  //define the variables for the template_scores table and the name of the pick set
  $table = 'm_c_bball_round2_2011_scores';
  $pickset = "the second round of the 2011 men's college basketball tournament";
  
  //find the rank, username, grade, and e-mail of the top ten players
  $assoc_array = get_top_ten($db, $table);
  
  //generate the winner list from the associative array
  $winnerlist = create_winner_list($db, $assoc_array);
  
  // Set the subject for the notification e-mail
  $subject = "The results are in...you rule.";
  
  /* For each of the winners, find their e-mail address, generate a custom congratulatory message and send it to them
  along with the list of top ten players. */
  send_winners_mail($db, $assoc_array, $pickset, $subject, $winnerlist);
  
  // Close the database.
  $db->close();
  echo 'Done!';
?>