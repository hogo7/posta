<?php 
    class Pages extends Controller {
        public function __construct(){
          

        }
     public function index(){
        
        if(logedInUser()){
            redirect("posts");
        }
        $data=[
            
            'title'=>'Posta',
            'description'=>"pls register or login "
    
    
                ];
        
        
        
        $this->view("pages/index",$data);

     }   
    
     public function about(){
         $data=['title'=>'about'];
        $this->view("pages/about",$data);
             
    }
    }


?>