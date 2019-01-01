<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use BorderCloud\SPARQL\SparqlClient;

class GunungIndonesiaLT extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		
		$this->load->model('FusekiModel');
		
	}
	
	function index() {
		$data = array(
			'gunung' =>$this->FusekiModel->GunungIndonesia()
		);
		
		$data['Header'] = "Gunung di Indonesia";
		$this->load->view('template/header');
		$this->load->view('berandaLT', $data);
		$this->load->view('template/footer');
	}
	
}