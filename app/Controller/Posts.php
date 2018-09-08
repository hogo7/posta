<?php

class Posts extends Controller {
        public function __construct(){
                if(!logedInUser()){
                      flash("login_err","pls log in first","alert alert-danger","ERROR");
                        redirect("user/login"); 
                 }
                 $this->postModel=$this->model('Post');
                 $this->userModel= $this->model('Users');

        }
        public function index(){

            $posts =$this->postModel->getPost();    
            $data=[ 
                    'posts'=>$posts
            ];

           $this->view('posts/index',$data);

        }
        public function add()
         {


        if($_SERVER['REQUEST_METHOD']=="POST"){

                $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING );
        
                $data =[
                'title'=>trim($_POST['title']),    
                 'body'=>trim($_POST['body']),
                 'title_err'=>"",
                 'body_err'=>"",
                 "user_id"=>$_SESSION['U_id']
                 
                ];
                if(empty($data['title'])){
                       $data['title_err']="fill the fild"; 
                }
                if(empty($data['body'])){
                        $data['body_err']="fill the fild"; 
                 }

                 if(empty( $data['body_err']) &&empty( $data['title_err'])){

                      if ( $this->postModel->addpost($data)){
                        flash("post_message","posted");
                        redirect("posts");
                      }else{
                        flash("post_message","Some thing Went Wrong ","alert alert-danger","ERORR 2000");

                      }




                 }else{

                        $this->view("posts/add",$data);
                 }



                
                }else{




                $data =[
                        'title'=>'',
                        'body'=>'' ];

                $this->view("posts/add",$data);

        }

     }


     public function edit($id)
     {


    if($_SERVER['REQUEST_METHOD']=="POST"){

            $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING );
    
            $data =[
            'title'=>trim($_POST['title']),    
             'body'=>trim($_POST['body']),
             'title_err'=>"",
             'body_err'=>"",
             "user_id"=>$_SESSION['U_id'],
             "id"=>$id
             
            ];
            if(empty($data['title'])){
                   $data['title_err']="fill the fild"; 
            }
            if(empty($data['body'])){
                    $data['body_err']="fill the fild"; 
             }

             if(empty( $data['body_err']) &&empty( $data['title_err'])){

                  if ( $this->postModel->updatePost($data)){
                    flash("post_message","updated");
                    redirect("posts");
                  }else{
                    flash("post_message","Some thing Went Wrong ","alert alert-danger","ERORR 2000");

                  }





             }else{

                    $this->view("posts/edit",$data);
             }



            
            }else{

                $post=$this->postModel->getPostById($id);

                if($post->U_id!=$_SESSION['U_id']){
                        flash("post_message","accsess denied","alert alert danger","ERROR 2001");
                        redirect("posts");
                }

            $data =[
                    'id'=>$id,
                    'title'=>$post->post_title,
                    'body'=> $post->post_body];

            $this->view("posts/edit",$data);

    }

 }


     public function show($id){
        $post =$this->postModel->getPostById($id);
        $user =$this->userModel->getUserById($post->U_id);
        $data=[
                
         'post'=>$post,
         'user'=>$user 
                ];


        $this->view("posts/show",$data);

     }



     public function delete($id){

        $post=$this->postModel->getPostById($id);

        if($post->U_id!=$_SESSION['U_id']){
                flash("post_message","accsess denied","alert alert danger","ERROR 2001");
                redirect("posts");
        }

        if($this->postModel->deletePost($id)){
                flash("post_message","deleted");
                redirect("posts");

        }else die ("something went wrong ");


     }




        }//class-end

?>