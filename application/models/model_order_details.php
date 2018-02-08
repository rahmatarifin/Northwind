<?php
class Model_order_details extends ci_model{
	function tampilData(){
		$query=$this->db->get('order_details');
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return array();
		}
	}
}