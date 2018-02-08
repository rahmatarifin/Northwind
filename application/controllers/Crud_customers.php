<?php
Class Crud_customers extends ci_controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('model_crud_customers');
	}

	function index(){
		$data['data']=$this->model_crud_customers->tampilData();
		$this->load->view('view_crud_customers',$data);
	}

	function edit(){
		$CustomerID=$this->uri->segment(3);
		$data['data']=$this->model_crud_customers->per_id($CustomerID);
		$this->load->view('update_crud_customers',$data);
	}

	function hapus(){
		$CustomerID=$this->uri->segment(3);
		$this->model_crud_customers->hapus($CustomerID);
		redirect('crud_customers');
	}

	function update(){
		$CustomerID=$this->input->post('CustomerID');
		$data=array(
			'CompanyName'=>$this->input->post('CompanyName'),
			'ContactName'=>$this->input->post('ContactName'),
			'ContactTitle'=>$this->input->post('ContactTitle'),
			'Address'=>$this->input->post('Address'),
			'City'=>$this->input->post('City'),
			'Region'=>$this->input->post('Region'),
			'PostalCode'=>$this->input->post('PostalCode'),
			'Country'=>$this->input->post('Country'),
			'Phone'=>$this->input->post('Phone'),
			'Fax'=>$this->input->post('Fax')
			);
		$this->model_crud_customers->update($CustomerID,$data);
		redirect('crud_customers');
	}
		
}