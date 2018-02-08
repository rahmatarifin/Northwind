<?php
Class Crud_categories extends ci_controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('model_crud_categories');
	}

	function index(){
		$data['data']=$this->model_crud_categories->tampilData();
		$this->load->view('view_crud_categories',$data);
	}

	function tambah(){
		$data=array(
			'CategoryID'=>$this->input->post('CategoryID'),
			'CategoryName'=>$this->input->post('CategoryName'),
			'Description'=>$this->input->post('Description')
			);
		$this->model_crud_categories->tambah($data);
		redirect('crud_categories');
	}

	function edit(){
		$CategoryID=$this->uri->segment(3);
		$data['data']=$this->model_crud_categories->per_id($CategoryID);
		$this->load->view('update_crud_categories',$data);
	}

	function update(){
		$CategoryID=$this->input->post('CategoryID');
		$data=array(
			'CategoryName'=>$this->input->post('CategoryName'),
			'Description'=>$this->input->post('Description')
			);
		$this->model_crud_categories->update($CategoryID, $data);
		redirect('crud_categories');
	}

	function hapus(){
		$CategoryID=$this->uri->segment(3);
		$this->model_crud_categories->hapus($CategoryID);
		redirect('crud_categories');
	}
}