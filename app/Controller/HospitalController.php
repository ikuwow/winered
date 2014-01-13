<?php
// HospitalController.php

App::uses('AppController', 'Controller');
class HospitalController extends AppController
{
    public $name = 'Hospital';
    public $uses = array('Hospital','Zip','Station','Facility');

    public function index(){
    	$this->redirect('/');
    }
    public function info($id){
    	$results = $this->Hospital->getHospitalInfoById($id);
    	$address = $this->Zip->getZipNameById($results[0]['Hospital']['zip_code']);
    	$title = $results[0]['Hospital']['company_name'] . " " . $results[0]['Hospital']['hospital_name'];
    	$address = $address[0]['Zip']['pref_name'] . $address[0]['Zip']['ward_name'];
    	$address = $address.$results[0]['Hospital']['address'];
    	$station = $this->Station->getStationNameById($results[0]['Hospital']['station_g_cd']);
    	$station = $station[0]['Station']['line_name'] . " " . $station[0]['Station']['station_name'];
    	$facility = $this->Facility->getFacilityNameById($results[0]['Hospital']['facility_form_id']);
    	$facility = $facility[0]['Facility']['disp_name'];
    	$this->set('results',$results);
    	$this->set('title',$title);
    	$this->set('address',$address);
    	$this->set('station',$station);
    	$this->set('facility',$facility);

    	if($this->request->isPost()){
    		$discription = $this->request->data['kuchikomi'];
    		$this->Hospital->addKuchikomi($me['id'],$id,$discription);
    	}
    }
}


