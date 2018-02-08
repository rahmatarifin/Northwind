<?php
class Crud_order_details extends Ci_controller{
	function __construct(){
		parent::__construct();
		$this->load->model('model_crud_order_detail');
		$this->load->library('session');
	}

	function index(){
		$data['data']=$this->model_crud_order_details->tampilData();
		$this->load->view('view_crud_order_details',$data);
	}

	function tambah(){
		$data=array(
			'odID'=>$this->input->post('odID'),
			'OrderID'=>$this->input->post('OrderID'),
			'ProductID'=>$this->input->post('ProductID'),
			'UnitPrice'=>$this->input->post('UnitPrice'),
			'Quantity'=>$this->input->post('Quantity'),
			'Discount'=>$this->input->post('Discount')
			);
		$this->model_crud_order_details->tambah($data);
		redirect('Crud_order_details');
	}

	function edit(){
		$odID=$this->uri_segment(3);
		$data['data']=$this->model_crud_order_details->per_id($odID);
		$this->load->view('update_crud_order_details',$data);
	}

	function update(){
		$odID=$this->input->post('odID');
		$data=array(
			'OrderID'=>$this->input->post('OrderID'),
			'ProductID'=>$this->input->post('ProductID'),
			'UnitPrice'=>$this->input->post('UnitPrice'),
			'Quantity'=>$this->input->post('Quantity'),
			'Discount'=>$this->input->post('Discount')
			);
		$this->model_crud_order_details->update($odID, $data);
		redirect('Crud_order_details');
	}

	function hapus(){
		$odID=$this->uri->segment(3);
		$this->model_crud_order_details->hapus($odID);
		redirect('Crud_order_details');
	}
}