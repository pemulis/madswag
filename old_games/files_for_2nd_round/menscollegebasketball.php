<?php
  //get MadSwag's custom functions, exception handling, and database connection info
  require_once("madswag_fns.php");
  
  //create and show header
  do_header("Men's College Basketball - MadSwag");
?>

    <!-- Begin Scripts -->

    <script type = "text/javascript">
      jQuery(function(){
        $("#formpart1").hide();
        $("#formpart2").hide();
        $("#formpart3").hide();
        $("#formpart4").hide();
      });
      
      jQuery(function(){
        $("#tabdown1").hover(function(){
            $(this).addClass("pointer");
          }, function(){
            $(this).removeClass("pointer");
          }
        );
      });
      
      jQuery(function(){
        $("#tabdown2").hover(function(){
            $(this).addClass("pointer");
          }, function(){
            $(this).removeClass("pointer");
          }
        );
      });

      jQuery(function(){
        $("#tabdown3").hover(function(){
            $(this).addClass("pointer");
          }, function(){
            $(this).removeClass("pointer");
          }
        );
      });
      
      jQuery(function(){
        $("#tabdown4").hover(function(){
            $(this).addClass("pointer");
          }, function(){
            $(this).removeClass("pointer");
          }
        );
      });
      
      jQuery(function(){
        $("#tabdown1").toggle(function(){
          $("#formpart1").show();
        }, function(){
          $("#formpart1").hide();
        });
      });

      jQuery(function(){
        $("#tabdown2").toggle(function(){
          $("#formpart2").show();
        }, function(){
          $("#formpart2").hide();
        });
      });

      jQuery(function(){
        $("#tabdown3").toggle(function(){
          $("#formpart3").show();
        }, function(){
          $("#formpart3").hide();
        });
      });
      
      jQuery(function(){
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
        <form action = "m_c_bball_round2_2011.php"
              method = "post" >
          <fieldset class = "gameform">
            <h1 class = "center">Men's College Basketball</h1>
            <h3 class = "center">Championship Tournament</h3>
            <h3 class = "center">2nd Round: March 17-18</h3>
            <h3 class = "littleNote center">Pick the winner and the spread for each game!</h3>
            <h3 class = "littleNote center">If you have already entered picks for this round, your new picks will replace them.</h3>
            <h2 id = "tabdown1"
                class = "center">East</h2>
            <div id = "formpart1">
                <h4><label>Ohio St (1)</label></h4>
                <input type = "radio"
                       name = "winner1"
                       value = "Ohio St" />
                <h4><label>Texas-San Antonio/Alabama St (16)</label></h4>
                <input type = "radio"
                       name = "winner1"
                       value = "TexSA/BamaSt" />
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
                <h4><label>George Mason (8)</label></h4>
                <input type = "radio"
                       name = "winner2"
                       value = "George Mason" />
                <h4><label>Villanova (9)</label></h4>
                <input type = "radio"
                       name = "winner2"
                       value = "Villanova" />
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
                <h4><label>West Virginia (5)</label></h4>
                <input type = "radio"
                       name = "winner3"
                       value = "West Virginia" />
                <h4><label>UAB/Clemson (12)</label></h4>
                <input type = "radio"
                       name = "winner3"
                       value = "UAB/Clemson" />
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
                <h4><label>Kentucky (4)</label></h4>
                <input type = "radio"
                       name = "winner4"
                       value = "Kentucky" />
                <h4><label>Princeton (13)</label></h4>
                <input type = "radio"
                       name = "winner4"
                       value = "Princeton" />
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
              <h3 class = "center">-</h3>
                <h4><label>Xavier (6)</label></h4>
                <input type = "radio"
                       name = "winner5"
                       value = "Xavier" />
                <h4><label>Marquette (11)</label></h4>
                <input type = "radio"
                       name = "winner5"
                       value = "Marquette" />
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
                <h4><label>Syracuse (3)</label></h4>
                <input type = "radio"
                       name = "winner6"
                       value = "Syracuse" />
                <h4><label>Indiana St (14)</label></h4>
                <input type = "radio"
                       name = "winner6"
                       value = "Indiana St" />
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
                <h4><label>Washington (7)</label></h4>
                <input type = "radio"
                       name = "winner7"
                       value = "Washington" />
                <h4><label>Georgia (10)</label></h4>
                <input type = "radio"
                       name = "winner7"
                       value = "Georgia" />
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
                <h4><label>North Carolina (2)</label></h4>
                <input type = "radio"
                       name = "winner8"
                       value = "North Carolina" />
                <h4><label>Long Island (15)</label></h4>
                <input type = "radio"
                       name = "winner8"
                       value = "Long Island" />
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
            <h2 id = "tabdown2"
                class = "center">West</h2>
            <div id = "formpart2">
                <h4><label>Duke (1)</label></h4>
                <input type = "radio"
                       name = "winner9"
                       value = "Duke" />
                <h4><label>Hampton (16)</label></h4>
                <input type = "radio"
                       name = "winner9"
                       value = "Hampton" />
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
                <h4><label>Michigan (8)</label></h4>
                <input type = "radio"
                       name = "winner10"
                       value = "Michigan" />
                <h4><label>Tennessee (9)</label></h4>
                <input type = "radio"
                       name = "winner10"
                       value = "Tennessee" />
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
                <h4><label>Arizona (5)</label></h4>
                <input type = "radio"
                       name = "winner11"
                       value = "Arizona" />
                <h4><label>Memphis (12)</label></h4>
                <input type = "radio"
                       name = "winner11"
                       value = "Memphis" />
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
                <h4><label>Texas (4)</label></h4>
                <input type = "radio"
                       name = "winner12"
                       value = "Texas" />
                <h4><label>Oakland (13)</label></h4>
                <input type = "radio"
                       name = "winner12"
                       value = "Oakland" />
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
              <h3 class = "center">-</h3>
                <h4><label>Cincinnati (6)</label></h4>
                <input type = "radio"
                       name = "winner13"
                       value = "Cincinnati" />
                <h4><label>Missouri (11)</label></h4>
                <input type = "radio"
                       name = "winner13"
                       value = "Missouri" />
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
                <h4><label>Connecticut (3)</label></h4>
                <input type = "radio"
                       name = "winner14"
                       value = "Connecticut" />
                <h4><label>Bucknell (14)</label></h4>
                <input type = "radio"
                       name = "winner14"
                       value = "Bucknell" />
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
                <h4><label>Temple (7)</label></h4>
                <input type = "radio"
                       name = "winner15"
                       value = "Temple" />
                <h4><label>Penn St (10)</label></h4>
                <input type = "radio"
                       name = "winner15"
                       value = "Penn St" />
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
                <h4><label>San Diego St (2)</label></h4>
                <input type = "radio"
                       name = "winner16"
                       value = "San Diego St" />
                <h4><label>Northern Colorado (15)</label></h4>
                <input type = "radio"
                       name = "winner16"
                       value = "N Colorado" />
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
            <h2 id = "tabdown3"
                class = "center">Southwest</h2>
            <div id = "formpart3">
                <h4><label>Kansas (1)</label></h4>
                <input type = "radio"
                       name = "winner17"
                       value = "Kansas" />
                <h4><label>Boston University (16)</label></h4>
                <input type = "radio"
                       name = "winner17"
                       value = "Boston U" />
                <h4><label>Win by how much?</label></h4>
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
              <h3 class = "center">-</h3>
                <h4><label>UNLV (8)</label></h4>
                <input type = "radio"
                       name = "winner18"
                       value = "UNLV" />
                <h4><label>Illinois (9)</label></h4>
                <input type = "radio"
                       name = "winner18"
                       value = "Illinois" />
                <h4><label>Win by how much?</label></h4>
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
              <h3 class = "center">-</h3>
                <h4><label>Vanderbilt (5)</label></h4>
                <input type = "radio"
                       name = "winner19"
                       value = "Vanderbilt" />
                <h4><label>Richmond (12)</label></h4>
                <input type = "radio"
                       name = "winner19"
                       value = "Richmond" />
                <h4><label>Win by how much?</label></h4>
                <select id = "spread19"
                        name = "spread19">
                  <?php
                    $range = range(0,99);
                    foreach ($range as $points)
                    {
                      print "<option value='$points'>$points</option> \n";
                    }
                  ?>
                </select>
              <h3 class = "center">-</h3>
                <h4><label>Louisville (4)</label></h4>
                <input type = "radio"
                       name = "winner20"
                       value = "Louisville" />
                <h4><label>Morehead St (13)</label></h4>
                <input type = "radio"
                       name = "winner20"
                       value = "Morehead St" />
                <h4><label>Win by how much?</label></h4>
                <select id = "spread20"
                        name = "spread20">
                  <?php
                    $range = range(0,99);
                    foreach ($range as $points)
                    {
                      print "<option value='$points'>$points</option> \n";
                    }
                  ?>
                </select>
              <h3 class = "center">-</h3>
                <h4><label>Georgetown (6)</label></h4>
                <input type = "radio"
                       name = "winner21"
                       value = "Georgetown" />
                <h4><label>USC/VCU (11)</label></h4>
                <input type = "radio"
                       name = "winner21"
                       value = "USC/VCU" />
                <h4><label>Win by how much?</label></h4>
                <select id = "spread21"
                        name = "spread21">
                  <?php
                    $range = range(0,99);
                    foreach ($range as $points)
                    {
                      print "<option value='$points'>$points</option> \n";
                    }
                  ?>
                </select>
              <h3 class = "center">-</h3>
                <h4><label>Purdue (3)</label></h4>
                <input type = "radio"
                       name = "winner22"
                       value = "Purdue" />
                <h4><label>St Peter's (14)</label></h4>
                <input type = "radio"
                       name = "winner22"
                       value = "St Peter's" />
                <h4><label>Win by how much?</label></h4>
                <select id = "spread22"
                        name = "spread22">
                  <?php
                    $range = range(0,99);
                    foreach ($range as $points)
                    {
                      print "<option value='$points'>$points</option> \n";
                    }
                  ?>
                </select>
              <h3 class = "center">-</h3>
                <h4><label>Texas A&amp;M (7)</label></h4>
                <input type = "radio"
                       name = "winner23"
                       value = "Texas A&M" />
                <h4><label>Florida St (10)</label></h4>
                <input type = "radio"
                       name = "winner23"
                       value = "Florida St" />
                <h4><label>Win by how much?</label></h4>
                <select id = "spread23"
                        name = "spread23">
                  <?php
                    $range = range(0,99);
                    foreach ($range as $points)
                    {
                      print "<option value='$points'>$points</option> \n";
                    }
                  ?>
                </select>
              <h3 class = "center">-</h3>
                <h4><label>Notre Dame (2)</label></h4>
                <input type = "radio"
                       name = "winner24"
                       value = "Notre Dame" />
                <h4><label>Akron (15)</label></h4>
                <input type = "radio"
                       name = "winner24"
                       value = "Akron" />
                <h4><label>Win by how much?</label></h4>
                <select id = "spread24"
                        name = "spread24">
                  <?php
                    $range = range(0,99);
                    foreach ($range as $points)
                    {
                      print "<option value='$points'>$points</option> \n";
                    }
                  ?>
                </select>
            </div>
            <h2 id = "tabdown4"
                class = "center">Southeast</h2>
            <div id = "formpart4">
                <h4><label>Pittsburgh (1)</label></h4>
                <input type = "radio"
                       name = "winner25"
                       value = "Pittsburgh" />
                <h4><label>UNCA/UALR (16)</label></h4>
                <input type = "radio"
                       name = "winner25"
                       value = "UNCA/UALR" />
                <h4><label>Win by how much?</label></h4>
                <select id = "spread25"
                        name = "spread25">
                  <?php
                    $range = range(0,99);
                    foreach ($range as $points)
                    {
                      print "<option value='$points'>$points</option> \n";
                    }
                  ?>
                </select>
              <h3 class = "center">-</h3>
                <h4><label>Butler (8)</label></h4>
                <input type = "radio"
                       name = "winner26"
                       value = "Butler" />
                <h4><label>Old Dominion (9)</label></h4>
                <input type = "radio"
                       name = "winner26"
                       value = "Old Dominion" />
                <h4><label>Win by how much?</label></h4>
                <select id = "spread26"
                        name = "spread26">
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
                       name = "winner27"
                       value = "Kansas St" />
                <h4><label>Utah St (12)</label></h4>
                <input type = "radio"
                       name = "winner27"
                       value = "Utah St" />
                <h4><label>Win by how much?</label></h4>
                <select id = "spread27"
                        name = "spread27">
                  <?php
                    $range = range(0,99);
                    foreach ($range as $points)
                    {
                      print "<option value='$points'>$points</option> \n";
                    }
                  ?>
                </select>
              <h3 class = "center">-</h3>
                <h4><label>Wisconsin (4)</label></h4>
                <input type = "radio"
                       name = "winner28"
                       value = "Wisconsin" />
                <h4><label>Belmont (13)</label></h4>
                <input type = "radio"
                       name = "winner28"
                       value = "Belmont" />
                <h4><label>Win by how much?</label></h4>
                <select id = "spread28"
                        name = "spread28">
                  <?php
                    $range = range(0,99);
                    foreach ($range as $points)
                    {
                      print "<option value='$points'>$points</option> \n";
                    }
                  ?>
                </select>
              <h3 class = "center">-</h3>
                <h4><label>St John's (6)</label></h4>
                <input type = "radio"
                       name = "winner29"
                       value = "St John's" />
                <h4><label>Gonzaga (11)</label></h4>
                <input type = "radio"
                       name = "winner29"
                       value = "Gonzaga" />
                <h4><label>Win by how much?</label></h4>
                <select id = "spread29"
                        name = "spread29">
                  <?php
                    $range = range(0,99);
                    foreach ($range as $points)
                    {
                      print "<option value='$points'>$points</option> \n";
                    }
                  ?>
                </select>
              <h3 class = "center">-</h3>
                <h4><label>Brigham Young (3)</label></h4>
                <input type = "radio"
                       name = "winner30"
                       value = "Brigham Young" />
                <h4><label>Wofford (14)</label></h4>
                <input type = "radio"
                       name = "winner30"
                       value = "Wofford" />
                <h4><label>Win by how much?</label></h4>
                <select id = "spread30"
                        name = "spread30">
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
                       name = "winner31"
                       value = "UCLA" />
                <h4><label>Michigan St (10)</label></h4>
                <input type = "radio"
                       name = "winner31"
                       value = "Michigan St" />
                <h4><label>Win by how much?</label></h4>
                <select id = "spread31"
                        name = "spread31">
                  <?php
                    $range = range(0,99);
                    foreach ($range as $points)
                    {
                      print "<option value='$points'>$points</option> \n";
                    }
                  ?>
                </select>
              <h3 class = "center">-</h3>
                <h4><label>Florida (2)</label></h4>
                <input type = "radio"
                       name = "winner32"
                       value = "Florida" />
                <h4><label>UC Santa Barbara (15)</label></h4>
                <input type = "radio"
                       name = "winner32"
                       value = "UC SantaBarb" />
                <h4><label>Win by how much?</label></h4>
                <select id = "spread32"
                        name = "spread32">
                  <?php
                    $range = range(0,99);
                    foreach ($range as $points)
                    {
                      print "<option value='$points'>$points</option> \n";
                    }
                  ?>
                </select>
            </div>
            <h3 class = "littleNote center">Don't click submit until you've filled out all your picks!</h3>
            <button type = "submit" value = "Submit">Submit</button>
          </fieldset>
        </form>
      </div>
<?php  
  //show footer
  do_footer();
?>