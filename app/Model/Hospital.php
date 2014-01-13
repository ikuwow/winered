<?php

class Hospital extends AppModel {
	public $useTable = 'hospital_data_intern';

	public function getHospitalInfoById($id) {
        $options = array(
            'conditions' => array(
                'id' => $id
            )
        );
        return $this->find('all',$options);
    }

    public function getHospitalIdByName($hospital_name) {
        $options = array(
        	'fields' => array(
        		'id'
			),
            'conditions' => array(
                'hospital_name' => $hospital_name
            )
        );
        return $this->find('first',$options);
    }

}
