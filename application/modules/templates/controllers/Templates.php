<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Templates extends MX_Controller {

	
	public function one_col($content = NULL)
	{
		$this->load->view('one_col', $content);
	}

	public function two_col($content = NULL)
	{
		$this->load->view('two_col', $content);
	}

    public function admin($content = NULL)
	{
		$this->load->view('admin', $content);
	}





	//end of class
}
