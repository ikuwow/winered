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

}
