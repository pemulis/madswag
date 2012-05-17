<?php
  //get MadSwag's custom functions, exception handling, and database connection info
  require_once("madswag_fns.php");
  
  //create and show header
  do_header("Demo - MadSwag");
?>

      <!-- Begin Scripts -->
      
      <script type = "text/javascript">
      
        $(function(){
          $('.formPart').hide();
          
          $('div.tabClick').hover(function(){
              $(this).addClass('pointer');
            }, function(){
              $(this).removeClass('pointer');
            }
          );
          
          $('div.tabClick').click(function(){
            $(this).next('.formPart')
              .toggle();
          });

          $('div.pickBox > select').change(function(){
            if($(this).siblings('input:radio').is(':checked')){
              $(this).parent().css('backgroundColor', '#00FF66');
            }
          });

          $('div.pickBox > input:radio').change(function(){
            if($(this).siblings('select')[0].selectedIndex > 0){
              $(this).parent().css('backgroundColor', '#00FF66');
            }
          });

        });
      
      </script>
      
     <!-- End Scripts -->

<?php
  //show menu
  do_menu();
?>
      <div class = "oneCol">
        <?php
          //check if user is logged in, echo warning if they aren't
          if (!isset($_SESSION['identifier']))
          {
            echo '<h1 class = "center">Warning: You are not logged in. You have to log in for your picks to count.</h1>';
          }
        ?>
        <!-- form goes here -->
        <form action = "demo_process.php"
              method = "post" >
          <fieldset>
            <h1 class = "center">Demo Game</h1>
            <h3 class = "center">May 5, 2011 - ???</h3>
            <h3 class = "littleNote center">This is just a demo game to show how the submission system works!</h3>
            <div class = "tabDown">
              <div class = "tabClick">
                <h2 class = "center">Drop</h2>
              </div>
              <div class = "formPart">
                <div class = "pickBox">
                  <label>Godzilla</label>
                  <input type = "radio"
                         name = "winner1"
                         value = "Godzilla" />
                  <label>Mecha-Godzilla</label>
                  <input type = "radio"
                         name = "winner1"
                         value = "Mecha-Godzilla" />
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
                  <label>Death</label>
                  <input type = "radio"
                         name = "winner2"
                         value = "Death" />
                  <label>Taxes</label>
                  <input type = "radio"
                         name = "winner2"
                         value = "Taxes" />
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
                  <label>Little Debbie</label>
                  <input type = "radio"
                         name = "winner3"
                         value = "Little Debbie" />
                  <label>Hostess</label>
                  <input type = "radio"
                         name = "winner3"
                         value = "Hostess" />
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
                  <label>Keg</label>
                  <input type = "radio"
                         name = "winner4"
                         value = "Keg" />
                  <label>Freshman</label>
                  <input type = "radio"
                         name = "winner4"
                         value = "Freshman" />
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
              </div>
              <div class = "tabClick">
                <h2 class = "center">Down</h2>
              </div>
              <div class = "formPart">
                <div class = "pickBox">
                  <label>Batman</label>
                  <input type = "radio"
                         name = "winner5"
                         value = "Batman" />
                  <label>Superman</label>
                  <input type = "radio"
                         name = "winner5"
                         value = "Superman" />
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
                  <label>Rock</label>
                  <input type = "radio"
                         name = "winner6"
                         value = "Rock" />
                  <label>Paper</label>
                  <input type = "radio"
                         name = "winner6"
                         value = "Paper" />
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
                  <label>Studying</label>
                  <input type = "radio"
                         name = "winner7"
                         value = "Studying" />
                  <label>The Internet</label>
                  <input type = "radio"
                         name = "winner7"
                         value = "The Internet" />
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
                  <label>Astronaut</label>
                  <input type = "radio"
                         name = "winner8"
                         value = "Astronaut" />
                  <label>Martian</label>
                  <input type = "radio"
                         name = "winner8"
                         value = "Martian" />
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
              </div>
              <div class = "tabClick">
                <h2 class = "center">Boxes</h2>
              </div>
              <div class = "formPart">
                <div class = "pickBox">
                  <label>The Sopranos</label>
                  <input type = "radio"
                         name = "winner9"
                         value = "The Sopranos" />
                  <label>The Wire</label>
                  <input type = "radio"
                         name = "winner9"
                         value = "The Wire" />
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
                  <label>Grilled Cheese</label>
                  <input type = "radio"
                         name = "winner10"
                         value = "Grilled Cheese" />
                  <label>Taco</label>
                  <input type = "radio"
                         name = "winner10"
                         value = "Taco" />
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
                  <label>Cheap Beer</label>
                  <input type = "radio"
                         name = "winner11"
                         value = "Cheap Beer" />
                  <label>Good Beer</label>
                  <input type = "radio"
                         name = "winner11"
                         value = "Good Beer" />
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
                  <label>Fragments</label>
                  <input type = "radio"
                         name = "winner12"
                         value = "Fragments" />
                  <label>Split Infinitives</label>
                  <input type = "radio"
                         name = "winner12"
                         value = "Split Infinitives" />
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
              </div>
              <div class = "tabClick">
                <h2 class = "center">Rule</h2>
              </div>
              <div class = "formPart">
                <div class = "pickBox">
                  <label>Whatever</label>
                  <input type = "radio"
                         name = "winner13"
                         value = "Whatever" />
                  <label>Meh</label>
                  <input type = "radio"
                         name = "winner13"
                         value = "Meh" />
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
                  <label>King Kong</label>
                  <input type = "radio"
                         name = "winner14"
                         value = "King Kong" />
                  <label>Alonzo Harris</label>
                  <input type = "radio"
                         name = "winner14"
                         value = "Alonzo Harris" />
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
                  <label>Scrabble</label>
                  <input type = "radio"
                         name = "winner15"
                         value = "Scrabble" />
                  <label>Battleship</label>
                  <input type = "radio"
                         name = "winner15"
                         value = "Battleship" />
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
                  <label>Unstoppable Force</label>
                  <input type = "radio"
                         name = "winner16"
                         value = "Unstoppable Force" />
                  <label>Immovable Object</label>
                  <input type = "radio"
                         name = "winner16"
                         value = "Immovable Object" />
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
          $tourneyID = "demo";
          
          echo "<script src='http://connect.facebook.net/en_US/all.js#xfbml=1'></script><fb:comments href='http://www.madswag.com/$tourneyID.php' num_posts='10' width='500'></fb:comments>";
        ?>
      </div>
<?php  
  //show footer
  do_footer();
?>
