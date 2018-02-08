<?php
class Model_crud_customers extends ci_model
{
	function tampilData()
	{
		$query=$this->db->get('customers');
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return array();
		}
	}

	function tambah($data){
		$tambah=$this->db->insert('customers',$data);
		return $tambah;
	}

	function per_id($id){
		$this->db->where('CustomerID',$id);
		$query=$this->db->get('customers');
		return $query->result();
	}

	function hapus($id){
		$this->db->where('CustomerID',$id);
		$hapus=$this->db->delete('customers');
		return $hapus;
	}

	function update($id,$data){
		$this->db->where('CustomerID',$id);
		$update=$this->db->update('customers',$data);
		return $update;
	}
}