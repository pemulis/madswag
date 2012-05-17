<?php
// Include this file in every other file, so that every part of MadSwag can use all
// of the custom functions and exceptions.
//
// FUNCTION LIST
//
// COMPLETE FUNCTIONS
//
// In output_fns.php:
// function do_header($title)
// function do_menu()
// function do_footer()
// function generate_game_over($time)
// function generate_picks_accepted($time)
//
// In mail_fns.php:
// function send_passchange_mail($toAddress, $subject, $mailContent, $fromAddress)
// function send_passreset_mail($toAddress, $subject, $mailContent, $fromAddress)
// function send_picks_mail($toAddress, $subject, $mailContent, $fromAddress)
// function send_results_mail($toAddress, $subject, $mailContent, $fromAddress)
//
// In db_fns.php:
// function update_picks_thirtytwo($db, $userID, $table, $winner1, $spread1, $winner2, $spread2, $winner3, $spread3, $winner4, $spread4, $winner5, $spread5, $winner6, $spread6, $winner7, $spread7, $winner8, $spread8, $winner9, $spread9, $winner10, $spread10, $winner11, $spread11, $winner12, $spread12, $winner13, $spread13, $winner14, $spread14, $winner15, $spread15, $winner16, $spread16, $winner17, $spread17, $winner18, $spread18, $winner19, $spread19, $winner20, $spread20, $winner21, $spread21, $winner22, $spread22, $winner23, $spread23, $winner24, $spread24, $winner25, $spread25, $winner26, $spread26, $winner27, $spread27, $winner28, $spread28, $winner29, $spread29, $winner30, $spread30, $winner31, $spread31, $winner32, $spread32)
// function insert_picks_thirtytwo($db, $userID, $table, $winner1, $spread1, $winner2, $spread2, $winner3, $spread3, $winner4, $spread4, $winner5, $spread5, $winner6, $spread6, $winner7, $spread7, $winner8, $spread8, $winner9, $spread9, $winner10, $spread10, $winner11, $spread11, $winner12, $spread12, $winner13, $spread13, $winner14, $spread14, $winner15, $spread15, $winner16, $spread16, $winner17, $spread17, $winner18, $spread18, $winner19, $spread19, $winner20, $spread20, $winner21, $spread21, $winner22, $spread22, $winner23, $spread23, $winner24, $spread24, $winner25, $spread25, $winner26, $spread26, $winner27, $spread27, $winner28, $spread28, $winner29, $spread29, $winner30, $spread30, $winner31, $spread31, $winner32, $spread32)
//
// function update_picks_eighteen($db, $userID, $table, $winner1, $spread1, $winner2, $spread2, $winner3, $spread3, $winner4, $spread4, $winner5, $spread5, $winner6, $spread6, $winner7, $spread7, $winner8, $spread8, $winner9, $spread9, $winner10, $spread10, $winner11, $spread11, $winner12, $spread12, $winner13, $spread13, $winner14, $spread14, $winner15, $spread15, $winner16, $spread16, $winner17, $spread17, $winner18, $spread18)
// function insert_picks_eighteen($db, $userID, $table, $winner1, $spread1, $winner2, $spread2, $winner3, $spread3, $winner4, $spread4, $winner5, $spread5, $winner6, $spread6, $winner7, $spread7, $winner8, $spread8, $winner9, $spread9, $winner10, $spread10, $winner11, $spread11, $winner12, $spread12, $winner13, $spread13, $winner14, $spread14, $winner15, $spread15, $winner16, $spread16, $winner17, $spread17, $winner18, $spread18)
//
// function update_picks_sixteen($db, $userID, $table, $winner1, $spread1, $winner2, $spread2, $winner3, $spread3, $winner4, $spread4, $winner5, $spread5, $winner6, $spread6, $winner7, $spread7, $winner8, $spread8, $winner9, $spread9, $winner10, $spread10, $winner11, $spread11, $winner12, $spread12, $winner13, $spread13, $winner14, $spread14, $winner15, $spread15, $winner16, $spread16)
// function insert_picks_sixteen($db, $userID, $table, $winner1, $spread1, $winner2, $spread2, $winner3, $spread3, $winner4, $spread4, $winner5, $spread5, $winner6, $spread6, $winner7, $spread7, $winner8, $spread8, $winner9, $spread9, $winner10, $spread10, $winner11, $spread11, $winner12, $spread12, $winner13, $spread13, $winner14, $spread14, $winner15, $spread15, $winner16, $spread16)
//
// function update_picks_fifteen($db, $userID, $table, $winner1, $spread1, $winner2, $spread2, $winner3, $spread3, $winner4, $spread4, $winner5, $spread5, $winner6, $spread6, $winner7, $spread7, $winner8, $spread8, $winner9, $spread9, $winner10, $spread10, $winner11, $spread11, $winner12, $spread12, $winner13, $spread13, $winner14, $spread14, $winner15, $spread15)
// function insert_picks_fifteen($db, $userID, $table, $winner1, $spread1, $winner2, $spread2, $winner3, $spread3, $winner4, $spread4, $winner5, $spread5, $winner6, $spread6, $winner7, $spread7, $winner8, $spread8, $winner9, $spread9, $winner10, $spread10, $winner11, $spread11, $winner12, $spread12, $winner13, $spread13, $winner14, $spread14, $winner15, $spread15)
//
// function update_picks_eight($db, $userID, $table, $winner1, $spread1, $winner2, $spread2, $winner3, $spread3, $winner4, $spread4, $winner5, $spread5, $winner6, $spread6, $winner7, $spread7, $winner8, $spread8)
// function insert_picks_eight($db, $userID, $table, $winner1, $spread1, $winner2, $spread2, $winner3, $spread3, $winner4, $spread4, $winner5, $spread5, $winner6, $spread6, $winner7, $spread7, $winner8, $spread8)
//
// function update_picks_five($db, $userID, $table, $winner1, $spread1, $winner2, $spread2, $winner3, $spread3, $winner4, $spread4, $winner5, $spread5)
// function insert_picks_five($db, $userID, $table, $winner1, $spread1, $winner2, $spread2, $winner3, $spread3, $winner4, $spread4, $winner5, $spread5)
//
// function update_picks_four($db, $userID, $table, $winner1, $spread1, $winner2, $spread2, $winner3, $spread3, $winner4, $spread4)
// function insert_picks_four($db, $userID, $table, $winner1, $spread1, $winner2, $spread2, $winner3, $spread3, $winner4, $spread4)
//
// function update_picks_two($db, $userID, $table, $winner1, $spread1, $winner2, $spread2)
// function insert_picks_two($db, $userID, $table, $winner1, $spread1, $winner2, $spread2)
//
// function update_picks_one($db, $userID, $table, $winner1, $spread1)
// function insert_picks_one($db, $userID, $table, $winner1, $spread1)
//
// function do_connect_to_database()
// function check_is_password($db, $userID, $oldpass)
// function update_password($db, $userID, $newpass)
// function find_email($db, $userID)
// function find_username($db, $userID)
// function find_games_played($db, $userID)
// function is_login_username_or_email($db, $login)
// function check_login_exists($db, $loginType)
// function check_is_password_correct($db, $password, $login, $loginType)
// function get_userID_from_username($db, $login)
// function get_userID_from_email($db, $login)
// function does_record_exist_username_and_email($db, $username, $email)
// function check_is_unique_username($db, $username)
// function check_is_unique_email($db, $email)
// function insert_new_user($db, $firstName, $lastName, $username, $password, $email, $country, $state, $city, $zip)
// function check_already_made_picks($db, $userID, $table)
// function create_global_leaderboard($db, $table)
// function create_local_leaderboard($db, $table)
// function find_rank($db, $table, $grade)
// function find_grade($db, $table, $userID)
// function find_num_players($db, $table)
// update_userscores_table_newuser($db)
//
// In data_validation_fns.php:
// function test_passwords_match($pass1, $pass2)
// function test_email($email)
// function test_zip($zip)
// function test_names($firstName, $lastName)
// function test_username($username)
// function test_password($password)
// function test_city($city)
// function test_business_name($businessName)
// function test_login_name($login)
//
// In other_fns.php:
// class swagexception extends Exception
// function eight_random_characters()
// function show_ordinal($num)
//
// INCOMPLETE/UNTESTED FUNCTIONS
//
// In db_fns.php:
// function find_avg_grade($db, $table)
// function get_bar_group_winnerlist($db, $table, $barID1, $barID2, $barID3, $barID4, $barID5)
// function find_avg_grade_bar_group_winners($db, $table, $barID1, $barID2, $barID3, $barID4, $barID5)
// function find_real_name($db, $userID)
// function find_player_result($db, $userID)
// function find_bar_nearby($db, $userID)
// function notify_users_bar_inactive($db, $barID, $gameType)
// function notify_users_bar_active($db, $barID, $gameType)
// function pick_bar($db, $userID, $barID)
// function find_active_bar()
// function find_barID_by_userID($db, $userID)
// function find_bar_name_by_barID($db, $barID)
// function is_game_active($db, $gameID)
// function is_bar_active($db, $barID, $gameID)
// function find_bar_rank($db, $prizesPerGame)
// function create_bar_leaderboard($db, $table)
// function update_barscores_table_newbar($db)
// function insert_new_business($db, $businessName, $login, $password, $email, $phone, $country, $state, $city, $streetAddress, $zip, $website, $twitter)
// function check_is_unique_business_email($db, $email)
//
// function get_results($db, $table) Note: Possibly a dead function.
//
// In mail_fns.php:
// function send_bars_winnerlist_mail($toAddress, $subject, $mailContent, $fromAddress)
// function send_bars_signup_mail($toAddress, $subject, $mailContent, $fromAddress)
//
// In output_fns.php:
// function create_winner_list($db, $results)
//
// In data_validation_fns.php:
// function test_phone($phone)
// function test_streetAddress($streetAddress)
// function test_business_name($businessName)
//

// This file contains all of the functions for echoing or printing content.
require_once('output_fns.php');

// This file contains all of the functions for sending e-mails to bars and users.
require_once('mail_fns.php');

// This file contains all of the functions for connecting to and querying the database.
require_once('db_fns.php');

// This file contains the functions for checking if user-submitted data fits within a required type or format, excluding 
// functions that require database access, which can be found in db_fns.php.
require_once('data_validation_fns.php');

// This file contains all of the functions and classes that don't fit into the other categories,
// such as exception handling and utility functions.
require_once('other_fns.php');

?>
