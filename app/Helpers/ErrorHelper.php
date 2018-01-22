<?php

namespace App\Helpers;

use App\Controllers\Controller;
use App\Helpers\BaseHelper;

class ErrorHelper extends BaseHelper{

    public function error(){
        //$this->response->message = "This view doesnt exist";
        $this->view('views/error/index.php');
    
    }
}