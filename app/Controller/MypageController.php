<?php
// MypageController.php

App::uses('AppController', 'Controller');
class MypageController extends AppController
{
    public $name = 'Mypage';

    public function index(){
    	//これ
    	$user = $this -> User -> getUserById('12345678');

    	//テスト用
    	$this -> set("user",array("ワインレッド","winered@gmail.com","医療法人泰玄会"));
    	$this -> set("kuchikomi",array(array("医療法人泰玄会","2014-01-13","とてもいい病院です。職場の人が優しい"),array("みどりグループ","2014-01-12","職場内が常に険悪なムードです")));
    }
}


