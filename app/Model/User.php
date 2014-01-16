<?php

App::uses('AppModel', 'Model');

class User extends AppModel {

	public $belongsTo = 'Hospital';
	//とりあえず一件欲しい
	public function getUserById($id){
		$options = array(
			'fields' => array(
				'username',
				'email',
				'Hospital.hospital_name'
			),
			'conditions' => array(
				'User.id' => $id
			)
		);
		return $this->find('first',$options);
	}
}
