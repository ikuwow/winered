<?php

App::uses('AppModel', 'Model');

class Kuchikomi extends AppModel {

	public $useTable = "kuchikomi";

	public function getHistoryByUserId($id){
		$options = array(
			'conditions' => array(
				'user_id' => $id
			)
		);
		return $this->find('all',$options);
	}

	public function getKuchikomiByHospitalId($id){
		$options = array(
			'conditions' => array(
				'hospital_id' => $id
			)
		);
	}

	public function addKuchikomi($id,$hospital_id,$description){
	}
}