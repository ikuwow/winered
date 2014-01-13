<?php

App::uses('AppModel', 'Model');

class Kuchikomi extends AppModel {

	public $useTable = "kuchikomi";
	public function getHistoryByUserId($id){
		$options = array(
			'fields' => array(
				'hospital_id',
				'discription',
				'created'
			),
			'conditions' => array(
				'user_id' => $id
			)
		);
		return $this->find('all',$options);
	}
}