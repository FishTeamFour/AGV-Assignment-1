<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HeadgearModel
 *
 * @author Martin Suryadi
 */
class HeadgearModel extends CSV_Model{
    function __construct() {
        parent::__construct('../system/database/HeadgearData.csv','HeadgearID');
    }
}
