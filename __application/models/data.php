 <?php // $conn = new PDO('mysql:host=localhost; dbname=dbs_suksesfashion','root', ''); ?>
<?php
class Data extends CI_Model{
	function __construct(){
		parent::__construct();
		//$this->auth = unserialize(base64_decode($this->session->userdata('n0k111a')));
	}	//DB configuration Constants


	function load_tss(){
		$return_arr= array();	
		$id=$_GET['id_tss'] ;
	 				    $sql_jenis	= "SELECT A.* FROM tbl_database_tss A
	 				    	WHERE 1=1 AND A.tbl_master_phase_id = '$id' ";
						$query = $this->db->query($sql_jenis);
						//$rowcount = $query->num_rows();
						$count_jenis  = $query->num_rows();
						if($count_jenis > 0)
						{
							foreach($sql_jenis as $row_jenis) {
							$return_arr[] = array(
							'tss_id' => $row_jenis['tss_id'],
							'company_name' => $row_jenis['company_name']);

							}
							
						}

		  echo json_encode($return_arr);
	}
}
				   ?>