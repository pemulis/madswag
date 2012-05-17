<?php
  //get MadSwag's custom functions, exception handling, and database connection info
  require_once("madswag_fns.php");
  //create and show header
  do_header("MadSwag");
  //show menu
  do_menu();
?>
<?php
  //v1.013 include indexnotloggedin.php if (!isset($_SESSION['identifier'])), else include indexloggedin.php
  if (!isset($_SESSION['identifier']))
  {
    include 'indexnotloggedin.php';
  } else {
    include 'indexloggedin.php';
  }
?>
<?php
  //show footer
  do_footer();
?>