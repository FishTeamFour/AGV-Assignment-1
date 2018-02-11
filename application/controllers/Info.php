<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Info
 *
 * @author Sam Collins
 */
class Info extends Application{

    public function index()
    {        
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode(array('scenario' => 'Albion Character')));  
    }
    
    /*When accessing the categories use numbers 1 - 5
    *in the URI*/
    public function category($key = null)
    {
        if (!isset($key)) {
            
            $categories = array(
                "1" => array('category' => 'Headgear'),
                "2" => array('category' => 'Armor'),
                "3" => array('category' => 'Footwear'),
                "4" => array('category' => 'Weapon'),
                "5" => array('category' => 'Offhand'),
                );
            
            $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($categories));
        } else {
        
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
            
                default:
                $category = null;
                break;
            }

            $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($category));
        }
    }
    
    /*When accessing the accessories in the catalog use numbers 1 - 10
    *in the URI since it isn't possible to specify the model*/
    public function catalog($key = null)
    {
        $this->load->model('../models/HeadgearModel');
        $this->load->model('../models/ArmorModel');
        $this->load->model('../models/FootwearModel');
        $this->load->model('../models/WeaponModel');
        $this->load->model('../models/OffhandModel');
        
        if (!isset($key)) {
            $items = array();
            
            array_push($items, $this->HeadgearModel->all());
            array_push($items, $this->ArmorModel->all());
            array_push($items, $this->FootwearModel->all());
            array_push($items, $this->WeaponModel->all());
            array_push($items, $this->OffhandModel->all());
            
        } else {
            switch($key)
            {
                case 1:
                $items = $this->HeadgearModel->get(1);
                break;

                case 2:
                $items = $this->HeadgearModel->get(2);
                break;

                case 3:
                $items = $this->ArmorModel->get(1);
                break;

                case 4:
                $items = $this->ArmorModel->get(2);
                break;

                case 5:
                $items = $this->FootwearModel->get(1);
                break;

                case 6:
                $items = $this->FootwearModel->get(2);
                break;

                case 7:
                $items = $this->WeaponModel->get(1);
                break;

                case 8:
                $items = $this->WeaponModel->get(2);
                break;

                case 9:
                $items = $this->OffhandModel->get(1);
                break;

                case 10:
                $items = $this->OffhandModel->get(2);
                break;
            
                default:
                $items = null;
                break;
            }
        }
                
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($items));
    }
    
    public function bundle($key = null)
    {
        $this->load->model('../models/SetModel');
        if (!isset($key)) {
            $items = $this->SetModel->all();
        } else {
            
            $items = $this->SetModel->get($key);        
        }
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($items));
    }
    
    
}
