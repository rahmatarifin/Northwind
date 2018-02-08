<?php
class  MY_Controller  extends  CI_controller{
	protected $ci;
    
    function __construct(){
       $this->ci =& get_instance();
   		//$CI->load->library('something');
       
		
    }

	function cek_login(){
		$this->ci->load->library('session');
	}	
}

?>