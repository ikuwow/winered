<?php

class Hospital extends AppModel {
	public $useTable = 'hospital_data_intern';

	public function getHospitalById($id) {
        $options = array(
            'fields' => array(
                'hospital_name'
            ),
            'conditions' => array(
                'id' => $id
            )
        );
        return $this->find('first',$options);
    }

}
