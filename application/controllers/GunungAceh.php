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
		$data['Header'] = "Gunung di Aceh";
		$this->load->view('template/header');
		$this->load->view('beranda', $data);
		$this->load->view('template/footer');
		
	}
}