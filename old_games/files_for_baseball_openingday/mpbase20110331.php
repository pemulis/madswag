<?php
  //get MadSwag's custom functions, exception handling, and database connection info
  require_once("madswag_fns.php");
  
  //create and show header
  do_header("Baseball - Opening Day 2011 - MadSwag");
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
      <div id = "oneCol">
        <?php
          //check if user is logged in, echo warning if they aren't
          if (!isset($_SESSION['identifier']))
          {
            echo '<h1 class = "center">Warning: You are not logged in. You have to log in for your picks to count.</h1>';
          }
        ?>
        <!-- form goes here -->
        <form action = "mpbase20110331p.php"
              method = "post" >
          <fieldset>
            <div class = "right"><a href = "scoring.php" id = "question">?</a></div>
            <h1 class = "center">Baseball</h1>
            <h3 class = "center">Opening Day</h3>
            <h3 class = "center">March 31st - April 1st</h3>
            <h3 class = "littleNote center">Pick the winner and the spread for each game!</h3>
            <h3 class = "littleNote center">If you have already entered picks for this round, any new picks will replace them.</h3>
            <div class = "tabDown">
              <div class = "tabClick">
                <h2 class = "center">March 31</h2>
              </div>
              <div class = "formPart">
                <div class = "pickBox">
                  <label>Detroit</label>
                  <input type = "radio"
                         name = "winner1"
                         value = "Detroit" />
                  <label>NY Yankees</label>
                  <input type = "radio"
                         name = "winner1"
                         value = "NY Yankees" />
                  <label>Win by how much?</label>
                  <select id = "spread1"
                          name = "spread1">
                    <?php
                      $range = range(0,27);
                      foreach ($range as $points)
                      {
                        print "<option value='$points'>$points</option> \n";
                      }
                    ?>
                  </select>
                </div>
                <div class = "pickBox">
                  <label>Atlanta</label>
                  <input type = "radio"
                         name = "winner2"
                         value = "Atlanta" />
                  <label>Washington</label>
                  <input type = "radio"
                         name = "winner2"
                         value = "Washington" />
                  <label>Win by how much?</label>
                  <select id = "spread2"
                          name = "spread2">
                    <?php
                      $range = range(0,27);
                      foreach ($range as $points)
                      {
                        print "<option value='$points'>$points</option> \n";
                      }
                    ?>
                  </select>
                </div>
                <div class = "pickBox">
                  <label>Milwaukee</label>
                  <input type = "radio"
                         name = "winner3"
                         value = "Milwaukee" />
                  <label>Cincinnati</label>
                  <input type = "radio"
                         name = "winner3"
                         value = "Cincinnati" />
                  <label>Win by how much?</label>
                  <select id = "spread3"
                          name = "spread3">
                    <?php
                      $range = range(0,27);
                      foreach ($range as $points)
                      {
                        print "<option value='$points'>$points</option> \n";
                      }
                    ?>
                  </select>
                </div>
                <div class = "pickBox">
                  <label>LA Angels</label>
                  <input type = "radio"
                         name = "winner4"
                         value = "LA Angels" />
                  <label>Kansas City</label>
                  <input type = "radio"
                         name = "winner4"
                         value = "Kansas City" />
                  <label>Win by how much?</label>
                  <select id = "spread4"
                          name = "spread4">
                    <?php
                      $range = range(0,27);
                      foreach ($range as $points)
                      {
                        print "<option value='$points'>$points</option> \n";
                      }
                    ?>
                  </select>
                </div>
                <div class = "pickBox">
                  <label>San Diego</label>
                  <input type = "radio"
                         name = "winner5"
                         value = "San Diego" />
                  <label>St. Louis</label>
                  <input type = "radio"
                         name = "winner5"
                         value = "St. Louis" />
                  <label>Win by how much?</label>
                  <select id = "spread5"
                          name = "spread5">
                    <?php
                      $range = range(0,27);
                      foreach ($range as $points)
                      {
                        print "<option value='$points'>$points</option> \n";
                      }
                    ?>
                  </select>
                </div>
                <div class = "pickBox">
                  <label>San Francisco</label>
                  <input type = "radio"
                         name = "winner6"
                         value = "San Francisco" />
                  <label>LA Dodgers</label>
                  <input type = "radio"
                         name = "winner6"
                         value = "LA Dodgers" />
                  <label>Win by how much?</label>
                  <select id = "spread6"
                          name = "spread6">
                    <?php
                      $range = range(0,27);
                      foreach ($range as $points)
                      {
                        print "<option value='$points'>$points</option> \n";
                      }
                    ?>
                  </select>
                </div>
              </div>
              <div class = "tabClick">
                <h2 class = "center">April 1</h2>
              </div>
              <div class = "formPart">
                <div class = "pickBox">
                  <label>Houston</label>
                  <input type = "radio"
                         name = "winner7"
                         value = "Houston" />
                  <label>Philadelphia</label>
                  <input type = "radio"
                         name = "winner7"
                         value = "Philadelphia" />
                  <label>Win by how much?</label>
                  <select id = "spread7"
                          name = "spread7">
                    <?php
                      $range = range(0,27);
                      foreach ($range as $points)
                      {
                        print "<option value='$points'>$points</option> \n";
                      }
                    ?>
                  </select>
                </div>
                <div class = "pickBox">
                  <label>Pittsburgh</label>
                  <input type = "radio"
                         name = "winner8"
                         value = "Pittsburgh" />
                  <label>Chicago Cubs</label>
                  <input type = "radio"
                         name = "winner8"
                         value = "Chicago Cubs" />
                  <label>Win by how much?</label>
                  <select id = "spread8"
                          name = "spread8">
                    <?php
                      $range = range(0,27);
                      foreach ($range as $points)
                      {
                        print "<option value='$points'>$points</option> \n";
                      }
                    ?>
                  </select>
                </div>
                <div class = "pickBox">
                  <label>Chicago White Sox</label>
                  <input type = "radio"
                         name = "winner9"
                         value = "Chicago White Sox" />
                  <label>Cleveland</label>
                  <input type = "radio"
                         name = "winner9"
                         value = "Cleveland" />
                  <label>Win by how much?</label>
                  <select id = "spread9"
                          name = "spread9">
                    <?php
                      $range = range(0,27);
                      foreach ($range as $points)
                      {
                        print "<option value='$points'>$points</option> \n";
                      }
                    ?>
                  </select>
                </div>
                <div class = "pickBox">
                  <label>Boston</label>
                  <input type = "radio"
                         name = "winner10"
                         value = "Boston" />
                  <label>Texas</label>
                  <input type = "radio"
                         name = "winner10"
                         value = "Texas" />
                  <label>Win by how much?</label>
                  <select id = "spread10"
                          name = "spread10">
                    <?php
                      $range = range(0,27);
                      foreach ($range as $points)
                      {
                        print "<option value='$points'>$points</option> \n";
                      }
                    ?>
                  </select>
                </div>
                <div class = "pickBox">
                  <label>Arizona</label>
                  <input type = "radio"
                         name = "winner11"
                         value = "Arizona" />
                  <label>Colorado</label>
                  <input type = "radio"
                         name = "winner11"
                         value = "Colorado" />
                  <label>Win by how much?</label>
                  <select id = "spread11"
                          name = "spread11">
                    <?php
                      $range = range(0,27);
                      foreach ($range as $points)
                      {
                        print "<option value='$points'>$points</option> \n";
                      }
                    ?>
                  </select>
                </div>
                <div class = "pickBox">
                  <label>Minnesota</label>
                  <input type = "radio"
                         name = "winner12"
                         value = "Minnesota" />
                  <label>Toronto</label>
                  <input type = "radio"
                         name = "winner12"
                         value = "Toronto" />
                  <label>Win by how much?</label>
                  <select id = "spread12"
                          name = "spread12">
                    <?php
                      $range = range(0,27);
                      foreach ($range as $points)
                      {
                        print "<option value='$points'>$points</option> \n";
                      }
                    ?>
                  </select>
                </div>
                <div class = "pickBox">
                  <label>NY Mets</label>
                  <input type = "radio"
                         name = "winner13"
                         value = "NY Mets" />
                  <label>Florida</label>
                  <input type = "radio"
                         name = "winner13"
                         value = "Florida" />
                  <label>Win by how much?</label>
                  <select id = "spread13"
                          name = "spread13">
                    <?php
                      $range = range(0,27);
                      foreach ($range as $points)
                      {
                        print "<option value='$points'>$points</option> \n";
                      }
                    ?>
                  </select>
                </div>
                <div class = "pickBox">
                  <label>Baltimore</label>
                  <input type = "radio"
                         name = "winner14"
                         value = "Baltimore" />
                  <label>Tampa Bay</label>
                  <input type = "radio"
                         name = "winner14"
                         value = "Tampa Bay" />
                  <label>Win by how much?</label>
                  <select id = "spread14"
                          name = "spread14">
                    <?php
                      $range = range(0,27);
                      foreach ($range as $points)
                      {
                        print "<option value='$points'>$points</option> \n";
                      }
                    ?>
                  </select>
                </div>
                <div class = "pickBox">
                  <label>Seattle</label>
                  <input type = "radio"
                         name = "winner15"
                         value = "Seattle" />
                  <label>Oakland</label>
                  <input type = "radio"
                         name = "winner15"
                         value = "Oakland" />
                  <label>Win by how much?</label>
                  <select id = "spread15"
                          name = "spread15">
                    <?php
                      $range = range(0,27);
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
<?php  
  //show footer
  do_footer();
?>