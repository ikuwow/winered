<?php

App::uses('AppModel', 'Model');

class User extends AppModel {

	//とりあえず一件欲しい
	public function getUserById($id){
		$options = array(
			'fields' => array(
				'display_name',
				'email',
				'hospital_id'
			),
			'conditions' => array(
				'id' => $id
			)
		);
		return $this->find('first',$options);
	}
}