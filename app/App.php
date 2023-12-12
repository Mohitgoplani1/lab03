<?php 
namespace Company\Utility;
use Company\Utility\Controller\MainController;
class App{
    public static function init(){
        echo "App is working";
        $controller=new MainController();
        $controller->show();
    }
}