<?php
/**
* 
*/
class Crud_orders extends ci_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_crud_orders');
	}
	
	function index(){
		$data['data']=$this->model_crud_orders->tampilData();
		$this->load->view('view_crud_orders',$data);
	}

	function tambah(){
		$data=array(
			'OrderID'=>$this->input->post('OrderID'),
			'CustomerID'=>$this->input->post('CustomerID'),
			'EmployeeID'=>$thi->input->post('Employee'),
			'OrderDate'=>$this->input->post('OrderDate'),
			'RequiredDate'=>$this->input->post('RequiredDate'),
			'ShippedDate'=>$this->input->post('ShippedDate'),
			'ShipperID'=>$this->input->post('ShipperID'),
			'Freight'=>$this->input->post('Freight'),
			'ShipName'=>$this->input->post('ShipName'),
			'ShipAddress'=>$this->input->post('ShipAddress'),
			'ShipCity'=>$this->input->post('ShipCity'),
			'ShipRegion'=>$this->input->post('ShipRegion'),
			'ShipPostalCode'=>$this->input->post('ShipPostalCode'),
			'ShipCountry'=>$this->input->post('ShipCountry')
			);
		$this->model_crud_orders->tambah($data);
		redirect('crud_orders');
	}

	function edit(){
		$OrderID=$this->uri->segment(3);
		$data['data']=$this->model_crud_orders->per_id($OrderID);
		$this->load->view('update_crud_orders',$data);
	}

	function update(){
		$OrderID=$this->input->post('OrderID');
		$data=array(
			'CustomerID'=>$this->input->post('CustomerID'),
			'EmployeeID'=>$this->input->post('Employee'),
			'OrderDate'=>$this->input->post('OrderDate'),
			'RequiredDate'=>$this->input->post('RequiredDate'),
			'ShippedDate'=>$this->input->post('ShippedDate'),
			'ShipperID'=>$this->input->post('ShipperID'),
			'Freight'=>$this->input->post('Freight'),
			'ShipName'=>$this->input->post('ShipName'),
			'ShipAddress'=>$this->input->post('ShipAddress'),
			'ShipCity'=>$this->input->post('ShipCity'),
			'ShipRegion'=>$this->input->post('ShipRegion'),
			'ShipPostalCode'=>$this->input->post('ShipPostalCode'),
			'ShipCountry'=>$this->input->post('ShipCountry')
			);
		$this->model_crud_orders->update($OrderID, $data);
		redirect('crud_orders');
	}

	function hapus(){
		$OrderID=$this->uri->segment(3);
		$this->model_crud_orders->hapus($OrderID);
		redirect('crud_orders');
	}
}