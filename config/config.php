<?php
session_start();

define('__ROOT__', realpath(dirname(__FILE__, 2)));

require(__ROOT__ . '/class/Post.php');
require(__ROOT__ . '/class/User.php');

/**
 * Get all content of database
 *
 * @param String   $file  What file you want to get, choices: 'posts', "users", "comments"
 * 
 * @return Array
 */ 
function get_content($file) {
  $data = file_get_contents(__ROOT__ . '/db/' . $file . '.json');
  return json_decode($data, true);
}

/**
 * Add content in database
 *
 * @param Array   $newData  All data in array you want to add in database
 * @param String   $file  What file you want to get, choices: "posts", "users", "comments"
 * 
 */ 
function add_content($newData, $file) {
  $oldData = get_content($file);
  array_unshift($oldData, $newData);
  $jsonData = json_encode($oldData, JSON_FORCE_OBJECT | JSON_PRETTY_PRINT);
  var_dump($jsonData);
  file_put_contents(__ROOT__ . '/db/' . $file . '.json', $jsonData);
}

/**
 * Crypt password for security
 *
 * @param String   $password  Password you want to crypt
 *
 * @return String
 */ 
function crypt_password($password) {
  $step1 = hash('sha512', $password);
  $step2 = $step1 . 'q@d!-O)<i';
  $step3 = hash('sha512', $step2);

  return $step3;
}

/**
 * Get if is active link or not
 *
 * @param String   $file  Name of file who want to test
 *
 * @return String
 */
function isActive($file) {
  $current_file = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
  return $current_file == $file ? 'active' : '';
}
