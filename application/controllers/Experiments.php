<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Experiments extends CI_Controller {

	function  __construct(){
        parent::__construct();
    }

    public function index()
	{
		$data = array('content'=>'webpages/experiments');
		$this->load->view('template',$data);	
    }

}