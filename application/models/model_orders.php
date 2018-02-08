<?php 
class Model_orders extends ci_model{
	function tampilData(){
		$query=$this->db->get('orders');

		if($query->num_rows()>0){
			return $query->result();
		}else{
			return array();
		}
	}

}