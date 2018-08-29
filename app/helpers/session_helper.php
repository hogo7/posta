<?php
session_start();
//flash massage
// flash (register success , 'you are registered', )
function flash($name='',$message='',$class='alert alert-success',$type="Suceess"){
    if(!empty($name)){
      // پیام رو ست میکند 
        if(!empty($message)&& empty($_SESSION[$name])){
            
            if(!empty($_SESSION[$name])){
                unset($_SESSION[$name]);
            } 

            if(!empty($_SESSION[$name.'class'])){
                unset($_SESSION[$name.'class']);
            } 

           $_SESSION[$name]=$message;
           $_SESSION[$name.'_class']=$class; 
           $_SESSION[$name."_type"]=$type;
       
         }//پیام رو نمایش میدهد  
         elseif(empty($message)&& !empty($_SESSION[$name])){
            $class=!empty($_SESSION[$name.'_class'])?$_SESSION[$name.'_class']:'';
            echo '<div class="'.$class.'" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>'.$_SESSION[$name."_type"].' </strong> '.$_SESSION[$name] .'</div>';
            
            unset($_SESSION[$name]);       
            unset($_SESSION[$name.'class']);
        }
    }

}

?>