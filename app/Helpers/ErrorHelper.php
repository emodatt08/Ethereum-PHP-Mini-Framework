<?php

namespace App\Helpers;

use App\Controllers\Controller;

class ErrorHelper extends Controller{

    public function error(){
        $this->response->message = "This view doesnt exist";
        $this->response->view('views/error/index.php');
    }
}