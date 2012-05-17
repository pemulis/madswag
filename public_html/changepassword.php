<?php
  //get MadSwag's custom functions, error handling, and database connection info
  require_once("madswag_fns.php");
  
  do_header("Change Password - MadSwag");
  do_menu();
?>
      <div class = 'oneCol'>
<?php
  include 'changepasswordform.html';
?>
      </div>
<?php
  do_footer();
?>