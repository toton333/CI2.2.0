<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CartSystem extends MX_Controller {


	function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
	    $this->load->helper('form');
	    $this->load->library('cart');
      
        
    }

	
	public function index()
	{
	  	

      $data['title'] = 'Shopping Cart';
      $data['module'] = 'CartSystem';
      $data['content'] = 'Cart_content';

      $this->load->module('templates');
      $this->templates->admin($data);

		
	}
}
