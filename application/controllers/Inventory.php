<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		$data['title'] = 'Loan Data';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		// QUERY PEMINJAMAN SELECT *
		$data['loan'] = $this->db->get('peminjaman')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('Loan/index', $data);
		$this->load->view('templates/footer');
	}


}