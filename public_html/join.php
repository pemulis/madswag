<?php
  //get MadSwag's custom functions, exception handling, and database connection info
  require_once("madswag_fns.php");
  
  //create and show header
  do_header("Join - MadSwag");
  
  //show menu
  do_menu();

  //show html content
  include 'joinform.html';

  //show footer
  do_footer();
?>
