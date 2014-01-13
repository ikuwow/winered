<?php

App::uses('AppModel', 'Model');

class Kuchikomi extends AppModel {

	public $useTable = "kuchikomi";
	public $belongsTo = array('User' =>
			array('className' => 'User',
				)
			);

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
				'Kuchikomi.hospital_id' => $id
			)
		);
		$this->belongsTo['User']['id'] = 'Kuchikomi.user_id';
		return $this->find('all',$options);
	}

	public function addKuchikomi($user_id,$id,$discription){
		$data = array('user_id'=>$user_id,'hospital_id'=>$id,'discription'=>$discription);
		$fields = array('user_id','hospital_id','discription');
		$this->save($data,false,$fields);
	}
}
