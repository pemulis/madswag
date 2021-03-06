<?php
  //get MadSwag's custom functions, exception handling, and database connection info
  require_once("madswag_fns.php");
  
  //create and show header
  do_header("Privacy - MadSwag");
  
  //show menu
  do_menu();
  
  //include HTML privacy page content
  include 'privacy.html';
  
  //show footer
  do_footer();
?>