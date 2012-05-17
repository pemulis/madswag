<?php
// Data Validation Functions
//
// This file contains the functions for checking if user-submitted data fits within a required type or format, excluding 
// functions that require database access, which can be found in db_fns.php.



function test_passwords_match($pass1, $pass2)
{
  try
  {
    if ($pass1 != $pass2)
    {
      throw new swagexception("The passwords you entered do not match.");
    }
  }
  catch (swagexception $e)
  {
    include 'error.html';
    echo $e;
    do_footer();
    exit;
  }
}

function test_email($email)
{
  try
  {
    if (!(eregi('^[a-zA-Z0-9_\-\.\+]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$', $email))){
      throw new swagexception("The e-mail address you entered is invalid.");
    }
    if (strlen($email) > 50){
      throw new swagexception("The e-mail address you entered is too long.");
    }
  }
  catch (swagexception $e)
  {
    include 'error.html';
    echo $e;
    do_footer();
    exit;
  }
}

function test_zip($zip)
{
  try
  {
    if ($zip != ''){
      if (!(eregi('^[0-9][0-9][0-9][0-9][0-9]$', $zip))){
        throw new swagexception("The ZIP code you entered is invalid.");
      }
    }
    if (strlen($zip) > 5){
      throw new swagexception("The ZIP code you entered is too long.");
    }
  }
  catch (swagexception $e)
  {
    include 'error.html';
    echo $e;
    do_footer();
    exit;
  }
}

function test_names($firstName, $lastName)
{
  try
  {
    if (!(eregi('^[a-zA-Z\'\-]+$', $firstName))){
      throw new swagexception("The first name you entered is invalid.");
    }
    
    if (!(eregi('^[a-zA-Z\'\-]+$', $lastName))){
      throw new swagexception("The last name you entered is invalid.");
    }

    if (strlen($firstName) > 25){
      throw new swagexception("The first name you entered is too long.");
    }						

    if (strlen($lastName) > 30){
      throw new swagexception("The last name you entered is too long.");
    }
  }
  catch (swagexception $e)
  {
    include 'error.html';
    echo $e;
    do_footer();
    exit;
  }
}

function test_username($username)
{
  try
  {
    if (!(eregi('^[a-zA-Z0-9_!\'\-\.]+$', $username))){
      throw new swagexception("The username you entered is invalid. You can only use letters, numbers, exclamation points, apostrophes, dashes, and periods.");
    }

    if (strlen($username) > 25){
      throw new swagexception("The username you entered is too long.");
    }
  }
  catch (swagexception $e)
  {
    include 'error.html';
    echo $e;
    do_footer();
    exit;
  }
}

function test_password($password)
{
  try
  {
    if (!(eregi('^[a-zA-Z0-9!@#$%&*_\'\-\.]+$', $password))){
      throw new swagexception("The password you entered is invalid.");
    }
    
    if (strlen($password) > 25){
      throw new swagexception("The password you entered is too long.");
    }
  }
  catch (swagexception $e)
  {
    include 'error.html';
    echo $e;
    do_footer();
    exit;
  }
}

function test_city($city)
{
  try
  {
    if ($city != ''){
      if(!(eregi('^[a-zA-Z0-9 \'\-]+$', $city))){
       throw new swagexception("The city name you entered is invalid.");
      }
    }
    if (strlen($city) > 167){
      throw new swagexception("The city name you entered is too long.");
    }
  }
  catch (swagexception $e)
  {
    include 'error.html';
    echo $e;
    do_footer();
    exit;
  }
}

function test_business_name($businessName)
{
  try
  {
    if (strlen($businessName) > 50){
      throw new swagexception("The business name you entered is too long.");
    }						
  }
  catch (swagexception $e)
  {
    include 'error.html';
    echo $e;
    do_footer();
    exit;
  }
}

function test_login_name($login)
{
  try
  {
    if (!(eregi('^[a-zA-Z0-9_!\'\-\.]+$', $login))){
      throw new swagexception("The log-in name you entered is invalid. You can only use letters, numbers, exclamation points, apostrophes, dashes, and periods.");
    }

    if (strlen($login) > 25){
      throw new swagexception("The username you entered is too long.");
    }
  }
  catch (swagexception $e)
  {
    include 'error.html';
    echo $e;
    do_footer();
    exit;
  }
}

function test_phone($phone)
{
  try
  {
    if ($phone != ''){
      if (!(eregi('^[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]$', $phone))){
        throw new swagexception("The phone number you entered is invalid.");
      }
    }
    if (strlen($phone) > 9){
      throw new swagexception("The phone number you entered is too long.");
    }
  }
  catch (swagexception $e)
  {
    include 'error.html';
    echo $e;
    do_footer();
    exit;
  }
}

function test_streetAddress($streetAddress)
{
  try
  {
    if ($streetAddress != ''){
      if(!(eregi('^[a-zA-Z0-9 \'\-]+$', $streetAddress))){
       throw new swagexception("The street address you entered is invalid.");
      }
    }
    if (strlen($streetAddress) > 90){
      throw new swagexception("The street address you entered is too long.");
    }
  }
  catch (swagexception $e)
  {
    include 'error.html';
    echo $e;
    do_footer();
    exit;
  }
}

?>