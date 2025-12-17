<?php
require_once "./models/viewModels.php";

class ViewController extends ViewModels {
    
    public function getTemplateController() {
        return require_once "./views/inicio.php";
        
    }
    public function getViewController() {
        if (isset($_GET["views"])) {
            $view = explode("/", $_GET["views"]);
            $response = ViewModels::getView($view[0]);
        } else {
            $response = ViewModels::getView("home");
        }
        
            return $response;
    }
}    





?>
