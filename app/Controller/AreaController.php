<?php
// AreaController

App::uses('AppController', 'Controller');
class AreaController extends AppController
{
    public $name = 'Area';
    public $uses = 'Prefecture';

    /*
    public $paginate = array(
        'limit' => 20,
        'conditions' => array(
            'Prefecture.prefecture_cd' => 'Hospital.pref_cd'
        )
    );
    $this->Prefecture->bindModel(array(
        'hasMany' = array(
            'Hospital' => array(
                'primaryKey' => 'prefecture_cd'
            )
        )
    ));
     */

    public function index($id) {
    }

    public function prefecture() {
        $id = $this->request->id;
        $hospitals = $this->Prefecture->getHospitalsByPrefectureId($id);
        // $hospitals = $this->paginate('Prefecture');
        // debug($hospitals);

        $this->set('hospitals',$hospitals[0]);
    }

}


