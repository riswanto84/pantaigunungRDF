<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use BorderCloud\SPARQL\SparqlClient;

class DetailWisata extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		
		$this->load->model('FusekiModel');
	}
	
	function index($label) {
		
	}
	
	function detail($label) {
		$data = array(
			'gunung' =>$this->FusekiModel->detailItem($label),
			'label' => $label
		);
		
		$data['Header'] = "Gunung di Indonesia";
		$this->load->view('template/header');
		$this->load->view('tesView', $data);
		$this->load->view('template/footer');
	}
	
}