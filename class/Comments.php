<?php
/**
 * Class for manage comments
 *
 * @copyright  Uniblog
 * @license    http://www.zend.com/license/3_0.txt   PHP License 3.0
 */ 
class Comments {
  // Properties
  public $content;
  public $author;
  public $created_at;
  public $updated_at;

  // Methods
  function setContent($content) {
    $this->content = $content;
  }

  function setAuthor($author){
    $this->author = $author;
  }
  
  function setCreatedAt($date){
    $this->created_at = $date;
  }

  function setUpdatedAt($date){
    $this->updated_at = $date;
  }

  function getContent(){
    return $this->content;
  }

  function getAuthor(){
    return $this->author;
  }

  function getCreatedAt(){
    return $this->created_at;
  }

  function getUpdatedAt(){
    return $this->updated_at;
  }
}