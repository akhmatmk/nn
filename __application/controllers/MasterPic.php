<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

class MasterPic extends JINGGA_Controller {
	
	public function __construct(){
		parent::__construct();
	}
	
	public function getData() 
	{
		$array = [];
		$single = false;

		echo json_encode($this->tblMasterPic->getdata($array, $single));
	}
}
