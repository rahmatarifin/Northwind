<?php
class Crud_employees extends ci_controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('model_crud_employees');
	}

	function index(){
		$data['data']=$this->model_crud_employees->tampilData();
		$this->load->view('view_crud_employees',$data);
	}

	function tambah(){
		$data=array(
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
		$this->model_crud_employees->tambah($data);
		redirect('crud_employees');
	}

	function edit(){
		$EmployeeID=$this->uri->segment(3);
		$data['data']=$this->model_crud_employees->per_id($EmployeeID);
		$this->load->view('update_crud_employees',$data);
	}

	function hapus(){
		$EmployeeID=$this->uri->segment(3);
		$this->model_crud_employees->hapus($EmployeeID);
		redirect('Crud_employees');
	}

	function update(){
		$EmployeeID=$this->input->post('EmployeeID');
		$data=array(
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
		$this->model_crud_employees->update($EmployeeID, $data);
		redirect('crud_employees');
	}
}