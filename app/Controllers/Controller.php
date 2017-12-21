<?php
namespace App\Controllers;

use App\Helpers\BaseHelper;

class Controller extends BaseHelper{

        public $response;
        public function __construct(){
                $this->response = new BaseHelper();
        }
}