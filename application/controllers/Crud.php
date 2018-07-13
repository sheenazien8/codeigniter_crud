<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies

	}

	// List all your items
	public function index( $offset = 0 )
	{
		$data['content'] = $this->db->get('user');
		$this->load->view('crud/index', $data);
	}

	// Add a new item
	public function add()
	{
		$this->load->view('crud/add');
	}

	public function store()
	{
		$data = [
		    'nama' => $this->input->post('nama'),
		    'status' => $this->input->post('status'),
		    'jurusan' => $this->input->post('jurusan'),
		];

		$this->db->insert('user', $data);

		redirect('crud','refresh');
	}
	//Update one item
	public function update( $id = NULL )
	{
		$this->db->where('id', $id);
		$data['content'] = $this->db->get('user');
		$this->load->view('crud/edit', $data);
	}

	public function update_store( $id = '')
	{
		$data = [
		    'nama' => $this->input->post('nama'),
		    'status' => $this->input->post('status'),
		    'jurusan' => $this->input->post('jurusan'),
		];
		$this->db->where('id', $id);
		$this->db->update('user', $data);
		
		redirect('crud','refresh');
	}

	//Delete one item
	public function delete( $id = NULL )
	{
		$this->db->where('id', $id);
		$this->db->delete('user');

		redirect('crud','refresh');
	}
}

/* End of file Crud.php */
/* Location: ./application/controllers/Crud.php */
