<?php

class Prefecture extends AppModel {
	public $useTable = 'ms_prefecture';

	public function getPrefectureNameById($id) {
        $options = array(
            'conditions' => array(
                'prefecture_cd' => $id
            )
        );
        return $this->find('all',$options);
    }

}