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
			$array['a.phase_code'] = $this->input->get('phase_id');

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
		$this->progresPmr->created_at = date('Y-m-d');
		$this->progresPmr->updated_at = date('Y-m-d');
		$this->progresPmr->created_name = 'ahmad';
		$this->progresPmr->created_status = 1;

		echo json_encode($this->progresPmr->insert());
	}

	public function update()
	{
		$this->progresAtf->id = $this->input->post('id');
		$this->progresAtf->atf_nokia_no = $this->input->post('atf_nokia_no');
    	$this->progresAtf->id_tracker_site_info = $this->input->post('id_master_tracker');
    	$this->progresAtf->atf_status = $this->input->post('atf_status');
	    $this->progresAtf->atf_isat_no = $this->input->post('atf_isat_no');
	    $this->progresAtf->atf_isat_date = $this->input->post('atf_isat_date');
	    $this->progresAtf->atf_isat_type = $this->input->post('activity_type');
	    $this->progresAtf->asset_condition = $this->input->post('asset_condition');
	    $this->progresAtf->dismantle_plan_date = $this->input->post('dismantle_plan_date');
	    $this->progresAtf->reason_for_handover = $this->input->post('reason_for_handover');
	    $this->progresAtf->po_number = $this->input->post('po_number');
	    $this->progresAtf->dismantle_actual_date = $this->input->post('dismantle_actual_date');
	    $this->progresAtf->division_1 = $this->input->post('devision_1');
	    $this->progresAtf->id_ne_system = $this->input->post('ne_equip_system_1');
	    $this->progresAtf->material_brand_1 = $this->input->post('material_brand_1');
	    $this->progresAtf->vendor_dismantle_1 = 'NOKIA';
	    $this->progresAtf->division_2 = $this->input->post('division_2');
	    $this->progresAtf->region_2 = $this->input->post('region_2');
	    $this->progresAtf->city_2 = $this->input->post('city_2');   
	    $this->progresAtf->vendor_instalation_2 = $this->input->post('vendor_installation_2');
    	$this->progresAtf->po_re_deploy = $this->input->post('po_re_deploy');
    	$this->progresAtf->remark_atf = $this->input->post('remark_atf');
    	$this->progresAtf->new_site_id_2 = $this->input->post('new_site_id_2');
    	$this->progresAtf->new_site_name_2 = $this->input->post('new_site_name_2');


		$this->progresAtf->update();
		echo json_encode($this->input->post('id'));
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
}
