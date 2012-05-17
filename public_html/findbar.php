<?php

  /* Get MadSwag's custom functions, error handling, database connection info, etc. */
  require_once("madswag_fns.php");

  /* Create and show the header. */
  do_header("Find Bar - MadSwag");

  /* Create and show the menu. */
  do_menu();

  /* Show the list of bars in the game network, tied to their location. */
  include 'findbar.html';

  /* Create and show the footer. */
  do_footer();

?>