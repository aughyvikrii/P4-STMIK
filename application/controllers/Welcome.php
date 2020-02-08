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
		$this->load->view('welcome_message');
	}

	public function jumlah()
	{
		echo "Hasil Penjumlahan : ";
		echo $this->WelcomeModel->hitung(10,5);
	}
}
