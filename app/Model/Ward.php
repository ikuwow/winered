<?php

class Ward extends AppModel {
	public $useTable = 'ms_ward';

	public function getWardNameByWardId($id) {
        $options = array(
            'conditions' => array(
                'ward_cd' => $id
            )
        );
        return $this->find('all',$options);
    }

    public function getWardNameByPrefectureId($id) {
        $options = array(
            'conditions' => array(
                'prefecture_cd' => $id
            )
        );
        return $this->find('all',$options);
    }

}