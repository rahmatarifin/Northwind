<?php
class Orders extends CI_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_orders');
	}

	function index(){
		$data['data']=$this->model_orders->tampilData();
		$this->load->view('Orders',$data);
	}

function tambah(){
		$rows=array(
			'OrderID'=>$this->input->post('OrderID'),
			'CustomerID'=>$this->input->post('CustomerID'),
			'EmployeeID'=>$this->input->post('EmployeeID'),
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
		$this->db->insert('orders',$rows);
		redirect(site_url('crud_orders'));
}
}