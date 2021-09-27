<?php
class Post {
  // Properties
  public $title;
  public $author;
  public $content;
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

  function getCreatedAt(){
    return $this->createdAt;
  }

  function getUpdatedAt(){
    return $this->updatedAt;
  }
}