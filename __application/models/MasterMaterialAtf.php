<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

class MasterMaterialAtf extends CI_Model{
	
    private $table = 'tbl_progres_atf';
  
    public function __construct() 
    {
        /* Call the Model constructor */
        parent::__construct();
    }


    public function insert()
    {
        $this->db->insert($this->table, $this);
    }

    public function update()
    {
        $this->db->where('id', $this->id);  
        $data = $this->db->update($this->table, $this);
    }

	public function getdata($search = [], $single = false, $group = null)
    {
        
        foreach ($search as $key => $value) {
            $this->db->where($key, $value);
        }
        
        if( $group !== null) 
        {
            foreach ($group as $key => $value) {
                $this->db->select($value);
                $this->db->group_by($value);
            }
        } else
            $this->db->select('a.*');
             
            

        $this->db->from('tbl_master_material_atf a');
        $this->db->where('a.status', 1);

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
