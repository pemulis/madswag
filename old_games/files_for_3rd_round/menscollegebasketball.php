<?php
  //get MadSwag's custom functions, exception handling, and database connection info
  require_once("madswag_fns.php");
  
  //create and show header
  do_header("Men's College Basketball - MadSwag");
?>

      <!-- Begin Scripts -->
      
      <script type = "text/javascript">
        $(function(){
          $("#formpart1").hide();
          $("#formpart2").hide();
          $("#formpart3").hide();
          $("#formpart4").hide();
        });
        
        $(function(){
          $("#tabdown1").hover(function(){
              $(this).addClass("pointer");
            }, function(){
              $(this).removeClass("pointer");
            }
          );
        });
        
        $(function(){
          $("#tabdown2").hover(function(){
              $(this).addClass("pointer");
            }, function(){
              $(this).removeClass("pointer");
            }
          );
        });
   
        $(function(){
          $("#tabdown3").hover(function(){
              $(this).addClass("pointer");
            }, function(){
              $(this).removeClass("pointer");
            }
          );
        });
        
        $(function(){
          $("#tabdown4").hover(function(){
              $(this).addClass("pointer");
            }, function(){
              $(this).removeClass("pointer");
            }
          );
        });
        
        $(function(){
          $("#tabdown1").toggle(function(){
            $("#formpart1").show();
          }, function(){
            $("#formpart1").hide();
          });
        });

        $(function(){
          $("#tabdown2").toggle(function(){
            $("#formpart2").show();
          }, function(){
            $("#formpart2").hide();
          });
        });

        $(function(){
          $("#tabdown3").toggle(function(){
            $("#formpart3").show();
          }, function(){
            $("#formpart3").hide();
          });
        });
        
        $(function(){
          $("#tabdown4").toggle(function(){
            $("#formpart4").show();
          }, function(){
            $("#formpart4").hide();
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
        <form action = "m_c_bball_round3_2011.php"
              method = "post" >
          <fieldset>
            <div class = "right"><a href = "scoring.php" id = "question">?</a></div>
            <h1 class = "center">Men's College Basketball</h1>
            <h3 class = "center">Third Round | March 19-20</h3>
            <h3 class = "littleNote center">Pick the winner and the spread for each game!</h3>
            <h3 class = "littleNote center">If you have already entered picks for this round, any new picks will replace them.</h3>
            <h3 id = "tabdown1" class = "center">East</h3>
              <div id = "formpart1">
                <h4><label>Ohio St (1)</label></h4>
                <input type = "radio"
                       name = "winner1"
                       value = "Ohio St" />
                <h4><label>George Mason (8)</label></h4>
                <input type = "radio"
                       name = "winner1"
                       value = "George Mason" />
                <h4><label>Win by how much?</label></h4>
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
                <h3 class = "center">-</h3>
                <h4><label>West Virginia (5)</label></h4>
                <input type = "radio"
                       name = "winner2"
                       value = "West Virginia" />
                <h4><label>Kentucky (4)</label></h4>
                <input type = "radio"
                       name = "winner2"
                       value = "Kentucky" />
                <h4><label>Win by how much?</label></h4>
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
                <h3 class = "center">-</h3>
                <h4><label>Marquette (11)</label></h4>
                <input type = "radio"
                       name = "winner3"
                       value = "Marquette" />
                <h4><label>Syracuse (3)</label></h4>
                <input type = "radio"
                       name = "winner3"
                       value = "Syracuse" />
                <h4><label>Win by how much?</label></h4>
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
                <h3 class = "center">-</h3>
                <h4><label>Washington (7)</label></h4>
                <input type = "radio"
                       name = "winner4"
                       value = "Washington" />
                <h4><label>North Carolina (2)</label></h4>
                <input type = "radio"
                       name = "winner4"
                       value = "North Carolina" />
                <h4><label>Win by how much?</label></h4>
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
            <h3 id = "tabdown2" class = "center">West</h3>
              <div id = "formpart2">
                <h4><label>Duke (1)</label></h4>
                <input type = "radio"
                       name = "winner5"
                       value = "Duke" />
                <h4><label>Michigan (8)</label></h4>
                <input type = "radio"
                       name = "winner5"
                       value = "Michigan" />
                <h4><label>Win by how much?</label></h4>
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
                <h3 class = "center">-</h3>
                <h4><label>Arizona (5)</label></h4>
                <input type = "radio"
                       name = "winner6"
                       value = "Arizona" />
                <h4><label>Texas (4)</label></h4>
                <input type = "radio"
                       name = "winner6"
                       value = "Texas" />
                <h4><label>Win by how much?</label></h4>
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
                <h3 class = "center">-</h3>
                <h4><label>Cincinnati (6)</label></h4>
                <input type = "radio"
                       name = "winner7"
                       value = "Cincinnati" />
                <h4><label>Connecticut (3)</label></h4>
                <input type = "radio"
                       name = "winner7"
                       value = "Connecticut" />
                <h4><label>Win by how much?</label></h4>
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
                <h3 class = "center">-</h3>
                <h4><label>Temple (7)</label></h4>
                <input type = "radio"
                       name = "winner8"
                       value = "Temple" />
                <h4><label>San Diego St (2)</label></h4>
                <input type = "radio"
                       name = "winner8"
                       value = "San Diego St" />
                <h4><label>Win by how much?</label></h4>
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
            <h3 id = "tabdown3" class = "center">Southwest</h3>
              <div id = "formpart3">
                <h4><label>Kansas (1)</label></h4>
                <input type = "radio"
                       name = "winner9"
                       value = "Kansas" />
                <h4><label>Illinois (9)</label></h4>
                <input type = "radio"
                       name = "winner9"
                       value = "Illinois" />
                <h4><label>Win by how much?</label></h4>
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
                <h3 class = "center">-</h3>
                <h4><label>Richmond (12)</label></h4>
                <input type = "radio"
                       name = "winner10"
                       value = "Richmond" />
                <h4><label>Morehead St (13)</label></h4>
                <input type = "radio"
                       name = "winner10"
                       value = "Morehead St" />
                <h4><label>Win by how much?</label></h4>
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
                <h3 class = "center">-</h3>
                <h4><label>VCU (11)</label></h4>
                <input type = "radio"
                       name = "winner11"
                       value = "VCU" />
                <h4><label>Purdue (3)</label></h4>
                <input type = "radio"
                       name = "winner11"
                       value = "Purdue" />
                <h4><label>Win by how much?</label></h4>
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
                <h3 class = "center">-</h3>
                <h4><label>Florida St (10)</label></h4>
                <input type = "radio"
                       name = "winner12"
                       value = "Florida St" />
                <h4><label>Notre Dame (2)</label></h4>
                <input type = "radio"
                       name = "winner12"
                       value = "Notre Dame" />
                <h4><label>Win by how much?</label></h4>
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
            <h3 id = "tabdown4" class = "center">Southeast</h3>
              <div id = "formpart4">
                <h4><label>Pittsburgh (1)</label></h4>
                <input type = "radio"
                       name = "winner13"
                       value = "Pittsburgh" />
                <h4><label>Butler (8)</label></h4>
                <input type = "radio"
                       name = "winner13"
                       value = "Butler" />
                <h4><label>Win by how much?</label></h4>
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
                <h3 class = "center">-</h3>
                <h4><label>Kansas St (5)</label></h4>
                <input type = "radio"
                       name = "winner14"
                       value = "Kansas St" />
                <h4><label>Wisconsin (4)</label></h4>
                <input type = "radio"
                       name = "winner14"
                       value = "Wisconsin" />
                <h4><label>Win by how much?</label></h4>
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
                <h3 class = "center">-</h3>
                <h4><label>Gonzaga (11)</label></h4>
                <input type = "radio"
                       name = "winner15"
                       value = "Gonzaga" />
                <h4><label>Brigham Young (3)</label></h4>
                <input type = "radio"
                       name = "winner15"
                       value = "Brigham Young" />
                <h4><label>Win by how much?</label></h4>
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
                <h3 class = "center">-</h3>
                <h4><label>UCLA (7)</label></h4>
                <input type = "radio"
                       name = "winner16"
                       value = "UCLA" />
                <h4><label>Florida (2)</label></h4>
                <input type = "radio"
                       name = "winner16"
                       value = "Florida" />
                <h4><label>Win by how much?</label></h4>
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
            <button type = "submit" value = "Submit Picks">Submit Picks</button>
          </fieldset>
        </form>
      </div>
<?php  
  //show footer
  do_footer();
?>