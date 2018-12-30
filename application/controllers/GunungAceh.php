<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use BorderCloud\SPARQL\SparqlClient;

class GunungAceh extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		
		$this->load->model('WikiModel');
	}
	
	function index() {
		$data = array(
			'gunung' =>$this->WikiModel->gunungAceh()
		);
		
		$this->load->view('v_WikiGunung', $data);
		
	}
}