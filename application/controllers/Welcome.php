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
        $this->getSet('1');
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

        $this->data['atk'] = $head->Attack + $weapon->Attack + $armor->Attack + $offhand->Attack + $feet->Attack;
        $this->data['def'] = $head->Defense + $weapon->Defense + $armor->Defense + $offhand->Defense + $feet->Defense;
        $this->data['hp'] = $head->Health + $weapon->Health + $armor->Health + $offhand->Health + $feet->Health;


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
