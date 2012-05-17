<?php
  //get MadSwag's custom functions, exception handling, and database connection info
  require_once("madswag_fns.php");
  
  //create and show header
  do_header("How It Works - MadSwag");
  
  //pre-load the price chart image, since that's where they're going next
  echo <<<HERE
  
    <script type = 'text/javascript'>
    
      tempImg = new Image();
      tempImg.src="pricechart.jpg";
      
    </script>
    
HERE;
  
  //show menu
  do_menu();
  
  //show HTML content
  include 'howitworks.html';
  
  //show footer
  do_footer();
?>
