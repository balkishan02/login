<?php

namespace App\Controller;
use App\Controller\AppController;

class TestController extends AppController{

//    public function initialize(): void
//    {
//        parent::initialize(); // TODO: Change the autogenerated stub
//        $this->viewBuilder()->Layout('ourlayout');
//    }

    public function index(){
        $this->set('name', 'balkishan');
        $this->set('city', 'surat');

        $addr = "b1, xyz area";
        $profile = array(
            'fname' => 'prakash',
            'lname' => 'kudale',
            'dob' => '02-56-8000'
        );
        $this->set('data', $profile);

        $this->set(compact('profile', 'addr'));

        $this->set('title', "Learning Cake");
    }

    public function about(){
        $this->autoRender = false;
        echo "<h3>About Us</h3>";
//        print_r($this->request->params['pass']);
    }

    public function form(){


    }



}







?>