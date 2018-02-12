<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Catalog
 *
 * @author Sam Collins
 */
class Catalog extends Application{
    //put your code here
    public function index()
    {
            $this->data['pagebody'] = 'catalog';
            
            //Get Armor Data
            $this->load->model('../models/ArmorModel');
            $armorItems = $this->ArmorModel->all();
            $armorArray = array();
            
            foreach ($armorItems as $armorItem)
            {      
                array_push($armorArray, array(
                    "picture" => "<img style='width:192px;height:192px;' src='" . $armorItem->Filename . "' />",
                    "name" => $armorItem->Name,
                    "description" => $armorItem->Description, 
                    "attack" => $armorItem->Attack, 
                    "defense" => $armorItem->Defense, 
                    "health" => $armorItem->Health)
                );
            }
            
            $this->data['armorTable'] = $armorArray;
            
            //Get Headgear data
            $this->load->model('HeadgearModel');
            $headItems = $this->HeadgearModel->all();
            $headArray = array();
            
            foreach ($headItems as $headItem)
            {   
                array_push($headArray, array(
                    "picture" => "<img style='width:192px;height:192px;' src='" . $headItem->Filename . "' />",
                    "name" => $headItem->Name,
                    "description" => $headItem->Description, 
                    "attack" => $headItem->Attack, 
                    "defense" => $headItem->Defense, 
                    "health" => $headItem->Health)
                );
            }
            
            $this->data['headTable'] = $headArray;

            //Get Footwear data
            $this->load->model('FootwearModel');
            $footItems = $this->FootwearModel->all();
            $footArray = array();
            
            foreach ($footItems as $footItem)
            {   
                array_push($footArray, array(
                    "picture" => "<img style='width:192px;height:192px;' src='" . $footItem->Filename . "' />",
                    "name" => $footItem->Name,
                    "description" => $footItem->Description, 
                    "attack" => $footItem->Attack, 
                    "defense" => $footItem->Defense, 
                    "health" => $footItem->Health)
                );
            }
            
            $this->data['footTable'] = $footArray;
            
            //Get Weapon data
            $this->load->model('WeaponModel');
            $weaponItems = $this->WeaponModel->all();
            $weaponArray = array();
            
            foreach ($weaponItems as $weaponItem)
            {   
                array_push($weaponArray, array(
                    "picture" => "<img style='width:192px;height:192px;' src='" . $weaponItem->Filename . "' />",
                    "name" => $weaponItem->Name,
                    "description" => $weaponItem->Description, 
                    "attack" => $weaponItem->Attack, 
                    "defense" => $weaponItem->Defense, 
                    "health" => $weaponItem->Health)
                );
            }
            
            $this->data['weaponTable'] = $weaponArray;
            
            //Get Offhand data
            $this->load->model('OffhandModel');
            $offhandItems = $this->OffhandModel->all();
            $offhandArray = array();
            
            foreach ($offhandItems as $offhandItem)
            {   
                array_push($offhandArray, array(
                    "picture" => "<img style='width:192px;height:192px;' src='" . $offhandItem->Filename . "' />",
                    "name" => $offhandItem->Name,
                    "description" => $offhandItem->Description, 
                    "attack" => $offhandItem->Attack, 
                    "defense" => $offhandItem->Defense, 
                    "health" => $offhandItem->Health)
                );
            }
            
            $this->data['offhandTable'] = $offhandArray;
            
            $this->render();
    }
        
     
}
