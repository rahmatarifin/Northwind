<?php
/**
* 
*/
class Model_crud_categories extends ci_model
{
	function tampilData()
	{
		$query=$this->db->get('categories');
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return array();
		}
	}

	function tambah($data){
		$tambah=$this->db->insert('categories',$data);
		return $tambah;
	}

	function per_id($id){
		$this->db->where('CategoryID',$id);
		$query=$this->db->get('categories');
		return $query->result();
	}

	function hapus($id){
		$this->db->where('CategoryID',$id);
		$hapus=$this->db->delete('categories');
		return $hapus;
	}

	function update($id,$data){
		$this->db->where('CategoryID',$id);
		$update=$this->db->update('categories',$data);
		return $update;
	}
}