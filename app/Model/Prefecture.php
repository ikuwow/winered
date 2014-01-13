<?php

class Prefecture extends AppModel {

    public $useTable = 'ms_prefecture';
    public $primaryKey = 'prefecture_cd';
    public $hasMany = array(
        'Hospital' => array(
            'foreignKey' => 'pref_cd'
        )
    );

    public function getPrefectureNameById($id) {
        $options = array(
            'fields' => array(
                'prefecture_name'
            ),
            'conditions' => array(
                'prefecture_cd' => $id
            )
        );
        return $this->find('first',$options);
    }

    public function getHospitalsByPrefectureId($id) {

        $options = array(
            'fields' => array(
            ),
            'conditions' => array(
                'prefecture_cd'=>$id
            )
        );
        return $this->find('all',$options);
    }

}
