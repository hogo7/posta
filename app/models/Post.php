<?php 

class Post{
  private $db;

  public function __construct(){ 
      $this->db=new Database;
  }

    public function getPost(){
        $this->db->query('SELECT *,
                 posts.post_id as postId, 
                 user.U_id as userId  
                 FROM posts
                 INNER JOIN user
                 On  posts.U_id = user.U_id
                 ORDER by posts.post_time DESC                             
                             ');

        $result=$this->db->resultSet();

            return $result;

    }
    
    
    public function getPostById($id){
        $this->db->query("SELECT * FROM posts WHERE post_id=:id");
            $this->db->bind(":id",$id);
            $row=$this->db->single();
        return $row;
    }
    
    public function addPost($data){
        $this->db->query('INSERT INTO posts (U_id , post_body, post_title ) VALUES (:user,:body,:title)');

      $this->db->bind(":title",$data['title']);
      $this->db->bind(":body",$data['body']);
      $this->db->bind(":user",$data['user_id']);
          if($this->db->execute()){ return true;}
          else return false;
       
    }

    public function updatePost($data){
        $this->db->query('UPDATE `posts` SET `post_title`=:title,`post_body`=:body,`post_time`=now() WHERE `post_id`=:id');

      $this->db->bind(":title",$data['title']);
      $this->db->bind(":body",$data['body']);
      $this->db->bind(":id",$data['id']);
          if($this->db->execute()){ return true;}
          else return false;
       
    }

    public function deletePost($id){
        $this->db->query('DELETE FROM `posts` WHERE post_id=:id');

      
      $this->db->bind(":id",$id);
          if($this->db->execute()){ return true;}
          else return false;
       
    }
}




?>