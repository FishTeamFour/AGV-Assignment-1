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
        $this->data['pagebody'] = 'welcome';

        getSet('1');
    }
    
    public function getSet($id){
        $set = $this->setmodel->get($id);

        $head = getHead($set->HeadgearID);
        $weapon = $this->weaponmodel->get($set->WeaponID);
        $offhand = $this->offhandmodel->get($set->OffhandID);
        $armor = $this->armormodel->get($set->ArmorID);
        $feet = $this->footwearmodel->get($set->FootwearID);
        
        $this->data['atk'] = $head->Attack + $weapon->Attack + $offhand->Attack + $armor->Attack + $feet->Attack;
        $this->data['def'] = $head->Defense + $weapon->Defense + $offhand->Defense + $armor->Defense + $feet->Defense;
        $this->data['hp'] = $head->Health + $weapon->Health + $offhand->Health + $armor->Health + $feet->Health;
        
        $this->render();
    }
    
    public function getHead($id){
        $h = $this->headgearmodel->get($id);
        $this->data['head'] = $h->FileNmae;
    }

}
