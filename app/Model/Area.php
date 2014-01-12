<?php

class AreaModel extends AppModel {

    public function getAreaById($id) {
        $options = array(
            'conditions' => array(
                'id' => $id
            )
        );
        return $this->find('first',$options);
    }
}
