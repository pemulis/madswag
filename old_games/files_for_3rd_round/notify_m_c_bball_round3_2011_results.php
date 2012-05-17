<?php
  //get MadSwag's custom functions, exception handling, and database connection info
  require_once("madswag_fns.php");
  
  /* Open connection to the database. In this script, I gave it the name $db1 instead of $db, since $db is the variable 
  used in the do_connect_to_database() function. Normally reusing the name isn't a problem, since most scripts only have to 
  open one database connection. This one will have to open a second connection while it loops through the results of the  
  first. */
  $db1 = do_connect_to_database();
  
  //define the variables for the template_scores table and the name of the pick set
  $table = "m_c_bball_round3_2011_scores";
  $pickset = "the third round of the 2011 men's college basketball tournament";
  echo "Table: $table  Pickset: $pickset  "; //debugging
  
  //set the tournament ID (will usually be the same name as $table, but without the '_scores' at the end)
  $tourneyID = "mcbask20110319";
  echo "Tournament ID: $tourneyID "; //debugging
  
  //find the number of players in the pickset
  $numPlayers = find_num_players($db1, $table);
  echo "# of Players: $numPlayers <br />"; //debugging
  
  //write the query to get all of the records in the table
  $getRows = "SELECT * FROM $table";
  
  //execute the query
  $result = $db1->query($getRows);
  
  //check if query failed
  if (!$result)
  {
    echo "Some kind of problem occurred when trying to get the rows from the database."; //debugging
  }
  
  //for each row in the database, find their userID, username, e-mail, grade, and rank, and send them a notification
  while ($row = $result->fetch_assoc())
  {
    //define their userID
    $userID = $row['userID'];
    echo "$userID "; //debugging
    
    //open a second connection to the database
    $db2 = do_connect_to_database();
    
    //find their e-mail address
    $email = find_email($db2, $userID);
    echo "$email "; //debugging
    
    //find their username
    $username = find_username($db2, $userID);
    echo "$username "; //debugging
    
    //find their grade
    $grade = find_grade($db2, $table, $userID);
    echo "$grade% "; //debugging
    
    //find their rank
    $rank = find_rank($db2, $table, $grade);
    echo "$rank "; //debugging
    
    //show the ordinal (-st, -nd, -rd, -th) for the rank
    $prettyRank = show_ordinal($rank);
    echo "$prettyRank <br />"; //debugging
    
    //set the variable for the To address
    $toAddress = $email;
    
    //set the variable for the subject
    $subject = "Your results for $pickset on MadSwag";
    
    //set the static variable for the From address
    $fromAddress = "results@madswag.com";
    
    //write the customized content of their e-mail
    $mailContent = "Hey, $username!\n\n
                    You finished $prettyRank out of $numPlayers in the pick set for $pickset, with a grade of $grade%. \n".
                    "You can see the full results for this pick set at http://madswag.com/$tourneyID".r.".php \n".
                    "Until next time,\n".
                    "The MadSwag Team";
                    
    //use wordwrap to limit the number of characters per line in $mailContent to 70
    $mailContent = wordwrap($mailContent, 70, "\n");
    
    //send them an e-mail
    send_results_mail($toAddress, $subject, $mailContent, $fromAddress);
    
    //close the second connection to the database (will re-connect if looping through again)
    $db2->close();
  }
  
  //close the first connection to the database
  $db1->close();
  
  //print a response
  echo "<br /> <br />Done!";  
  

  // //get MadSwag's custom functions, exception handling, and database connection info
  // require_once("madswag_fns.php");
  
  // //open connection to the database
  // $db = do_connect_to_database();
  
  // //define the variables for the template_scores table and the name of the pick set
  // $table = 'template_scores';
  // $pickset = 'template name';
  
  // //find the rank, username, grade, and e-mail of the top ten players
  // $results = get_results($db, $table);
  
  // //generate the winner list from the associative array
  // $winnerlist = create_winner_list($results);
  
  // // Set the tournament ID of the pickset
  // $tourneyID = 'template tournament ID';
  
  // // Set the subject for the notification e-mail
  // $subject = "Your results for $pickset on MadSwag";
  
  // /* For each of the winners, find their e-mail address, generate a custom congratulatory message and send it to them
  // along with the list of winners. */
  // send_results_mail($results, $pickset, $subject, $winnerlist, $endtime, $tourneyID);
  
  // // Close the database.
  // $db->close();
?>