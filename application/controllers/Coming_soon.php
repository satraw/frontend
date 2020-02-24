<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coming_soon extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
    }

    public function index()
	{
		$data = array('content'=>'webpages/coming-soon');
		$this->load->view('template',$data);	
    }

}