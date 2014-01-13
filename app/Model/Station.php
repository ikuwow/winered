<?php

class Station extends AppModel {
	public $useTable = 'ms_station';

	public function getStationNameById($id) {
        $options = array(
            'conditions' => array(
                'station_g_cd' => $id
            )
        );
        return $this->find('all',$options);
    }

}