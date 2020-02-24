<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Case_study extends CI_Controller {

	function  __construct(){
        parent::__construct();
    }

	public function index()
	{
		$data = array('content'=>'webpages/case-studies');
		$this->load->view('template',$data);	
	}
	
    public function catmachine()
	{
		$data = array('content'=>'webpages/case-study/cat-machine');
		$this->load->view('template',$data);	
	}
	
	public function grapp()
	{
		$data = array('content'=>'webpages/case-study/grapp-app');
		$this->load->view('template',$data);	
    }
    
}