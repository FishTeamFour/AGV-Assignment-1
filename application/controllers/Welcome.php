<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/
     * 	- or -
     * 		http://example.com/welcome/index
     *
     * So any other public methods not prefixed with an underscore will
     * map to /welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->loadObjects();

        $this->getSet('1');

        //$this->render();
    }

    public function loadObjects() {
        $this->load->model('SetModel');
        $all_sets = $this->SetModel->all();
        $set_array = array();

        foreach ($all_sets as $curr_set) {
            array_push($set_array, array(
                "id" => $curr_set->SetID,
                "idText" => $curr_set->Name)
            );
        }
        $this->data['set'] = $set_array;

        $this->load->model('HeadgearModel');
        $all_head = $this->HeadgearModel->all();
        $head_array = array();

        foreach ($all_head as $curr_head) {
            array_push($head_array, array(
                "id" => $curr_head->HeadgearID,
                "idText" => $curr_head->Name)
            );
        }
        $this->data['head'] = $head_array;

        $this->load->model('WeaponModel');
        $all_weapon = $this->WeaponModel->all();
        $weapon_array = array();

        foreach ($all_weapon as $curr_weapon) {
            array_push($weapon_array, array(
                "id" => $curr_weapon->WeaponID,
                "idText" => $curr_weapon->Name)
            );
        }
        $this->data['weapon'] = $weapon_array;

        $this->load->model('ArmorModel');
        $all_armor = $this->ArmorModel->all();
        $armor_array = array();

        foreach ($all_armor as $curr_armor) {
            array_push($armor_array, array(
                "id" => $curr_armor->ArmorID,
                "idText" => $curr_armor->Name)
            );
        }
        $this->data['armor'] = $armor_array;

        $this->load->model('OffhandModel');
        $all_offhand = $this->OffhandModel->all();
        $offhand_array = array();

        foreach ($all_offhand as $curr_offhand) {
            array_push($offhand_array, array(
                "id" => $curr_offhand->OffhandID,
                "idText" => $curr_offhand->Name)
            );
        }
        $this->data['offhand'] = $offhand_array;

        $this->load->model('FootwearModel');
        $all_feet = $this->FootwearModel->all();
        $feet_array = array();

        foreach ($all_feet as $curr_feet) {
            array_push($feet_array, array(
                "id" => $curr_feet->FootwearID,
                "idText" => $curr_feet->Name)
            );
        }
        $this->data['feet'] = $feet_array;
    }

    public function getSet($id) {
        $this->data['pagebody'] = 'welcome';

        $this->load->model('SetModel');
        $setData = $this->SetModel->get($id);
        $head = $this->getHead($setData->HeadgearID);
        $weapon = $this->getWeapon($setData->WeaponID);
        $armor = $this->getArmor($setData->ArmorID);
        $offhand = $this->getOffhand($setData->OffhandID);
        $feet = $this->getFeet($setData->FootwearID);

        $this->setCurrent($head, $weapon, $armor, $offhand, $feet);
        $this->loadObjects();
        $this->updateStats($head, $weapon, $armor, $offhand, $feet);
        
        $this->render();
    }
    
    public function setCurrent($head, $weapon, $armor, $offhand, $feet){
        $this->data['currHead'] = $head->HeadgearID;
        $this->data['currWeapon'] = $weapon->WeaponID;
        $this->data['currArmor'] = $armor->ArmorID;
        $this->data['currOffhand'] = $offhand->OffhandID;
        $this->data['currFeet'] = $feet->FootwearID;
    }
    
    public function updateStats($head, $weapon, $armor, $offhand, $feet){
        $this->data['atk'] = $head->Attack + $weapon->Attack + $armor->Attack + $offhand->Attack + $feet->Attack;
        $this->data['def'] = $head->Defense + $weapon->Defense + $armor->Defense + $offhand->Defense + $feet->Defense;
        $this->data['hp'] = $head->Health + $weapon->Health + $armor->Health + $offhand->Health + $feet->Health;
    }
    
    public function updateItem($id_list){
        $ids = explode("-", $id_list);
        $this->updateGear($ids[0], $ids[1], $ids[2], $ids[3], $ids[4]);
    }

    public function updateGear($headID, $weaponID, $armorID, $offhandID, $feetID) {
        $this->data['pagebody'] = 'welcome';
        
        
        $this->load->model('HeadgearModel');
        $this->load->model('WeaponModel');
        $this->load->model('ArmorModel');
        $this->load->model('OffhandModel');
        $this->load->model('FootwearModel');
        
        $head = $this->getHead($headID);
        $armor = $this->getArmor($armorID);
        $weapon = $this->getWeapon($weaponID);
        $offhand = $this->getOffhand($offhandID);
        $feet = $this->getFeet($feetID);
        
        $this->setCurrent($head, $weapon, $armor, $offhand, $feet);
        $this->loadObjects();
        $this->updateStats($head, $weapon, $armor, $offhand, $feet);
        
        $this->render();
    }

    public function getHead($id) {
        $this->load->model('HeadgearModel');
        $head = $this->HeadgearModel->get($id);
        $this->data['headPath'] = $head->Filename;

        return $head;
    }

    public function getWeapon($id) {
        $this->load->model('WeaponModel');
        $weapon = $this->WeaponModel->get($id);
        $this->data['weaponPath'] = $weapon->Filename;

        return $weapon;
    }

    public function getArmor($id) {
        $this->load->model('ArmorModel');
        $armor = $this->ArmorModel->get($id);
        $this->data['armorPath'] = $armor->Filename;

        return $armor;
    }

    public function getOffhand($id) {
        $this->load->model('OffhandModel');
        $offhand = $this->OffhandModel->get($id);
        $this->data['offhandPath'] = $offhand->Filename;

        return $offhand;
    }

    public function getFeet($id) {
        $this->load->model('FootwearModel');
        $feet = $this->FootwearModel->get($id);
        $this->data['footwearPath'] = $feet->Filename;

        return $feet;
    }

}
