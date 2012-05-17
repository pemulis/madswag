<?php
  //get MadSwag's custom functions, exception handling, and database connection info
  require_once("madswag_fns.php");
  
  //create and show header
  do_header("Free Trial - MadSwag");
  
  //show menu
  do_menu();
  
  //show HTML content
  include 'freetrial.html';
  
  //show footer
  do_footer();
?>
