<?php
  //get MadSwag's custom functions, exception handling, and database connection info
  require_once("madswag_fns.php");
  
  //create and show header
  do_header("Men's College Basketball - 2011 Championship Game - MadSwag");
?>
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
        <form action = "mcbask20110404p.php"
              method = "post" >
          <fieldset>
            <div class = "right"><a href = "scoring.php" id = "question">?</a></div>
            <h1 class = "center">Men's College Basketball</h1>
            <h3 class = "center">2011 Championship Game</h3>
            <h3 class = "littleNote center">Pick the winner and the spread!</h3>
            <h3 class = "littleNote center">If you have already entered a pick for this game, any new picks will replace them.</h3>
            <div class = "tabDown">
              <div class = "formPart">
                <div class = "pickBox">
                  <label>Connecticut (3)</label>
                  <input type = "radio"
                         name = "winner1"
                         value = "Connecticut" />
                  <label>Butler (8)</label>
                  <input type = "radio"
                         name = "winner1"
                         value = "Butler" />
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
<?php  
  //show footer
  do_footer();
?>