<?php
namespace App\Helpers;

use App\Config\View;

class BaseHelper extends View{
    public $view;

    public function __construct(){
        $this->view = new View();
    }

    public function view($view){
        return $this->view->render($view); 
    }
}