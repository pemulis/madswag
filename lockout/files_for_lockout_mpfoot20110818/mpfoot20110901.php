<?php
  //get MadSwag's custom functions, exception handling, and database connection info
  require_once("madswag_fns.php");
  
  //create and show header
  do_header("Pro Football - 2011 Preseason Week 4 - MadSwag");

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
        <form action = "mpfoot20110901p.php"
              method = "post" >
          <fieldset>
            <div class = "right"><a href = "scoring.php" id = "question">?</a></div>
            <h1 class = "center">Pro Football</h1>
            <h3 class = "center">Preseason Week 4</h3>
            <h3 class = "center">September 1st - September 2nd</h3>
            <h3 class = "littleNote center">Pick the winner and the spread for each game!</h3>
            <h3 class = "littleNote center">If you have already entered picks for this round, any new picks will replace them.</h3>
            <div class = "tabDown">
              <div class = "formPart">
                <div class = "pickBox">
                  <label>Detroit</label>
                  <input type = "radio"
                         name = "winner1"
                         value = "Detroit" />
                  <label>Buffalo</label>
                  <input type = "radio"
                         name = "winner1"
                         value = "Buffalo" />
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
                  <label>Indianapolis</label>
                  <input type = "radio"
                         name = "winner2"
                         value = "Indianapolis" />
                  <label>Cincinnati</label>
                  <input type = "radio"
                         name = "winner2"
                         value = "Cincinnati" />
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
                  <label>Baltimore</label>
                  <input type = "radio"
                         name = "winner3"
                         value = "Baltimore" />
                  <label>Atlanta</label>
                  <input type = "radio"
                         name = "winner3"
                         value = "Atlanta" />
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
                  <label>Dallas</label>
                  <input type = "radio"
                         name = "winner4"
                         value = "Dallas" />
                  <label>Miami</label>
                  <input type = "radio"
                         name = "winner4"
                         value = "Miami" />
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
                  <label>NY Giants</label>
                  <input type = "radio"
                         name = "winner5"
                         value = "NY Giants" />
                  <label>New England</label>
                  <input type = "radio"
                         name = "winner5"
                         value = "New England" />
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
                  <label>Philadelphia</label>
                  <input type = "radio"
                         name = "winner6"
                         value = "Philadelphia" />
                  <label>NY Jets</label>
                  <input type = "radio"
                         name = "winner6"
                         value = "NY Jets" />
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
                  <label>Tampa Bay</label>
                  <input type = "radio"
                         name = "winner7"
                         value = "Tampa Bay" />
                  <label>Washington</label>
                  <input type = "radio"
                         name = "winner7"
                         value = "Washington" />
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
                  <label>St. Louis</label>
                  <input type = "radio"
                         name = "winner8"
                         value = "St. Louis" />
                  <label>Jacksonville</label>
                  <input type = "radio"
                         name = "winner8"
                         value = "Jacksonville" />
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
                  <label>Pittsburgh</label>
                  <input type = "radio"
                         name = "winner9"
                         value = "Pittsburgh" />
                  <label>Carolina</label>
                  <input type = "radio"
                         name = "winner9"
                         value = "Carolina" />
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
                  <label>Tennessee</label>
                  <input type = "radio"
                         name = "winner10"
                         value = "Tennessee" />
                  <label>New Orleans</label>
                  <input type = "radio"
                         name = "winner10"
                         value = "New Orleans" />
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
                  <label>Houston</label>
                  <input type = "radio"
                         name = "winner11"
                         value = "Houston" />
                  <label>Minnesota</label>
                  <input type = "radio"
                         name = "winner11"
                         value = "Minnesota" />
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
                  <label>Kansas City</label>
                  <input type = "radio"
                         name = "winner12"
                         value = "Kansas City" />
                  <label>Green Bay</label>
                  <input type = "radio"
                         name = "winner12"
                         value = "Green Bay" />
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
                  <label>Cleveland</label>
                  <input type = "radio"
                         name = "winner13"
                         value = "Cleveland" />
                  <label>Chicago</label>
                  <input type = "radio"
                         name = "winner13"
                         value = "Chicago" />
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
                  <label>Denver</label>
                  <input type = "radio"
                         name = "winner14"
                         value = "Denver" />
                  <label>Arizona</label>
                  <input type = "radio"
                         name = "winner14"
                         value = "Arizona" />
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
                  <label>San Francisco</label>
                  <input type = "radio"
                         name = "winner15"
                         value = "San Francisco" />
                  <label>San Diego</label>
                  <input type = "radio"
                         name = "winner15"
                         value = "San Diego" />
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
                  <label>Oakland</label>
                  <input type = "radio"
                         name = "winner16"
                         value = "Oakland" />
                  <label>Seattle</label>
                  <input type = "radio"
                         name = "winner16"
                         value = "Seattle" />
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
              </div>
            </div>
            <button type = "submit" value = "Submit Picks">Submit Picks</button>
          </fieldset>
        </form>
      </div>
      <div class = 'comments'>
        <?php
          /* Set the tournament ID. Used to find the URL for comments. */
          $tourneyID = "mpfoot20110901";
          
          echo "<script src='http://connect.facebook.net/en_US/all.js#xfbml=1'></script><fb:comments href='http://www.madswag.com/$tourneyID.php' num_posts='10' width='500'></fb:comments>";
        ?>
      </div>
<?php  
  //show footer
  do_footer();
?>