<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

class TblMasterPhase extends CI_Model{
    
    private $table = 'tbl_master_phase';

  
    public function __construct() 
    {
        parent::__construct();
    }


    public function insert()
    {
        $this->db->insert($this->table, $this);

        $id = $this->db->insert_id();
        $q = $this->db->get_where($this->table, array('id' => $id));
        return $q->row();
    }

    public function update()
    {
        $this->db->where('id', $this->id);  
        $data = $this->db->update($this->table, $this);

        $q = $this->db->get_where($this->table, array('id' => $this->id));
        return $q->row();
    }

    public function delete()
    {
        $this->db->where('id', $this->id);  
        $data = $this->db->delete($this->table);

        return $data;
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
             
        $this->db->from($this->table.' a');

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
