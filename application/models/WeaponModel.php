<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WeaponModel
 *
 * @author Martin Suryadi
 */
class WeaponModel extends CSV_Model{
    function __construct() {
        parent::__construct('assets/database/WeaponData.csv','WeaponID');
    }
}
