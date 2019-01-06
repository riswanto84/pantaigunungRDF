<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use BorderCloud\SPARQL\SparqlClient;

class DetailWisata extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		
		$this->load->model('FusekiModel');
		$this->load->library('pagination');
	}
	
	function index() {
		
		$data = array(
			'gunung' =>$this->FusekiModel->GunungIndonesia()
		);
		
		$data2 = $this->FusekiModel->GunungIndonesia();
		
		$params = array();
		$limit_per_page = 1;
		$start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		//$total_records = $this->FusekiModel->get_total();
		$num_rows = 0;
		foreach ($data2["result"]["rows"] as $row) {
			$num_rows = $num_rows + 1;
		}
		$total_records = $num_rows;
		
		if ($total_records > 0)
		{
			 // get current page records
			  $params["results"] = $this->FusekiModel->get_current_page_records($limit_per_page, $start_index);
			  
			  $config['base_url'] = base_url() . 'paging/index';
			  $config['total_rows'] = $total_records;
			  $config['per_page'] = $limit_per_page;
			  $config["uri_segment"] = 3;
			  
			  $this->pagination->initialize($config);
			  
			  // build paging links
			  $params["links"] = $this->pagination->create_links();
		}
		
		$data['Header'] = "Gunung di Indonesia";
		$this->load->view('template/header');
		$this->load->view('v_all_triple', $data, $params);
		$this->load->view('template/footer');
	}
	
	function search() {
		$keyword = $this->input->post('keyword');
		$data = array(
			'gunung' =>$this->FusekiModel->cari($keyword)
		);
			
		$this->load->view('template/header');
		$this->load->view('berandaLT', $data);
		$this->load->view('template/footer');
	}
	
}