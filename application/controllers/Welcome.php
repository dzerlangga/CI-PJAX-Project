<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('conten/home');
	}

	public function pro()
	{
		$this->load->view('conten/produk');
	}

	public function pen()
	{
		$this->load->view('conten/penjualan');
	}

	public function rep()
	{
		$this->load->view('conten/report');
	}
}
