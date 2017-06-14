<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

class MasterPhase extends JINGGA_Controller {
	
	public function __construct(){
		parent::__construct();
	}
	
	public function getData() 
	{
		$array = [];
		$single = false;

		if($this->input->get('id'))
			$array['a.id'] = $this->input->get('id');

		echo json_encode($this->tblMasterPhase->getdata($array, $single));
	}
}
