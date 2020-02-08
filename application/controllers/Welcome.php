<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->Model("WelcomeModel");
	}

	public function index()
	{
		// $this->load->view('welcome_message');

		$this->load->view("hitung");
	}

	public function jumlah()
	{
		if( $this->input->post("post") )
		{
			$panjang = $this->input->post("panjang");
			$lebar   = $this->input->post("lebar");
			echo "Hasil Penjumlahan : ";
			echo $this->WelcomeModel->hitung($panjang,$lebar);
		}
		else {
			echo "Data tidak dipost";
		}
	}
}
