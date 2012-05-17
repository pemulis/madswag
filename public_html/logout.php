<?php
  //get MadSwag's custom functions, exception handling, and database connection info
  require_once("madswag_fns.php");
  
  //create and show header
  do_header("Logged Out - MadSwag");
  
  //log the user out by destroying the session
  session_destroy();
  
  //show the menu
  do_menu();
  
  //include HTML content
  include 'logout.html';
  
  //show footer
  do_footer();
?>