 <?php // $conn = new PDO('mysql:host=localhost; dbname=dbs_suksesfashion','root', ''); ?>
<?php
	//DB configuration Constants
	define('_HOST_NAME_', 'localhost');
	define('_USER_NAME_', 'root');
	define('_DB_PASSWORD', '');
	define('_DATABASE_NAME_', 'nokia');
	
	//PDO Database Connection
	try {
		$databaseConnection = new PDO('mysql:host='._HOST_NAME_.';dbname='._DATABASE_NAME_, _USER_NAME_, _DB_PASSWORD);
		$databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}

class Mbackend extends CI_Model{
	function __construct(){
		parent::__construct();
		//$this->auth = unserialize(base64_decode($this->session->userdata('n0k111a')));
	}
	function load_tss(){
		$return_arr= array();	
		$id=$_GET['id'] ;
	 				    $sql_jenis	= $databaseConnection->query("SELECT A.*, B.phase_name, C.site_id FROM tbl_database_tss
	 				    	LEFT JOIN tbl_master_phase B ON B.id = A.tbl_master_phase_id
	 				    	LEFT JOIN tbl_master_tracker_siteinfo C ON C.id = A.tbl_master_tracker_siteinfo_id
	 				    	WHERE A.phase_name = '$id' ");
						$count_jenis  = $sql_jenis->rowCount();
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