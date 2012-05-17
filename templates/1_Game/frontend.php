<?php
  //get MadSwag's custom functions, exception handling, and database connection info
  require_once("madswag_fns.php");
  
  /* Define the variables for the pick set */
  $tourneyID = ""; /* The tournament ID. (e.g., mcfoot20110811, mcbask20110409, etc.) */

  $primaryTitle = ""; /* States the sport (e.g., Pro Football, College Football, Pro Baseball, etc. */
  $secondaryTitle = ""; /* Generally says something like Week 1, Week 2, Round of 16, etc. */
  $tertiaryTitle = ""; /* This is a good place to specify the time period of the games in the pick set. */
  $picksetName = ""; /* The name of the pick set, for the header. (e.g. "Pro Football - 2011 Preseason Week 1") */

  $tabClick1 = ""; /* The titles of the dropdown tabs on the form. Some of these variables may be unnecessary. */
  $tabClick2 = "";
  $tabClick3 = "";
  $tabClick4 = "";

  $game1_teamA = ""; /* The names of the teams competing. */
  $game1_teamB = "";
  
  //create and show header
  do_header("$picksetName - MadSwag");
?>

      <!-- Begin Scripts -->
      
      <script type = "text/javascript">
      
        $(function(){
          $('.formPart').hide();
          
          $('div.tabClick').hover(function(){
              $(this).addClass("pointer");
            }, function(){
              $(this).removeClass('pointer');
            }
          );
          
          $('div.tabClick').click(function(){
            $(this).next('.formPart')
              .toggle();
          });
        });
      
      </script>
      
     <!-- End Scripts -->

<?php
  //show menu
  do_menu();
?>
      <div class = 'oneCol'>
        <?php
          //check if user is logged in, echo warning if they aren't
          if (!isset($_SESSION['identifier']))
          {
            echo '<h1 class = "center">Warning: You are not logged in. You have to log in for your picks to count.</h1>';
          }
        ?>
        <!-- form goes here -->
        <div class = "formLinks"><a href = "scoring.php">Scoring System</a> | <a href = "<?php print $tourneyID ?>rules.php">Official Rules</a></div>
        <form action = "<?php print $tourneyID ?>p.php"
              method = "post" >
          <fieldset>
            <h1 class = "center"><?php print $primaryTitle ?></h1>
            <h3 class = "center"><?php print $secondaryTitle ?></h3>
            <h3 class = "center"><?php print $tertiaryTitle ?></h3>
            <h3 class = "littleNote center">Pick the winner and the spread for each of the 32 games.</h3>
            <h3 class = "littleNote center">If you have already entered picks for this round, any new picks will replace them.</h3>
            <div class = "tabDown">
              <div class = "tabClick">
                <h2 class = "center"><?php print $tabClick1 ?></h2>
              </div>
              <div class = "formPart">
                <div class = "pickBox">
                  <label><?php print $game1_teamA ?></label>
                  <input type = "radio"
                         name = "winner1"
                         value = "<?php print $game1_teamA ?>" />
                  <label><?php print $game1_teamB ?></label>
                  <input type = "radio"
                         name = "winner1"
                         value = "<?php print $game1_teamB ?>" />
                  <label>Win by how much?</label>
                  <select id = "spread1"
                          name = "spread1">
                    <?php
                      $range = range(0,99);
                      foreach ($range as $points)
                      {
                        print "<option value='$points'>$points</option> \n";
                      }
                    ?>
                  </select>
                </div>
              </div>
            </div>
            <button type = "submit" value = "Submit Picks">Submit Picks</button>
          </fieldset>
        </form>
      </div>
      <div class = 'comments'>
        <?php
          echo "<script src='http://connect.facebook.net/en_US/all.js#xfbml=1'></script><fb:comments href='http://www.madswag.com/$tourneyID.php' num_posts='10' width='500'></fb:comments>";
        ?>
      </div>
<?php  
  //show footer
  do_footer();
?>