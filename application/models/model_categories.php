<?php
class Model_categories extends Ci_model{
	function tampilData()
	{
		$query = $this->db->get('categories');
		
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