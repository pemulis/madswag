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
  $game2_teamA = "";
  $game2_teamB = "";
  $game3_teamA = "";
  $game3_teamB = "";
  $game4_teamA = "";
  $game4_teamB = "";
  $game5_teamA = "";
  $game5_teamB = "";
  $game6_teamA = "";
  $game6_teamB = "";
  $game7_teamA = "";
  $game7_teamB = "";
  $game8_teamA = "";
  $game8_teamB = "";
  $game9_teamA = "";
  $game9_teamB = "";
  $game10_teamA = "";
  $game10_teamB = "";
  $game11_teamA = "";
  $game11_teamB = "";
  $game12_teamA = "";
  $game12_teamB = "";
  $game13_teamA = "";
  $game13_teamB = "";
  $game14_teamA = "";
  $game14_teamB = "";
  $game15_teamA = "";
  $game15_teamB = "";
  $game16_teamA = "";
  $game16_teamB = "";
  $game17_teamA = "";
  $game17_teamB = "";
  $game18_teamA = "";
  $game18_teamB = "";
  
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
                <div class = "pickBox">
                  <label><?php print $game2_teamA ?></label>
                  <input type = "radio"
                         name = "winner2"
                         value = "<?php print $game2_teamA ?>" />
                  <label><?php print $game2_teamB ?></label>
                  <input type = "radio"
                         name = "winner2"
                         value = "<?php print $game2_teamB ?>" />
                  <label>Win by how much?</label>
                  <select id = "spread2"
                          name = "spread2">
                    <?php
                      $range = range(0,99);
                      foreach ($range as $points)
                      {
                        print "<option value='$points'>$points</option> \n";
                      }
                    ?>
                  </select>
                </div>
                <div class = "pickBox">
                  <label><?php print $game3_teamA ?></label>
                  <input type = "radio"
                         name = "winner3"
                         value = "<?php print $game3_teamA ?>" />
                  <label><?php print $game3_teamB ?></label>
                  <input type = "radio"
                         name = "winner3"
                         value = "<?php print $game3_teamA ?>" />
                  <label>Win by how much?</label>
                  <select id = "spread3"
                          name = "spread3">
                    <?php
                      $range = range(0,99);
                      foreach ($range as $points)
                      {
                        print "<option value='$points'>$points</option> \n";
                      }
                    ?>
                  </select>
                </div>
                <div class = "pickBox">
                  <label><?php print $game4_teamA ?></label>
                  <input type = "radio"
                         name = "winner4"
                         value = "<?php print $game4_teamA ?>" />
                  <label><?php print $game4_teamB ?></label>
                  <input type = "radio"
                         name = "winner4"
                         value = "<?php print $game4_teamB ?>" />
                  <label>Win by how much?</label>
                  <select id = "spread4"
                          name = "spread4">
                    <?php
                      $range = range(0,99);
                      foreach ($range as $points)
                      {
                        print "<option value='$points'>$points</option> \n";
                      }
                    ?>
                  </select>
                </div>
                <div class = "pickBox">
                  <label><?php print $game5_teamA ?></label>
                  <input type = "radio"
                         name = "winner5"
                         value = "<?php print $game5_teamA ?>" />
                  <label><?php print $game5_teamB ?></label>
                  <input type = "radio"
                         name = "winner5"
                         value = "<?php print $game5_teamB ?>" />
                  <label>Win by how much?</label>
                  <select id = "spread5"
                          name = "spread5">
                    <?php
                      $range = range(0,99);
                      foreach ($range as $points)
                      {
                        print "<option value='$points'>$points</option> \n";
                      }
                    ?>
                  </select>
                </div>
                <div class = "pickBox">
                  <label><?php print $game6_teamA ?></label>
                  <input type = "radio"
                         name = "winner6"
                         value = "<?php print $game6_teamA ?>" />
                  <label><?php print $game6_teamB ?></label>
                  <input type = "radio"
                         name = "winner6"
                         value = "<?php print $game6_teamB ?>" />
                  <label>Win by how much?</label>
                  <select id = "spread6"
                          name = "spread6">
                    <?php
                      $range = range(0,99);
                      foreach ($range as $points)
                      {
                        print "<option value='$points'>$points</option> \n";
                      }
                    ?>
                  </select>
                </div>
                <div class = "pickBox">
                  <label><?php print $game7_teamA ?></label>
                  <input type = "radio"
                         name = "winner7"
                         value = "<?php print $game7_teamA ?>" />
                  <label><?php print $game7_teamB ?></label>
                  <input type = "radio"
                         name = "winner7"
                         value = "<?php print $game7_teamB ?>" />
                  <label>Win by how much?</label>
                  <select id = "spread7"
                          name = "spread7">
                    <?php
                      $range = range(0,99);
                      foreach ($range as $points)
                      {
                        print "<option value='$points'>$points</option> \n";
                      }
                    ?>
                  </select>
                </div>
                <div class = "pickBox">
                  <label><?php print $game8_teamA ?></label>
                  <input type = "radio"
                         name = "winner8"
                         value = "<?php print $game8_teamA ?>" />
                  <label><?php print $game8_teamB ?></label>
                  <input type = "radio"
                         name = "winner8"
                         value = "<?php print $game8_teamB ?>" />
                  <label>Win by how much?</label>
                  <select id = "spread8"
                          name = "spread8">
                    <?php
                      $range = range(0,99);
                      foreach ($range as $points)
                      {
                        print "<option value='$points'>$points</option> \n";
                      }
                    ?>
                  </select>
                </div>
                <div class = "pickBox">
                  <label><?php print $game9_teamA ?></label>
                  <input type = "radio"
                         name = "winner9"
                         value = "<?php print $game9_teamA ?>" />
                  <label><?php print $game9_teamB ?></label>
                  <input type = "radio"
                         name = "winner9"
                         value = "<?php print $game9_teamB ?>" />
                  <label>Win by how much?</label>
                  <select id = "spread9"
                          name = "spread9">
                    <?php
                      $range = range(0,99);
                      foreach ($range as $points)
                      {
                        print "<option value='$points'>$points</option> \n";
                      }
                    ?>
                  </select>
                </div>
                <div class = "pickBox">
                  <label><?php print $game10_teamA ?></label>
                  <input type = "radio"
                         name = "winner10"
                         value = "<?php print $game10_teamA ?>" />
                  <label><?php print $game10_teamB ?></label>
                  <input type = "radio"
                         name = "winner10"
                         value = "<?php print $game10_teamB ?>" />
                  <label>Win by how much?</label>
                  <select id = "spread10"
                          name = "spread10">
                    <?php
                      $range = range(0,99);
                      foreach ($range as $points)
                      {
                        print "<option value='$points'>$points</option> \n";
                      }
                    ?>
                  </select>
                </div>
                <div class = "pickBox">
                  <label><?php print $game11_teamA ?></label>
                  <input type = "radio"
                         name = "winner11"
                         value = "<?php print $game11_teamA ?>" />
                  <label><?php print $game11_teamB ?></label>
                  <input type = "radio"
                         name = "winner11"
                         value = "<?php print $game11_teamB ?>" />
                  <label>Win by how much?</label>
                  <select id = "spread11"
                          name = "spread11">
                    <?php
                      $range = range(0,99);
                      foreach ($range as $points)
                      {
                        print "<option value='$points'>$points</option> \n";
                      }
                    ?>
                  </select>
                </div>
                <div class = "pickBox">
                  <label><?php print $game12_teamA ?></label>
                  <input type = "radio"
                         name = "winner12"
                         value = "<?php print $game12_teamA ?>" />
                  <label><?php print $game12_teamB ?></label>
                  <input type = "radio"
                         name = "winner12"
                         value = "<?php print $game12_teamB ?>" />
                  <label>Win by how much?</label>
                  <select id = "spread12"
                          name = "spread12">
                    <?php
                      $range = range(0,99);
                      foreach ($range as $points)
                      {
                        print "<option value='$points'>$points</option> \n";
                      }
                    ?>
                  </select>
                </div>
                <div class = "pickBox">
                  <label><?php print $game13_teamA ?></label>
                  <input type = "radio"
                         name = "winner13"
                         value = "<?php print $game13_teamA ?>" />
                  <label><?php print $game13_teamB ?></label>
                  <input type = "radio"
                         name = "winner13"
                         value = "<?php print $game13_teamB ?>" />
                  <label>Win by how much?</label>
                  <select id = "spread13"
                          name = "spread13">
                    <?php
                      $range = range(0,99);
                      foreach ($range as $points)
                      {
                        print "<option value='$points'>$points</option> \n";
                      }
                    ?>
                  </select>
                </div>
                <div class = "pickBox">
                  <label><?php print $game14_teamA ?></label>
                  <input type = "radio"
                         name = "winner14"
                         value = "<?php print $game14_teamA ?>" />
                  <label><?php print $game14_teamB ?></label>
                  <input type = "radio"
                         name = "winner14"
                         value = "<?php print $game14_teamB ?>" />
                  <label>Win by how much?</label>
                  <select id = "spread14"
                          name = "spread14">
                    <?php
                      $range = range(0,99);
                      foreach ($range as $points)
                      {
                        print "<option value='$points'>$points</option> \n";
                      }
                    ?>
                  </select>
                </div>
                <div class = "pickBox">
                  <label><?php print $game15_teamA ?></label>
                  <input type = "radio"
                         name = "winner15"
                         value = "<?php print $game15_teamA ?>" />
                  <label><?php print $game15_teamB ?></label>
                  <input type = "radio"
                         name = "winner15"
                         value = "<?php print $game15_teamB ?>" />
                  <label>Win by how much?</label>
                  <select id = "spread15"
                          name = "spread15">
                    <?php
                      $range = range(0,99);
                      foreach ($range as $points)
                      {
                        print "<option value='$points'>$points</option> \n";
                      }
                    ?>
                  </select>
                </div>
                <div class = "pickBox">
                  <label><?php print $game16_teamA ?></label>
                  <input type = "radio"
                         name = "winner16"
                         value = "<?php print $game16_teamA ?>" />
                  <label><?php print $game16_teamB ?></label>
                  <input type = "radio"
                         name = "winner16"
                         value = "<?php print $game16_teamB ?>" />
                  <label>Win by how much?</label>
                  <select id = "spread16"
                          name = "spread16">
                    <?php
                      $range = range(0,99);
                      foreach ($range as $points)
                      {
                        print "<option value='$points'>$points</option> \n";
                      }
                    ?>
                  </select>
                </div>
                <div class = "pickBox">
                  <label><?php print $game17_teamA ?></label>
                  <input type = "radio"
                         name = "winner17"
                         value = "<?php print $game17_teamA ?>" />
                  <label><?php print $game17_teamB ?></label>
                  <input type = "radio"
                         name = "winner17"
                         value = "<?php print $game17_teamB ?>" />
                  <label>Win by how much?</label>
                  <select id = "spread17"
                          name = "spread17">
                    <?php
                      $range = range(0,99);
                      foreach ($range as $points)
                      {
                        print "<option value='$points'>$points</option> \n";
                      }
                    ?>
                  </select>
                </div>
                <div class = "pickBox">
                  <label><?php print $game18_teamA ?></label>
                  <input type = "radio"
                         name = "winner18"
                         value = "<?php print $game18_teamA ?>" />
                  <label><?php print $game18_teamB ?></label>
                  <input type = "radio"
                         name = "winner18"
                         value = "<?php print $game18_teamB ?>" />
                  <label>Win by how much?</label>
                  <select id = "spread18"
                          name = "spread18">
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