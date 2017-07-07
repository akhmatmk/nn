<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

class Backend_atf extends JINGGA_Controller {
	
	public function __construct(){
		parent::__construct();
	}
	
	public function getBBQ() 
	{
		$array = [];
		$single = false;

		if($this->input->get('phase_id'))
			$array['a.tbl_master_phase_id'] = $this->input->get('phase_id');

		if($this->input->get('id'))
			$array['a.id'] = $this->input->get('id');

		if($this->input->get('tbl_master_phase_id'))
			$array['a.tbl_master_phase_id'] = $this->input->get('tbl_master_phase_id');

		if($this->input->get('single'))
			$single = true;

		echo json_encode($this->siteinfo->getdata($array, $single));
	}

	public function getPhaseBoq() {
		echo json_encode($this->siteinfo->getdataPhaseBoq());
	}

	public function getDataWarehouse() 
	{
		$array = [];
		$single = false;

		echo json_encode($this->warehouse->getdata($array, $single));
	}

	public function getDataAtf()
	{
		$array = [];
		$single = false;

		if($this->input->get('bbq_id'))
			$array['a.id_tracker_site_info'] = $this->input->get('bbq_id');

		if($this->input->get('id'))
			$array['a.id'] = $this->input->get('id');

		if($this->input->get('single'))
			$single = true;

		echo json_encode($this->progresAtf->getdata($array, $single));
	}

	public function store()
	{
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
    	$this->progresAtf->updated_by = $this->auth['nama_user'];
    	$this->progresAtf->updated_at = date('Y-m-d H:i:s');
    	$this->progresAtf->created_by = $this->auth['nama_user'];
    	$this->progresAtf->created_at = date('Y-m-d H:i:s');
    	$this->progresAtf->created_at = 1;
    	
		echo json_encode($this->progresAtf->insert());
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
    	$this->progresAtf->updated_by = $this->auth['nama_user'];
    	$this->progresAtf->updated_at = date('Y-m-d H:i:s');
    	$this->progresAtf->created_by = $this->input->post('created_by');
    	$this->progresAtf->created_at = $this->input->post('created_at');
    	$this->progresAtf->status = $this->input->post('status');


		$this->progresAtf->update();
		echo json_encode($this->input->post('id'));
	}

	public function addMasterMaterial()
	{
		$menu = $this->mbackend->getdata('menu', 'variable');
		$this->nsmarty->assign('menu', $menu);
		$this->nsmarty->display( 'backend/atf/form_material.php');
	}

	public function getMaterialAtf()
	{
		$array = [];
		$single = false;
		$group = $this->input->get('group');

		if($this->input->get('equipment'))
			$array['a.equipment'] = $this->input->get('equipment');

		if($this->input->get('modular_type'))
			$array['a.modular_type'] = $this->input->get('modular_type');

		if($this->input->get('product_code'))
			$array['a.product_code'] = $this->input->get('product_code');
		
		if($this->input->get('type'))
			$array['a.type'] = $this->input->get('type');

		if($this->input->get('single'))
			$single = true;

		if(isset($group))
			$group = $this->input->get('group');

		echo json_encode($this->masterMaterialAtf->getdata($array, $single, $group));
	}

	public function saveMaterialAtf()
	{
		
		$this->materialAtf->id_progress_atf = (int) $this->input->post('id_progress_atf');
    	$this->materialAtf->hardware_type_l1 = $this->input->post('hardware_type_l1');
    	$this->materialAtf->equipment_type_l2 = $this->input->post('equipment_type_l2');
    	$this->materialAtf->material_type_l3 = $this->input->post('material_type_l3');
    	$this->materialAtf->product_code_l4 = $this->input->post('product_code_l4');
    	$this->materialAtf->barcode = $this->input->post('barcode');
    	$this->materialAtf->serial_number = $this->input->post('serial_number');
    	$this->materialAtf->quantity = $this->input->post('quantity');
    	$this->materialAtf->uom = $this->input->post('uom');
    	$this->materialAtf->cond = $this->input->post('condition');
    	$this->materialAtf->remark = $this->input->post('remark');

    	$data = $this->materialAtf->insert();
    	echo json_encode($data);
	}

	public function MaterialAtf()
	{
		$array = [];
		$single = false;
		$group = $this->input->get('group');

		if($this->input->get('id_progress_atf'))
			$array['a.id_progress_atf'] = $this->input->get('id_progress_atf');

		if($this->input->get('id'))
			$array['a.id'] = $this->input->get('id');

		if($this->input->get('single'))
			$single = true;

		if(isset($group))
			$group = $this->input->get('group');

		echo json_encode($this->materialAtf->getdata($array, $single, $group));
	}

	public function editMaterialAtf()
	{
		$this->materialAtf->id = $this->input->post('id_atf_material_content');
		$this->materialAtf->id_progress_atf = (int) $this->input->post('id_progress_atf');
		$this->materialAtf->hardware_type_l1 = $this->input->post('hardware_type_l1');
    	$this->materialAtf->equipment_type_l2 = $this->input->post('equipment_type_l2');
    	$this->materialAtf->material_type_l3 = $this->input->post('material_type_l3');
    	$this->materialAtf->product_code_l4 = $this->input->post('product_code_l4');
    	$this->materialAtf->barcode = $this->input->post('barcode');
    	$this->materialAtf->serial_number = $this->input->post('serial_number');
    	$this->materialAtf->quantity = $this->input->post('quantity');
    	$this->materialAtf->uom = $this->input->post('uom');
    	$this->materialAtf->cond = $this->input->post('condition');
    	$this->materialAtf->remark = $this->input->post('remark');

    	echo json_encode($this->materialAtf->update());
	}

	public function deleteMaterialAtf()
	{
		$this->materialAtf->id = $this->input->post('id');
		echo json_encode($this->materialAtf->delete());
	}
}
