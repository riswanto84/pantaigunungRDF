<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use BorderCloud\SPARQL\SparqlClient;

class DetailWisata extends CI_Controller {
	
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
		$this->load->view('v_all_triple', $data);
		$this->load->view('template/footer');
	}
	
	function search() {
		$keyword = $this->input->post('keyword');
		$data = array(
			'gunung' =>$this->FusekiModel->cari($keyword)
		);
		
		$data['Header'] = "Gunung di Indonesia";
		$this->load->view('template/header');
		$this->load->view('berandaLT', $data);
		$this->load->view('template/footer');
	}
	
}