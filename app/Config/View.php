<?php
namespace App\Config;
/**
 * This class will bind the views to the controller class
 *
 * @author HK
 */

class View
{

    public function __construct(){

    }

    /**
     * Renders html files
     * @param $viewScript
     */
    public function render($viewScript){
        require($_SERVER['DOCUMENT_ROOT']."/".$viewScript);
    }
}