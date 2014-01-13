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

    	$this -> set("user",$user);
    	$this -> set("history",$history);
    }
    public function edit(){
    	if(!$this -> request -> isPost()){
    		$this -> redirect('./');
    	} else if($this -> request -> data['password'] !== $this -> request -> data['confirm']){
    		$this -> redirect('./');
    	}

    	//テスト
    	$me = 12345678;

    	$datas = $this -> request -> data;
    	$datas['id'] = $me;
    	$this -> User -> save($datas);


    	$user = $this -> User -> getUserById('12345678');
    	$history = $this -> Kuchikomi -> getHistoryByUserId('12345678');
    	$this -> set("user",$user);
    	$this -> set("history",$history);
    	$this -> redirect('./');

    }
    public function searchHospital(){
    	echo json_encode(array('aaa','abc','bbb'));
    }

    private function viewUser(){

    }
}
