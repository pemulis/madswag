<?php
  //get MadSwag's custom functions, exception handling, and database connection info
  require_once("madswag_fns.php");
  
  //create and show header
  do_header("Log In - MadSwag");
  
  //show menu
  do_menu();
?>
      <div class = 'oneCol'>
<?php
  include 'loginform.html';
?>
      </div>
<?php
  //show footer
  do_footer();
?>