
<?php
//echo "core loaded </br>";  checked

//*************
/*
    *APP CORE CLASS
    *Create urls & load core controller
    *URL format - /controller/method/params

*/
    class Core{
        protected $currentController = "pages";
        protected $prams =[];
        protected $currentmethod     = "index";
            public function __construct(){
               // print_r($this->geturl());
               $url = $this->getUrl();



               if(file_exists('../app/controller/'.ucwords($url[0]).'.php')){
                   $this->currentController =ucwords($url[0]);
                    unset($url[0]);                
               }

              require_once '../app/controller/'.$this->currentController.'.php'; 

              $this->currentController =new $this->currentController;
               
                if(isset($url[1])){
                    if (method_exists($this->currentController,$url[1])){
                        $this->currentmethod=$url[1];

                        unset($url[1]);
                    }
                    
                }
                 
                $this->prams=$url? array_values($url):[];
                
                call_user_func_array([$this->currentController,$this->currentmethod],$this->prams);

            }
            public function getUrl(){
                if (isset($_GET['url'])){
                    $url =rtrim($_GET['url'],'/');
                    $url =filter_var($url, FILTER_SANITIZE_URL);
                    $url =explode('/',$url);
                    return $url;
                }


            }

    }
?>