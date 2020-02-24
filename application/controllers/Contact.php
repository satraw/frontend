<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Contact extends CI_Controller {

	function  __construct(){
        parent::__construct();
    }

    public function index()
	{
		$data = array('content'=>'webpages/contact');
		$this->load->view('template',$data);	
    }

}