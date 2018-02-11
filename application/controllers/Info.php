<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Info
 *
 * @author Sam Collins
 */
class Info extends Application{
    //put your code here
    public function index()
    {        
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode(array('scenario' => 'Albion Character')));
        
        /*$uri = $_SERVER['REQUEST_URI'];
        echo $uri;*/   
    }
    
    public function category($key)
    {
        switch($key)
        {
            case 1:
            $category = array('category' => 'Headgear');
            break;
        
            case 2:
            $category = array('category' => 'Armor');
            break;
        
            case 3:
            $category = array('category' => 'Footwear');
            break;
        
            case 4:
            $category = array('category' => 'Weapon');
            break;
        
            case 5:
            $category = array('category' => 'Offhand');
            break;
        }
        
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($category));
    }
    
    public function catalog($key)
    {
        switch($key)
        {
            case 1:
            $this->load->model('../models/HeadgearModel');
            $items = $this->HeadgearModel->get(1);
            break;
            
            case 2:
            $this->load->model('../models/HeadgearModel');
            $items = $this->HeadgearModel->get(2);
            break;
        
            case 3:
            $this->load->model('../models/ArmorModel');
            $items = $this->ArmorModel->get(1);
            break;
        
            case 4:
            $this->load->model('../models/ArmorModel');
            $items = $this->ArmorModel->get(2);
            break;
        
            case 5:
            $this->load->model('../models/FootwearModel');
            $items = $this->FootwearModel->get(1);
            break;
        
            case 6:
            $this->load->model('../models/FootwearModel');
            $items = $this->FootwearModel->get(2);
            break;
        
            case 7:
            $this->load->model('../models/WeaponModel');
            $items = $this->WeaponModel->get(1);
            break;
        
            case 8:
            $this->load->model('../models/WeaponModel');
            $items = $this->WeaponModel->get(2);
            break;
        
            case 9:
            $this->load->model('../models/OffhandModel');
            $items = $this->OffhandModel->get(1);
            break;
        
            case 10:
            $this->load->model('../models/OffhandModel');
            $items = $this->OffhandModel->get(2);
            break;
        }
        //$this->load->model($key);
        //$items = $this->$key->all();
                
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($items));
    }
    
    public function bundle($key)
    {
        if ($key == NULL) {
            echo "No key";
        } else {
            $this->load->model('../models/SetModel');
            $items = $this->SetModel->get($key);        

            $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($items));
        }
    }
    
    
}
