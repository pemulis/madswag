<?php

  /* Get MadSwag's custom functions, error handling, database connection info, etc. */
  require_once("madswag_fns.php");

  /* Create and show the header. */
  do_header("Results - Men's College Basketball - MadSwag");

  /* Create and show the menu. */
  do_menu();

  /* Show the links to the results pages. */
  include 'results_mcbask.html';

  /* Create and show the footer. */
  do_footer();

?>