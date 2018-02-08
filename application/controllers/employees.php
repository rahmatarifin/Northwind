<?php
class Employees extends ci_controller{
	function __construct(){
		parent::__construct();
		$this->load->model('model_employees');
	}

	function index(){
		$data['data']=$this->model_employees->tampilData();
		$this->load->view('employees',$data);
	}

	function tambah(){
		$row=array(
			'EmployeeID'=>$this->input->post('EmployeeID'),
			'LastName'=>$this->input->post('LastName'),
			'FirstName'=>$this->input->post('FirstName'),
			'Title'=>$this->input->post('Title'),
			'TitleOfCourtesy'=>$this->input->post('TitleOfCourtesy'),
			'BirthDate'=>$this->input->post('BirthDate'),
			'HireDate'=>$this->input->post('HireDate'),
			'Address'=>$this->input->post('Address'),
			'City'=>$this->input->post('City'),
			'Region'=>$this->input->post('Region'),
			'PostalCode'=>$this->input->post('PostalCode'),
			'Country'=>$this->input->post('Country'),
			'HomePhone'=>$this->input->post('HomePhone'),
			'Extension'=>$this->input->post('Extension'),
			'Notes'=>$this->input->post('Notes'),
			'ReportsTo'=>$this->input->post('ReportsTo'),
			'sex'=>$this->input->post('sex')
			);
		$this->model_crud_employees->tambah($rows);
		redirect('crud_employees');
	}
}