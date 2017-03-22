<?php 
class homeController extends controller{
    public function index(){
        $data = array();
        $this->loadTemplate('index',$data);
    }

    public function foi($nome){
        echo "parametro! ".$nome;
    }
}