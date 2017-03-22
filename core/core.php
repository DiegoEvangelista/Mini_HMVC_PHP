<?php
session_start();
class Core{
    public function run(){
        global $currentModule;
        $url = explode("index.php", $_SERVER['PHP_SELF']);
        $url = end($url);
        
        $parms = array();
        if(!empty($url)){
            $url = explode('/', $url);
            array_shift($url);

            $currentModule = $url[0];
            array_shift($url);

            if(isset($url[0])){
                $currentController = $url[0].'Controller';
                array_shift($url);

                if(isset($url[0])){
                    $currentAction = $url[0];
                    array_shift($url);

                    if(count($url) > 0){
                        $parms = $url;
                    }
                }else{
                    $currentAction = 'index';
                }
            }else{
                $currentController = 'homeController';
            }
        }else{
            $currentModule = 'loja';
            $currentController = 'homeController';
            $currentAction = 'index';
        }
        require_once 'core/controller.php';
        $c = new $currentController();
        call_user_func_array(array($c, $currentAction), $parms);
    }
}