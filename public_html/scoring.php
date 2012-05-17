<?php
  //get MadSwag's custom functions, exception handling, and database connection info
  require_once("madswag_fns.php");
  
  //create and show header
  do_header("Scoring - MadSwag");
  
  //show menu
  do_menu();
  
  //show HTML content with explanation of scoring system
  include 'scoring.html';
  
  //show footer
  do_footer();
?>