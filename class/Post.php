<?php
/**
 * Class for manage posts
 *
 * @copyright  Uniblog
 * @license    http://www.zend.com/license/3_0.txt   PHP License 3.0
 */ 
class Post {
  // Properties
  public $title;
  public $author;
  public $content;
  public $img;
  public $created_at;
  public $updated_at;

  // Methods
  function setTitle($title) {
    $this->title = $title;
  }

  function setAuthor($author){
    $this->author = $author;
  }
  
  function setContent($content){
    $this->content = $content;
  }

  function setImg($link){
    $this->img = $link;
  }

  function setCreatedAt($date){
    $this->created_at = $date;
  }

  function setUpdatedAt($date){
    $this->updated_at = $date;
  }

  function getTitle() {
    return $this->title;
  }

  function getAuthor(){
    return $this->author;
  }

  function getContent(){
    return $this->content;
  }

  function getImg(){
    return $this->img;
  }

  function getCreatedAt(){
    return $this->created_at;
  }

  function getUpdatedAt(){
    return $this->updated_at;
  }
}