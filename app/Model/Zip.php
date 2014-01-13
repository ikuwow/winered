<?php

class Zip extends AppModel {
	public $useTable = 'ms_zipcd';

	public function getZipNameById($id) {
        $options = array(
            'conditions' => array(
                'zip_cd' => $id
            )
        );
        return $this->find('all',$options);
    }

}