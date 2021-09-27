<?php
session_start();

require_once 'class/Posts.php';

# Get content from json file
# file: STRING accept only ["posts", "accounts", "comments"]
function get_content($file) {
  $data = file_get_contents('db/' . $file . '.json');
  return json_decode($data, true);
}

# Add content on json file
# newData: ARRAY
# file: STRING accept only ["posts", "accounts", "comments"]
function add_content($newData, $file) {
  $oldData = get_content($file);
  array_push($oldData, $newData);
  $jsonData = json_encode($oldData, JSON_FORCE_OBJECT);
  file_put_contents('db/' . $file . '.json', $jsonData);
}