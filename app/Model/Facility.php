<?php

class Facility extends AppModel {
	public $useTable = 'ms_facility_form';

	public function getFacilityNameById($id) {
        $options = array(
            'conditions' => array(
                'id' => $id
            )
        );
        return $this->find('all',$options);
    }

}
