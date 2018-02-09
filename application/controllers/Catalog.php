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
		$this->render(); 
	}
}
