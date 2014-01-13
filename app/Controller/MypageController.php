<?php
// MypageController.php

App::uses('AppController', 'Controller');
class MypageController extends AppController
{
    public $name = 'Mypage';
    public $uses = array('User','Kuchikomi');

    public function index(){
    	$user = $this -> User -> getUserById('12345678');
    	$history = $this -> Kuchikomi -> getHistoryByUserId('12345678');

    	$this -> set("user",$user['User']);
    	$this -> set("history",$history);
    }
}


