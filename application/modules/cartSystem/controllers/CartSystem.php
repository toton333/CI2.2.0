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
	  	

     $data['products'] = array(
						     	array(
						     		'id' => 'sku_111',
						     		'name' => 'T-Shirt',
						     		'qty' => 1,
						     		'price' => 10.00,
						     		'options' => array('Size' => 'Triple x', 'Color'=> ' Dark Blue') 


						     		),
						     	array(
						     		'id' => 'sku_333',
						     		'name' => 'Shoe',
						     		'qty' => 1,
						     		'price' => 20.90

						     		),
						     	array(
						     		'id' => 'sku_444',
						     		'name' => 'Pant',
						     		'qty' => 1,
						     		'price' => 60 ,
						     		'options' => array('Size' => 'Double x', 'Color'=> ' Silver')


						     		),
						     	array(
						     		'id' => 'sku_666',
						     		'name' => 'lapop',
						     		'qty' => 1,
						     		'price' => 399.99

						     		)
						     	);



      $data['title'] = 'Shopping Cart';
      $data['module'] = 'CartSystem';
      $data['content'] = 'Cart_content';

      $this->load->module('templates');
      $this->templates->admin($data);

		
	}
}
