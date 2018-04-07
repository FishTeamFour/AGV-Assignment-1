<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SetModel
 *
 * @author Martin Suryadi
 */
class SetModel extends CSV_Model {
    
    function __construct() {
        parent::__construct('assets/database/SetData.csv', 'id');
    }

    function store() {
        // rebuild the keys table
        $this->reindex();
        //---------------------
        if (($handle = fopen($this->_origin, "w")) !== FALSE) {
            fputcsv($handle, $this->_fields);
            foreach ($this->_data as $key => $record)
                fputcsv($handle, array_values((array) $record));
            fclose($handle);
        }
    }
    
    public function rules(){
        $config = array(
            ['field' => 'id',        'label' => 'id', 'rules' => 'string'],
            ['field' => 'HeadgearID',   'label' => 'head', 'rules' => 'string'],
            ['field' => 'WeaponID',     'label' => 'weapon', 'rules' => 'string'],
            ['field' => 'ArmorID',      'label' => 'armor', 'rules' => 'string'],
            ['field' => 'OffhandID',    'label' => 'offhand', 'rules' => 'string'],
            ['field' => 'FootwearID',   'label' => 'feet', 'rules' => 'string'],
            ['field' => 'Name',         'label' => 'name', 'rules' => 'string']
        );
        
        return $config;
    }

}
