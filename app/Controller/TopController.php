<?php 
// TopController.php

App::uses('AppController', 'Controller');
class TopController extends AppController
{
    public $name = 'Top';
    public $helpers = array('Html', 'Form');

    public function index(){
        $title_for_layout = '看護師の口コミを探すならナースのための口コミサイト【Winered】';
        $this->set('title_for_layout',$title_for_layout);
    }
}

