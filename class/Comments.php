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
  public $author_id;
  public $post_id;
  public $created_at;
  public $updated_at;

  // Methods
  function setContent($content) {
    $this->content = $content;
  }

  function setAuthorId($id){
    $this->author_id = $id;
  }

  function setPostId($id){
    $this->post_id = $id;
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
    return $this->author_id;
  }

  function getPostId(){
    return $this->post_id;
  }

  function getCreatedAt(){
    return $this->created_at;
  }

  function getUpdatedAt(){
    return $this->updated_at;
  }
}