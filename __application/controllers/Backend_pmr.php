<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

class Backend_pmr extends JINGGA_Controller {
	
	public function __construct(){
		parent::__construct();
	}
	
	public function pmrNo() 
	{
		$array = [];
		$single = false;

		if($this->input->get('phase_id'))
			$array['a.phase_id'] = $this->input->get('phase_id');

		if($this->input->get('pmr_no'))
			$array['a.pmr_no'] = $this->input->get('pmr_no');

		if($this->input->get('id'))
			$array['a.id'] = $this->input->get('id');

		if($this->input->get('single'))
			$single = true;

		echo json_encode($this->progresPmr->getdata($array, $single));
	}

	public function store()
	{
		$this->progresPmr->pmr_no = $this->input->post('pmr_no');
		$this->progresPmr->pick_up_at = $this->input->post('pick_up_at');
		$this->progresPmr->site_addres_at = $this->input->post('site_addres_at');
		$this->progresPmr->region_at = $this->input->post('region_at');
		$this->progresPmr->region_to = $this->input->post('region_to');
		$this->progresPmr->company = $this->input->post('company');
		$this->progresPmr->delivery_to = $this->input->post('delivery_to');
		$this->progresPmr->site_addres_to = $this->input->post('site_addres_to');
		$this->progresPmr->tranporter = $this->input->post('tranporter');
		$this->progresPmr->pic2 = $this->input->post('pic2');
		$this->progresPmr->hardware_ne = $this->input->post('hardware_ne');
		$this->progresPmr->pick_up_request_date = $this->input->post('pick_up_request_date');
		$this->progresPmr->pick_up_request_time = $this->input->post('pick_up_request_time');
		$this->progresPmr->remark_delivery = $this->input->post('remark_delivery');
		$this->progresPmr->phase_code = $this->input->post('phase_code');
		$this->progresPmr->phase_name = $this->input->post('phase_name');
		$this->progresPmr->spare_3 = $this->input->post('spare_3');
		$this->progresPmr->spare_4 = $this->input->post('spare_4');
		$this->progresPmr->spare_5 = $this->input->post('spare_5');
		$this->progresPmr->phase_id = $this->input->post('phase_id');
		$this->progresPmr->created_at = date('Y-m-d');
		$this->progresPmr->updated_at = date('Y-m-d');
		$this->progresPmr->created_name = 'ahmad';
		$this->progresPmr->created_status = 1;

		echo json_encode($this->progresPmr->insert());
	}

	public function update()
	{
		$this->progresPmr->id = $this->input->post('id');
		$this->progresPmr->pmr_no = $this->input->post('pmr_no');
		$this->progresPmr->pick_up_at = $this->input->post('pick_up_at');
		$this->progresPmr->site_addres_at = $this->input->post('site_addres_at');
		$this->progresPmr->region_at = $this->input->post('region_at');
		$this->progresPmr->region_to = $this->input->post('region_to');
		$this->progresPmr->company = $this->input->post('company');
		$this->progresPmr->delivery_to = $this->input->post('delivery_to');
		$this->progresPmr->site_addres_to = $this->input->post('site_addres_to');
		$this->progresPmr->tranporter = $this->input->post('tranporter');
		$this->progresPmr->pic2 = $this->input->post('pic2');
		$this->progresPmr->hardware_ne = $this->input->post('hardware_ne');
		$this->progresPmr->pick_up_request_date = $this->input->post('pick_up_request_date');
		$this->progresPmr->pick_up_request_time =$this->input->post('pick_up_request_time');
		$this->progresPmr->remark_delivery = $this->input->post('remark_delivery');
		$this->progresPmr->phase_code = $this->input->post('phase_code');
		$this->progresPmr->phase_name = $this->input->post('phase_name');
		$this->progresPmr->spare_3 = $this->input->post('spare_3');
		$this->progresPmr->spare_4 = $this->input->post('spare_4');
		$this->progresPmr->spare_5 = $this->input->post('spare_5');
		$this->progresPmr->phase_id = $this->input->post('phase_id');
		$this->progresPmr->created_at = date('Y-m-d');
		$this->progresPmr->updated_at = date('Y-m-d');
		$this->progresPmr->created_name = 'ahmad';
		$this->progresPmr->created_status = 1;

		$this->progresPmr->update();
		echo json_encode($this->input->post('id'));
	}

	public function MaterialPmr()
	{
		$array = [];
		$single = false;
		$group = $this->input->get('group');
		
		if($this->input->get('id_master_atf'))
			$array['a.id_master_atf'] = $this->input->get('id_master_atf');

		if($this->input->get('id'))
			$array['a.id'] = $this->input->get('id');

		if($this->input->get('single'))
			$single = true;

		if(isset($group))
			$group = $this->input->get('group');

		echo json_encode($this->materialPmr->getdata($array, $single, $group));
	}

	public function saveMaterialPmr()
	{
		$this->materialPmr->id_progress_pmr = (int) $this->input->post('id_progress_pmr');
    	$this->materialPmr->id_master_atf = $this->input->post('atf_no');
    	$this->materialPmr->created_at = date('Y-m-d');
		$this->materialPmr->updated_at = date('Y-m-d');
		$this->materialPmr->created_name = 'ahmad';
		$this->materialPmr->created_status = 1;


    	$data = $this->materialPmr->insert();
    	echo json_encode($data);
	}

	public function deleteMaterialPmr()
	{
		$this->materialPmr->id = $this->input->post('id');
		echo json_encode($this->materialPmr->delete());
	}
}
