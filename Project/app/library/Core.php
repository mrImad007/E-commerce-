<?php
    

    class Core {
        protected $defaultController = 'Pages';
        protected $defaultMethod = 'index';
        protected $param = [];

        public function __construct(){

            $url = $this->getUrl();

            if(is_array($url) && file_exists('../app/controllers/' . ucwords($url[0]) . '.php')){
                $this->defaultController = ucwords($url[0]);
                unset($url[0]);
            };

            require_once('../app/controllers/'. $this->defaultController. '.php');

            $this->defaultController = new $this->defaultController;

            if(isset($url[1])){

                if(method_exists($this->defaultController, $url[1])){
                    $this->defaultMethod = $url[1];                    
                    unset($url[1]);
                }               
            };
                $this->param = $url ? array_values($url) : [];

                call_user_func_array([$this->defaultController, $this->defaultMethod], $this->param);
            
        }

        public function getUrl(){
            if(isset($_GET['url'])){
              $url = rtrim($_GET['url'], '/');
              $url = filter_var($url, FILTER_SANITIZE_URL);
              $url = explode('/', $url);
              return $url;
            }
          }
    }

?>