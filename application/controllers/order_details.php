<?php
class Order_details extends ci_controller{
	function __construct(){
		parent::__construct();
		$this->load->model('model_order_details');
	}

	function index(){
		$data['data']=$this->model_order_details->tampilData();
		$this->load->view('order_details',$data);
	}
}
