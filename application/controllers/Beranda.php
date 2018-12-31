<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index()
	{
		//$this->load->view('halaman_depan');
		$this->load->view('template/header');
		$this->load->view('beranda'); //ganti dengan ('beranda', $data);
		$this->load->view('template/footer');
	}
}
