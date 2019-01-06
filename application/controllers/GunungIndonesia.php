<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use BorderCloud\SPARQL\SparqlClient;

class GunungIndonesia extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		
		$this->load->model('WikiModel');
	}
	
	function index() {
		$data = array(
			'gunung' =>$this->WikiModel->GunungIndonesia(),
			'label1' => 'Gunung di '
		);
		
		$data['Header'] = "Gunung di Indonesia";
		$this->load->view('template/header');
		$this->load->view('beranda', $data);
		$this->load->view('template/footer');
	}
	
	function search() {
		$keyword = $this->input->post('keyword');
		$data = array(
			'gunung' =>$this->FusekiModel->cari($keyword)
		);
			
		$this->load->view('template/header');
		$this->load->view('beranda', $data);
		$this->load->view('template/footer');
	}
	
	
}