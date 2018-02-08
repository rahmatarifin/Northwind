<?php
class Model_crud_employees extends ci_model
{
	function tampilData()
	{
	$query=$this->db->get('employees');
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return array();
		}
	}

	function tambah($data){
		$tambah=$this->db->insert('employees',$data);
		return $tambah;
	}

	function per_id($id){
		$this->db->where('EmployeeID', $id);
		$query=$this->db->get('employees');
		return $query->result();
	}

	function hapus($id){
		$this->db->where('EmployeeID',$id);
		$hapus=$this->db->delete('employees');
		return $hapus;
	}

	function update($id,$data){
		$this->db->where('EmployeeID',$id);
		$update=$this->db->update('employees',$data);
		return $update;
	}

}