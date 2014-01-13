<?php
// HospitalController.php

App::uses('AppController', 'Controller');
class HospitalController extends AppController
{
    public $name = 'Hospital';
    public $uses = array('Hospital','Zip');

    public function index(){
    	$this->redirect('/');
    }
    public function info($id){
    	$results = $this->Hospital->getHospitalInfoById($id);
    	$zip_code = $results[0]['Hospital']['zip_code'];
    	$address = $this->Zip->getZipNameById($zip_code);
    	$address = $address[0]['Zip']['pref_name'].$address[0]['Zip']['ward_name'];
    	$address = $address.$results[0]['Hospital']['address'];
    	$this->set('results',$results);
    	$this->set('address',$address);
    }
}


