<?php
// MypageController.php

App::uses('AppController', 'Controller');
class MypageController extends AppController
{
    public $name = 'Mypage';
    public $uses = array('User','Kuchikomi','Hospital');

    public function index(){
    	if(!isset($me)){
    		$this -> redirect('/login');
    	}
    	$this -> set("title_for_layout","マイページ | Winered");
    	$user = $this -> User -> getUserById($me['id']);
    	$history = $this -> Kuchikomi -> getHistoryByUserId($me['id']);
    	$auto = $this -> Hospital -> find('all');

    	$this -> set("user",$user);
    	$this -> set("history",$history);
    	$this -> set("hospital",$auto);
    }
    public function edit(){
    	if(!$this -> request -> isPost()){
    		$this -> redirect('./');
    	} else if($this -> request -> data['password'] !== $this -> request -> data['confirm']){
    		$this -> redirect('./');
    	}

    	$datas = $this -> request -> data;
    	$h = $this -> Hospital -> getHospitalIdByName($datas['hospital_id']);
    	$datas['hospital_id'] =  $h['Hospital']['id'];
    	$datas['id'] = $me['id'];
    	$this -> User -> save($datas);

    	$this -> redirect('./');

    }

    private function viewUser(){

    }
}
