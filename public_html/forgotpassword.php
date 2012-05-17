<?php
  //get MadSwag's custom functions, exception handling, and database connection info
  require_once("madswag_fns.php");
  
  //create and show header
  do_header("Forgot Password - MadSwag");
  
  //show menu
  do_menu();
?>
      <div class = 'oneCol'>
<?php
  include 'forgotpasswordform.html';
?>
      </div>
<?php
  //show footer
  do_footer();
?>