<?php
  //get MadSwag's custom functions, exception handling, and database connection info
  require_once("madswag_fns.php");
  
  //create and show header
  do_header("Login - MadSwag");
  
  //show menu
  do_menu();
?>
        <div class = 'oneCol'>
          <?php
						//get variables, with trim() to pre-format data
						$login = trim($_POST["txtLogin"]);
						$password = trim($_POST["txtPassword"]);

            //connect to database
						$db = do_connect_to_database();
            
            //use real_escape_string() to protect against SQL injection
            $login = $db->real_escape_string($login);
            $password = $db->real_escape_string($password);
            
            //check if login type is a username or an e-mail address, default is 'nada'
            $loginType = is_login_username_or_email($db, $login);
            
						//catch exception if login does not exist
						check_login_exists($db, $loginType);
            
            //check if the password is correct
            check_is_password_correct($db, $password, $login, $loginType);
            
            //if a record for the login exists and the password is correct, assign their userID as the value of $_SESSION['identifier'] and include loginsuccess.html
            if ($loginType == 'username')
            {
              //set userID variable
              $userID = get_userID_from_username($db, $login);

              //assign the session identifier and include loginsuccess.html if all is well
              $_SESSION['identifier'] = $userID;
              include 'loginsuccess.html';
            } else if ($loginType == 'email') {
              //set userID variable
              $userID = get_userID_from_email($db, $login);
              
              //assign their user ID as their session identifier and include loginsuccess.html if all is well
              $_SESSION['identifier'] = $userID;
              include 'loginsuccess.html';
            }

            //disconnect from database
            $db->close();
          ?>
        </div>
<?php
  do_footer();
?>