<?php
  //get MadSwag's custom functions, exception handling, and database connection info
  require_once("madswag_fns.php");
  
  //create and show header
  do_header("Sign-Up - MadSwag");
  
  //show menu
  do_menu();
?>
				<div class = 'oneCol'>
					<?php
						//get variables, with trim() to pre-format data for storage
						//once database is set up, use mysql_real_escape_string() to help defend against SQL injection
						$firstName = trim($_POST["txtFirstName"]);
						$lastName = trim($_POST["txtLastName"]);
						$username = trim($_POST["txtUsername"]);
						$password = trim($_POST["txtPassword"]);
						$confirmPassword = trim($_POST["txtConfirmPassword"]);
						$email = trim($_POST["txtEmail"]);
						$country = trim($_POST["country"]);
						$state = trim($_POST["state"]);
						$city = trim($_POST["txtCity"]);
						$zip = trim($_POST["txtPostalCode"]);
						
						//make sure the first letter of the first, last name, and city are capitalized
						$firstName = ucwords($firstName);
						$lastName = ucwords($lastName);
						$city = ucwords($city);

						//test e-mail for length and whether or not it matches up with regular expressions
            test_email($email);

						//test ZIP code for length and whether or not it matches up with regular expressions
						test_zip($zip);
						
						//test first and last names for length and against regular expressions
						test_names($firstName, $lastName);
						
						//test username for length and against regular expressions
						test_username($username);
						
						//test password for length and against regular expressions
						test_password($password);
						
            //test if password and confirmPassword match
						test_passwords_match($password, $confirmPassword);
						
						//test city name for length and against regular expressions
						test_city($city);
						
						//connect to database; catch exception is connection failed
						$db = do_connect_to_database();
						
						//use real_escape_string() to protect against SQL injection
						$firstName = $db->real_escape_string($firstName);
						$lastName = $db->real_escape_string($lastName);
						$username = $db->real_escape_string($username);
						$password = $db->real_escape_string($password);
						$confirmPassword = $db->real_escape_string($confirmPassword);
						$email = $db->real_escape_string($email);
						$country = $db->real_escape_string($country);
						$state = $db->real_escape_string($state);
						$city = $db->real_escape_string($city);
						$zip = $db->real_escape_string($zip);
						
            //check if the username is unique
            check_is_unique_username($db, $username);
            
            //check if the e-mail address is unique
            check_is_unique_email($db, $email);
						
            //insert the new user account into the database
            insert_new_user($db, $firstName, $lastName, $username, $password, $email, $country, $state, $city, $zip);
						
            //add the new user to the `userscores` table.
            update_userscores_table_newuser($db);
            
						//close connection to database
						$db->close();

						//include a success message and the MailChimp sign-up form
						include 'signupsuccess.html';
						include 'mailchimp.html';
					?>
				</div>
<?php
  //show footer
  do_footer();
?>