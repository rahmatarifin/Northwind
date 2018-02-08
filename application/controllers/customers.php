<?php
/**
* 
*/
class Customers extends CI_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_customers');
	}

	function index(){
		$data['data']=$this->model_customers->tampilData();
		$this->load->view('customers',$data);
	}

	function tambah(){
		$rows = array(
			'CustomerID'=>$this->input->post('CustomerID'),
			'CompanyName'=>$this->input->post('CompanyName'),
			'ContactName'=>$this->input->post('ContactName'),
			'ContactTitle'=>$this->input->post('ContactTitle'),
			'Address'=>$this->input->post('Address'),
			'City'=>$this->input->post('City'),
			'Region'=>$this->input->post('Region'),
			'PostalCode'=>$this->input->post('PostalCode'),
			'Country'=>$this->input->post('Country'),
			'Phone'=>$this->input->post('Phone'),
			);
		$this->db->insert('customers',$rows);
		redirect (site_url('crud_customers'));
	}


}