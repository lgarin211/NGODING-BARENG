<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('ITEMS_MODEL');
		$data['items'] = $this->ITEMS_MODEL->get_all();

		$this->load->view('template/head');
		$this->load->view('template/section');
		// $this->load->view('template/sitebar');
		// $this->load->view('template/topbar');
		// $this->load->view('template/conten', $data);
		$this->load->view('template/foot');
	}
	public function create()
	{
		if (!$_POST) {
			$this->load->view('template/head');
			$this->load->view('template/sitebar');
			$this->load->view('template/topbar');
			$this->load->view('conten/upload');
			$this->load->view('template/foot');
		} else {
			$this->kirim($_POST);
		}
	}
	private function kirim($data)
	{
		$this->load->model('ITEMS_MODEL');
		$this->ITEMS_MODEL->create($data);
		redirect('welcome');
	}
}
