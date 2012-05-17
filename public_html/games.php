<?php
  //get MadSwag's custom functions, exception handling, and database connection info
  require_once("madswag_fns.php");
  
  //create and show header
  do_header("Current Games - MadSwag");
  
  //show menu
  do_menu();
  
  //include HTML page content
  include 'currentgamelist.html';
  
  //show footer
  do_footer();
?>