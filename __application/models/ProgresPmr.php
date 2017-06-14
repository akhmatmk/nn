<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

class ProgresPmr extends CI_Model{
	
    private $table = 'tbl_progres_pmr';

    public $id;
    public $pmr_no;
    public $phase_id;
    public $pick_up_at;
    public $site_addres_at;
    public $region_at;
    public $company;
    public $pic1;
    public $delivery_to;
    public $site_addres_to;
    public $tranporter;
    public $pic2;
    public $hardware_ne;
    public $pick_up_request_date;
    public $pick_up_request_time;
    public $remark_delivery;
    public $phase_code;
    public $phase_name;
    public $spare_3;
    public $spare_4;
    public $spare_5;
    public $created_at;
    public $updated_at;
    public $created_name;
    public $created_status;

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
        $data = $this->db->where('id', $this->id);
        $data = $this->db->update($this->table, $this);
    }

    public function getdata($search = [], $single = false)
    {
        $this->db->select('a.*');

        foreach ($search as $key => $value) {
            $this->db->where($key, $value);
        }
        
        $this->db->from('tbl_progres_pmr a');
        
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
