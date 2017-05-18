<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

class SiteInfo extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	public function getdata($search = [], $single = false)
	{
	 	$this->db->select('a.*, b.phase_name, c.site_status, d.region_code, e.po_ne, f.id as uploader_id');

	 	foreach ($search as $key => $value) {
	 		$this->db->where($key, $value);
	 	}
	 	
        $this->db->from('tbl_master_tracker_siteinfo a');
        $this->db->join('tbl_master_phase b', 'b.id=a.tbl_master_phase_id', 'left');
        $this->db->join('tbl_master_sitename c', 'c.id=a.tbl_master_sitename_id', 'left');
        $this->db->join('tbl_master_region d', 'd.id=a.tbl_master_region_id', 'left');
        $this->db->join('tbl_master_pone e', 'e.id=a.tbl_master_pone_id', 'left');
        $this->db->join('tbl_uploader_tracker f', 'f.file_name=a.file_name', 'left');
        
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
