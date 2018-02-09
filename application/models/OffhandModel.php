<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OffhandModel
 *
 * @author crazy
 */
class OffhandModel extends CSV_Model{
    function __construct() {
        parent::__construct('../system/database/OffhandData.csv','code');
    }
}