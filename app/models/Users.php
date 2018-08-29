<?php

class Users{
    private $db;
    public function __construct(){

    $this->db=new Database;
        }


    public function register($data){

        $this->db->query('INSERT INTO user (U_email ,  U_name ,
          U_password ) VALUES (:email,:name,:password)');

        $this->db->bind(":name",$data['name']);
        $this->db->bind(":email",$data['email']);
        $this->db->bind(":password",$data['password']);
            if($this->db->execute()){ return true;}
            else return false;
    }

    public function login($email,$password){
        $this->db->query("SELECT * FROM `user` WHERE `U_email`=:email");
        $this->db->bind(":email",$email);
        $row=$this->db->single();
       
        $hashed_password=$row->U_password;
        if(password_verify($password,$hashed_password)){
            return $row;
        }else {
            return false;
        }
    }
    
    public function FindUserByEmail($email){
            $this->db->query("SELECT * FROM user WHERE U_email=:email");
            $this->db->bind(":email",$email);
            $row=$this->db->single();
         
            if($this->db->rowCount()>0){
                
                return true;
            }else return false;
    }




}


?>