<?php
// Database Functions
//
// This file contains all of the functions for connecting to and querying the database.



function do_connect_to_database() {
  //get the database connection info
	$user = 'XXXXXXX';
	$dbpword = 'XXXXXXX';
	$database = 'XXXXXXX';

  //connect to database
  @ $db = new mysqli('localhost', $user, $dbpword, $database);
  
  //catch exception if connection failed
  try
  {
    if (mysqli_connect_errno()){
      throw new swagexception("We could not connect to the database. Please try again later.");
    }
  }
  catch (swagexception $e)
  {
    include 'error.html';
    echo $e;
    do_footer();
    exit;
  }
  return $db;
}

function check_is_password($db, $userID, $oldpass) {
  //write query to check old password against password in database
  $isPassword = "SELECT * FROM useraccounts WHERE userID = '".$userID."' AND p_word = SHA1('".$oldpass."')";
  
  //execute query
  $result = $db->query($isPassword);
  
  //catch exception if query failed
  try
  {
    if (!$result)
    {
      throw new swagexception("Some kind of database problem occurred when trying to process your password.");
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

  //get the number of rows found by $isPassword
  $numRows = $result->num_rows;
  
  //catch exception if number of rows is equal to zero
  try
  {
    if ($numRows == 0)
    {
      throw new swagexception("The old password you entered didn't match the password we have stored in our records. Your password has not been changed.");
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

function update_password($db, $userID, $newpass) {
  //create sha-1 hash of new password
  $passhash = hash('sha1', $newpass);
  
  //write query update database with hash of new password
  $updatePass = "UPDATE useraccounts SET p_word = '".$passhash."' WHERE userID = '".$userID."'";
  
  //execute query
  $result = $db->query($updatePass);
  
  //catch exception if query failed
  try
  {
    if (!$result)
    {
      throw new swagexception("Some kind of problem occurred when trying to update your password in the database. Please disregard any e-mail we sent you with a new password, and contact us at <a href='mailto:service@madswag.com?subject=Password Change Problems'>service@madswag.com</a>.");
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

function find_email($db, $userID) {
  //write query to find user's e-mail address from database using user ID
  $findEmail = "SELECT email FROM useraccounts WHERE userID = '".$userID."'";
  
  //execute query
  $result = $db->query($findEmail);
  
  //catch exception if query failed
  try
  {
    if (!$result)
    {
      throw new swagexception("Some kind of database problem occurred when trying to find your e-mail address.");
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
  
  //create a variable for the row
  $row = $result->fetch_assoc();
  
  //get the e-mail from the row
  $email = $row['email'];
  
  //return the e-mail address to the script
  return $email;
}

function find_username($db, $userID) {
  //write the query to find username
  $findUsername = "SELECT u_name FROM useraccounts WHERE userID = '".$userID."'";
  
  //execute the query
  $result = $db->query($findUsername);
  
  //get the username from the row
  $row = $result->fetch_assoc();
  $username = $row['u_name'];
  
  //return the username
  return $username;
}

// function find_grade($db, $userID)
// {
  // //write the query to find their grade
  // $findGrade = "SELECT * FROM userscores WHERE userID = '".$userID."'";
  
  // //execute the query
  // $result = $db->query($findGrade);
  
  // //get the grade from the row
  // $row = $result->fetch_assoc();
  // $grade = $row['grade'];
  // $gamesplayed = $row['games_played'];
  
  // //return the user's grade
  // return $grade;
// }

function find_games_played($db, $userID) {
  //write the query to find the number of games they've played
  $findGamesPlayed = "SELECT * FROM userscores WHERE userID = '".$userID."'";
  
  //execute the query
  $result = $db->query($findGamesPlayed);
  
  //get the grade from the row
  $row = $result->fetch_assoc();
  $gamesplayed = $row['games_played'];
  
  //return the number of games they've played
  return $gamesplayed;
}

function is_login_username_or_email($db, $login) {
    //Set default of $loginType to 'nada'. If $loginType switches to 'username', the login is a username. If $loginType switches to 'email', the login is an e-mail. If $loginType remains set to 'nada', there is no username or e-mail in the database that matches the login.
  $loginType = 'nada';
  
  //create query to check if login is a username
  $isLoginUsername = "SELECT * FROM `useraccounts` WHERE `u_name` = '".$login."'";
  
  //run the first query
  $result = $db->query($isLoginUsername);
  
  //catch exception if query failed
  try
  {
    if (!$result)
    {
      throw new swagexception("Some kind of database problem occurred when trying to process your username.");
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

  //create variable for field count
  $numRows = $result->num_rows;
  
  //change $loginType to 'username' if $numRows is greater than 0, else run the second query to see if login is an email
  if ($numRows != 0)
  {
    $loginType = 'username';
  } else {
    //create query to check if login is an e-mail address
    $isLoginEmail = "SELECT * FROM `useraccounts` WHERE `email` = '".$login."'";
    
    //run the second query
    $result = $db->query($isLoginEmail);
    
    //catch exception if query failed
    try
    {
      if (!$result)
      {
        throw new swagexception("Some kind of database problem occurred when trying to process your e-mail.");
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
    
    //add num_rows from second query to field count
    $numRows = $result->num_rows;
    
    if ($numRows != 0)
    {
      $loginType = 'email';
    }
  }
  return $loginType;
}

function check_login_exists($db, $loginType){
  try
  {
    if ($loginType == 'nada')
    {
      throw new swagexception("The username or e-mail you entered is not in our records. Make sure you typed it in correctly, or <a href = \"join.php\">create an account</a>.");
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

function check_is_password_correct($db, $password, $login, $loginType){
  if ($loginType == 'username'){
    //generate query
    $isPassword = "SELECT * FROM `useraccounts` WHERE `u_name` = '".$login."' AND `p_word` = SHA1('".$password."')";
    
    //run the query
    $result = $db->query($isPassword);

    //throw exception if query failed
    try
    {
      if (!$result)
      {
        throw new swagexception("Some kind of database problem occurred when trying to process your password.");
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
    //create variable for field count
    $numRows = $result->num_rows;
    
    //throw exception if there were no rows (i.e., if passwords did not match)
    try
    {
      if ($numRows == 0)
      {
        throw new swagexception("The password you entered was incorrect. Go back and try again, or <a href = \"forgotpassword.php\">reset your password</a> if you've forgotten it.");
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
  } else if ($loginType == 'email'){
    //generate query
    $isPassword = "SELECT * FROM `useraccounts` WHERE `email` = '".$login."' AND `p_word` = SHA1('".$password."')";
    
    //run the query
    $result = $db->query($isPassword);

    //throw exception if query failed
    try
    {
      if ($result === false)
      {
        throw new swagexception("Some kind of database problem occurred when trying to process your password.");
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
    
    //create variable for field count
    $numRows = $result->num_rows;
    
    //throw exception if there were no rows (i.e., if passwords did not match)
    try
    {
      if ($numRows == 0)
      {
        throw new swagexception("The password you entered was incorrect. Go back and try again, or <a href = \"forgotpassword.php\">reset your password</a> if you've forgotten it.");
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
}

function get_userID_from_username($db, $login){
  $getuserID = "SELECT `userID` FROM `useraccounts` WHERE `u_name` = '".$login."'";

  $result = $db->query($getuserID);
  
  //check if query ran, catch exception if it failed
  try
  {
    if ($result === false)
    {
      throw new swagexception("Some kind of database problem occurred when trying to find your user ID.");
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
  
  //get the info from the row
  $row = $result->fetch_assoc();
  
  //check if function ran, catch exception if it failed
  try
  {
    if ($row === false)
    {
      throw new swagexception("Some kind of database problem occurred when trying to get info from your user record in the database.");
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
  
  //set userID variable
  $userID = $row['userID'];
  
  //return user ID
  return $userID;
}

function get_userID_from_email($db, $login){
  $getuserID = "SELECT `userID` FROM `useraccounts` WHERE `email` = '".$login."'";

  $result = $db->query($getuserID);
  
  //check if query ran, throw exception if it failed
  try
  {
    if ($result === false)
    {
      throw new swagexception("Some kind of problem occurred when trying to find your user ID in the database.");
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
  
  //get the info from the row
  $row = $result->fetch_assoc();
  
  //check if function ran, throw exception if it failed
  try
  {
    if ($row === false)
    {
      throw new swagexception("Some kind of problem occurred when trying to get info from your user record in the database.");
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
  
  //set userID variable
  $userID = $row['userID'];
  
  //return user ID
  return $userID;
}

function does_record_exist_username_and_email($db, $username, $email){
  //write query to see if a record with both the username and e-mail exists in the database
  $findRecord = "SELECT * FROM useraccounts WHERE u_name = '".$username."' and email = '".$email."'";
  
  //execute query
  $result = $db->query($findRecord);
  
  //catch exception if query failed
  try
  {
    if (!$result){
      throw new swagexception("Some kind of problem occurred when trying to find a record of you in the database. Please try again later.");
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
  
  //print an error if the record does not exist
  $numRows = $result->num_rows;
  try
  {
    if ($numRows == 0)
    {
      throw new swagexception("We couldn't find a record in the database with that username and e-mail address. Make sure you enter them both correctly, and try again.");
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

function check_is_unique_username($db, $username){
  //create query to check for unique username
  $uniqueUsername = "SELECT * FROM `useraccounts` WHERE `u_name` = '".$username."'";
  
  //run the query
  $result = $db->query($uniqueUsername);
  
  //create variable for field count
  $numRows = $result->num_rows;
  
  //catch exception if username is not unique
  try
  {
    if ($numRows != 0)
    {
      throw new swagexception("The username you entered has already been taken.");
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

function check_is_unique_email($db, $email){
  //create query to check for unique e-mail
  $uniqueEmail = "SELECT * FROM `useraccounts` WHERE `email` = '".$email."'";
  
  //run the query
  $result = $db->query($uniqueEmail);
  
  //create variable for field count
  $numRows = $result->num_rows;
  
  //catch exception if e-mail is not unique
  //v1.012 BUG: returns "e-mail is already taken" if user enters an address like test@test,com | It shouldn't even be possible for them to enter a comma in an e-mail; that should have been caught during e-mail filtering on lines 59-74
  try
  {
    if ($numRows != 0)
    {
      throw new swagexception("There's already an account for that e-mail address.");
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

function check_is_unique_business_email($db, $email){
  //create query to check for unique e-mail
  $uniqueEmail = "SELECT * FROM `baraccounts` WHERE `email` = '".$email."'";
  
  //run the query
  $result = $db->query($uniqueEmail);
  
  //create variable for field count
  $numRows = $result->num_rows;
  
  //catch exception if e-mail is not unique
  //v1.012 BUG: returns "e-mail is already taken" if user enters an address like test@test,com | It shouldn't even be possible for them to enter a comma in an e-mail; that should have been caught during e-mail filtering on lines 59-74
  try
  {
    if ($numRows != 0)
    {
      throw new swagexception("There's already a business account for that e-mail address.");
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

function insert_new_user($db, $firstName, $lastName, $username, $password, $email, $country, $state, $city, $zip){
  //use sha-1 to make a hash of the password
  $password = hash('sha1', $password);
  
  //v1.011: removed the time field - hopefully should default to CURRENT_TIME on entry to MySQL database
  //v1.012: removing the time field caused an error
  //v1.054: edited to add a blank for barID - don't forget that for every new column you have to change this script!
  //create insert query - keep in mind, you start with NULL for the userID
  $insert = "INSERT INTO useraccounts VALUES
            ('"."', '".$firstName."', '".$lastName."', '".$username."', '".$password."', '".$email."', '".$country."', '".$state."', '".$city."', '".$zip."', '"."', '"."')";
            
  //run the query
  $result = $db->query($insert);
  
  //catch exception if insert did not run
  try
  {
    if (!$result){
      throw new swagexception("Some kind of database problem. Send us an e-mail and try again later.");
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

function insert_new_business($db, $businessName, $login, $password, $email, $phone, $country, $state, $city, $streetAddress, $zip, $website, $twitter){
  //use sha-1 to make a hash of the password
  $password = hash('sha1', $password);
  
  //v. 1.1.01 create insert query - keep in mind, you start with NULL for the barID, contact_name, contact_email, contact_phone, payment_type, last_payment, ad_copy, mpfoot_winners, and mpfoot_prize(1-10). Values of '0' for free_trial_over, mpfoot_live, mcfoot_live, mcbask_live, mphock_live, mpbase_live, and mpsocc_live.
  $insert = "INSERT INTO baraccounts VALUES
            ('"."', '".$businessName."', '".$login."', '".$password."', '".$email."', '".$phone."', '".$website."', '".$twitter."', '".$country."', '".$state."', '".$city."', '".$streetAddress."', '".$zip."', '"."', '"."', '"."', '"."', '"."', '0', '"."', '0', '"."', '"."', '"."', '"."', '"."', '"."', '"."', '"."', '"."', '"."', '"."', '0', '0', '0', '0', '0')";
            
  //run the query
  $result = $db->query($insert);
  
  //catch exception if insert did not run
  try
  {
    if (!$result){
      throw new swagexception("Some kind of database problem occurred when trying to enter your information. Please try again later.");
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

function check_already_made_picks($db, $userID, $table){
  //write query to find rows containing their userID
  $finduserID = "SELECT * FROM ".$table." WHERE userID = '".$userID."'";
  
  //execute the query
  $result = $db->query($finduserID);
  
  //check if query failed
  try
  {
    if (!$result)
    {
      throw new swagexception("Some kind of database problem occurred when searching for your user ID in the database.");
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
  
  //find the number of rows in the result
  $numRows = $result->num_rows;
  
  //return the number of rows
  return $numRows;
}

function update_picks_thirtytwo($db, $userID, $table, $winner1, $spread1, $winner2, $spread2, $winner3, $spread3, $winner4, $spread4, $winner5, $spread5, $winner6, $spread6, $winner7, $spread7, $winner8, $spread8, $winner9, $spread9, $winner10, $spread10, $winner11, $spread11, $winner12, $spread12, $winner13, $spread13, $winner14, $spread14, $winner15, $spread15, $winner16, $spread16, $winner17, $spread17, $winner18, $spread18, $winner19, $spread19, $winner20, $spread20, $winner21, $spread21, $winner22, $spread22, $winner23, $spread23, $winner24, $spread24, $winner25, $spread25, $winner26, $spread26, $winner27, $spread27, $winner28, $spread28, $winner29, $spread29, $winner30, $spread30, $winner31, $spread31, $winner32, $spread32){
  //write the query to update their picks
  $update = "UPDATE `".$table."` SET `winner1` = '".$winner1."', `spread1` = '".$spread1."', `winner2` = '".$winner2."', `spread2` = '".$spread2."', `winner3` = '".$winner3."', `spread3` = '".$spread3."', `winner4` = '".$winner4."', `spread4` = '".$spread4."', `winner5` = '".$winner5."', `spread5` = '".$spread5."', `winner6` = '".$winner6."', `spread6` = '".$spread6."', `winner7` = '".$winner7."', `spread7` = '".$spread7."', `winner8` = '".$winner8."', `spread8` = '".$spread8."', `winner9` = '".$winner9."', `spread9` = '".$spread9."', `winner10` = '".$winner10."', `spread10` = '".$spread10."', `winner11` = '".$winner11."', `spread11` = '".$spread11."', `winner12` = '".$winner12."', `spread12` = '".$spread12."', `winner13` = '".$winner13."', `spread13` = '".$spread13."', `winner14` = '".$winner14."', `spread14` = '".$spread14."', `winner15` = '".$winner15."', `spread15` = '".$spread15."', `winner16` = '".$winner16."', `spread16` = '".$spread16."', `winner17` = '".$winner17."', `spread17` = '".$spread17."', `winner18` = '".$winner18."', `spread18` = '".$spread18."', `winner19` = '".$winner19."', `spread19` = '".$spread19."', `winner20` = '".$winner20."', `spread20` = '".$spread20."', `winner21` = '".$winner21."', `spread21` = '".$spread21."', `winner22` = '".$winner22."', `spread22` = '".$spread22."', `winner23` = '".$winner23."', `spread23` = '".$spread23."', `winner24` = '".$winner24."', `spread24` = '".$spread24."', `winner25` = '".$winner25."', `spread25` = '".$spread25."', `winner26` = '".$winner26."', `spread26` = '".$spread26."', `winner27` = '".$winner27."', `spread27` = '".$spread27."', `winner28` = '".$winner28."', `spread28` = '".$spread28."', `winner29` = '".$winner29."', `spread29` = '".$spread29."', `winner30` = '".$winner30."', `spread30` = '".$spread30."', `winner31` = '".$winner31."', `spread31` = '".$spread31."', `winner32` = '".$winner32."', `spread32` = '".$spread32."' WHERE `userID` = '".$userID."'"; 
  
  //execute the query
  $result = $db->query($update);
  
  //check if query failed
  try
  {
    if (!$result)
    {
      throw new swagexception("Some kind of problem occurred when trying to update your picks in the database.");
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

function insert_picks_thirtytwo($db, $userID, $table, $winner1, $spread1, $winner2, $spread2, $winner3, $spread3, $winner4, $spread4, $winner5, $spread5, $winner6, $spread6, $winner7, $spread7, $winner8, $spread8, $winner9, $spread9, $winner10, $spread10, $winner11, $spread11, $winner12, $spread12, $winner13, $spread13, $winner14, $spread14, $winner15, $spread15, $winner16, $spread16, $winner17, $spread17, $winner18, $spread18, $winner19, $spread19, $winner20, $spread20, $winner21, $spread21, $winner22, $spread22, $winner23, $spread23, $winner24, $spread24, $winner25, $spread25, $winner26, $spread26, $winner27, $spread27, $winner28, $spread28, $winner29, $spread29, $winner30, $spread30, $winner31, $spread31, $winner32, $spread32){
  //write the query to insert their picks
  $insert = "INSERT INTO `".$table."` VALUES ('"."', '".$userID."', '".$winner1."', '".$spread1."', '".$winner2."', '".$spread2."', '".$winner3."', '".$spread3."', '".$winner4."', '".$spread4."', '".$winner5."', '".$spread5."', '".$winner6."', '".$spread6."', '".$winner7."', '".$spread7."', '".$winner8."', '".$spread8."', '".$winner9."', '".$spread9."', '".$winner10."', '".$spread10."', '".$winner11."', '".$spread11."', '".$winner12."', '".$spread12."', '".$winner13."', '".$spread13."', '".$winner14."', '".$spread14."', '".$winner15."', '".$spread15."', '".$winner16."', '".$spread16."', '".$winner17."', '".$spread17."', '".$winner18."', '".$spread18."', '".$winner19."', '".$spread19."', '".$winner20."', '".$spread20."', '".$winner21."', '".$spread21."', '".$winner22."', '".$spread22."', '".$winner23."', '".$spread23."', '".$winner24."', '".$spread24."', '".$winner25."', '".$spread25."', '".$winner26."', '".$spread26."', '".$winner27."', '".$spread27."', '".$winner28."', '".$spread28."', '".$winner29."', '".$spread29."', '".$winner30."', '".$spread30."', '".$winner31."', '".$spread31."', '".$winner32."', '".$spread32."')"; 
  
  //execute the query
  $result = $db->query($insert);
  
  //check if query failed
  try
  {
    if (!$result)
    {
      throw new swagexception("Some kind of problem occurred when trying to insert your picks into the database. You may not be logged in.");
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

function update_picks_eighteen($db, $userID, $table, $winner1, $spread1, $winner2, $spread2, $winner3, $spread3, $winner4, $spread4, $winner5, $spread5, $winner6, $spread6, $winner7, $spread7, $winner8, $spread8, $winner9, $spread9, $winner10, $spread10, $winner11, $spread11, $winner12, $spread12, $winner13, $spread13, $winner14, $spread14, $winner15, $spread15, $winner16, $spread16, $winner17, $spread17, $winner18, $spread18){
  //write the query to update their picks
  $update = "UPDATE `".$table."` SET `winner1` = '".$winner1."', `spread1` = '".$spread1."', `winner2` = '".$winner2."', `spread2` = '".$spread2."', `winner3` = '".$winner3."', `spread3` = '".$spread3."', `winner4` = '".$winner4."', `spread4` = '".$spread4."', `winner5` = '".$winner5."', `spread5` = '".$spread5."', `winner6` = '".$winner6."', `spread6` = '".$spread6."', `winner7` = '".$winner7."', `spread7` = '".$spread7."', `winner8` = '".$winner8."', `spread8` = '".$spread8."', `winner9` = '".$winner9."', `spread9` = '".$spread9."', `winner10` = '".$winner10."', `spread10` = '".$spread10."', `winner11` = '".$winner11."', `spread11` = '".$spread11."', `winner12` = '".$winner12."', `spread12` = '".$spread12."', `winner13` = '".$winner13."', `spread13` = '".$spread13."', `winner14` = '".$winner14."', `spread14` = '".$spread14."', `winner15` = '".$winner15."', `spread15` = '".$spread15."', `winner16` = '".$winner16."', `spread16` = '".$spread16."', `winner17` = '".$winner17."', `spread17` = '".$spread17."', `winner18` = '".$winner18."', `spread18` = '".$spread18."' WHERE `userID` = '".$userID."'"; 
  
  //execute the query
  $result = $db->query($update);
  
  //check if query failed
  try
  {
    if (!$result)
    {
      throw new swagexception("Some kind of problem occurred when trying to update your picks in the database.");
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

function insert_picks_eighteen($db, $userID, $table, $winner1, $spread1, $winner2, $spread2, $winner3, $spread3, $winner4, $spread4, $winner5, $spread5, $winner6, $spread6, $winner7, $spread7, $winner8, $spread8, $winner9, $spread9, $winner10, $spread10, $winner11, $spread11, $winner12, $spread12, $winner13, $spread13, $winner14, $spread14, $winner15, $spread15, $winner16, $spread16, $winner17, $spread17, $winner18, $spread18){
  //write the query to insert their picks
  $insert = "INSERT INTO `".$table."` VALUES ('"."', '".$userID."', '".$winner1."', '".$spread1."', '".$winner2."', '".$spread2."', '".$winner3."', '".$spread3."', '".$winner4."', '".$spread4."', '".$winner5."', '".$spread5."', '".$winner6."', '".$spread6."', '".$winner7."', '".$spread7."', '".$winner8."', '".$spread8."', '".$winner9."', '".$spread9."', '".$winner10."', '".$spread10."', '".$winner11."', '".$spread11."', '".$winner12."', '".$spread12."', '".$winner13."', '".$spread13."', '".$winner14."', '".$spread14."', '".$winner15."', '".$spread15."', '".$winner16."', '".$spread16."', '".$winner17."', '".$spread17."', '".$winner18."', '".$spread18."')"; 
  
  //execute the query
  $result = $db->query($insert);
  
  //check if query failed
  try
  {
    if (!$result)
    {
      throw new swagexception("Some kind of problem occurred when trying to insert your picks into the database. You may not be logged in.");
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

function update_picks_sixteen($db, $userID, $table, $winner1, $spread1, $winner2, $spread2, $winner3, $spread3, $winner4, $spread4, $winner5, $spread5, $winner6, $spread6, $winner7, $spread7, $winner8, $spread8, $winner9, $spread9, $winner10, $spread10, $winner11, $spread11, $winner12, $spread12, $winner13, $spread13, $winner14, $spread14, $winner15, $spread15, $winner16, $spread16){
  //write the query to update their picks
  $update = "UPDATE `".$table."` SET `winner1` = '".$winner1."', `spread1` = '".$spread1."', `winner2` = '".$winner2."', `spread2` = '".$spread2."', `winner3` = '".$winner3."', `spread3` = '".$spread3."', `winner4` = '".$winner4."', `spread4` = '".$spread4."', `winner5` = '".$winner5."', `spread5` = '".$spread5."', `winner6` = '".$winner6."', `spread6` = '".$spread6."', `winner7` = '".$winner7."', `spread7` = '".$spread7."', `winner8` = '".$winner8."', `spread8` = '".$spread8."', `winner9` = '".$winner9."', `spread9` = '".$spread9."', `winner10` = '".$winner10."', `spread10` = '".$spread10."', `winner11` = '".$winner11."', `spread11` = '".$spread11."', `winner12` = '".$winner12."', `spread12` = '".$spread12."', `winner13` = '".$winner13."', `spread13` = '".$spread13."', `winner14` = '".$winner14."', `spread14` = '".$spread14."', `winner15` = '".$winner15."', `spread15` = '".$spread15."', `winner16` = '".$winner16."', `spread16` = '".$spread16."' WHERE `userID` = '".$userID."'"; 
  
  //execute the query
  $result = $db->query($update);
  
  //check if query failed
  try
  {
    if (!$result)
    {
      throw new swagexception("Some kind of problem occurred when trying to update your picks in the database.");
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

function insert_picks_sixteen($db, $userID, $table, $winner1, $spread1, $winner2, $spread2, $winner3, $spread3, $winner4, $spread4, $winner5, $spread5, $winner6, $spread6, $winner7, $spread7, $winner8, $spread8, $winner9, $spread9, $winner10, $spread10, $winner11, $spread11, $winner12, $spread12, $winner13, $spread13, $winner14, $spread14, $winner15, $spread15, $winner16, $spread16){
  //write the query to insert their picks
  $insert = "INSERT INTO `".$table."` VALUES ('"."', '".$userID."', '".$winner1."', '".$spread1."', '".$winner2."', '".$spread2."', '".$winner3."', '".$spread3."', '".$winner4."', '".$spread4."', '".$winner5."', '".$spread5."', '".$winner6."', '".$spread6."', '".$winner7."', '".$spread7."', '".$winner8."', '".$spread8."', '".$winner9."', '".$spread9."', '".$winner10."', '".$spread10."', '".$winner11."', '".$spread11."', '".$winner12."', '".$spread12."', '".$winner13."', '".$spread13."', '".$winner14."', '".$spread14."', '".$winner15."', '".$spread15."', '".$winner16."', '".$spread16."')"; 
  
  //execute the query
  $result = $db->query($insert);
  
  //check if query failed
  try
  {
    if (!$result)
    {
      throw new swagexception("Some kind of problem occurred when trying to insert your picks into the database. You may not be logged in.");
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


function update_picks_fifteen($db, $userID, $table, $winner1, $spread1, $winner2, $spread2, $winner3, $spread3, $winner4, $spread4, $winner5, $spread5, $winner6, $spread6, $winner7, $spread7, $winner8, $spread8, $winner9, $spread9, $winner10, $spread10, $winner11, $spread11, $winner12, $spread12, $winner13, $spread13, $winner14, $spread14, $winner15, $spread15){
  //write the query to update their picks
  $update = "UPDATE `".$table."` SET `winner1` = '".$winner1."', `spread1` = '".$spread1."', `winner2` = '".$winner2."', `spread2` = '".$spread2."', `winner3` = '".$winner3."', `spread3` = '".$spread3."', `winner4` = '".$winner4."', `spread4` = '".$spread4."', `winner5` = '".$winner5."', `spread5` = '".$spread5."', `winner6` = '".$winner6."', `spread6` = '".$spread6."', `winner7` = '".$winner7."', `spread7` = '".$spread7."', `winner8` = '".$winner8."', `spread8` = '".$spread8."', `winner9` = '".$winner9."', `spread9` = '".$spread9."', `winner10` = '".$winner10."', `spread10` = '".$spread10."', `winner11` = '".$winner11."', `spread11` = '".$spread11."', `winner12` = '".$winner12."', `spread12` = '".$spread12."', `winner13` = '".$winner13."', `spread13` = '".$spread13."', `winner14` = '".$winner14."', `spread14` = '".$spread14."', `winner15` = '".$winner15."', `spread15` = '".$spread15."' WHERE `userID` = '".$userID."'"; 
  
  //execute the query
  $result = $db->query($update);
  
  //check if query failed
  try
  {
    if (!$result)
    {
      throw new swagexception("Some kind of problem occurred when trying to update your picks in the database.");
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

function insert_picks_fifteen($db, $userID, $table, $winner1, $spread1, $winner2, $spread2, $winner3, $spread3, $winner4, $spread4, $winner5, $spread5, $winner6, $spread6, $winner7, $spread7, $winner8, $spread8, $winner9, $spread9, $winner10, $spread10, $winner11, $spread11, $winner12, $spread12, $winner13, $spread13, $winner14, $spread14, $winner15, $spread15){
  //write the query to insert their picks
  $insert = "INSERT INTO `".$table."` VALUES ('"."', '".$userID."', '".$winner1."', '".$spread1."', '".$winner2."', '".$spread2."', '".$winner3."', '".$spread3."', '".$winner4."', '".$spread4."', '".$winner5."', '".$spread5."', '".$winner6."', '".$spread6."', '".$winner7."', '".$spread7."', '".$winner8."', '".$spread8."', '".$winner9."', '".$spread9."', '".$winner10."', '".$spread10."', '".$winner11."', '".$spread11."', '".$winner12."', '".$spread12."', '".$winner13."', '".$spread13."', '".$winner14."', '".$spread14."', '".$winner15."', '".$spread15."')"; 
  
  //execute the query
  $result = $db->query($insert);
  
  //check if query failed
  try
  {
    if (!$result)
    {
      throw new swagexception("Some kind of problem occurred when trying to insert your picks into the database. You may not be logged in.");
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

function update_picks_eight($db, $userID, $table, $winner1, $spread1, $winner2, $spread2, $winner3, $spread3, $winner4, $spread4, $winner5, $spread5, $winner6, $spread6, $winner7, $spread7, $winner8, $spread8){
  //write the query to update their picks
  $update = "UPDATE `".$table."` SET `winner1` = '".$winner1."', `spread1` = '".$spread1."', `winner2` = '".$winner2."', `spread2` = '".$spread2."', `winner3` = '".$winner3."', `spread3` = '".$spread3."', `winner4` = '".$winner4."', `spread4` = '".$spread4."', `winner5` = '".$winner5."', `spread5` = '".$spread5."', `winner6` = '".$winner6."', `spread6` = '".$spread6."', `winner7` = '".$winner7."', `spread7` = '".$spread7."', `winner8` = '".$winner8."', `spread8` = '".$spread8."' WHERE `userID` = '".$userID."'"; 
  
  //execute the query
  $result = $db->query($update);
  
  //check if query failed
  try
  {
    if (!$result)
    {
      throw new swagexception("Some kind of problem occurred when trying to update your picks in the database.");
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

function insert_picks_eight($db, $userID, $table, $winner1, $spread1, $winner2, $spread2, $winner3, $spread3, $winner4, $spread4, $winner5, $spread5, $winner6, $spread6, $winner7, $spread7, $winner8, $spread8){
  //write the query to insert their picks
  $insert = "INSERT INTO `".$table."` VALUES ('"."', '".$userID."', '".$winner1."', '".$spread1."', '".$winner2."', '".$spread2."', '".$winner3."', '".$spread3."', '".$winner4."', '".$spread4."', '".$winner5."', '".$spread5."', '".$winner6."', '".$spread6."', '".$winner7."', '".$spread7."', '".$winner8."', '".$spread8."')"; 
  
  //execute the query
  $result = $db->query($insert);
  
  //check if query failed
  try
  {
    if (!$result)
    {
      throw new swagexception("Some kind of problem occurred when trying to insert your picks into the database. You may not be logged in.");
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

function update_picks_five($db, $userID, $table, $winner1, $spread1, $winner2, $spread2, $winner3, $spread3, $winner4, $spread4, $winner5, $spread5){
  //write the query to update their picks
  $update = "UPDATE `".$table."` SET `winner1` = '".$winner1."', `spread1` = '".$spread1."', `winner2` = '".$winner2."', `spread2` = '".$spread2."', `winner3` = '".$winner3."', `spread3` = '".$spread3."', `winner4` = '".$winner4."', `spread4` = '".$spread4."', `winner5` = '".$winner5."', `spread5` = '".$spread5."' WHERE `userID` = '".$userID."'"; 
  
  //execute the query
  $result = $db->query($update);
  
  //check if query failed
  try
  {
    if (!$result)
    {
      throw new swagexception("Some kind of database problem occurred when trying to update your picks in the database.");
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

function insert_picks_five($db, $userID, $table, $winner1, $spread1, $winner2, $spread2, $winner3, $spread3, $winner4, $spread4, $winner5, $spread5){
  //write the query to insert their picks
  $insert = "INSERT INTO `".$table."` VALUES ('"."', '".$userID."', '".$winner1."', '".$spread1."', '".$winner2."', '".$spread2."', '".$winner3."', '".$spread3."', '".$winner4."', '".$spread4."', '".$winner5."', '".$spread5."')"; 
  
  //execute the query
  $result = $db->query($insert);
  
  //check if query failed
  try
  {
    if (!$result)
    {
      throw new swagexception("Some kind of problem occurred when trying to insert your picks into the database. You may not be logged in.");
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

function update_picks_four($db, $userID, $table, $winner1, $spread1, $winner2, $spread2, $winner3, $spread3, $winner4, $spread4){
  //write the query to update their picks
  $update = "UPDATE `".$table."` SET `winner1` = '".$winner1."', `spread1` = '".$spread1."', `winner2` = '".$winner2."', `spread2` = '".$spread2."', `winner3` = '".$winner3."', `spread3` = '".$spread3."', `winner4` = '".$winner4."', `spread4` = '".$spread4."' WHERE `userID` = '".$userID."'"; 
  
  //execute the query
  $result = $db->query($update);
  
  //check if query failed
  try
  {
    if (!$result)
    {
      throw new swagexception("Some kind of database problem occurred when trying to update your picks in the database.");
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

function insert_picks_four($db, $userID, $table, $winner1, $spread1, $winner2, $spread2, $winner3, $spread3, $winner4, $spread4){
  //write the query to insert their picks
  $insert = "INSERT INTO `".$table."` VALUES ('"."', '".$userID."', '".$winner1."', '".$spread1."', '".$winner2."', '".$spread2."', '".$winner3."', '".$spread3."', '".$winner4."', '".$spread4."')"; 
  
  //execute the query
  $result = $db->query($insert);
  
  //check if query failed
  try
  {
    if (!$result)
    {
      throw new swagexception("Some kind of problem occurred when trying to insert your picks into the database. You may not be logged in.");
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

function update_picks_two($db, $userID, $table, $winner1, $spread1, $winner2, $spread2){
  //write the query to update their picks
  $update = "UPDATE `".$table."` SET `winner1` = '".$winner1."', `spread1` = '".$spread1."', `winner2` = '".$winner2."', `spread2` = '".$spread2."' WHERE `userID` = '".$userID."'"; 
  
  //execute the query
  $result = $db->query($update);
  
  //check if query failed
  try
  {
    if (!$result)
    {
      throw new swagexception("Some kind of database problem occurred when trying to update your picks in the database.");
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

function insert_picks_two($db, $userID, $table, $winner1, $spread1, $winner2, $spread2){
  //write the query to insert their picks
  $insert = "INSERT INTO `".$table."` VALUES ('"."', '".$userID."', '".$winner1."', '".$spread1."', '".$winner2."', '".$spread2."')"; 
  
  //execute the query
  $result = $db->query($insert);
  
  //check if query failed
  try
  {
    if (!$result)
    {
      throw new swagexception("Some kind of problem occurred when trying to insert your picks into the database. You may not be logged in.");
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

function update_picks_one($db, $userID, $table, $winner1, $spread1){
  //write the query to update their picks
  $update = "UPDATE `".$table."` SET `winner1` = '".$winner1."', `spread1` = '".$spread1."' WHERE `userID` = '".$userID."'"; 
  
  //execute the query
  $result = $db->query($update);
  
  //check if query failed
  try
  {
    if (!$result)
    {
      throw new swagexception("Some kind of database problem occurred when trying to update your picks in the database.");
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

function insert_picks_one($db, $userID, $table, $winner1, $spread1){
  //write the query to insert their picks
  $insert = "INSERT INTO `".$table."` VALUES ('"."', '".$userID."', '".$winner1."', '".$spread1."')"; 

  //execute the query
  $result = $db->query($insert);
  
  //check if query failed
  try
  {
    if (!$result)
    {
      throw new swagexception("Some kind of problem occurred when trying to insert your picks into the database. You may not be logged in.");
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

// function get_results($db, $table) I think I decided to lose this function. 
// {
  // //write the query to find the user ID, username, e-mail address, and grade of the players
  // $rankEmUp = "SELECT useraccounts.userID, useraccounts.u_name, useraccounts.email, ".$table.".grade 
                    // FROM useraccounts, ".$table." 
                    // WHERE useraccounts.userID = ".$table.".userID 
                    // ORDER BY ".$table.".grade DESC";
  
  // //execute the query
  // $results = $db->query($rankEmUp) or die ('Some kind of problem occured when trying to find the top ten players.');
  
  // //find the number of rows and echo it for debugging
  // $numRows = $results->num_rows;
  // echo "Number of rows: ".$numRows."\n\n";

  // //return the result of the query to the larger program
  // return $results;
// }

function find_grade($db, $table, $userID){
  //write query to find the grade
  $findGrade = "SELECT `grade`
                FROM `$table`
                WHERE `userID` = $userID";
  
  //execute the query
  $result = $db->query($findGrade);
  
  //check if query failed
  try
  {
    if (!$result)
    {
      throw new swagexception("Some kind of problem occurred when trying to find the user's grade in the database.");
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
  
  //get the grade from the row
  $row = $result->fetch_assoc();
  $grade = $row['grade'];
  
  //return the variable
  return $grade;
}

function find_rank($db, $table, $grade){
  $findRank = "SELECT COUNT(*)+1 AS `rank`
               FROM `$table`
               WHERE `grade` > $grade";
               
  //execute the query
  $result = $db->query($findRank);
  
  //check if query failed
  try
  {
    if (!$result)
    {
      throw new swagexception("Some kind of problem occurred when trying to calculate the user's rank in the database.");
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
  
  //get their rank from the row
  $row = $result->fetch_assoc();
  $rank = $row['rank'];
  
  //return their rank
  return $rank;
}

function find_avg_grade($db, $table){
}

function find_num_players($db, $table){
  //write the query to find the number of players
  $findNumPlayers = "SELECT COUNT(*) AS `num`
                     FROM `$table`";
                    
  //execute the query
  $result = $db->query($findNumPlayers);
  
  //check if query failed
  try
  {
    if (!$result)
    {
      throw new swagexception("Some kind of problem occurred when trying to calculate the number of players in the table.");
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
  
  //get the number of players from the row
  $row = $result->fetch_assoc();
  $numPlayers = $row['num'];
  
  //return the number of players
  return $numPlayers;
}

function find_real_name($db, $userID){
  //write query to find the first and last name
  $names = "SELECT f_name, l_name
            FROM useraccounts
            WHERE userID = $userID";
  
  //execute the query
  $result = $db->query($names);
  
  //check if query failed
  try
  {
    if (!$result)
    {
      throw new swagexception("Some kind of problem occurred when trying to find the user's first and last name in the database.");
    }
  }
  catch (swagexception $e)
  {
    include 'error.html';
    echo $e;
    $db->close();
    exit;
  }
  
  //put the information into an associative array
  $row = $result->fetch_assoc();
  
  //concatenate the first and last name and pass the result to a variable
  $fName = $row['f_name'];
  $lName = $row['l_name'];
  $realName = "$fName $lName";
  
  //return the variable
  return $realName;
}

function create_global_leaderboard($db, $table){
  //write query to find the top 25 players
  $topRanked = "SELECT useraccounts.u_name, $table.grade, $table.games_played
                    FROM useraccounts, $table
                    WHERE useraccounts.userID = $table.userID
                    ORDER BY $table.grade DESC
                    LIMIT 0, 25";
  
  //execute the query
  $result = $db->query($topRanked);
  
  //check if query failed
  try
  {
    if (!$result)
    {
      throw new swagexception("Some kind of problem occurred when trying to create the leaderboard. Please try again later.");
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
  
  //print the column headers for the HTML table: Rank, Username, Grade, Games Played
  echo <<<HERE
  <table>
    <tr>
      <th>Rank</th>
      <th>Username</th>
      <th>Grade</th>
      <th>Games Played</th>
    </tr>
HERE;
  
  //set the initial rank to 0
  $i = 0;
  
  //use while statement to fill out the rows in the table
  while($row = $result->fetch_assoc())
  {
    echo "<tr>";
    echo "<td class = 'rank'>" . ++$i . "</td>";
    echo "<td>" . $row['u_name'] . "</td>";
    echo "<td class = 'tableNumbers'>" . $row['grade'] . "</td>";
    echo "<td class = 'tableNumbers'>" . $row['games_played'] . "</td>";
    echo "</tr>";
  }
  
  //end the table
  echo "</table>";
}

function create_local_leaderboard($db, $table) 
{
  //write query to find the top 25 players
  $topRanked = "SELECT useraccounts.u_name, $table.grade
                    FROM useraccounts, $table
                    WHERE useraccounts.userID = $table.userID
                    ORDER BY $table.grade DESC
                    LIMIT 0, 25";
  
  //execute the query
  $result = $db->query($topRanked);
  
  //check if query failed
  try
  {
    if (!$result)
    {
      throw new swagexception("Some kind of problem occurred when trying to create the leaderboard. Please try again later.");
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
  
  //print the column headers for the HTML table: Rank, Username, Grade
  echo <<<HERE
  <table>
    <tr>
      <th>Rank</th>
      <th>Username</th>
      <th>Grade</th>
    </tr>
HERE;
  
  //set the initial rank to 0
  $i = 0;
  
  //use while statement to fill out the rows in the table
  while($row = $result->fetch_assoc())
  {
    echo "<tr>";
    echo "<td class = 'rank'>" . ++$i . "</td>";
    echo "<td>" . $row['u_name'] . "</td>";
    echo "<td class = 'tableNumbers'>" . $row['grade'] . "</td>";
    echo "</tr>";
  }
  
  //end the table
  echo "</table>";  
}

function find_bar_nearby($db, $userID) 
{
  /* Create empty variables to hold the player's ZIP, city, or state. */
  $zip = "";
  $city = "";
  $state = "";
  
  /* Write the query to find the player's location. */
  $getLocation = "SELECT `state_or_province`, `city`, `zip` 
                  FROM `useraccounts` 
                  WHERE `userID` = '$userID'";
  
  /* Execute the query. */
  $result = $db->query($getLocation);
  
  /* Fill in the variables with the results, if any. */
  if (!is_null($result['state_or_province'])){
    $state = $result['state_or_province'];
  }
  
  if (!is_null($result['city'])){
    $city = $result['city'];
  }
  
  if (!is_null($result['zip'])){
    $zip = $result['zip'];
  }
  
  /* Write the query to get the info of bars with the same ZIP or city as the player. */
  $findBars = "SELECT `barID`, `bar_name`, `city` FROM `baraccounts` WHERE `zip` = $zip OR `city` = $city WHERE `state_or_province` = $state";
  
  /* Execute the query. */
  $result = $db->query($findBars);
  
  /* Return a multi-dimensional array with the nearby bars. */
  
}

function get_bar_group_winnerlist($db, $table, $barID1, $barID2, $barID3, $barID4, $barID5) 
{
  /* Write the query to identify the top ten players in the tourney playing for any of the five bars. */
  $topUsers = "SELECT `useraccounts`.`userID` 
               FROM `useraccounts`, `$table` 
               WHERE `useraccounts`.`barID` = '$barID1' 
               OR `useraccounts`.`barID` = '$barID2' 
               OR `useraccounts`.`barID` = '$barID3' 
               OR `useraccounts`.`barID` = '$barID4' 
               OR `useraccounts`.`barID` = '$barID5' 
               ORDER BY `$table`.`grade` DESC 
               LIMIT 10";
  
  /* Execute the query. */
  $result = $db->query($topUsers);
  
  /* Return the list of winners. */
  return $result;
} /* Notice: May be a good idea to check if the list of winners is less than 10, and give prize pool refunds to bars if that's the case, though it's unlikely. */

function find_avg_grade_bar_group_winners($db, $table, $barID1, $barID2, $barID3, $barID4, $barID5) 
{
  /* Write the query to find the average grade from the group of winners. Will probably have to use AS.*/
  
  /* Execute the query. */
  
  /* Return the average grade. */
  
}

function notify_users_bar_inactive($db, $barID, $gameType) 
{
}

function notify_users_bar_active($db, $barID, $gameType) 
{
}

function pick_bar($db, $userID, $barID) 
{
  /* Write the query to update the user's record to include a reference to the bar they just picked. */
  $pickBar = "UPDATE useraccounts SET barID = $barID WHERE userID = $userID";
  
  /* Execute the query. */
  $result = $db->query($pickBar);

  /* Check if the query failed. */
  try
  {
    if (!$result)
    {
      throw new swagexception("Some kind of problem occurred when trying to update your bar in the database. Please try again, and if the problem persists, please contact us at service@madswag.com");
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

function find_active_bar($db, $barArray) /* Note: $barArray is an array of bars returned by find_bar_nearby() */ 
{
}

function find_barID_by_userID($db, $userID)
{
  /* Write the query to find the user's current bar by their user ID. */
  $findBarID = "SELECT `barID` FROM `useraccounts` WHERE `userID` = $userID";
  
  /* Execute the query. */
  $barID = $db->query($findBarID);
  
  /* Return the barID of the user's bar. (If the user isn't signed up for a bar, a null value is returned.) */
  return $barID;
}

function find_bar_name_by_barID($db, $barID)
{
  /* Write the query to find the bar's name by the bar's ID. */
  $findBarName = "SELECT `name` FROM `baraccounts` WHERE `barID` = $barID";
  
  /* Execute the query. */
  $barName = $db->query($findBarName);
  
  /* Return the name of the bar. */
  return $barName;
}

function is_bar_active($db, $barID, $gameID)
{
  /* Write the query to find is the bar is signed up for the game and is up-to-date on payments. */
  $isBarActive = "SELECT is_live_".$gameID." FROM baraccounts WHERE barID = $barID";
  
  /* Execute the query. */
  $result = $db->query($isBarActive);
  
  /* Return true if the bar is active in the game; otherwise, return false. */
  if ($result === 1){
    return true;
  } else {
    return false;
  }  
}

function is_game_active($db, $gameID)
{
  /* Write the query to see if the game is currently running. */
  $isGameActive = "SELECT ".$gameID."_is_active FROM activegames";
  
  /* Execute the query. */
  $result = $db->query($isGameActive);
  
  /* Return true if the game is active; otherwise, return false. */
  if ($result === 1){
    return true;
  } else {
    return false;
  }
}

function find_bar_rank($db, $prizesPerGame)
{
  /* Write the query to find the bar's rank. */
  
  
  /* Execute the query. */
  
  /* Return the bar's rank. */
  
}

function create_bar_leaderboard($db, $table)
{
}

function update_userscores_table_newuser($db)
{
  /* Write the query to update the `userscores` table. */
  $updateUserscores = "INSERT IGNORE INTO userscores (userID)
                       SELECT userID
                       FROM useraccounts";
  
  /* Execute the query. */
  $result = $db->query($updateUserscores);
  
  /* Catch exception if query failed. */
  try
  {
    if (!$result)
    {
      throw new swagexception("A problem occurred when trying to add you to the database.");
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

function update_barscores_table_newbar($db)
{
  /* Write the query to update the `userscores` table. */
  $updateBarScores = "INSERT IGNORE INTO barscores (barID)
                       SELECT barID
                       FROM baraccounts";
  
  /* Execute the query. */
  $result = $db->query($updateBarScores);
  
  /* Catch exception if query failed. */
  try
  {
    if (!$result)
    {
      throw new swagexception("A problem occurred when trying to add you to the database.");
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

?>
