<?php
namespace App\Controllers;

use App\Controllers\Controller;


class IndexController extends Controller{

    /** 
     * Returns a view
     * @param $id
     * @return html
     */
        public function index($id){
            $this->response->view->message = "Welcome Sir ". $id;
            $this->response->view('views/index/start');
        }

    /**
    * Returns Json
    */
    public function players(){
        $data = [
            'Team' => 'Arsenal', 
            'Player' =>'Henrikh Mkhitaryan'
        
        ];
            return $this->response->json($data);

    }
}