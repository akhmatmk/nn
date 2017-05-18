<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

class Warehouse extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	public function getdata($search = [], $single = false)
	{
	 	$this->db->select('a.*');

	 	foreach ($search as $key => $value) {
	 		$this->db->where($key, $value);
	 	}
	 	
        $this->db->from('tbl_master_warehouse a');
        
        $query = $this->db->get();
        if($query->num_rows() != 0)
        {
        	if($single)
        		return $query->row();
        	else	
            	return $query->result_array();
        }
        else
        {
            return [];
        }
	}
}
