<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Errors extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
    }

    public function e404()
	{
		$data = array('content'=>'webpages/404');
		$this->load->view('template',$data);	
    }

    // public function form_error()
	// {
	// 	$data = array('content'=>'webpages/error-form');
	// 	$this->load->view('template',$data);	
    // }

}