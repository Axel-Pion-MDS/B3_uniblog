<?php

/**
 * Class for manage users
 *
 * @copyright  Uniblog
 * @license    http://www.zend.com/license/3_0.txt   PHP License 3.0
 */
class User {
  // Properties
  public $username;
  public $password;
  public $created_at;
  public $updated_at;

  // Methods
  function setUsername($username) {
    $this->username = $username;
  }

  function setPassword($password){
    $this->password = $password;
  }

  function setCreatedAt($date){
    $this->created_at = $date;
  }

  function setUpdatedAt($date){
    $this->updated_at = $date;
  }

  function getUsername() {
    return $this->username;
  }

  function getPassword(){
    return $this->password;
  }

  function getCreatedAt(){
    return $this->created_at;
  }

  function getUpdatedAt(){
    return $this->updated_at;
  }
}