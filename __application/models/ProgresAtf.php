<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

class ProgresAtf extends CI_Model{
	
    private $table = 'tbl_progres_atf';

    public $id;
    public $atf_nokia_no;
    public $id_tracker_site_info;
    public $atf_status;
    public $atf_isat_no;
    public $atf_isat_date;
    public $atf_isat_type;
    public $asset_condition;
    public $dismantle_plan_date;
    public $reason_for_handover;
    public $po_number;
    public $dismantle_actual_date;
    public $division_1;
    public $id_ne_system;
    public $material_brand_1;
    public $vendor_dismantle_1;
    public $division_2;
    public $region_2;
    public $city_2;
    public $new_site_id_2;
    public $new_site_name_2;
    public $vendor_instalation_2;
    public $po_re_deploy;
    public $remark_atf;
    public $shelter_type;
    public $bts_config;
    public $link_sp_xlx;
    public $link_sp_pdf;
    public $created_at;
    public $updated_at;
    public $created_by;
    public $updated_by;
    public $status;

  
    public function __construct() 
    {
        /* Call the Model constructor */
        parent::__construct();
    }


    public function insert()
    {
        $this->db->insert($this->table, $this);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }

    public function update()
    {
        $this->db->where('id', $this->id);  
        $data = $this->db->update($this->table, $this);
    }

	public function getdata($search = [], $single = false)
    {
        $this->db->select('a.*');
        $this->db->select('b.cluster');
        $this->db->select('b.area_name');
        $this->db->select('b.site_name');

        foreach ($search as $key => $value) {
            $this->db->where($key, $value);
        }
        
        $this->db->from('tbl_progres_atf a');
        $this->db->join('tbl_master_tracker_siteinfo b', 'b.id = a.id_tracker_site_info');

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
