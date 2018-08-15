<?php
 class User extends Controller{
    public function __construct(){

    }

    public function register(){
        
        if($_SERVER['REQUEST_METHOD']=='POST'){ 
            

            $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            
            //process form
            $data=[
                "name"=>trim($_POST['name']),
                "email"=>trim($_POST['email']),
                "password"=>trim($_POST['password']),
                "confrim_password"=>trim($_POST['confrim_password']),
                "name_err"=>"",
                "password_err"=>"",
                "email_err"=>"",
                "confrim_password_err"=>''
            ];
            
        //form validtion
           //name
            if(empty($data['name'])) {
                 $data['name_err']="pls enter a name";}
           //email
           if(empty($data['email']))
              $data['email_err']="pls enter a email";
           //password
           if(empty($data["password"]))
              $data['password_err']="pls enter a password";
            elseif(strlen($data['password']<=8))
              $data['password_err']="must be 8 cracter";
           if(empty($data['confrim_password']))
              $data['confrim_password_err']="pls cnofirm your pass";
            else{
                 if($data['confrim_password_err']!=$data['confrim_password'])
                $data['confrim_password_err']="pass not match";
            }
           if(empty($data['confrim_password_err'])&&empty($data['password_err'])&&empty($data['email_err'])&&empty($data['name_err']))
                die("success"); 
        
                else
                   {$this->view('user/register',$data);}
            }
        
        
        else{
            //load form
            $data=[
                "name"=>'',
                "password"=>'',
                "confrim_password"=>'',
                "name_err"=>"",
                "password_err"=>"",
                "email_err"=>"",
                "confrim_password_err"=>''
            ];
            
            //load viwe
            $this->view('user/register',$data);

        }

    }
   public function login (){
    if($_SERVER['REQUEST_METHOD']=='POST'){

    
        $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
                
        //process form
        $data=[
            
            "email"=>trim($_POST['email']),
            "password"=>trim($_POST['password']),               
            "password_err"=>"",
            "email_err"=>"",
            
        ];
        
    //form validtion
       //name
        
       //email
       if(empty($data['email']))
          $data['email_err']="pls enter a email";
       //password
       if(empty($data["password"]))
          $data['password_err']="pls enter a password";
        
      
          
    if(empty($data['confrim_password_err'])&&empty($data['password_err'])&&empty($data['email_err'])&&empty($data['name_err']))
          die("success");
        else
          {$this->view('user/login',$data);}


    
    }
                            
                        
        
    else{
            //load form
            $data=[
                "name"=>'',
                "password"=>'',
                "password_err"=>"",
                "email_err"=>"",
               ];

    $this->view('user/login',$data); }
 }
}
 



/* 

//process form
            if($_SERVER['REQUEST_METHOD']=='POST'){ 
            

                $_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
                
                //process form
                $data=[
                    
                    "email"=>trim($_POST['email']),
                    "password"=>trim($_POST['password']),               
                    "password_err"=>"",
                    "email_err"=>"",
                    
                ];
                
            //form validtion
               //name
                
               //email
               if(empty($data['email']))
                  $data['email_err']="pls enter a email";
               //password
               if(empty($data["password"]))
                  $data['password_err']="pls enter a password";
                
              
                  
            if(empty($data['confrim_password_err'])&&empty($data['password_err'])&&empty($data['email_err'])&&empty($data['name_err']))
                  die("success"); 
          
                  else
                     {$this->view('user/login',$data);}
              




*/


?>