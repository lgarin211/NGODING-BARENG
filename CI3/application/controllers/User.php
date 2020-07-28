<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function index()
	{
		$this->load->model('ITEMS_MODEL');
		$data['items'] = $this->ITEMS_MODEL->get_all();
		$this->load->view('template/head');
		$this->load->view('template/topbar');
		$this->load->view('user/all', $data);
		$this->load->view('template/foot');
	}

	public function view()
	{
		$id = $_GET['id'];
		// var_dump($data);
		// die;
		$this->load->model('ITEMS_MODEL');
		$data['items'] = $this->ITEMS_MODEL->get_one($id);

		$this->load->view('template/head');
		$this->load->view('template/topbar');
		$this->load->view('user/view', $data);
		$this->load->view('template/foot');
	}
	public function buy()
	{
		$id = $_GET['id'];
		$this->load->model('ITEMS_MODEL');
		$data['items'] = $this->ITEMS_MODEL->get_one($id);
		$this->load->view('template/head');
		$this->load->view('template/topbar');
		$this->load->view('user/confirmasi', $data);
		$this->load->view('template/foot');
	}
	public function upload()
	{
		$this->kirim($_POST);
	}
	private function kirim($data)
	{
		$this->load->model('ITEMS_MODEL');
		$this->ITEMS_MODEL->create2($data);
		$a = 	"paket sedang di kemas harap tunggu paket Sudah sampai terimakasih";
		$this->session->set_flashdata('succes', $a);

		redirect('user', $a);
	}
}
