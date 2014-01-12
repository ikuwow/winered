<?php 
// TopController.php

App::uses('AppController', 'Controller');
class TopController extends AppController
{
    public $name = 'Top';
    public $helpers = array('Html', 'Form');

    public function index(){
    }
}

