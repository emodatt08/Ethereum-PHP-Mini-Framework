<?php
namespace App\Helpers;

use App\Config\View;

class BaseHelper extends View{
    public $view;

    public function __construct(){
        $this->view = new View();
    }

    /**
     * Returns an html view
     * @param $view
     * @return html
     */
    public function view($view){
        return $this->view->render($view); 
    }

    /**
     * Concerts data into JSON
     * @param $data
     * @return JSON
     */
    public function json($data){
        echo $this->view->convert($data); 
    }

}