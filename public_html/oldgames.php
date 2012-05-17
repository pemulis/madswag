<?php

  /* Get MadSwag's custom functions, error handling, database connection info, etc. */
  require_once("madswag_fns.php");

  /* Create and show the header. */
  do_header("Old Game Results - MadSwag");

  /* Create and show the menu. */
  do_menu();

  /* Show the links to the lists of results pages for various sports. */
  include 'results_oldgames.html';

  /* Create and show the footer. */
  do_footer();

?>