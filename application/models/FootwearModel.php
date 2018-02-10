<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FootwearModel
 *
 * @author Martin Suryadi
 */
class FootwearModel extends CSV_Model{
    function __construct() {
        parent::__construct('assets/database/FootwearData.csv','FootwearID');
    }
}