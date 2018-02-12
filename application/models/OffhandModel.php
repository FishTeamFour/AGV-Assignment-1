<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OffhandModel
 *
 * @author Martin Suryadi
 */
class OffhandModel extends CSV_Model{
    function __construct() {
        parent::__construct('assets/database/OffhandData.csv','OffhandID');
    }
}