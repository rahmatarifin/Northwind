<?php
/**
* 
*/
class Model_crud_orders extends ci_model
{
	
	function tampilData()
	{
		$query = $this->db->get('orders');
		if ($query->num_rows()>0){
			return $query->result();
		}else{
			return array();
		}
	}

	function tambah($data){
		$tambah=$this->db->insert('orders', $data);
		return $tambah;

	}

	function per_id($id){
		$this->db->where('OrderID',$id);
		$query=$this->db->get('orders');
		return $query->result();
	}

	function hapus($id){
		$this->db->where('OrderID',$id);
		$hapus=$this->db->delete('orders');
		return $hapus;
	}

	function update($id, $data){
	$this->db->where('OrderID',$id);
	$update=$this->db->update('orders',$data);
	return $update;
	}
}