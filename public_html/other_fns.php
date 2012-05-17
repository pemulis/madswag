<?php
// Other Functions
//
// This file contains all of the functions and classes that don't fit into the other categories,
// such as exception handling and random number generators.



class swagexception extends Exception
{
	function __toString()
	{
		return <<<HERE
          <p>
            {$this->getMessage()}
          </p>
				</div>
HERE;
	} //the </div> is to close the left, right, or oneCol <div>, so that the footer doesn't bleed up into the page content
}

function eight_random_characters()
{
  //create empty string to hold the result
  $str = '';
  
  //create list of characters for randomizer to choose from
  $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
  
  //run the randomizer eight times and add the characters to the end of the string
  for ($i = 0; $i < 8; $i++)
  {
    $str .= $characters[mt_rand(0, strlen($characters)-1)];
  }
  
  //return random string
  return $str;
}

function show_ordinal($num) {
  // first convert to string if needed
  $the_num = (string) $num;
  // now we grab the last digit of the number
  $last_digit = substr($the_num, -1, 1);
  // if the string is more than 2 chars long, we get
  // the second to last character to evaluate
  if (strlen($the_num)>1) {
      $next_to_last = substr($the_num, -2, 1);
  } else {
      $next_to_last = "";
  }
  // now iterate through possibilities in a switch
  switch($last_digit) {
      case "1":
          // testing the second from last digit here
          switch($next_to_last) {
              case "1":
                  $the_num.="th";
                  break;
              default:
                  $the_num.="st";
          }
          break;
      case "2":
          // testing the second from last digit here
          switch($next_to_last) {
              case "1":
                  $the_num.="th";
                  break;
              default:
                  $the_num.="nd";
          }
          break;
      // if last digit is a 3
      case "3":
          // testing the second from last digit here
          switch($next_to_last) {
              case "1":
                  $the_num.="th";
                  break;
              default:
                  $the_num.="rd";
          }
          break;
      // for all the other numbers we use "th"
      default:
          $the_num.="th";
  }

  // finally, return our string with it's new suffix
  return $the_num;
}

?>