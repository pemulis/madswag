<?php
  //get MadSwag's custom functions, exception handling, and database connection info
  require_once("madswag_fns.php");
  
  //create and show header
  do_header("Business Sign-Up - MadSwag");
  
  //show menu
  do_menu();
?>
				<div class = 'oneCol'>
					<?php
						//get variables, with trim() to pre-format data for storage
						//once database is set up, use mysql_real_escape_string() to help defend against SQL injection
						$businessName = trim($_POST["txtBusinessName"]);
            $login = trim($_POST["txtLogin"]);
            $password = trim($_POST["txtPassword"]);
            $confirmPassword = trim($_POST["txtConfirmPassword"]);
            $email = trim($_POST["txtEmail"]);
            $country = trim($_POST["country"]);
            $state = trim($_POST["state"]);
            $city = trim($_POST["txtCity"]);
            $streetAddress = trim($_POST["txtStreetAddress"]);
            $zip = trim($_POST["txtPostalCode"]);
            $website = trim($_POST["txtWebsite"]);
            $twitter = trim($_POST["txtTwitter"]);
            
            //get the array of the different sections of the phone number, cycle through, and piece it together into the full number
            $phone = '';
            $phoneParts = $_POST["txtPhone"];
            foreach($phoneParts as $part){
              $phone .= $part;
            }
						
						//make sure the first letter of the business name and city are capitalized
						$businessName = ucwords($businessName);
						$city = ucwords($city);

						//test e-mail for length and whether or not it matches up with regular expressions
            test_email($email);
            
						//test phone number for length and whether or not it matches up with regular expressions
            // (Commented out until it actually works.)
            // test_phone($phone);

						//test ZIP code for length and whether or not it matches up with regular expressions
						test_zip($zip);
						
						//test business name for length
						test_business_name($businessName);
						
						//test log-in name for length and against regular expressions
						test_login_name($login);
						
						//test password for length and against regular expressions
						test_password($password);
						
            //test if password and confirmPassword match
						test_passwords_match($password, $confirmPassword);
						
						//test city name for length and against regular expressions
						test_city($city);
            
            //test street address for length and against regular expressions
						test_streetAddress($streetAddress);
						
						//connect to database; catch exception is connection failed
						$db = do_connect_to_database();
						
            //set To address and Subject for welcome e-mail
            $toAddress = "$email";
            $subject = "Welcome to MadSwag!";

            //set the content for the welcome e-mail (this should change after the initial sign-up period)
            $mailContent = "Dear $businessName,\n\n".
                           "Thanks for signing up for the inaugural season of MadSwag! Soon you will be able to log in to customize your business page and fiddle with your prize structure, so stay tuned for updates. Our games will begin in August, with the 2012 NFL preseason.\n\n".
                           "As a special bonus for signing up in advance, your preseason membership will be free! Just have fun and try everything out. After the free trial period, membership will be $29/month or $100 for the whole season, including playoffs.\n\n".
                           "We'll keep you posted on new developments and send you promo stuff as the season approaches. Please write to us if you have any thoughts or suggestions! We're always looking for ways to make MadSwag better for you and your customers.\n\n".
                           "Sincerely,\n".
                           "John & Emily Shutt\n".
                           "MadSwag Co-Founders";
                    
            //use wordwrap to limit the number of characters per line in $mailContent to 70
            $mailContent = wordwrap($mailContent, 70, "\n");

            //set the From address
            $fromAddress = "From: \"MadSwag\" contact@madswag.com";

						//use real_escape_string() to protect against SQL injection
						$businessName = $db->real_escape_string($businessName);
						$login = $db->real_escape_string($login);
						$password = $db->real_escape_string($password);
						$confirmPassword = $db->real_escape_string($confirmPassword);
						$email = $db->real_escape_string($email);
            $phone = $db->real_escape_string($phone);
						$country = $db->real_escape_string($country);
						$state = $db->real_escape_string($state);
						$city = $db->real_escape_string($city);
						$streetAddress = $db->real_escape_string($streetAddress);
            $zip = $db->real_escape_string($zip);
            $website = $db->real_escape_string($website);
            $twitter = $db->real_escape_string($twitter);
            
            //check if the e-mail address is unique
            check_is_unique_business_email($db, $email);
						
            //insert the new business account into the database
            insert_new_business($db, $businessName, $login, $password, $email, $phone, $country, $state, $city, $streetAddress, $zip, $website, $twitter);
						
            //add the new business to the `barscores` table.
            update_barscores_table_newbar($db);
            
						//close connection to database
						$db->close();

            //send the e-mail
            send_bars_signup_mail($toAddress, $subject, $mailContent, $fromAddress);

						//include a success message
						include 'signupsuccess.html';
            include 'signupsuccessbusiness.html';
					?>
				</div>
<?php
  //show footer
  do_footer();
?>
