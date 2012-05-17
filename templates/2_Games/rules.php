<?php
  //get MadSwag's custom functions, exception handling, and database connection info
  require_once("madswag_fns.php");
  
  //create and show header
  do_header("(template: Name of this set of picks) - MadSwag");

  //show menu
  do_menu();
?>
      <div class = 'oneCol'>
        <!-- Run generate_rules.php in the /bin folder to generate the HTML for the Official Rules for this game, and insert the results here. -->
      </div>
<?php  
  //show footer
  do_footer();
?>