<?php
global $currentModule;
class controller{
    public function loadView($viewName, $viewData = array()){
        extract($viewData);
        global $currentModule;
        include 'modules/'.$currentModule.'/views/'.$viewName.'.php';
    }

    public function loadTemplate($viewName, $viewData = array()){
        extract($viewData);
        global $currentModule;
        include 'modules/'.$currentModule.'/views/template.php';
    }
    public function loadViewInTemplate($viewName){
        global $currentModule;
        include 'modules/'.$currentModule.'/views/'.$viewName.'.php';
    }
}