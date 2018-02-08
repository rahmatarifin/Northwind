<?php 
class Model_crud_order_details extends ci_model
{
	
function tampilData()
	{
	$query=$this->db->get('order_details');
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return array();
		}
	}

	function tambah($data){
		$tambah=$this->db->insert('order_details',$data);
		return $tambah;
	}

	function per_id($id){
		$this->db->where('odID', $id);
		$query=$this->db->get('order_details');
		return $query->result();
	}

	function hapus($id){
		$this->db->where('odID',$id);
		$hapus=$this->db->delete('order_details');
		return $hapus;
	}

	function update($id,$data){
		$this->db->where('odID',$id);
		$update=$this->db->update('order_details',$data);
		return $update;
	}
}