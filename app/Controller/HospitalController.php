<?php
// HospitalController.php

App::uses('AppController', 'Controller');
class HospitalController extends AppController
{
    public $name = 'Hospital';

    public function index(){
    	$this->redirect('/');
    }
    public function info($id){
    	$results = $this->Hospital->getHospitalById($id);
    	$this->set('results',$results);
    }
}


