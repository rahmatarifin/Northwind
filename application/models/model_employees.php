<?php
/**
* 
*/
class Model_employees extends ci_model
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
}