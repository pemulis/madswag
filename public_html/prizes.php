<?php
  /* get MadSwag's custom functions, exception handling, and database connection info */
  require_once("madswag_fns.php");
  
  /* create and show header */
  do_header("Prizes - MadSwag");
  
  /* show menu */
  do_menu();
  
  /* include the content for the Prizes page */
  include 'prizes.html';
  
  /* show footer */
  do_footer();
?>