<?php
/**
* 
*/
class Categories extends My_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_categories');
//		$this->load->library('session');
	}

	function index(){
		$data['data']=$this->model_categories->tampilData();
		$this->load->view('categories',$data);
	}
/*
	function tambah(){
		$rows = array(
			'CategoryID'=>$this->input->post('CategoryID'),
			'CategoryName'=>$this->input->post('CategoryName'),
			'Description'=>$this->input->post('Description')
			);
		$this->db->insert('categories',$rows);
		redirect (site_url('crud_categories'));
	}
*/

}