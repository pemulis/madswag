<?php
// Output Functions
//
// This file contains all of the functions for echoing or printing content.



function do_header($title)
{
//v1.013 start session
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--	                                                                    
                            nn2                                              
                            222                                              
n2222b.d22b.   2222b.   .d22222 .d2222b  222  222  222  2222b.   .d22b.  
222 "222 "22b     "22b d22" 222 22K      222  222  222     "22b d22P"22b 
222  222  222 .d222222 222  222 "Y2222b. 222  222  222 .d222222 222  222  
222  222  222 222  222 Y22b 222      X22 Y22b 222 d22P 222  222 Y22b 222 
222  222  222 "Y222222  "Y22222  22222P'  "Y222 222P"  "Y222222  "Y22222 
                                                                     22Y  
                                                                 d2222"    
	                                                 -->
  <head>
    <meta http-equiv='Content-Type' content='text/html' charset='utf-8' />
    <meta name = 'Description' content = 'Free sports prediction games. Beat your friends and fans worldwide. Win prizes on the reg.' />
    <meta name = 'Keywords' content = 'sports bar, sports picks, bracket, prediction game, pick em, mad swag' />
    <title><?php echo $title;?></title>
    <link rel = 'stylesheet'
          type = 'text/css'
          href = 'madswagstylez.css' />
    <script type = 'text/javascript'>

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-22034872-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
    <script type = 'text/javascript'
            src = 'jquery-1.5.1.js'></script>
<?php
}

function do_menu()
{ // I split off the </head> tag from the header so that I could put scripts into each of the pages before the body.
  if (!isset($_SESSION['identifier']))
  {
    include "menunotloggedin.html"; print "\n";
  } else {
    include "menuloggedin.html"; print "\n";
  }
}

function do_footer()
{
  //extra </div> on top is to end <div id = 'pageContent'> in menuloggedin.html or menunotloggedin.html
?>
      </div>
      <div id = 'footer' class = 'bottom title'>
        <div>
          Copyright MadSwag 2012. All rights reserved.
        </div>
        <div>
          <a href = 'about.php'>About Us</a> | <a href = 'privacy.php'>Privacy Policy</a> | <a href = 'scoring.php'>Scoring System</a> | <a href = 'forbars.php'>Business Owners</a> | <a href = 'contact.php'>Contact</a>
        </div>
      </div>
    </div>
  </body>
</html>
<?php
}

function generate_game_over($time)
{
?>
  <div class = 'oneCol'>
    <h3 class = 'center'>Sorry, the fix is in and the noodles are boiling in the pot, BOILING I tell ya!</h3>
    <p class = 'center'>This game locked out to new picks at <?php echo $time;?>.</p>
  </div>
<?php
}

function generate_picks_accepted($time)
{
?>
          <h1 class = 'center'>Nice picks! (Maybe.)</h1>
          <p class = 'center'>
            An e-mail record of your picks will be sent to you.
          </p>
          <p class = 'center'>
            You can change your picks at any time before <?php echo $time;?>. Just go back to the form on the game page and enter your new picks. Good luck!
          </p>
<?php
}

function create_winner_list($results)
{
  //create the variable to hold the winner list
  $winnerlist = "";
  
  //set the initial rank to 0
  $i = 0;
  
  //use while statement to fill out the list
  while($row = $results->fetch_assoc())
  {
    $i++;
    $username = $row['u_name'];
    $grade = $row['grade'];
    $winnerlist.="$i  ";
    $winnerlist.="$username - ";
    $winnerlist.="$grade%";
    $winnerlist.="\n";
  }
  
  //echo the winnerlist for debugging
  echo "Winner List \n";
  echo "$winnerlist";
  
  //return the list of winners
  return $winnerlist;
}

?>
