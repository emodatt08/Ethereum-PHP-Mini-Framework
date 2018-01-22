<?php
namespace App\Controllers;

use App\Controllers\Controller;


class IndexController extends Controller{

        public function index($id){
            $this->response->view->message = "Welcome Sir ". $id;
            $this->response->view('views/index/start');
        }
}