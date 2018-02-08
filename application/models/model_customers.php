<?php
class Model_customers extends Ci_model{
	function tampilData()
	{
		$query = $this->db->get('customers');
		
		if($query->num_rows()>0)
		{
			return $query->result();
		}
		else
		{
			return array();
		}
	}
}