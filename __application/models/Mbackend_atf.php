<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

class Mbackend_atf extends CI_Model{
	function __construct(){
		parent::__construct();
		//$this->auth = unserialize(base64_decode($this->session->userdata('n0k111a')));
	}
	
	function getdata($type="", $balikan="", $p1="", $p2="",$p3="",$p4=""){
		$tabless = "";
		$where = " WHERE 1=1 ";
		$where2 = "";
		if($this->input->post('kat')){
			if($this->input->post('kat') == 'all'){
				$table = $this->input->post('table');
				$field = $this->db->list_fields($table);
				$where .= " AND ( ";
				foreach($field as $k => $v){
					if($v == 'update_by' || $v == 'update_date'){
						continue;
					}
					if ($k == reset($field)){
						$where .= " A.".$v." like '%".$this->db->escape_str($this->input->post('key'))."%' ";
					}elseif ($k == end($field)){
						$where .= " A.".$v." like '%".$this->db->escape_str($this->input->post('key'))."%' ";
					}else{
						$where .= "OR A.".$v." like '%".$this->db->escape_str($this->input->post('key'))."%' ";
					}
				}
				$where .= " ) ";
			}else{
				$where .=" AND A.".$this->input->post('kat')." like '%".$this->db->escape_str($this->input->post('key'))."%'";
			}
		}

		if($this->input->post('allfield')){
			$table = $this->input->post('table');
			$field = $this->db->list_fields($table);
			$where .= " AND ( ";
			foreach($field as $k => $v){
				if($v == 'update_by' || $v == 'update_date'){
						continue;
				}
				if ($k == reset($field)){
					$where .= " A.".$v." like '%".$this->db->escape_str($this->input->post('allfield'))."%' ";
				}elseif ($k == end($field)){
						$where .= " A.".$v." like '%".$this->db->escape_str($this->input->post('allfield'))."%' ";
				}else{
					$where .= "OR A.".$v." like '%".$this->db->escape_str($this->input->post('allfield'))."%' ";
				}
			}
			$where .= " ) ";
		}
		
		if($this->input->post('phaseyear')){
			$where .= "
				AND ".$this->input->post('initial_phase').".phase_year like '%".$this->input->post('phaseyear')."%' 
			";
		}

		if($this->input->post('phasename')){
			$where .= "
				AND ".$this->input->post('initial_phase').".phase_name like '%".$this->input->post('phasename')."%' 
			";
		}

		if($this->input->post('boqno')){
			$where .= "
				AND ".$this->input->post('initial_boqno').".boqno like '%".$this->input->post('boqno')."%' 
			";
		}		

		if($this->input->post('potype')){
			$where .= "
				AND ".$this->input->post('initial_potype').".po_type like '%".$this->input->post('potype')."%' 
			";
		}

		if($this->input->post('pono')){
			$where .= "
				AND ".$this->input->post('initial_pono').".po_no like '%".$this->input->post('pono')."%' 
			";
		}		

		if($this->input->post('regioncode')){
			$where .= "
				AND ".$this->input->post('initial_regioncode').".region_code like '%".$this->input->post('regioncode')."%' 
			";
		}	

		if($this->input->post('siteid')){
			$where .= "
				AND ".$this->input->post('initial_site').".site_id like '%".$this->input->post('siteid')."%' 
			";
		}

		if($this->input->post('sitename')){
			$where .= "
				AND ".$this->input->post('initial_site').".site_name like '%".$this->input->post('sitename')."%' 
			";
		}

		if($this->input->post('vendor')){
			$where .= "
				AND ".$this->input->post('initial_vendor').".vendor like '%".$this->input->post('vendor')."%' 
			";
		}

		if($this->input->post('equipment')){
			$where .= "
				AND ".$this->input->post('initial_equipment').".equipment like '%".$this->input->post('equipment')."%' 
			";
		}

		if($this->input->post('type')){
			$where .= "
				AND ".$this->input->post('initial_type').".type like '%".$this->input->post('type')."%' 
			";
		}

		if($this->input->post('modulartype')){
			$where .= "
				AND ".$this->input->post('initial_modulartype').".modular_type like '%".$this->input->post('modulartype')."%' 
			";
		}

		if($this->input->post('productcode')){
			$where .= "
				AND ".$this->input->post('initial_productcode').".product_code like '%".$this->input->post('productcode')."%' 
			";
		}

		if($this->input->post('whid')){
			$where .= "
				AND ".$this->input->post('initial_whid').".wh_id like '%".$this->input->post('whid')."%' 
			";
		}

		if($this->input->post('whname')){
			$where .= "
				AND ".$this->input->post('initial_whname').".wh_name like '%".$this->input->post('whname')."%' 
			";
		}

		if($this->input->post('whaddress')){
			$where .= "
				AND ".$this->input->post('initial_whaddress').".wh_address like '%".$this->input->post('whaddress')."%' 
			";
		}

		if($this->input->post('partnercode')){
			$where .= "
				AND ".$this->input->post('initial_partnercode').".partner_code like '%".$this->input->post('partnercode')."%' 
			";
		}

		if($this->input->post('partnername')){
			$where .= "
				AND ".$this->input->post('initial_partnername').".partner_name like '%".$this->input->post('partnername')."%' 
			";
		}

		if($this->input->post('company')){
			$where .= "
				AND ".$this->input->post('initial_company').".company like '%".$this->input->post('company')."%' 
			";
		}

		if($this->input->post('picname')){
			$where .= "
				AND ".$this->input->post('initial_picname').".pic_name like '%".$this->input->post('picname')."%' 
			";
		}

		if($this->input->post('piccompany')){
			$where .= "
				AND ".$this->input->post('initial_piccompany').".pic_company like '%".$this->input->post('piccompany')."%' 
			";
		}

		if($this->input->post('nesystem')){
			$where .= "
				AND ".$this->input->post('initial_nesystem').".ne_system like '%".$this->input->post('nesystem')."%' 
			";
		}

		if($this->input->post('negroup')){
			$where .= "
				AND ".$this->input->post('initial_negroup').".ne_group like '%".$this->input->post('negroup')."%' 
			";
		}

		if($this->input->post('activity')){
			$where .= "
				AND ".$this->input->post('initial_activity').".activity like '%".$this->input->post('activity')."%' 
			";
		}

		if($this->input->post('itemtext')){
			$where .= "
				AND ".$this->input->post('initial_itemtext').".item_text like '%".$this->input->post('itemtext')."%' 
			";
		}

		if($this->input->post('idreff1')){
			$where .= "
				AND ".$this->input->post('initial_idreff1').".id_reff1 like '%".$this->input->post('idreff1')."%' 
			";
		}

		if($this->input->post('crtype')){
			$where .= "
				AND A.cr_type like '%".$this->input->post('crtype')."%' 
			";
		}	

		if($this->input->post('crstatus')){
			$where .= "
				AND A.cr_status like '%".$this->input->post('crstatus')."%' 
			";
		}	

		if($this->input->post('username_search')){
			$where .= "
				AND A.nama_user like '%".$this->input->post('username_search')."%' 
			";
		}		
		if($this->input->post('grouplist')){
			$where .= "
				AND A.group_user like '%".$this->input->post('grouplist')."%' 
			";
		}
		
		if($this->input->post('boqno_persite')){
			$where .= "
				AND A.tbl_master_tracker_siteinfo_id = '".$this->input->post('boqno_persite')."' 
			";
			$where2 = "
				AND tbl_master_phase_id = '".$this->input->post('phasename_persite')."'
			";
		}		

		/*if($p1 == 'exportdata'){
			$where .= " AND A.status = '1' ";
		}8*/
		
		switch($type){
			case "data_login":
				$sql = "
					SELECT *
					FROM tbl_user 
					WHERE nama_user = '".$p1."'
				";
			break;
			case "main": 
				$sql = "
					SELECT A.*,
					B.phase_code,
					C.on_air_date, C.atp_date,
					D.mcr_exit, E.endorse_approved
					FROM tbl_master_tracker_siteinfo A
					LEFT JOIN tbl_master_phase B ON B.id = A.tbl_master_phase_id
					LEFT JOIN tbl_master_tracker_siteprogress C ON C.boqno = A.boqno
					LEFT JOIN tbl_master_tracker_mcr D ON D.boqno = A.boqno
					LEFT JOIN tbl_master_tracker_sitebinder E ON E.boqno = A.boqno
					$where  AND A.status = 1
					ORDER BY C.on_air_date DESC, D.mcr_exit DESC, C.atp_date DESC, E.endorse_approved DESC
				";
			break;
			//modul master
			case "phase": 
				$sql = "
					SELECT A.*
					FROM tbl_master_phase A
					$where 
				";
				
			break;
			case "potype": 
				$sql = "
					SELECT A.*
					FROM tbl_master_potype A
					$where
				";
			break;
			case "pocurrency": 
				$sql = "
					SELECT A.*
					FROM tbl_master_pocurrency A
					$where
				";
			break;
			case "region": 
				$sql = "
					SELECT A.*
					FROM tbl_master_region A
					$where
				";
			break;
			case "sitename": 
				$sql = "
					SELECT A.*
					FROM tbl_master_sitename A
					$where
				";
			break;
			case "nename": 
				$sql = "
					SELECT A.*
					FROM tbl_master_pone A
					$where
				";
			break;
			case "materialatf": 
				$sql = "
					SELECT A.*
					FROM tbl_master_material_atf A
					$where
					ORDER BY vendor ASC, equipment ASC, type ASC, modular_type ASC, product_code ASC
				";
			break;
			case "warehouse": 
				$sql = "
					SELECT A.*
					FROM tbl_master_warehouse A
					$where
				";
			break;
			case "partner": 
				$sql = "
					SELECT A.*
					FROM tbl_master_partner A
					$where
				";
			break;
			case "activityatf": 
				$sql = "
					SELECT A.*
					FROM tbl_master_activity_atf A
					$where
				";
			break;
			case "picatf": 
				$sql = "
					SELECT A.*
					FROM tbl_master_pic_atf A
					$where
				";
			break;
			case "nesystem": 
				$sql = "
					SELECT A.*
					FROM tbl_master_ne_system A
					$where
				";
			break;
			//end master data
			case "masterpo": 
				$sql = "
					SELECT A.*, B.phase_code, B.phase_name, B.phase_year,
						D.currency, C.po_type
					FROM tbl_master_po A
					LEFT JOIN tbl_master_phase B ON B.id = A.tbl_master_phase_id
					LEFT JOIN tbl_master_potype C ON C.id = A.tbl_master_potype_id
					LEFT JOIN tbl_master_pocurrency D ON D.id = A.tbl_master_currency_id
					$where ORDER BY po_no ASC
				";

				//echo $sql; exit;
			break;
			case "mastercr": 
				$sql = "
					SELECT A.*, B.phase_code, B.phase_name, B.phase_year
					FROM tbl_master_cr A
					LEFT JOIN tbl_master_phase B ON B.id = A.tbl_master_phase_id
					$where
				";
			break;
			case "uploadtracker":
				$sql = "
					SELECT A.*
					FROM tbl_uploader_tracker A
					$where
					ORDER BY id DESC
				";
			break;
			case "siteinfo":
				$sql = "
					SELECT A.*, B.phase_code, B.phase_name,
						C.site_status, D.region_code, E.po_ne, F.id as uploader_id
					FROM tbl_master_tracker_siteinfo A
					LEFT JOIN tbl_master_phase B ON B.id = A.tbl_master_phase_id 
					LEFT JOIN tbl_master_sitename C ON C.id = A.tbl_master_sitename_id
					LEFT JOIN tbl_master_region D ON D.id = A.tbl_master_region_id
					LEFT JOIN tbl_master_pone E ON E.id = A.tbl_master_pone_id
					LEFT JOIN tbl_uploader_tracker F ON F.file_name = A.file_name
					$where
					ORDER BY id ASC
				";
			break;
			case "siteprogress":
				$sql = "
					SELECT A.*, 
						B.site_id, B.site_name, B.sow_category, B.partner_ni, B.status,
						C.site_status, D.region_code, E.po_ne, F.id as uploader_id,
						G.phase_name, H.oa_to_atp
					FROM tbl_master_tracker_siteprogress A
					LEFT JOIN tbl_master_tracker_siteinfo B ON B.boqno /*siteinfo*/ = A.boqno
					LEFT JOIN tbl_master_sitename C ON C.id = B.tbl_master_sitename_id
					LEFT JOIN tbl_master_region D ON D.id = B.tbl_master_region_id	
					LEFT JOIN tbl_master_pone E ON E.id = B.tbl_master_pone_id
					LEFT JOIN tbl_uploader_tracker F ON F.file_name = A.file_name
					LEFT JOIN tbl_master_phase G ON G.id = B.tbl_master_phase_id
					LEFT JOIN tbl_master_tracker_sitebinder H ON H.boqno = A.boqno
					$where
				";
			break;
			case "mcr":
				$sql = "
				SELECT A.*, 
					B.site_id, B.site_name, B.sow_category, B.status,
					C.site_status, D.region_code, E.po_ne, F.id as uploader_id,
					G.phase_name, H.on_air_date
				FROM tbl_master_tracker_mcr A
				LEFT JOIN tbl_master_tracker_siteinfo B ON B.boqno /*siteinfo*/ = A.boqno
				LEFT JOIN tbl_master_sitename C ON C.id = B.tbl_master_sitename_id
				LEFT JOIN tbl_master_region D ON D.id = B.tbl_master_region_id	
				LEFT JOIN tbl_master_pone E ON E.id = B.tbl_master_pone_id
				LEFT JOIN tbl_uploader_tracker F ON F.file_name = A.file_name
				LEFT JOIN tbl_master_phase G ON G.id = B.tbl_master_phase_id
				LEFT JOIN tbl_master_tracker_siteprogress H ON H.boqno = A.boqno
				$where	
				";
			break;
			case "atf":
				$sql = "
					SELECT A.*, 
					B.site_id, B.site_name, B.sow_category, B.status,
					C.site_status, D.region_code, E.po_ne, F.id as uploader_id, G.phase_name
					FROM tbl_master_tracker_atf A
					LEFT JOIN tbl_master_tracker_siteinfo B ON B.boqno /*siteinfo*/ = A.boqno
					LEFT JOIN tbl_master_sitename C ON C.id = B.tbl_master_sitename_id
					LEFT JOIN tbl_master_region D ON D.id = B.tbl_master_region_id	
					LEFT JOIN tbl_master_pone E ON E.id = B.tbl_master_pone_id
					LEFT JOIN tbl_uploader_tracker F ON F.file_name = A.file_name
					LEFT JOIN tbl_master_phase G ON G.id = B.tbl_master_phase_id
					$where
				";
			break;
			case "sitebinder":
				$sql = "
					SELECT A.*, 
					B.site_id, B.site_name, B.sow_category, B.cluster, B.partner_ni, B.status,
					C.site_status, D.region_code, E.po_ne, F.id as uploader_id, G.phase_name, 
					H.on_air_date, H.atp_date, H.atp_method, H.indosat_pic, DATEDIFF(H.atp_date,H.on_air_date) as oatoatp, DATEDIFF(A.doc_submit,H.atp_date) as atptosubmit, DATEDIFF(A.doc_accept,A.doc_submit) as submittoaccept, DATEDIFF(A.endorse_approved,A.doc_accept) as accepttoendorse, DATEDIFF(A.dc_approved,A.endorse_approved) as endorsetodcapproved, I.70_ssv_sr, I.70_ssv_fr, I.71_rssi, I.73_pmr, I.74_alarm_log, I.xx_other3, I.xx_other4, I.mcr_exit
					FROM tbl_master_tracker_sitebinder A
					LEFT JOIN tbl_master_tracker_siteinfo B ON B.boqno /*siteinfo*/ = A.boqno
					LEFT JOIN tbl_master_sitename C ON C.id = B.tbl_master_sitename_id
					LEFT JOIN tbl_master_region D ON D.id = B.tbl_master_region_id	
					LEFT JOIN tbl_master_pone E ON E.id = B.tbl_master_pone_id
					LEFT JOIN tbl_uploader_tracker F ON F.file_name = A.file_name
					LEFT JOIN tbl_master_phase G ON G.id = B.tbl_master_phase_id
					LEFT JOIN tbl_master_tracker_siteprogress H ON H.boqno = A.boqno
					LEFT JOIN tbl_master_tracker_mcr I ON I.boqno = A.boqno
					$where
				";
				//echo $sql;exit;
			break;
			case "acceptanceclosing":
				$sql = "
					SELECT A.*, 
					B.site_id, B.site_name, B.sow_category, B.status,
					C.site_status, D.region_code, E.po_ne, F.phase_code, F.phase_name, G.id as uploader_id,
					H.on_air_date, H.atp_date, I.endorse_approved, J.mcr_exit
					FROM tbl_master_tracker_accclosing A
					LEFT JOIN tbl_master_tracker_siteinfo B ON B.boqno /*siteinfo*/ = A.boqno
					LEFT JOIN tbl_master_sitename C ON C.id = B.tbl_master_sitename_id
					LEFT JOIN tbl_master_region D ON D.id = B.tbl_master_region_id	
					LEFT JOIN tbl_master_pone E ON E.id = B.tbl_master_pone_id
					LEFT JOIN tbl_master_phase F ON F.id = B.tbl_master_phase_id
					LEFT JOIN tbl_uploader_tracker G ON G.file_name = A.file_name
					LEFT JOIN tbl_master_tracker_siteprogress H ON H.boqno = A.boqno
					LEFT JOIN tbl_master_tracker_sitebinder I ON I.boqno = A.boqno
					LEFT JOIN tbl_master_tracker_mcr J ON J.boqno = A.boqno
					$where
				";
			break;
			case "costsales":
				$sql = "
					SELECT A.*, 
					B.site_id, B.site_name, B.sow_category, B.status,
					C.site_status, D.region_code, E.po_ne, F.id as uploader_id,
					G.on_air_date, G.on_air_baseline, DATEDIFF(G.on_air_date, G.on_air_baseline) as delayondays ,H.phase_name, H.phase_code,
					I.pac_date, DATEDIFF(I.pac_date, A.pac_baseline) as delayondays2
					FROM tbl_master_tracker_costsales A
					LEFT JOIN tbl_master_tracker_siteinfo B ON B.boqno /*siteinfo*/ = A.boqno
					LEFT JOIN tbl_master_sitename C ON C.id = B.tbl_master_sitename_id
					LEFT JOIN tbl_master_region D ON D.id = B.tbl_master_region_id	
					LEFT JOIN tbl_master_pone E ON E.id = B.tbl_master_pone_id
					LEFT JOIN tbl_uploader_tracker F ON F.file_name = A.file_name
					LEFT JOIN tbl_master_tracker_siteprogress G ON G.boqno = A.boqno
					LEFT JOIN tbl_master_phase H ON H.id = B.tbl_master_phase_id
					LEFT JOIN tbl_master_tracker_accclosing I ON I.id = A.id
					$where
				";
			break;
			case "tracker_all":
				$sql ="
					SELECT A.*
					FROM tbl_master_tracker_siteinfo A
					LEFT JOIN tbl_master_tracker_siteprogress B ON B.boqno = A.boqno /*siteinfo */ AND B.tbl_master_tracker_siteinfo_id = A.id
					$where
				";
			break;
			case "uploadalldatabase":
				$sql = "
					SELECT A.*
					FROM tbl_uploader_alldatabase A
					ORDER BY id DESC
				";
			break;
			case "tbl_all_database":
				$sql = "
					SELECT A.*
					FROM tbl_all_database A
				";
			break;
			case "receivedall":
				$sql = "
					SELECT A.*,
						B.phase_code, B.phase_year, B.phase_name,
						C.po_no, C.project_name, C.basic_contract, D.po_type, E.currency,
						F.cr_no_nokia, F.cr_status, G.id as uploader_id, G.type_database
					FROM tbl_all_database A
					LEFT JOIN tbl_master_po C ON C.id = A.tbl_master_po_id
					LEFT JOIN tbl_master_phase B ON B.id = C.tbl_master_phase_id
					LEFT JOIn tbl_master_potype D ON D.id = C.tbl_master_potype_id
					LEFT JOIN tbl_master_pocurrency E ON E.id = C.tbl_master_currency_id
					LEFT JOIN tbl_master_cr F ON F.id = A.tbl_master_cr_id
					LEFT JOIN tbl_uploader_alldatabase G ON G.file_name = A.file_name
					$where AND A.level = 1 AND (A.status = 1 OR A.status = 0)
					ORDER BY id ASC
				";
			break;
			case "receiveddollar":
			case "received":
				$sql = "
					SELECT A.*,
						B.phase_code, B.phase_year, B.phase_name,
						C.po_no, C.project_name, C.basic_contract, D.po_type, E.currency,
						F.cr_no_nokia, F.cr_status, G.id as uploader_id, G.type_database
					FROM tbl_all_database A
					LEFT JOIN tbl_master_po C ON C.id = A.tbl_master_po_id
					LEFT JOIN tbl_master_phase B ON B.id = C.tbl_master_phase_id
					LEFT JOIn tbl_master_potype D ON D.id = C.tbl_master_potype_id
					LEFT JOIN tbl_master_pocurrency E ON E.id = C.tbl_master_currency_id
					LEFT JOIN tbl_master_cr F ON F.id = A.tbl_master_cr_id
					LEFT JOIN tbl_uploader_alldatabase G ON G.file_name = A.file_name
					$where AND A.level = 1 AND A.status = 1
					ORDER BY id ASC
				";
			break;
			case "reservationall":
				$sql = "
					SELECT A.*,
						B.boqno, B.site_id, B.site_name, B.wp_id_svc, B.network_boq, B.site_name_ori, B.site_id_ori, B.status_cr_reloc_mapping,
						D.po_no, D.project_name, D.basic_contract, E.po_type, F.currency,
						G.cr_no_nokia, G.cr_status,
						H.pr_line_item as prlineitem_rcv, H.pr_number as prnumber_rcv, H.purchasing_group as purchasinggroup_rcv, 
						H.document_type as documenttype_rcv, H.vendor_account_number as vendoraccountnumber_rcv, 
						H.contact_person as contactperson_rcv, H.term_of_payment as termofpayment_rcv, H.incoterms_code as incotermscode_rcv,
						H.incoterms_location as incotermslocation_rcv, H.implementer as implementer_rcv, H.manager as manager_rcv, 
						H.document_text_free_text_notes as documenttextfreetextnotes_rcv, H.collective_no as collectiveno_rcv, 
						H.discount_type_header as discounttypeheader_rcv, H.discount_amount_percentage_header as discountamountpercentageheader_rcv, 
						H.line_item as lineitem_rcv, H.requester as requester_rcv, H.rfx_auction_number as rfxauctionnumber_rcv, 
						H.contract_number as contractnumber_rcv, H.account_assignment_category as accountassignmentcategory_rcv, 
						H.item_category as itemcategory_rcv, H.tax_code as taxcode_rcv, H.material_number as materialnumber_rcv, 
						H.short_text as shorttext_rcv, H.item_text as itemtext_rcv, H.limitt as limit_rcv,
						H.material_price as materialprice_rcv, H.material_group as materialgroup_rcv, H.plant as plant_rcv, 
						H.delivery_date as deliverydate_rcv, H.require_gr as requiregr_rcv, H.invoice_receipt as invoicereceipt_rcv, 
						H.discount_type_item as discounttypeitem_rcv, H.amount_percentage_item as amountpercentageitem_rcv, 
						H.indicator as indicator_rcv, H.assigned_to_line_item as assignedtolineitem_rcv, H.service_number as servicenumber_rcv, H.materials_quantity as materialsquantity_rcv,
						H.services_quantity as servicesquantity_rcv, H.gross_price as grossprice_rcv, H.gl_account_number as glaccountnumber_rcv, 
						H.business_area as businessarea_rcv, H.cost_center as costcenter_rcv, H.wbs as wbs_rcv, H.internal_order as internalorder_rcv, 
						H.assets_number as assetsnumber_rcv, H.network_number as networknumber_rcv, H.activity_number as activitynumber_rcv, 
						H.assigned_to_line_item2 as assignedtolineitem2_rcv, H.invoicing_plan_date as invoicingplandate_rcv, 
						H.percentage_to_be_invoiced as percentagetobeinvoiced_rcv, H.values_to_be_invoiced as valuestobeinvoiced_rcv, 
						H.buyer as buyer_rcv, H.actual_qty as actualqty_rcv, H.delta_qty as deltaqty_rcv, H.status_cr_qty as statuscrqty_rcv, 
						H.remarkscr as remarkscr_rcv, H.material_gross_price as materialgrossprice_rcv, H.material_nett_price as materialnettprice_rcv, 
						H.total_gross_price as totalgrossprice_rcv, H.total_nett_price as totalnettprice_rcv, H.total_net_actual as totalnetactual_rcv, 
						H.total_net_delta as totalnetdelta_rcv, H.tbl_master_phase_id as masterphaseid, H.tbl_master_po_id as masterpoid,
						H.tbl_master_cr_id as mastercrid, H.materials_quantity, H.actual_qty, H.material_price, H.amount_percentage_item,
						I.id as uploader_id, I.type_database,
						J.phase_name, J.phase_code, J.phase_year,
						K.region_code
					FROM tbl_all_database A
					LEFT JOIN tbl_master_tracker_siteinfo B ON B.id = A.tbl_master_tracker_siteinfo_id
					LEFT JOIN tbl_uploader_alldatabase I ON I.file_name = A.file_name
					LEFT JOIN (
						SELECT pr_line_item, id, pr_number, purchasing_group, document_type, vendor_account_number, contact_person, 
						term_of_payment, incoterms_code, incoterms_location, implementer, manager, document_text_free_text_notes, 
						collective_no, discount_type_header, discount_amount_percentage_header, line_item, requester, rfx_auction_number, 
						contract_number, account_assignment_category, item_category, tax_code, material_number, short_text, item_text, 
						limitt, materials_quantity, material_price, material_group, plant, delivery_date, require_gr, invoice_receipt, 
						discount_type_item, amount_percentage_item, indicator, assigned_to_line_item, service_number, services_quantity, 
						gross_price, gl_account_number, business_area, cost_center, wbs, internal_order, assets_number, network_number, 
						activity_number, assigned_to_line_item2, invoicing_plan_date, percentage_to_be_invoiced, values_to_be_invoiced, 
						remarkscr, material_gross_price, material_nett_price, total_gross_price, total_nett_price, total_net_actual, 
						total_net_delta, buyer, actual_qty, delta_qty, status_cr_qty, tbl_master_phase_id, tbl_master_po_id, tbl_master_cr_id
							FROM tbl_all_database WHERE level=1
					) H ON H.id = A.id_reff1
					LEFT JOIN tbl_master_po D ON D.id = H.tbl_master_po_id
					LEFT JOIN tbl_master_potype E ON E.id = D.tbl_master_potype_id
					LEFT JOIN tbl_master_pocurrency F ON F.id = D.tbl_master_currency_id
					LEFT JOIN tbl_master_cr G ON G.id = H.tbl_master_cr_id
					LEFT JOIN tbl_master_phase J ON J.id = D.tbl_master_phase_id
					LEFT JOIN tbl_master_region K ON K.id = B.tbl_master_region_id
					$where AND A.level = 2 AND (A.status = 1 OR A.status = 0)
					ORDER BY id ASC
				";
			break;
			case "reservationdollar":
			case "reservation":
				$sql = "
					SELECT A.*,
						B.boqno, B.site_id, B.site_name, B.wp_id_svc, B.network_boq, B.site_name_ori, B.site_id_ori, B.status_cr_reloc_mapping,
						D.po_no, D.project_name, D.basic_contract, E.po_type, F.currency,
						G.cr_no_nokia, G.cr_status,
						H.pr_line_item as prlineitem_rcv, H.pr_number as prnumber_rcv, H.purchasing_group as purchasinggroup_rcv, 
						H.document_type as documenttype_rcv, H.vendor_account_number as vendoraccountnumber_rcv, 
						H.contact_person as contactperson_rcv, H.term_of_payment as termofpayment_rcv, H.incoterms_code as incotermscode_rcv,
						H.incoterms_location as incotermslocation_rcv, H.implementer as implementer_rcv, H.manager as manager_rcv, 
						H.document_text_free_text_notes as documenttextfreetextnotes_rcv, H.collective_no as collectiveno_rcv, 
						H.discount_type_header as discounttypeheader_rcv, H.discount_amount_percentage_header as discountamountpercentageheader_rcv, 
						H.line_item as lineitem_rcv, H.requester as requester_rcv, H.rfx_auction_number as rfxauctionnumber_rcv, 
						H.contract_number as contractnumber_rcv, H.account_assignment_category as accountassignmentcategory_rcv, 
						H.item_category as itemcategory_rcv, H.tax_code as taxcode_rcv, H.material_number as materialnumber_rcv, 
						H.short_text as shorttext_rcv, H.item_text as itemtext_rcv, H.limitt as limit_rcv,
						H.material_price as materialprice_rcv, H.material_group as materialgroup_rcv, H.plant as plant_rcv, 
						H.delivery_date as deliverydate_rcv, H.require_gr as requiregr_rcv, H.invoice_receipt as invoicereceipt_rcv, 
						H.discount_type_item as discounttypeitem_rcv, H.amount_percentage_item as amountpercentageitem_rcv, 
						H.indicator as indicator_rcv, H.assigned_to_line_item as assignedtolineitem_rcv, H.service_number as servicenumber_rcv, H.materials_quantity as materialsquantity_rcv,
						H.services_quantity as servicesquantity_rcv, H.gross_price as grossprice_rcv, H.gl_account_number as glaccountnumber_rcv, 
						H.business_area as businessarea_rcv, H.cost_center as costcenter_rcv, H.wbs as wbs_rcv, H.internal_order as internalorder_rcv, 
						H.assets_number as assetsnumber_rcv, H.network_number as networknumber_rcv, H.activity_number as activitynumber_rcv, 
						H.assigned_to_line_item2 as assignedtolineitem2_rcv, H.invoicing_plan_date as invoicingplandate_rcv, 
						H.percentage_to_be_invoiced as percentagetobeinvoiced_rcv, H.values_to_be_invoiced as valuestobeinvoiced_rcv, 
						H.buyer as buyer_rcv, H.actual_qty as actualqty_rcv, H.delta_qty as deltaqty_rcv, H.status_cr_qty as statuscrqty_rcv, 
						H.remarkscr as remarkscr_rcv, H.material_gross_price as materialgrossprice_rcv, H.material_nett_price as materialnettprice_rcv, 
						H.total_gross_price as totalgrossprice_rcv, H.total_nett_price as totalnettprice_rcv, H.total_net_actual as totalnetactual_rcv, 
						H.total_net_delta as totalnetdelta_rcv, H.tbl_master_phase_id as masterphaseid, H.tbl_master_po_id as masterpoid,
						H.tbl_master_cr_id as mastercrid, H.materials_quantity, H.actual_qty, H.material_price, H.amount_percentage_item,
						I.id as uploader_id, I.type_database,
						J.phase_name, J.phase_code, J.phase_year,
						K.region_code
					FROM tbl_all_database A
					LEFT JOIN tbl_master_tracker_siteinfo B ON B.id = A.tbl_master_tracker_siteinfo_id
					LEFT JOIN tbl_uploader_alldatabase I ON I.file_name = A.file_name
					LEFT JOIN (
						SELECT pr_line_item, id, pr_number, purchasing_group, document_type, vendor_account_number, contact_person, 
						term_of_payment, incoterms_code, incoterms_location, implementer, manager, document_text_free_text_notes, 
						collective_no, discount_type_header, discount_amount_percentage_header, line_item, requester, rfx_auction_number, 
						contract_number, account_assignment_category, item_category, tax_code, material_number, short_text, item_text, 
						limitt, materials_quantity, material_price, material_group, plant, delivery_date, require_gr, invoice_receipt, 
						discount_type_item, amount_percentage_item, indicator, assigned_to_line_item, service_number, services_quantity, 
						gross_price, gl_account_number, business_area, cost_center, wbs, internal_order, assets_number, network_number, 
						activity_number, assigned_to_line_item2, invoicing_plan_date, percentage_to_be_invoiced, values_to_be_invoiced, 
						remarkscr, material_gross_price, material_nett_price, total_gross_price, total_nett_price, total_net_actual, 
						total_net_delta, buyer, actual_qty, delta_qty, status_cr_qty, tbl_master_phase_id, tbl_master_po_id, tbl_master_cr_id
							FROM tbl_all_database WHERE level=1
					) H ON H.id = A.id_reff1
					LEFT JOIN tbl_master_po D ON D.id = H.tbl_master_po_id
					LEFT JOIN tbl_master_potype E ON E.id = D.tbl_master_potype_id
					LEFT JOIN tbl_master_pocurrency F ON F.id = D.tbl_master_currency_id
					LEFT JOIN tbl_master_cr G ON G.id = H.tbl_master_cr_id
					LEFT JOIN tbl_master_phase J ON J.id = D.tbl_master_phase_id
					LEFT JOIN tbl_master_region K ON K.id = B.tbl_master_region_id
					$where AND A.level = 2 AND A.status = 1
					ORDER BY id ASC
				";
			break;
			case "mapping":
				$sql = "
					SELECT A.*,
						B.phase_code, B.phase_year, B.phase_name,
						C.po_no, C.project_name, C.basic_contract, D.po_type, E.currency,
						F.cr_no_nokia, F.cr_status, G.id as uploader_id, G.type_database,
						H.pr_line_item as prlineitem_rcv, H.pr_number as prnumber_rcv, H.purchasing_group as purchasinggroup_rcv, 
						H.document_type as documenttype_rcv, H.vendor_account_number as vendoraccountnumber_rcv, 
						H.contact_person as contactperson_rcv, H.term_of_payment as termofpayment_rcv, H.incoterms_code as incotermscode_rcv, 
						H.incoterms_location as incotermslocation_rcv, H.implementer as implementer_rcv, H.manager as manager_rcv, 
						H.document_text_free_text_notes as documenttextfreetextnotes_rcv, H.collective_no as collectiveno_rcv, 
						H.discount_type_header as discounttypeheader_rcv, H.discount_amount_percentage_header as discountamountpercentageheader_rcv, 
						H.line_item as lineitem_rcv, H.requester as requester_rcv, H.rfx_auction_number as rfxauctionnumber_rcv, 
						H.contract_number as contractnumber_rcv, H.account_assignment_category as accountassignmentcategory_rcv, 
						H.item_category as itemcategory_rcv, H.tax_code as taxcode_rcv, H.material_number as materialnumber_rcv, 
						H.short_text as shorttext_rcv, H.item_text as itemtext_rcv, H.limitt as limit_rcv, H.materials_quantity as materialsquantity_rcv, 
						H.material_price as materialprice_rcv, H.material_group as materialgroup_rcv, H.plant as plant_rcv, 
						H.delivery_date as deliverydate_rcv, H.require_gr as requiregr_rcv, H.invoice_receipt as invoicereceipt_rcv, 
						H.discount_type_item as discounttypeitem_rcv, H.amount_percentage_item as amountpercentageitem_rcv, 
						H.indicator as indicator_rcv, H.assigned_to_line_item as assignedtolineitem_rcv, H.service_number as servicenumber_rcv, 
						H.services_quantity as servicesquantity_rcv, H.gross_price as grossprice_rcv, H.gl_account_number as glaccountnumber_rcv, 
						H.business_area as businessarea_rcv, H.cost_center as costcenter_rcv, H.wbs as wbs_rcv, H.internal_order as internalorder_rcv, 
						H.assets_number as assetsnumber_rcv, H.network_number as networknumber_rcv, H.activity_number as activitynumber_rcv, 
						H.assigned_to_line_item2 as assignedtolineitem2_rcv, H.invoicing_plan_date as invoicingplandate_rcv, 
						H.percentage_to_be_invoiced as percentagetobeinvoiced_rcv, H.values_to_be_invoiced as valuestobeinvoiced_rcv, 
						H.buyer as buyer_rcv, H.actual_qty as actualqty_rcv, H.delta_qty as deltaqty_rcv, H.status_cr_qty as statuscrqty_rcv, 
						H.remarkscr as remarkscr_rcv, H.material_gross_price as materialgrossprice_rcv, H.material_nett_price as materialnettprice_rcv,
						H.total_gross_price as totalgrossprice_rcv, H.total_nett_price as totalnettprice_rcv, H.total_net_actual as totalnetactual_rcv, 
						H.total_net_delta as totalnetdelta_rcv,	H.tbl_master_phase_id as masterphaseid, H.tbl_master_po_id as masterpoid, 
						H.tbl_master_cr_id as mastercrid, H.tbl_master_tracker_siteinfo_id as mastersiteinfoid,
						J.boqno, J.site_id, J.site_name, J.wp_id_svc, J.network_boq, J.site_name_ori, J.site_id_ori ,I.region_code	
					FROM tbl_all_database A
					LEFT JOIN tbl_uploader_alldatabase G ON G.file_name = A.file_name
					LEFT JOIN (
						SELECT pr_line_item, id, pr_number, purchasing_group, document_type, vendor_account_number, contact_person, 
						term_of_payment, incoterms_code, incoterms_location, implementer, manager, document_text_free_text_notes, 
						collective_no, discount_type_header, discount_amount_percentage_header, line_item, requester, rfx_auction_number, 
						contract_number, account_assignment_category, item_category, tax_code, material_number, short_text, item_text, 
						limitt, materials_quantity, material_price, material_group, plant, delivery_date, require_gr, invoice_receipt, 
						discount_type_item, amount_percentage_item, indicator, assigned_to_line_item, service_number, services_quantity, 
						gross_price, gl_account_number, business_area, cost_center, wbs, internal_order, assets_number, network_number, 
						activity_number, assigned_to_line_item2, invoicing_plan_date, percentage_to_be_invoiced, values_to_be_invoiced, 
						remarkscr, material_gross_price, material_nett_price, total_gross_price, total_nett_price, total_net_actual,
						total_net_delta, buyer, actual_qty, delta_qty, status_cr_qty, tbl_master_phase_id, tbl_master_po_id,
						tbl_master_cr_id, tbl_master_tracker_siteinfo_id
							FROM tbl_all_database WHERE level=1
					) H ON H.id = A.id_reff1
					LEFT JOIN tbl_master_tracker_siteinfo J ON J.id = A.tbl_master_tracker_siteinfo_id
					LEFT JOIN tbl_master_po C ON C.id = A.tbl_master_po_id
					LEFT JOIN tbl_master_phase B ON B.id = C.tbl_master_phase_id
					LEFT JOIN tbl_master_potype D ON D.id = C.tbl_master_potype_id
					LEFT JOIN tbl_master_pocurrency E ON E.id = C.tbl_master_currency_id
					LEFT JOIN tbl_master_cr F ON F.id = H.tbl_master_cr_id
					LEFT JOIN tbl_master_region I ON I.id = J.tbl_master_region_id
					$where AND A.status = 1
					ORDER BY id_reff1 ASC, id ASC
				";
				$tabless = "mapping";
				//echo $sql;exit;
			break;
			case "boqpersite": 
				$sql = "
					SELECT A.*,
						B.phase_code, B.phase_year, B.phase_name,
						C.po_no, C.project_name, C.basic_contract, C.project_name, E.currency,
						D.po_type,
						F.cr_no_nokia, F.cr_status, G.id as uploader_id, G.type_database,
						H.pr_line_item as prlineitem_rcv, H.pr_number as prnumber_rcv, H.purchasing_group as purchasinggroup_rcv, 
						H.document_type as documenttype_rcv, H.vendor_account_number as vendoraccountnumber_rcv, H.contact_person as contactperson_rcv, 
						H.term_of_payment as termofpayment_rcv, H.incoterms_code as incotermscode_rcv, H.incoterms_location as incotermslocation_rcv, 
						H.implementer as implementer_rcv, H.manager as manager_rcv, H.document_text_free_text_notes as documenttextfreetextnotes_rcv, 
						H.collective_no as collectiveno_rcv, H.discount_type_header as discounttypeheader_rcv, 
						H.discount_amount_percentage_header as discountamountpercentageheader_rcv, H.line_item as lineitem_rcv, 
						H.requester as requester_rcv, H.rfx_auction_number as rfxauctionnumber_rcv, H.contract_number as contractnumber_rcv, 
						H.account_assignment_category as accountassignmentcategory_rcv, H.item_category as itemcategory_rcv, 
						H.tax_code as taxcode_rcv, H.material_number as materialnumber_rcv, H.short_text as shorttext_rcv, H.item_text as itemtext_rcv, 
						H.limitt as limit_rcv, H.materials_quantity as materialsquantity_rcv, H.material_price as materialprice_rcv, 
						H.material_group as materialgroup_rcv, H.plant as plant_rcv, H.delivery_date as deliverydate_rcv, H.require_gr as requiregr_rcv, 
						H.invoice_receipt as invoicereceipt_rcv, H.discount_type_item as discounttypeitem_rcv, H.amount_percentage_item as amountpercentageitem_rcv, 
						H.indicator as indicator_rcv, H.assigned_to_line_item as assignedtolineitem_rcv, H.service_number as servicenumber_rcv, 
						H.services_quantity as servicesquantity_rcv, H.gross_price as grossprice_rcv, H.gl_account_number as glaccountnumber_rcv, 
						H.business_area as businessarea_rcv, H.cost_center as costcenter_rcv, H.wbs as wbs_rcv, H.internal_order as internalorder_rcv, 
						H.assets_number as assetsnumber_rcv, H.network_number as networknumber_rcv, H.activity_number as activitynumber_rcv,
						H.assigned_to_line_item2 as assignedtolineitem2_rcv, H.invoicing_plan_date as invoicingplandate_rcv, 
						H.percentage_to_be_invoiced as percentagetobeinvoiced_rcv, H.values_to_be_invoiced as valuestobeinvoiced_rcv, 
						H.buyer as buyer_rcv, H.actual_qty as actualqty_rcv, H.delta_qty as deltaqty_rcv, H.status_cr_qty as statuscrqty_rcv, 
						H.remarkscr as remarkscr_rcv, H.material_gross_price as materialgrossprice_rcv, H.material_nett_price as materialnettprice_rcv, 
						H.total_gross_price as totalgrossprice_rcv, H.total_nett_price as totalnettprice_rcv, H.total_net_actual as totalnetactual_rcv, 
						H.total_net_delta as totalnetdelta_rcv, H.tbl_master_phase_id as masterphaseid, H.tbl_master_po_id as masterpoid,
						H.tbl_master_cr_id as mastercrid,
						J.boqno, J.site_id, J.site_name, J.network_boq, J.wp_id_svc, J.site_id_ori, J.site_name_ori, J.status_cr_reloc_mapping,
						I.region_code
					FROM tbl_all_database A
					LEFT JOIN tbl_uploader_alldatabase G ON G.file_name = A.file_name
					INNER JOIN (
						SELECT pr_line_item, id, pr_number, purchasing_group, document_type, vendor_account_number, contact_person, 
						term_of_payment, incoterms_code, incoterms_location, implementer, manager, document_text_free_text_notes, 
						collective_no, discount_type_header, discount_amount_percentage_header, line_item, requester, rfx_auction_number, 
						contract_number, account_assignment_category, item_category, tax_code, material_number, short_text, item_text, 
						limitt, materials_quantity, material_price, material_group, plant, delivery_date, require_gr, invoice_receipt, 
						discount_type_item, amount_percentage_item, indicator, assigned_to_line_item, service_number, services_quantity, 
						gross_price, gl_account_number, business_area, cost_center, wbs, internal_order, assets_number, network_number, 
						activity_number, assigned_to_line_item2, invoicing_plan_date, percentage_to_be_invoiced, values_to_be_invoiced, 
						remarkscr, material_gross_price, material_nett_price, total_gross_price, total_nett_price, total_net_actual, 
						total_net_delta, buyer, actual_qty, delta_qty, status_cr_qty, tbl_master_phase_id, tbl_master_po_id,
						tbl_master_cr_id
							FROM tbl_all_database WHERE level=1 $where2
					) H ON H.id = A.id_reff1
					LEFT JOIN tbl_master_po C ON C.id = H.tbl_master_po_id
					LEFT JOIn tbl_master_potype D ON D.id = C.tbl_master_potype_id
					LEFT JOIN tbl_master_pocurrency E ON E.id = C.tbl_master_currency_id
					LEFT JOIN tbl_master_cr F ON F.id = H.tbl_master_cr_id
					LEFT JOIN tbl_master_phase B ON B.id = A.tbl_master_phase_id
					LEFT JOIN tbl_master_tracker_siteinfo J ON J.id = A.tbl_master_tracker_siteinfo_id
					LEFT JOIN tbl_master_region I ON I.id = J.tbl_master_region_id
					$where AND A.level = 2 AND A.status = 1
					ORDER BY J.boqno ASC, D.po_type ASC, C.po_no ASC, H.line_item ASC
				";
				//echo $sql;exit;
			break;
			case "boqall":
				$sql = "
					SELECT A.*
					FROM tbl_all_database A
					$where
				";
			break;
			case "boqoa":
				$sql = "
					SELECT A.*, A.id as chk_onair, A.id as chk_atp,
					B.phase_name,
					C.boqno, C.site_id, C.site_name, C.network_boq, C.wp_id_svc, C.site_id_ori, C.site_name_ori,
					D.region_code, F.po_type, E.po_no, 
					G.line_item as lineitem_rcv, G.material_number as materialnumber_rcv, G.item_text as itemtext_rcv,
					G.tbl_master_phase_id, G.tbl_master_po_id
					FROM tbl_all_database A
					LEFT JOIN tbl_master_tracker_siteinfo C ON C.id = A.tbl_master_tracker_siteinfo_id
					LEFT JOIN tbl_master_region D ON D.id = C.tbl_master_region_id
					LEFT JOIN (
						SELECT line_item, material_number, item_text, id, tbl_master_phase_id, tbl_master_po_id
							FROM tbl_all_database WHERE level=1
					) G ON G.id = A.id_reff1
					LEFT JOIN tbl_master_phase B ON B.id = G.tbl_master_phase_id
					LEFT JOIN tbl_master_po E ON E.id = G.tbl_master_po_id
					LEFT JOIN tbl_master_potype F ON F.id = E.tbl_master_potype_id
					$where AND A.level = 2 AND A.status = 1
					ORDER BY C.boqno ASC, F.po_type ASC, E.po_no ASC, A.line_item ASC
				";
				//echo $sql;exit();
			break;
			case "boqba":
				$sql = "
					SELECT A.*,
					B.phase_name,
					C.boqno, C.site_id, C.site_name, C.network_boq, C.wp_id_svc,
					D.region_code, F.po_type, E.po_no, G.line_item as lineitem_rcv, G.material_number as materialnumber_rcv, 
					G.item_text as itemtext_rcv, G.tbl_master_phase_id, G.tbl_master_po_id, H.top_certificate, H.top_baut, H.top_invoice,
					(A.material_nett_price * H.top_certificate * A.qty_pac) as pacvalue, (A.qty_ba * A.material_nett_price * H.top_baut) as bavalue
					FROM tbl_all_database A
					LEFT JOIN tbl_master_tracker_siteinfo C ON C.id = A.tbl_master_tracker_siteinfo_id
					LEFT JOIN tbl_master_region D ON D.id = C.tbl_master_region_id			
					LEFT JOIN (
						SELECT line_item, material_number, item_text, id, tbl_master_phase_id, tbl_master_po_id
							FROM tbl_all_database WHERE level=1
					) G ON G.id = A.id_reff1
					LEFT JOIN tbl_master_phase B ON B.id = G.tbl_master_phase_id
					LEFT JOIN tbl_master_po E ON E.id = G.tbl_master_po_id
					LEFT JOIN tbl_master_potype F ON F.id = E.tbl_master_potype_id
					LEFT JOIN tbl_master_tracker_accclosing H ON H.boqno = C.boqno
					$where AND A.level = 2 AND A.status = 1
					ORDER BY C.boqno ASC, F.po_type ASC, E.po_no ASC, A.line_item ASC
				";
			break;
			case "boqinv":
				$sql = "
					SELECT A.*,
					B.phase_name,
					C.boqno, C.site_id, C.site_name, C.network_boq, C.wp_id_svc,
					D.region_code, F.po_type, E.po_no, G.line_item as lineitem_rcv, G.material_number as materialnumber_rcv, 
					G.item_text as itemtext_rcv, G.tbl_master_phase_id, G.tbl_master_po_id, H.top_certificate, H.top_baut, H.top_invoice,
					(A.material_nett_price * H.top_certificate * A.qty_pac) as pacvalue, (A.qty_ba * A.material_nett_price * H.top_baut) as bavalue, (A.qty_inv * A.material_nett_price * H.top_invoice) as invvalue
					FROM tbl_all_database A
					LEFT JOIN tbl_master_tracker_siteinfo C ON C.id = A.tbl_master_tracker_siteinfo_id
					LEFT JOIN tbl_master_region D ON D.id = C.tbl_master_region_id			
					LEFT JOIN (
						SELECT line_item, material_number, item_text, id, tbl_master_phase_id, tbl_master_po_id
							FROM tbl_all_database WHERE level=1
					) G ON G.id = A.id_reff1
					LEFT JOIN tbl_master_phase B ON B.id = G.tbl_master_phase_id
					LEFT JOIN tbl_master_po E ON E.id = G.tbl_master_po_id
					LEFT JOIN tbl_master_potype F ON F.id = E.tbl_master_potype_id
					LEFT JOIN tbl_master_tracker_accclosing H ON H.boqno = C.boqno
					$where AND A.level = 2 AND A.status = 1
					ORDER BY C.boqno ASC, F.po_type ASC, E.po_no ASC, A.line_item ASC
				";
			break;
			case "wpidso":
				$sql = "
					SELECT A.*,
					B.phase_name,
					C.boqno, C.site_id, C.site_name, C.network_boq, C.wp_id_svc,
					D.region_code, F.po_type, E.po_no, G.line_item as lineitem_rcv, G.material_number as materialnumber_rcv, 
					G.item_text as itemtext_rcv, G.tbl_master_phase_id, G.tbl_master_po_id, H.top_certificate, H.top_baut, H.top_invoice, (A.material_nett_price * H.top_certificate * A.qty_pac) as pacvalue, (A.qty_ba * A.material_nett_price * H.top_baut) as bavalue,
					I.on_air_baseline, I.on_air_date, J.pac_baseline, J.pac_date2
					FROM tbl_all_database A
					LEFT JOIN tbl_master_tracker_siteinfo C ON C.id = A.tbl_master_tracker_siteinfo_id
					LEFT JOIN tbl_master_region D ON D.id = C.tbl_master_region_id			
					LEFT JOIN (
						SELECT line_item, material_number, item_text, id, tbl_master_phase_id, tbl_master_po_id
							FROM tbl_all_database WHERE level=1
					) G ON G.id = A.id_reff1
					LEFT JOIN tbl_master_phase B ON B.id = G.tbl_master_phase_id
					LEFT JOIN tbl_master_po E ON E.id = G.tbl_master_po_id
					LEFT JOIN tbl_master_potype F ON F.id = E.tbl_master_potype_id
					LEFT JOIN tbl_master_tracker_accclosing H ON H.boqno = C.boqno
					LEFT JOIN tbl_master_tracker_siteprogress I ON I.boqno = C.boqno
					LEFT JOIN tbl_master_tracker_costsales J ON J.boqno = C.boqno
					$where AND A.level = 2 AND A.status = 1
					ORDER BY C.boqno ASC, F.po_type ASC, E.po_no ASC, A.line_item ASC
				";
			break;
			
			// generate formboq
			case "getboqdetail":
				$sql = "
					SELECT A.*,
						B.region_code, B.remark,
						C.phase_code, C.phase_name, C.phase_year, D.po_ne, DATE_FORMAT(E.atp_date,'%d %b %y') as atpdatenya
					FROM tbl_master_tracker_siteinfo A
					LEFT JOIN tbl_master_region B ON B.id = A.tbl_master_region_id
					LEFT JOIN tbl_master_phase C ON C.id = A.tbl_master_phase_id
					LEFT JOIN tbl_master_pone D ON D.id = A.tbl_master_pone_id
					LEFT JOIN tbl_master_tracker_siteprogress E ON E.boqno = A.boqno
					WHERE A.id = '".$this->input->post('boqidnya')."'
				";
				
			break;
			case "getisiboq":
				$boqid = $this->input->post('boqidnya');
				$phase = $this->input->post('phaseidnya');
				$sql = "
					SELECT B.po_type, B.tbl_master_potype_id
					FROM tbl_all_database A
					INNER JOIN (
						SELECT XX.id, YY.tbl_master_potype_id, UU.po_type
						FROM tbl_all_database XX
						LEFT JOIN tbl_master_po YY ON YY.id = XX.tbl_master_po_id
						LEFT JOIN tbl_master_potype UU ON UU.id = YY.tbl_master_potype_id
						WHERE XX.status = '1' AND XX.level = '1' AND XX.tbl_master_phase_id = '".$phase."'
					) AS B ON B.id = A.id_reff1
					WHERE A.status = '1' AND A.level = '2' AND A.tbl_master_tracker_siteinfo_id = '".$boqid."'
					GROUP BY B.po_type, B.tbl_master_potype_id
				";
			//	echo $sql; exit();
				$getboq = $this->db->query($sql)->result_array();
				
				$array = array();
				foreach($getboq as $k => $v){
					$array[$k]['po_type_id'] = $v['tbl_master_potype_id'];
					$array[$k]['po_type'] = $v['po_type'];
					$array[$k]['detail'] = array();
					
					$sqldetailboq = "
						SELECT B.material_number, B.item_text, A.id,  
							B.po_no, A.plan_qty_mapping, A.aqtual_qty_mapping, C.network_boq
						FROM tbl_all_database A
						INNER JOIN (
							SELECT XX.id, YY.tbl_master_potype_id, UU.po_type, YY.po_no,
								XX.material_number, XX.item_text
							FROM tbl_all_database XX
							LEFT JOIN tbl_master_po YY ON YY.id = XX.tbl_master_po_id
							LEFT JOIN tbl_master_potype UU ON UU.id = YY.tbl_master_potype_id
							WHERE XX.status = '1' AND XX.level = '1' 
								AND YY.tbl_master_potype_id = '".$v['tbl_master_potype_id']."'
								AND XX.tbl_master_phase_id = '".$phase."'
						) AS B ON B.id = A.id_reff1
						LEFT JOIN tbl_master_tracker_siteinfo C ON C.id = A.tbl_master_tracker_siteinfo_id
						WHERE A.status = '1' AND A.level = '2' AND A.tbl_master_tracker_siteinfo_id = '".$boqid."'
					";
					$querydetailboq = $this->db->query($sqldetailboq)->result_array();
					foreach($querydetailboq as $zz => $rr){
						$array[$k]['detail'][$zz]['id_all_db'] = $rr['id'];
						$array[$k]['detail'][$zz]['material_number'] = $rr['material_number'];
						$array[$k]['detail'][$zz]['material_description'] = $rr['item_text'];
						$array[$k]['detail'][$zz]['po_no'] = $rr['po_no'];
						$array[$k]['detail'][$zz]['plan_qty_mapping'] = $rr['plan_qty_mapping'];
						$array[$k]['detail'][$zz]['aqtual_qty_mapping'] = $rr['aqtual_qty_mapping'];
						$array[$k]['detail'][$zz]['network_boq'] = $rr['network_boq'];
					}
				}
				//echo $sql;exit;
				/*
				echo "<pre>";
				print_r($array);exit;
				echo "</pre>"; //*/
			break;
			// end generate formboq
			
			//Modul User Management
			case "cekusername":
				$sql = "
					SELECT id
					FROM tbl_user A
					WHERE A.nama_user = '".$p1."'
				";
			break;			
			case "userlist":
				$sql = "
					SELECT A.*, B.group_user
					FROM tbl_user A
					LEFT JOIN tbl_user_group B ON A.cl_user_group_id = B.id
					$where
				";
			break;
			case "grouplist":
				$sql = "
					SELECT A.*
					FROM tbl_user_group A
					$where
				";
			break;
			
			case "menu":
				$sql = "
					SELECT a.tbl_menu_id, b.nama_menu, b.type_menu, b.icon_menu, b.url
						FROM tbl_user_prev_group a
					LEFT JOIN tbl_user_menu b ON a.tbl_menu_id = b.id 
					WHERE a.cl_user_group_id=".$this->auth['cl_user_group_id']." 
					AND (b.type_menu='P' OR b.type_menu='B') AND b.status=1
				";
				$parent = $this->db->query($sql)->result_array();
				$menu = array();
				foreach($parent as $v){
					$menu[$v['tbl_menu_id']]=array();
					$menu[$v['tbl_menu_id']]['parent']=$v['nama_menu'];
					$menu[$v['tbl_menu_id']]['icon_menu']=$v['icon_menu'];
					$menu[$v['tbl_menu_id']]['url']=$v['url'];
					$menu[$v['tbl_menu_id']]['type_menu']=$v['type_menu'];
					$menu[$v['tbl_menu_id']]['child']=array();
					$sql="
						SELECT a.tbl_menu_id, b.nama_menu, b.url, b.icon_menu , b.type_menu
							FROM tbl_user_prev_group a
						LEFT JOIN tbl_user_menu b ON a.tbl_menu_id = b.id 
						WHERE a.cl_user_group_id=".$this->auth['cl_user_group_id']." 
						AND (b.type_menu = 'C' OR b.type_menu = 'CHC') 
						AND b.status=1 AND b.parent_id=".$v['tbl_menu_id'];
					$child = $this->db->query($sql)->result_array();
					foreach($child as $x){
						$menu[$v['tbl_menu_id']]['child'][$x['tbl_menu_id']]=array();
						$menu[$v['tbl_menu_id']]['child'][$x['tbl_menu_id']]['menu']=$x['nama_menu'];
						$menu[$v['tbl_menu_id']]['child'][$x['tbl_menu_id']]['type_menu']=$x['type_menu'];
						$menu[$v['tbl_menu_id']]['child'][$x['tbl_menu_id']]['url']=$x['url'];
						$menu[$v['tbl_menu_id']]['child'][$x['tbl_menu_id']]['icon_menu']=$x['icon_menu'];
						
						if($x['type_menu'] == 'CHC'){
							$menu[$v['tbl_menu_id']]['child'][$x['tbl_menu_id']]['sub_child'] = array();
							$sqlSubChild="
								SELECT a.tbl_menu_id, b.nama_menu, b.url, b.icon_menu , b.type_menu
									FROM tbl_user_prev_group a
								LEFT JOIN tbl_user_menu b ON a.tbl_menu_id = b.id 
								WHERE a.cl_user_group_id=".$this->auth['cl_user_group_id']." 
								AND b.type_menu = 'CC'
								AND b.parent_id_2 = ".$x['tbl_menu_id']."
								AND b.status=1 
							";
							$SubChild = $this->db->query($sqlSubChild)->result_array();
							foreach($SubChild as $z){
								$menu[$v['tbl_menu_id']]['child'][$x['tbl_menu_id']]['sub_child'][$z['tbl_menu_id']]['sub_menu'] = $z['nama_menu'];
								$menu[$v['tbl_menu_id']]['child'][$x['tbl_menu_id']]['sub_child'][$z['tbl_menu_id']]['type_menu'] = $z['type_menu'];
								$menu[$v['tbl_menu_id']]['child'][$x['tbl_menu_id']]['sub_child'][$z['tbl_menu_id']]['url'] = $z['url'];
								$menu[$v['tbl_menu_id']]['child'][$x['tbl_menu_id']]['sub_child'][$z['tbl_menu_id']]['icon_menu'] = $z['icon_menu'];
							}
						}
						
					}
				}
				
				/*
				echo "<pre>";
				print_r($menu);exit;
				//*/
				
				$array = $menu;
			break;		
			
			case "menu_parent":
				$sql = "
					SELECT A.*
					FROM tbl_user_menu A
					WHERE (A.type_menu = 'P' OR A.type_menu = 'B') AND A.status = '1'
				";
			break;
			case "menu_child":
				$sql = "
					SELECT A.*
					FROM tbl_user_menu A
					WHERE (A.type_menu = 'C' OR A.type_menu = 'CHC') AND A.parent_id = '".$p1."' AND A.status = '1'
				";
			break;
			case "menu_child_2":
				$sql = "
					SELECT A.*
					FROM tbl_user_menu A
					WHERE A.type_menu = 'CC' AND A.parent_id_2 = '".$p1."' AND A.status = '1'
				";
			break;
			case "previliges_menu":
				$sql = "
					SELECT A.*
					FROM tbl_user_prev_group A
					WHERE A.tbl_menu_id = '".$p1."' AND A.cl_user_group_id = '".$p2."'
				";
			break;			
			//End Modul User Management
		}
		
		if($balikan == 'json'){
			return $this->lib->json_grid($sql, "", $tabless);
		}elseif($balikan == 'row_array'){
			return $this->db->query($sql)->row_array();
		}elseif($balikan == 'result'){
			return $this->db->query($sql)->result();
		}elseif($balikan == 'result_array'){
			return $this->db->query($sql)->result_array();
		}elseif($balikan == 'variable'){
			return $array;
		}
		
	}
	
	function get_combo($type="", $p1="", $p2=""){
		switch($type){
			case "tbl_master_phase":
				//SELECT A.id, CONCAT_WS('-', A.phase_code, A.phase_year) as txt
				//SELECT A.id, A.phase_code as txt
				$sql = "
					SELECT A.id, CONCAT_WS('-', A.phase_code, A.phase_year) as txt
					FROM $type A
					WHERE A.status = '1'
				";
			break;
			case "tbl_all_database":
				$sql = "
					SELECT B.id, B.phase_name as txt,
					C.po_no
					FROM $type A
					LEFT JOIN tbl_master_po C ON C.id = A.tbl_master_po_id
					LEFT JOIN tbl_master_phase B ON B.id = C.tbl_master_phase_id
					WHERE A.status = '1' AND A.level = '1'
					GROUP BY B.phase_name
				";
			break;
			case "boqpersite_boqno":
				/*
				$sql = "
					SELECT A.*, B.boqno as txt
					FROM tbl_all_database A
					LEFT JOIN tbl_master_tracker_siteinfo B ON B.id = A.tbl_master_tracker_siteinfo_id
					WHERE A.status = '1' AND A.level = '2'
					GROUP BY B.boqno
				";
				
				
				$sql = "
					SELECT A.id, CONCAT_WS(' ', A.boqno, A.site_id, A.site_name, A.sow_category) as txt
					FROM tbl_master_tracker_siteinfo A
					WHERE A.tbl_master_phase_id = '".$p2."'
				";
				*/
				$p2 = $this->input->post('v2');
				$wheres = " WHERE 1=1 ";
				$sqlalldb = "
					SELECT A.tbl_master_tracker_siteinfo_id
					FROM tbl_all_database A
					INNER JOIN (
						select id
						FROM tbl_all_database
						WHERE status = '1' AND level = '1'
						AND tbl_master_phase_id = '".$p2."'
					) AS B ON B.id = A.id_reff1
					WHERE A.status = '1' AND A.level = '2'
					GROUP BY A.tbl_master_tracker_siteinfo_id
				";
				$queryalldb = $this->db->query($sqlalldb)->result_array();
				$arraycdm = array();
				foreach($queryalldb as $k => $v){
					$arraycdm[$k] = $v['tbl_master_tracker_siteinfo_id'];
				}
				//print_r($arraycdm);exit;
				if(!empty($arraycdm)){
					$join_array = join("','", $arraycdm);
					$wheres .= "
						AND A.id IN ('".$join_array."')
					";
				}else{
					$wheres .= " AND A.id = 'kontel'";
				}
				
				$sql = "
					SELECT A.id, CONCAT_WS(' ', A.boqno, A.site_id, A.site_name, A.sow_category) as txt
					FROM tbl_master_tracker_siteinfo A
					$wheres 
				";
				//echo $sql;exit;
			break;
			case "tbl_master_potype":
				$sql = "
					SELECT A.id, A.po_type as txt
					FROM $type A
					WHERE A.status = '1'
				";
			break;
			case "tbl_master_pocurrency":
				$sql = "
					SELECT A.id, A.currency as txt
					FROM $type A
					WHERE A.status = '1'
				";
			break;
			case "tbl_master_region":
				$sql = "
					SELECT A.id, A.region_code as txt
					FROM $type A
					WHERE A.status = '1'
				";
			break;
			case "tbl_master_sitename":
				$sql = "
					SELECT A.id, A.site_status as txt
					FROM $type A
					WHERE A.status = '1'
				";
			break;
			case "tbl_master_pone":
				$sql = "
					SELECT A.id, A.po_ne as txt
					FROM $type A
					WHERE A.status = '1'
				";
			break;
			case "tbl_master_cr":
				$sql = "
					SELECT A.id, A.cr_no_nokia as txt
					FROM $type A
					WHERE A.status = '1'
				";
			break;
			case "tbl_master_tracker_siteinfo":
				$sql = "
					SELECT A.id, A.boqno as txt
					FROM $type A
					WHERE A.status = '1'
				";
			break;
			
			case "tbl_user_group":
				$sql = "
					SELECT A.id, A.group_user as txt
					FROM $type A
					WHERE A.status = '1'
				";
			break;
		}
		
		return $this->db->query($sql)->result_array();
	}
	
	function simpandata($table,$data,$sts_crud,$sts_inline_edit="",$sts_cell_edit=""){ //$sts_crud --> STATUS NYEE INSERT, UPDATE, DELETE
		$this->db->trans_begin();
		if(isset($data['id'])){
			$id = $data['id'];
			unset($data['id']);
		}
		
		$data['update_by'] = $this->auth['nama_user']; 
		$data['update_date'] = date('Y-m-d H:i:s'); 
		
		switch($table){
			//master data
			case "tbl_master_phase":
			
			break;
			case "tbl_master_potype":
				
			break;
			case "tbl_master_pocurrency":
				
			break;
			case "tbl_master_region":
				
			break;
			case "tbl_master_sitename":
				
			break;
			case "tbl_master_pone":
				
			break;
			case "tbl_master_material_atf":
				
			break;
			case "tbl_master_warehouse":
				
			break;
			case "tbl_master_partner":
				
			break;
			case "tbl_master_activity_atf":
				
			break;
			case "tbl_master_pic_atf":
				
			break;
			case "tbl_master_ne_system":
				
			break;
			//end master data
			case "tbl_master_po":
				if($sts_crud == 'add' || $sts_crud == 'edit'){
					if(isset($data['po_gross_idr']) && isset($data['jis_dorr_rate'])){
						$data['po_gross_usd'] = ($data['po_gross_idr'] / $data['jis_dorr_rate']);
					}
					
					if(isset($data['po_nett_idr']) && isset($data['jis_dorr_rate'])){
						$data['po_nett_usd'] = ($data['po_nett_idr'] / $data['jis_dorr_rate']);
					}
				}
			break;
			case "tbl_master_cr":
			if($sts_crud == 'add' || $sts_crud == 'edit'){
				if(isset($data['value_before']) && isset($data['value_after'])){
					$data['value_delta'] = ($data['value_before'] - $data['value_after']);
				}

				if($data['value_delta'] > 0) {
					$data['cr_type'] = "REDUCTION";
				}elseif($data['value_delta'] < 0) {
					$data['cr_type'] = "ADDITIONAL";
				}else{
					$data['cr_type'] = "NO CHANGE";
				}
			}
			break;
			
			case "tbl_master_tracker_siteinfo":
				$arrayparam = array(
					"inactive", "activate"
				);

				if(!in_array($sts_crud, $arrayparam)){
					if($sts_inline_edit = "inline_edit"){					
						unset($data['phase_code']);
						unset($data['phase_name']);
						unset($data['site_status']);
						unset($data['region_code']);
						unset($data['po_ne']);
						unset($data['uploader_id']);
						unset($data['editing']);

						if($data['site_id'] == $data['site_id_ori']){
							$data['status_cr_reloc_mapping'] = "NO CHANGE";
						}else{
							$data['status_cr_reloc_mapping'] = "CR RELOC";
						}
					}
				}
				
				if($sts_crud == 'inactive'){
					$this->db->update("tbl_master_tracker_siteinfo", array('status'=>0), array('boqno' => $data['id_tambahan']) );
					$this->db->update("tbl_master_tracker_siteprogress", array('status'=>0), array('boqno' => $data['id_tambahan']) );
					$this->db->update("tbl_master_tracker_sitebinder", array('status'=>0), array('boqno' => $data['id_tambahan']) );
					$this->db->update("tbl_master_tracker_mcr", array('status'=>0), array('boqno' => $data['id_tambahan']) );
					$this->db->update("tbl_master_tracker_costsales", array('status'=>0), array('boqno' => $data['id_tambahan']) );
					$this->db->update("tbl_master_tracker_atf", array('status'=>0), array('boqno' => $data['id_tambahan']) );
					$this->db->update("tbl_master_tracker_accclosing", array('status'=>0), array('boqno' => $data['id_tambahan']) );
				}
				if($sts_crud == 'activate'){
					$this->db->update("tbl_master_tracker_siteinfo", array('status'=>1), array('boqno' => $data['id_tambahan']) );
					$this->db->update("tbl_master_tracker_siteprogress", array('status'=>1), array('boqno' => $data['id_tambahan']) );
					$this->db->update("tbl_master_tracker_sitebinder", array('status'=>1), array('boqno' => $data['id_tambahan']) );
					$this->db->update("tbl_master_tracker_mcr", array('status'=>1), array('boqno' => $data['id_tambahan']) );
					$this->db->update("tbl_master_tracker_costsales", array('status'=>1), array('boqno' => $data['id_tambahan']) );
					$this->db->update("tbl_master_tracker_atf", array('status'=>1), array('boqno' => $data['id_tambahan']) );
					$this->db->update("tbl_master_tracker_accclosing", array('status'=>1), array('boqno' => $data['id_tambahan']) );
				}
				
				$id_tambahan = $data['id_tambahan'];
				unset($data['id_tambahan']);
				
				if($sts_crud == 'add'){
					$sqlboq = "
						SELECT MAX(boqmaxid) as boq_max
						FROM tbl_master_tracker_siteinfo
						WHERE tbl_master_phase_id = '".$data['tbl_master_phase_id']."'
						";
					$phase ="
						SELECT phase_code FROM tbl_master_phase
						WHERE id = '".$data['tbl_master_phase_id']."'
						";
						$queryphase = $this->db->query($phase)->row_array();
						$queryboq = $this->db->query($sqlboq)->row_array();
						if($queryboq['boq_max'] != null){
							$boqno = ($queryboq['boq_max'] + 1);
							$boqno = $queryphase['phase_code'].sprintf('%04d', $boqno);
							$boqaseli = ($queryboq['boq_max'] + 1);
						}else{
							$boqaseli = 1;
							$boqno = $queryphase['phase_code']."0001";
						}
					$data['boqno'] = $boqno;
					$data['boqmaxid'] = $boqaseli;
				
					$this->db->insert('tbl_master_tracker_siteprogress', array('boqno' => $boqno));
					$this->db->insert('tbl_master_tracker_sitebinder', array('boqno' => $boqno));
					$this->db->insert('tbl_master_tracker_mcr', array('boqno' => $boqno));
					$this->db->insert('tbl_master_tracker_costsales', array('boqno' => $boqno));
					$this->db->insert('tbl_master_tracker_atf', array('boqno' => $boqno));
					$this->db->insert('tbl_master_tracker_accclosing', array('boqno' => $boqno));
				}
			break;
			case "tbl_master_tracker_siteprogress":
			case "tbl_master_tracker_mcr":
			case "tbl_master_tracker_atf":
			case "tbl_master_tracker_sitebinder":
			case "tbl_master_tracker_accclosing":
			case "tbl_master_tracker_costsales":			
			
				if($sts_inline_edit = "inline_edit"){					
					unset($data['site_id']);
					unset($data['site_name']);
					unset($data['sow_category']);
					unset($data['partner_ni']);
					unset($data['site_status']);
					unset($data['region_code']);
					unset($data['po_ne']);
					unset($data['uploader_id']);
					unset($data['phase_year']);
					unset($data['phase_name']);
					unset($data['editing']);

					if($table == 'tbl_master_tracker_siteprogress'){
						unset($data['oa_to_atp']);						

					}
					
					if($table == 'tbl_master_tracker_sitebinder'){
						unset($data['cluster']);
						unset($data['on_air_date']);
						unset($data['atp_date']);
						unset($data['oatoatp']);
						unset($data['atptosubmit']);
						unset($data['atp_method']);
						unset($data['indosat_pic']);
						unset($data['submittoaccept']);
						unset($data['70_ssv_sr']);
						unset($data['70_ssv_fr']);
						unset($data['xx_other3']);
						unset($data['xx_other4']);
						unset($data['mcr_exit']);
						unset($data['accepttoendorse']);
						unset($data['endorsetodcapproved']);
					}
					if($table == 'tbl_master_tracker_accclosing'){
						unset($data['phase_code']);
						unset($data['on_air_date']);
						unset($data['atp_date']);
						unset($data['endorse_approved']);
						unset($data['mcr_exit']);
					}
					if($table == 'tbl_master_tracker_costsales'){
						unset($data['phase_code']);
						unset($data['on_air_date']);
						unset($data['on_air_baseline']);
						unset($data['delayondays']);
						unset($data['delayondays2']);
						unset($data['pac_date']);
					}
				}
				
			break;
						
			//Modul All Database
			case "tbl_all_database";
				//start received
				if(isset($data['materials_quantity']) && isset($data['actual_qty']) ){
					$data['delta_qty'] = ($data['materials_quantity'] - $data['actual_qty']);
					$statuscrd = ($data['materials_quantity'] - $data['actual_qty']);
					if ($statuscrd == 0) {
						$statuscr = "NO CHANGE";
					}elseif ($statuscrd > 0){
						$statuscr = "REDUCTION";
					}elseif ($statuscrd < 0){
						$statuscr = "ADDITIONAL";
					}
					$data['status_cr_qty'] = $statuscr;
				}else{
					$data['delta_qty'] = null;
					$data['status_cr_qty'] = null;
				}
				
				if(isset($data['material_price']) && isset($data['amount_percentage_item']) ){
					$data['material_gross_price'] = $data['material_price'];
					$data['material_nett_price'] = ($data['material_price'] * (1 - ($data['amount_percentage_item'] / 100)));
				}else{
					$data['material_gross_price'] = null;
					$data['material_nett_price'] = null;
				}
				
				if(isset($data['materials_quantity']) && isset($data['material_gross_price']) && isset($data['material_nett_price']) && isset($data['actual_qty'])  ){
					$data['total_gross_price'] = ($data['materials_quantity'] * $data['material_gross_price']);
					$data['total_nett_price'] = ($data['material_nett_price'] * $data['materials_quantity']);
					$data['total_net_actual'] = ($data['material_nett_price'] * $data['actual_qty']);
					$data['total_net_delta'] = ($data['total_nett_price'] - $data['total_net_actual']);
				}else{
					$data['total_gross_price'] = null;
					$data['total_nett_price'] = null;
					$data['total_net_actual'] = null;
					$data['total_net_delta'] = null;
				}
				//end received
				
				//start reservation
				if(isset($data['materials_quantity']) && isset($data['actual_qty']) ){
					$data['delta_qty_mapping'] = ($data['plan_qty_mapping'] - $data['aqtual_qty_mapping']);
					$statuscrd_mapping = ($data['plan_qty_mapping'] - $data['aqtual_qty_mapping']);
					if ($statuscrd_mapping == 0) {
						$statuscr_mapping = "NO CHANGE";
					}elseif ($statuscrd_mapping > 0){
						$statuscr_mapping = "REDUCTION";
					}elseif ($statuscrd_mapping < 0){
						$statuscr_mapping = "ADDITIONAL";
					}
					$data['status_cr_qty_mapping'] = $statuscr_mapping;
				}else{
					$data['delta_qty_mapping'] = null;
					$data['status_cr_qty_mapping'] = null;
				}
				
				if(isset($data['plan_qty_mapping']) && isset($data['material_gross_price']) && isset($data['material_nett_price']) && isset($data['aqtual_qty_mapping'])  ){
					$data['total_gross_price_mapping'] = ($data['plan_qty_mapping'] * $data['material_gross_price']);
					$data['total_nett_price_mapping'] = ($data['plan_qty_mapping'] * $data['material_nett_price']);
					$data['total_nett_actual_mapping'] = ($data['aqtual_qty_mapping'] * $data['material_nett_price']);
					$data['total_net_delta_mapping'] = ($data['total_nett_price_mapping'] - $data['total_nett_actual_mapping']);
				}else{
					$data['total_gross_price_mapping'] = null;
					$data['total_nett_price_mapping'] = null;
					$data['total_nett_actual_mapping'] = null;
					$data['total_net_delta_mapping'] = null;
				}
				//end reservation

				
				if($sts_inline_edit = "inline_edit"){					
					unset($data['phase_code']);
					unset($data['phase_year']);
					unset($data['phase_name']);
					unset($data['po_type']);
					unset($data['po_no']);
					unset($data['boqno']);
					unset($data['project_name']);
					unset($data['basic_contract']);
					unset($data['currency']);
					unset($data['cr_no_nokia']);
					unset($data['cr_status']);
					unset($data['uploader_id']);
					unset($data['type_database']);
					unset($data['editing']);
					unset($data['site_id']);
					unset($data['site_name']);
					unset($data['wp_id_svc']);
					unset($data['network_boq']);
					unset($data['prlineitem_rcv']);
					unset($data['prnumber_rcv']);
					unset($data['purchasinggroup_rcv']);
					unset($data['documenttype_rcv']);
					unset($data['vendoraccountnumber_rcv']);
					unset($data['contactperson_rcv']);
					unset($data['termofpayment_rcv']);
					unset($data['incotermscode_rcv']);
					unset($data['incotermslocation_rcv']);
					unset($data['implementer_rcv']);
					unset($data['manager_rcv']);
					unset($data['documenttextfreetextnotes_rcv']);
					unset($data['collectiveno_rcv']);
					unset($data['discounttypeitem_rcv']);
					unset($data['discounttypeheader_rcv']);
					unset($data['discountamountpercentageheader_rcv']);
					unset($data['lineitem_rcv']);
					unset($data['requester_rcv']);
					unset($data['rfxauctionnumber_rcv']);
					unset($data['contractnumber_rcv']);
					unset($data['accountassignmentcategory_rcv']);
					unset($data['itemcategory_rcv']);
					unset($data['taxcode_rcv']);
					unset($data['materialnumber_rcv']);
					unset($data['shorttext_rcv']);
					unset($data['itemtext_rcv']);
					unset($data['limit_rcv']);
					unset($data['materialsquantity_rcv']);
					unset($data['materialprice_rcv']);
					unset($data['materialgroup_rcv']);
					unset($data['plant_rcv']);
					unset($data['deliverydate_rcv']);
					unset($data['requiregr_rcv']);
					unset($data['invoicereceipt_rcv']);
					unset($data['amountpercentageitem_rcv']);
					unset($data['indicator_rcv']);
					unset($data['assignedtolineitem_rcv']);
					unset($data['servicenumber_rcv']);
					unset($data['servicesquantity_rcv']);
					unset($data['grossprice_rcv']);
					unset($data['glaccountnumber_rcv']);
					unset($data['businessarea_rcv']);
					unset($data['costcenter_rcv']);
					unset($data['wbs_rcv']);
					unset($data['internalorder_rcv']);
					unset($data['assetsnumber_rcv']);
					unset($data['networknumber_rcv']);
					unset($data['activitynumber_rcv']);
					unset($data['assignedtolineitem2_rcv']);
					unset($data['invoicingplandate_rcv']);
					unset($data['percentagetobeinvoiced_rcv']);
					unset($data['valuestobeinvoiced_rcv']);
					unset($data['buyer_rcv']);
					unset($data['actualqty_rcv']);
					unset($data['deltaqty_rcv']);
					unset($data['statuscrqty_rcv']);
					unset($data['remarkscr_rcv']);
					unset($data['materialgrossprice_rcv']);
					unset($data['materialnettprice_rcv']);
					unset($data['totalgrossprice_rcv']);
					unset($data['totalnettprice_rcv']);
					unset($data['totalnetactual_rcv']);
					unset($data['totalnetdelta_rcv']);
					unset($data['masterphaseid']);
					unset($data['masterpoid']);
					unset($data['mastercrid']);
					unset($data['phasename']);
					unset($data['phasecode']);
					unset($data['phaseyear']);
					unset($data['region_code']);
					unset($data['site_name_ori']);
					unset($data['site_id_ori']);
					unset($data['chk_onair']);
					unset($data['chk_atp']);
					
				}
			break;
			
			case "checkbox_update":
				if($data['field'] == 'boqoa_onair'){
					$this->db->update('tbl_all_database', array('qty_on_air'=>$data['aqtual_qty_mapping']), array('id'=>$id) );
				}elseif($data['field'] == 'boqoa_onair_all'){
					if($data['boqno']){
						$wherenya = "
							AND tbl_master_tracker_siteinfo_id = '".$data['boqno']."'
						";
					}
					
					$sql_get_qty = "
						SELECT aqtual_qty_mapping, id
						FROM tbl_all_database
						WHERE level = '2'
						$wherenya
					";
					$query_getqty = $this->db->query($sql_get_qty)->result_array();
					foreach($query_getqty as $k => $v){
						$this->db->update('tbl_all_database', array('qty_on_air'=>$v{'aqtual_qty_mapping'}), array('id'=>$v['id']) );
					}
				}elseif($data['field'] == 'boqoa_atp'){
					$this->db->update('tbl_all_database', array('qty_atp'=>$data['qty_on_air']), array('id'=>$id) );
				}elseif($data['field'] == 'boqoa_atp_all'){
					if($data['boqno']){
						$wherenya = "
							AND tbl_master_tracker_siteinfo_id = '".$data['boqno']."'
						";
					}
					
					$sql_get_qty = "
						SELECT qty_on_air, id
						FROM tbl_all_database
						WHERE level = '2'
						$wherenya
					";
					$query_getqty = $this->db->query($sql_get_qty)->result_array();
					foreach($query_getqty as $k => $v){
						$this->db->update('tbl_all_database', array('qty_atp'=>$v{'qty_on_air'}), array('id'=>$v['id']) );
					}
				}elseif($data['field'] == 'boqba_qtypac'){
					$this->db->update('tbl_all_database', array('qty_pac'=>$data['qty_atp']), array('id'=>$id) );
				}elseif($data['field'] == 'boqba_qtypac_all'){
					$sql_get_qty = "
						SELECT qty_atp, id
						FROM tbl_all_database
						WHERE level = '2'
					";
					$query_getqty = $this->db->query($sql_get_qty)->result_array();
					foreach($query_getqty as $k => $v){
						$this->db->update('tbl_all_database', array('qty_pac'=>$v{'qty_atp'}), array('id'=>$v['id']) );
					}
				}elseif($data['field'] == 'boqba_qtyba'){
					$this->db->update('tbl_all_database', array('qty_ba'=>$data['qty_pac']), array('id'=>$id) );
				}elseif($data['field'] == 'boqba_qtyba_all'){
					$sql_get_qty = "
						SELECT qty_pac, id
						FROM tbl_all_database
						WHERE level = '2'
					";
					$query_getqty = $this->db->query($sql_get_qty)->result_array();
					foreach($query_getqty as $k => $v){
						$this->db->update('tbl_all_database', array('qty_ba'=>$v{'qty_pac'}), array('id'=>$v['id']) );
					}
				}elseif($data['field'] == 'boqinv_qtyinv'){
					$this->db->update('tbl_all_database', array('qty_inv'=>$data['qty_ba']), array('id'=>$id) );
				}elseif($data['field'] == 'boqinv_qtyinv_all'){
					$sql_get_qty = "
						SELECT qty_ba, id
						FROM tbl_all_database
						WHERE level = '2'
					";
					$query_getqty = $this->db->query($sql_get_qty)->result_array();
					foreach($query_getqty as $k => $v){
						$this->db->update('tbl_all_database', array('qty_inv'=>$v{'qty_ba'}), array('id'=>$v['id']) );
					}
				}elseif($data['field'] == 'wpidso_porsts'){
					$this->db->update('tbl_all_database', array('por_status'=>date('Y-m-d H:i:s')), array('id'=>$id) );
				}elseif($data['field'] == 'wpidso_porsts_all'){
					foreach($query_getqty as $k => $v){
						$this->db->update('tbl_all_database', array('por_status'=>date('Y-m-d H:i:s')), array('id'=>$v['id']) );
					}
				}elseif($data['field'] == 'wpidso_sosts'){
					$this->db->update('tbl_all_database', array('so_status'=>date('Y-m-d H:i:s')), array('id'=>$id) );
				}elseif($data['field'] == 'wpidso_sosts_all'){
					foreach($query_getqty as $k => $v){
						$this->db->update('tbl_all_database', array('so_status'=>date('Y-m-d H:i:s')), array('id'=>$v['id']) );
					}
				}
			break;
			
			// Modul User Management 
			case "tbl_user":
				if($sts_crud == 'add' || $sts_crud == 'edit'){
					$this->load->library('encrypt');
					$data['password'] = $this->encrypt->encode($data['password']);
				}
			break;
			case "user_role_group":
				$id_group = $id;
				$this->db->delete('tbl_user_prev_group', array('cl_user_group_id'=>$id_group) );
				if(isset($data['data'])){
					$postdata = $data['data'];
					$row=array();
					foreach($postdata as $v){
						$pecah = explode("_",$v);
						$row["buat"]=0;
						$row["baca"]=0;
						$row["ubah"]=0;
						$row["hapus"]=0;
						
						switch($pecah[0]){
							case "C":
								$row["buat"]=1;
							break;
							case "R":
								$row["baca"]=1;
							break;
							case "U":
								$row["ubah"]=1;
							break;
							case "D":
								$row["hapus"]=1;
							break;
						}
						
						$row["tbl_menu_id"] = $pecah[1];
						$row["cl_user_group_id"] = $id_group;
						
						$cek_data = $this->db->get_where('tbl_user_prev_group', array('tbl_menu_id'=>$pecah[1], 'cl_user_group_id'=>$id_group) )->row_array();
						if(!$cek_data){
							$this->db->insert('tbl_user_prev_group', $row);
						}else{
							if($row["buat"]==0)unset($row["buat"]);
							if($row["baca"]==0)unset($row["baca"]);
							if($row["ubah"]==0)unset($row["ubah"]);
							if($row["hapus"]==0)unset($row["hapus"]);
							
							$this->db->update('tbl_user_prev_group', $row, array('tbl_menu_id'=>$pecah[1], 'cl_user_group_id'=>$id_group) );
						}
					}	
				}
			break;
			// End Modul User Management
		}
		
		switch ($sts_crud){
			case "add": 
				$data['status'] = 1;
				$this->db->insert($table,$data);
			break;
			case "edit":
				$this->db->update($table, $data, array('id' => $id) );
			break;
			case "inactive":
				$data['status'] = 0;
				if($table == 'tbl_master_tracker_siteinfo'){
					$this->db->update($table, $data, array('boqno' => $id_tambahan) );
				}else{
					$this->db->update($table, $data, array('id' => $id) );
				}
			break;
			case "activate":
				$data['status'] = 1;
				if($table == 'tbl_master_tracker_siteinfo'){
					$this->db->update($table, $data, array('boqno' => $id_tambahan) );
				}else{
					$this->db->update($table, $data, array('id' => $id) );
				}
			break;
			case "delete":
				/*
				$this->db->where('file_name', 'new_received-20161215_185513.xlsx');
				$data['status'] = 2;
				$this->db->update($table, $data, array('id' => $id) );
				*/
				
				$data['status'] = 2;
				$this->db->update($table, $data, array('file_name' => $data['file_name']) );
				if($table == 'tbl_all_database'){
					$this->db->update("tbl_uploader_alldatabase", array('status'=>0), array('id' => $id) );
				}
			break;
			case "undelete":
				/*
				$this->db->where('file_name', 'new_received-20161215_185513.xlsx');
				$data['status'] = 2;
				$this->db->update($table, $data, array('id' => $id) );
				*/
				
				$data['status'] = 1;
				$this->db->update($table, $data, array('file_name' => $data['file_name']) );
				if($table == 'tbl_all_database'){
					$this->db->update("tbl_uploader_alldatabase", array('status'=>1), array('id' => $id) );
				}
			break;
		}
		
		//echo $this->db->last_query();exit;
		
		if($this->db->trans_status() == false){
			$this->db->trans_rollback();
			return 'gagal';
		}else{
			 return $this->db->trans_commit();
		}
	}
	
	function importdata($type=""){
		$this->load->library("PHPExcel");
		if(!empty($_FILES['file_import']['name'])){
			//$this->db->trans_begin();
			
			$ext = explode('.',$_FILES['file_import']['name']);
			$exttemp = sizeof($ext) - 1;
			$extension = $ext[$exttemp];
			
			if($type == 'received' || $type == 'reservation'){
				$upload_path = "./__repository/tmp_upload_database/";
				$filen = $ext[0]."-".date('Ymd_His').".".$extension;
				$filename =  $this->lib->uploadnong($upload_path, 'file_import', $filen);	
			}else{
				$upload_path = "./__repository/tmp_upload/";
				$filen = $ext[0]."-".date('Ymd_His').".".$extension;
				$filename =  $this->lib->uploadnong($upload_path, 'file_import', $filen);
			}
			
			$folder_aplod = $upload_path.$filename;
			$cacheMethod   = PHPExcel_CachedObjectStorageFactory::cache_to_phpTemp;
			$cacheSettings = array('memoryCacheSize' => '1600MB');
			PHPExcel_Settings::setCacheStorageMethod($cacheMethod,$cacheSettings);
			if($extension=='xls'){
				$lib="Excel5";
			}else{
				$lib="Excel2007";
			}
			
			$objReader =  PHPExcel_IOFactory::createReader($lib);//excel2007
			ini_set('max_execution_time', 123456);
			//end set
			
			$objPHPExcel = $objReader->load($folder_aplod); 
			$objReader->setReadDataOnly(true);
			$nama_sheet=$objPHPExcel->getSheetNames();
			$worksheet = $objPHPExcel->setActiveSheetIndex(0);
			$array_benar = array();
			$array_salah = array();
			$method = $this->input->post('methodupload');
			$insertbatchstatus = true;
			
			switch($type){
				case "materialatf":
					for($i=6; $i <= $worksheet->getHighestRow(); $i++){
						$statusdata = true;
		
							$arrayinsertbenar = array(
								'vendor' => $worksheet->getCell("B".$i)->getCalculatedValue(),
								'equipment' => $worksheet->getCell("C".$i)->getCalculatedValue(),
								'type' => $worksheet->getCell("D".$i)->getCalculatedValue(),
								'modular_type' => $worksheet->getCell("E".$i)->getCalculatedValue(),
								'product_code' => $worksheet->getCell("F".$i)->getCalculatedValue(),
								'remarks' => $worksheet->getCell("G".$i)->getCalculatedValue(),
								'file_name' => $filen,
								'update_by' => $this->auth['nama_user'],
								'update_date' => date('Y-m-d H:i:s'),
								'status' => 1
							);
							
							if($method == 'N'){
								array_push($array_benar, $arrayinsertbenar);
							}elseif($method == 'U'){
								$id = $worksheet->getCell("A".$i)->getCalculatedValue();
								if($id){
									$this->db->update('tbl_master_material_atf', $arrayinsertbenar, array('id'=>$id) );
								}
							}
						}
					if($method == 'U'){
						if($statusdata == true) echo $statusdata;exit;
					}
					$table = "tbl_master_material_atf";				
				break;
				case "warehouse":
					for($i=6; $i <= $worksheet->getHighestRow(); $i++){
						$statusdata = true;
		
							$arrayinsertbenar = array(
								'wh_id' => $worksheet->getCell("B".$i)->getCalculatedValue(),
								'wh_name' => $worksheet->getCell("C".$i)->getCalculatedValue(),
								'wh_address' => $worksheet->getCell("D".$i)->getCalculatedValue(),
								'remarks' => $worksheet->getCell("E".$i)->getCalculatedValue(),
								'file_name' => $filen,
								'update_by' => $this->auth['nama_user'],
								'update_date' => date('Y-m-d H:i:s'),
								'status' => 1
							);
							
							if($method == 'N'){
								array_push($array_benar, $arrayinsertbenar);
							}elseif($method == 'U'){
								$id = $worksheet->getCell("A".$i)->getCalculatedValue();
								if($id){
									$this->db->update('tbl_master_warehouse', $arrayinsertbenar, array('id'=>$id) );
								}
							}
						}
					if($method == 'U'){
						if($statusdata == true) echo $statusdata;exit;
					}
					$table = "tbl_master_warehouse";				
				break;
				case "partner":
					for($i=6; $i <= $worksheet->getHighestRow(); $i++){
						$statusdata = true;
		
							$arrayinsertbenar = array(
								'partner_code' => $worksheet->getCell("B".$i)->getCalculatedValue(),
								'partner_name' => $worksheet->getCell("C".$i)->getCalculatedValue(),
								'company' => $worksheet->getCell("D".$i)->getCalculatedValue(),
								'remarks' => $worksheet->getCell("E".$i)->getCalculatedValue(),
								'file_name' => $filen,
								'update_by' => $this->auth['nama_user'],
								'update_date' => date('Y-m-d H:i:s'),
								'status' => 1
							);
							
							if($method == 'N'){
								array_push($array_benar, $arrayinsertbenar);
							}elseif($method == 'U'){
								$id = $worksheet->getCell("A".$i)->getCalculatedValue();
								if($id){
									$this->db->update('tbl_master_partner', $arrayinsertbenar, array('id'=>$id) );
								}
							}
						}
					if($method == 'U'){
						if($statusdata == true) echo $statusdata;exit;
					}
					$table = "tbl_master_partner";
				break;
				case "activityatf":
					for($i=6; $i <= $worksheet->getHighestRow(); $i++){
						$statusdata = true;
		
							$arrayinsertbenar = array(
								'activity' => $worksheet->getCell("B".$i)->getCalculatedValue(),
								'remarks' => $worksheet->getCell("C".$i)->getCalculatedValue(),
								'file_name' => $filen,
								'update_by' => $this->auth['nama_user'],
								'update_date' => date('Y-m-d H:i:s'),
								'status' => 1
							);
							
							if($method == 'N'){
								array_push($array_benar, $arrayinsertbenar);
							}elseif($method == 'U'){
								$id = $worksheet->getCell("A".$i)->getCalculatedValue();
								if($id){
									$this->db->update('tbl_master_activity_atf', $arrayinsertbenar, array('id'=>$id) );
								}
							}
						}
					if($method == 'U'){
						if($statusdata == true) echo $statusdata;exit;
					}
					$table = "tbl_master_activity_atf";
				break;
				case "picatf":
					for($i=6; $i <= $worksheet->getHighestRow(); $i++){
						$statusdata = true;
		
							$arrayinsertbenar = array(
								'pic_name' => $worksheet->getCell("B".$i)->getCalculatedValue(),
								'pic_company' => $worksheet->getCell("C".$i)->getCalculatedValue(),
								'remarks' => $worksheet->getCell("D".$i)->getCalculatedValue(),
								'file_name' => $filen,
								'update_by' => $this->auth['nama_user'],
								'update_date' => date('Y-m-d H:i:s'),
								'status' => 1
							);
							
							if($method == 'N'){
								array_push($array_benar, $arrayinsertbenar);
							}elseif($method == 'U'){
								$id = $worksheet->getCell("A".$i)->getCalculatedValue();
								if($id){
									$this->db->update('tbl_master_pic_atf', $arrayinsertbenar, array('id'=>$id) );
								}
							}
						}
					if($method == 'U'){
						if($statusdata == true) echo $statusdata;exit;
					}
					$table = "tbl_master_pic_atf";
				break;
				case "nesystem":
					for($i=6; $i <= $worksheet->getHighestRow(); $i++){
						$statusdata = true;
		
							$arrayinsertbenar = array(
								'ne_system' => $worksheet->getCell("B".$i)->getCalculatedValue(),
								'ne_group' => $worksheet->getCell("C".$i)->getCalculatedValue(),
								'remarks' => $worksheet->getCell("D".$i)->getCalculatedValue(),
								'file_name' => $filen,
								'update_by' => $this->auth['nama_user'],
								'update_date' => date('Y-m-d H:i:s'),
								'status' => 1
							);
							
							if($method == 'N'){
								array_push($array_benar, $arrayinsertbenar);
							}elseif($method == 'U'){
								$id = $worksheet->getCell("A".$i)->getCalculatedValue();
								if($id){
									$this->db->update('tbl_master_ne_system', $arrayinsertbenar, array('id'=>$id) );
								}
							}
						}
					if($method == 'U'){
						if($statusdata == true) echo $statusdata;exit;
					}
					$table = "tbl_master_ne_system";
				break;

				case "masterpo":
					for($i=6; $i <= $worksheet->getHighestRow(); $i++){
						$statusdata = true;
						$arrayphasesalah = array();
						$arraypotypesalah = array();
						$arraycurrencysalah = array();

						if($worksheet->getCell("B".$i)->getCalculatedValue() != ""){
							$arrayphase = array(
								'phase_code' => $worksheet->getCell("B".$i)->getCalculatedValue(),
							);
							$cekphase = $this->db->get_where('tbl_master_phase', $arrayphase)->row_array();
							if(isset($cekphase)){
								$tbl_master_phase_id = $cekphase['id'];
							}else{
								$statusdata = false;
								$arrayphasesalah['phase_code'] = $worksheet->getCell("B".$i)->getCalculatedValue();
								$arrayphasesalah['phase_name'] = $worksheet->getCell("D".$i)->getCalculatedValue();
								$arrayphasesalah['phase_year'] = $worksheet->getCell("C".$i)->getCalculatedValue();
							}
						}
						if($worksheet->getCell("E".$i)->getCalculatedValue() != ""){
							$arraypotype = array(
								'po_type' => $worksheet->getCell("E".$i)->getCalculatedValue(),
							);
							$cekpotype = $this->db->get_where('tbl_master_potype', $arraypotype)->row_array();
							if(isset($cekpotype)){
								$tbl_master_potype_id = $cekpotype['id'];
							}else{
								$statusdata = false;
								$arraypotypesalah['po_type'] = $worksheet->getCell("E".$i)->getCalculatedValue();
							}
						}

						$currency = $worksheet->getCell("H".$i)->getCalculatedValue();
						if($currency == null) {
							$tbl_master_currency_id = null;
						}else{
							if($worksheet->getCell("H".$i)->getCalculatedValue() != ""){
								$arraycurrency = array(
									'currency' => $worksheet->getCell("H".$i)->getCalculatedValue(),
								);
								$cekcurrency = $this->db->get_where('tbl_master_pocurrency', $arraycurrency)->row_array();
								if(isset($cekcurrency)){
								$tbl_master_currency_id = $cekcurrency['id'];
								}else{
								$statusdata = false;
								$arraycurrencysalah['currency'] = $worksheet->getCell("H".$i)->getCalculatedValue();
								}
							}	
						}

						$po_gross_idr = $worksheet->getCell("N".$i)->getCalculatedValue();
						if($po_gross_idr == null) {
							$po_gross_idr = '0';
						}else{
							$po_gross_idr = $worksheet->getCell("N".$i)->getCalculatedValue();
						}
						
						$po_nett_idr = $worksheet->getCell("O".$i)->getCalculatedValue();
						if($po_nett_idr == null) {
							$po_nett_idr = '0';
						}else{
							$po_nett_idr = $worksheet->getCell("O".$i)->getCalculatedValue();
						}

						$jis_dorr_rate = $worksheet->getCell("P".$i)->getCalculatedValue();
						if($jis_dorr_rate == null) {
							$jis_dorr_rate = '0';
						}else{
							$jis_dorr_rate = $worksheet->getCell("P".$i)->getCalculatedValue();
						}
						
						if($statusdata == true){								
							$podatet = $worksheet->getCell("J".$i)->getCalculatedValue();
							if ($podatet == null){
								$podate = null;
							}else{
								//$podatet = new DateTime("1899-12-30 + $podatet days");
								//$podate = $worksheet->getCell("J".$i)->getCalculatedValue();//$podatet->format('Y-m-d');
								$podate = date('Y-m-d',PHPExcel_Shared_Date::ExcelToPHP($worksheet->getCell("J".$i)->getCalculatedValue()));
							}
							//$podatet = new DateTime("1899-12-30 + $podatet days");
							//$podate = $podatet->format('Y-m-d');
							
							
							//$podatet = DateTime::createFromFormat('d/m/y', $worksheet->getCell("J".$i)->getCalculatedValue());
							//$podate =  $podatet->format('Y-m-d');
							
							$poreceivedt = $worksheet->getCell("K".$i)->getCalculatedValue();
							if ($poreceivedt == null){
								$poreceived = null;
							}else{
								//$poreceivedt = new DateTime("1899-12-30 + $poreceivedt days");
								//$poreceived = $worksheet->getCell("K".$i)->getCalculatedValue();//$poreceivedt->format('Y-m-d');
								$poreceived = date('Y-m-d',PHPExcel_Shared_Date::ExcelToPHP($worksheet->getCell("K".$i)->getCalculatedValue())); //$poreceivedt->format('Y-m-d');
							}
							//$poreceivedt = new DateTime("1899-12-30 + $poreceivedt days");
							//$poreceived = $poreceivedt->format('Y-m-d');
							
							$podeliveryt = $worksheet->getCell("L".$i)->getCalculatedValue();
							if ($podeliveryt == null){
								$podelivery = null;
							}else{
								//$podeliveryt = new DateTime("1899-12-30 + $podeliveryt days");
								//$podelivery = $worksheet->getCell("L".$i)->getCalculatedValue();//$podeliveryt->format('Y-m-d');
								$podelivery = date('Y-m-d',PHPExcel_Shared_Date::ExcelToPHP($worksheet->getCell("L".$i)->getCalculatedValue())); //$poreceivedt->format('Y-m-d');//$podeliveryt->format('Y-m-d');
								//$podeliveryn = $worksheet->getCell("L".$i)->getCalculatedValue();
							}
							//$podeliveryt = new DateTime("1899-12-30 + $podeliveryt days");
							//$podelivery = $podeliveryt->format('Y-m-d');
		
							$arrayinsertbenar = array(
								'tbl_master_phase_id' => $tbl_master_phase_id,
								'tbl_master_potype_id' => $tbl_master_potype_id,
								'tbl_master_currency_id' => $tbl_master_currency_id,
								'po_no' => $worksheet->getCell("F".$i)->getCalculatedValue(),
								'project_name' => $worksheet->getCell("G".$i)->getCalculatedValue(),
								'basic_contract' => $worksheet->getCell("I".$i)->getCalculatedValue(),
								'po_date' => $podate,
								'po_received' => $poreceived,
								'po_delivery' => $podelivery,
								'revision_no' => $worksheet->getCell("M".$i)->getCalculatedValue(),
								'po_gross_idr' => $po_gross_idr,
								'po_nett_idr' => $po_nett_idr,
								'jis_dorr_rate' => $jis_dorr_rate,
								'po_gross_usd' => ($worksheet->getCell("N".$i)->getCalculatedValue() / $worksheet->getCell("P".$i)->getCalculatedValue()),
								'po_nett_usd' => ($worksheet->getCell("O".$i)->getCalculatedValue() / $worksheet->getCell("P".$i)->getCalculatedValue()),
								'remarks' => $worksheet->getCell("S".$i)->getCalculatedValue(),
								'file_name' => $filen,
								'update_by' => $this->auth['nama_user'],
								'update_date' => date('Y-m-d H:i:s'),
								'status' => 1
							);
							
							if($method == 'N'){
								array_push($array_benar, $arrayinsertbenar);
							}elseif($method == 'U'){
								$id = $worksheet->getCell("A".$i)->getCalculatedValue();
								if($id){
									$this->db->update('tbl_master_po', $arrayinsertbenar, array('id'=>$id) );
								}
							}
						}else{
							$arrayinsertsalah = array(
								'row' => $i,
								'phase' => $arrayphasesalah,
								'potype' => $arraypotypesalah,
								'currency' => $arraycurrencysalah
							);
							array_push($array_salah, $arrayinsertsalah);
						}
					}
					if($method == 'U'){
						if($statusdata == true) echo $statusdata;exit;
					}
					$table = "tbl_master_po";
					
				break;
				case "mastercr":
					for($i=6; $i <= $worksheet->getHighestRow(); $i++){
						$statusdata = true;
						$arrayphasesalah = array();

						if($worksheet->getCell("E".$i)->getCalculatedValue() != ""){
							$arrayphase = array(
								'phase_code' => $worksheet->getCell("E".$i)->getCalculatedValue(),
							);
							$cekphase = $this->db->get_where('tbl_master_phase', $arrayphase)->row_array();
							if(isset($cekphase)){
								$tbl_master_phase_id = $cekphase['id'];
							}else{
								$statusdata = false;
								$arrayphasesalah['phase_code'] = $worksheet->getCell("E".$i)->getCalculatedValue();
								$arrayphasesalah['phase_name'] = $worksheet->getCell("F".$i)->getCalculatedValue();
								$arrayphasesalah['phase_year'] = $worksheet->getCell("G".$i)->getCalculatedValue();
							}
						}

						$value_before = $worksheet->getCell("O".$i)->getCalculatedValue();
						if($value_before == null) {
							$value_before = '0';
						}else{
							$value_before = $worksheet->getCell("O".$i)->getCalculatedValue();
						}

						$value_after = $worksheet->getCell("P".$i)->getCalculatedValue();
						if($value_after ==  null) {
							$value_after = '0';
						}else{
							$value_after = $worksheet->getCell("P".$i)->getCalculatedValue();
						}

						$value_additional = $worksheet->getCell("S".$i)->getCalculatedValue();
						if($value_additional == null) {
							$value_additional = '0';
						}else{
							$value_additional = $worksheet->getCell("S".$i)->getCalculatedValue();
						}

						$value_reduction = $worksheet->getCell("T".$i)->getCalculatedValue();
						if($value_reduction == null) {
							$value_reduction = '0';
						}else{
							$value_reduction = $worksheet->getCell("T".$i)->getCalculatedValue();
						}
						
						if($statusdata == true){
							$crsubmitt = $worksheet->getCell("K".$i)->getCalculatedValue();
							if ($crsubmitt == null){
								$crsubmit = null;
							}else{
								//$crsubmitt = new DateTime("1899-12-30 + $crsubmitt days");
								//$crsubmit = $crsubmitt->format('Y-m-d');
								
								$crsubmit = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($crsubmitt));
							}
							
							$crapprovedt = $worksheet->getCell("L".$i)->getCalculatedValue();
							if ($crapprovedt == null){
								$crapproved = null;
							}else{
								//$crapprovedt = new DateTime("1899-12-30 + $crapprovedt days");
								//$crapproved = $crapprovedt->format('Y-m-d');
								$crapproved = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($crapprovedt));
							}
							
							$poreceivedt = $worksheet->getCell("M".$i)->getCalculatedValue();
							if ($poreceivedt == null){
								$poreceived = null;
							}else{
								//$poreceivedt = new DateTime("1899-12-30 + $poreceivedt days");
								//$poreceived = $poreceivedt->format('Y-m-d');
								$poreceived = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($poreceivedt));
							}
							
							$crtyped = ($worksheet->getCell("O".$i)->getCalculatedValue() - $worksheet->getCell("P".$i)->getCalculatedValue());
							if ($crtyped == 0) {
								$crtype = "NO CHANGE";
							}elseif ($crtyped > 0){
								$crtype = "REDUCTION";
							}elseif ($crtyped < 0){
								$crtype = "ADDITIONAL";
							}

							$arrayinsertbenar = array(
								'tbl_master_phase_id' => $tbl_master_phase_id,
								'cr_no_nokia' => $worksheet->getCell("B".$i)->getCalculatedValue(),
								'cr_no_indosat' => $worksheet->getCell("C".$i)->getCalculatedValue(),
								'cr_status' => $worksheet->getCell("D".$i)->getCalculatedValue(),
								'nodin' => $worksheet->getCell("H".$i)->getCalculatedValue(),
								'cr_position' => $worksheet->getCell("I".$i)->getCalculatedValue(),
								'cr_pic' => $worksheet->getCell("J".$i)->getCalculatedValue(),
								'cr_submit' => $crsubmit,
								'cr_approved' => $crapproved,
								'po_received' => $poreceived,
								'cr_currency' => $worksheet->getCell("N".$i)->getCalculatedValue(),	
								'value_before' => $value_before,
								'value_after' => $value_after,
								'value_delta' => ($worksheet->getCell("O".$i)->getCalculatedValue() - $worksheet->getCell("P".$i)->getCalculatedValue()),
								'cr_type' => $crtype,						
								'value_additional' => $value_additional,
								'value_reduction' => $value_reduction,
								'remarks' => $worksheet->getCell("U".$i)->getCalculatedValue(),
								'file_name' => $filen,
								'update_by' => $this->auth['nama_user'],
								'update_date' => date('Y-m-d H:i:s'),
								'status' => 1
							);
							$crtyped = 'value_delta';
							if ($crtyped == 0) {
								$crtype = "NO CHANGE";
							}else{
								$crtype = "REDUCTION";
							}
							if($method == 'N'){
								array_push($array_benar, $arrayinsertbenar);
							}elseif($method == 'U'){
								$id = $worksheet->getCell("A".$i)->getCalculatedValue();
								if($id){
									$this->db->update('tbl_master_cr', $arrayinsertbenar, array('id'=>$id) );
								} 
							}
						}else{
							$arrayinsertsalah = array(
								'row' => $i,
								'phase' => $arrayphasesalah
							);
							array_push($array_salah, $arrayinsertsalah);
						}
					}
					
					if($method == 'U'){
						if($statusdata == true) echo $statusdata;exit;
					}
					$table = "tbl_master_cr";
				break;
				case "siteinfo":
					$boquery = true;
					$boqaseli = 1;
					$arrayboq = array();
					//echo $worksheet->getHighestRow();exit;
					for($i=6; $i <= $worksheet->getHighestRow(); $i++){
						if($worksheet->getCell("J".$i)->getCalculatedValue() != ""){
							$statusdata = true;
							$arrayphasesalah = array();
							$arrayregionsalah = array();
							$arraysitestatussalah = array();
							$arrayponesalah = array();

							if($worksheet->getCell("J".$i)->getCalculatedValue() != ""){
								$arrayphase = array(
									'phase_code' => $worksheet->getCell("J".$i)->getCalculatedValue(),
								);
								$cekphase = $this->db->get_where('tbl_master_phase', $arrayphase)->row_array();
								if(isset($cekphase)){
									$tbl_master_phase_id = $cekphase['id'];
								}else{
									$statusdata = false;
									$arrayphasesalah['phase_code'] = $worksheet->getCell("J".$i)->getCalculatedValue();
									$arrayphasesalah['phase_name'] = $worksheet->getCell("K".$i)->getCalculatedValue();
								}
							}
							if($worksheet->getCell("G".$i)->getCalculatedValue() != ""){
								$arrayregion = array(
									'region_code' => $worksheet->getCell("G".$i)->getCalculatedValue(),
								);
								$cekregion = $this->db->get_where('tbl_master_region', $arrayregion)->row_array();
								if(isset($cekregion)){
									$tbl_master_region_id = $cekregion['id'];
								}else{
									$statusdata = false;
									$arrayregionsalah['region_code'] = $worksheet->getCell("G".$i)->getCalculatedValue();
								}
							}
							if($worksheet->getCell("F".$i)->getCalculatedValue() != ""){
								$arraysitestatus = array(
									'site_status' => $worksheet->getCell("F".$i)->getCalculatedValue(),
								);
								$ceksitestatus = $this->db->get_where('tbl_master_sitename', $arraysitestatus)->row_array();
								if(isset($ceksitestatus)){
									$tbl_master_sitename_id = $ceksitestatus['id'];
								}else{
									$statusdata = false;
									$arraysitestatussalah['sitestatus'] = $worksheet->getCell("F".$i)->getCalculatedValue();
								}
							}
							if($worksheet->getCell("P".$i)->getCalculatedValue() != ""){
								$arrayponesalah = array(
									'po_ne' => $worksheet->getCell("P".$i)->getCalculatedValue(),
								);
								$cekpone = $this->db->get_where('tbl_master_pone', $arrayponesalah)->row_array();
								if(isset($cekpone)){
									$tbl_master_pone_id = $cekpone['id'];
								}else{
									$statusdata = false;
									$arrayponesalah['pone'] = $worksheet->getCell("P".$i)->getCalculatedValue();
								}
							}

							if ($worksheet->getCell("C".$i)->getCalculatedValue() == $worksheet->getCell("N".$i)->getCalculatedValue()) {
								$status_cr_reloc_mapping = 'NO CHANGE';
							}else{
								$status_cr_reloc_mapping = 'CR RELOC';
							}
							
							if($statusdata == true){
								if($method == 'N'){
									if($boquery == true){
										$sqlboq = "
											SELECT MAX(boqmaxid) as boq_max
											FROM tbl_master_tracker_siteinfo
											WHERE tbl_master_phase_id = '".$tbl_master_phase_id."'
										";
										
										$queryboq = $this->db->query($sqlboq)->row_array();
										if($queryboq['boq_max'] != null){
											$boqno = ($queryboq['boq_max'] + 1);
											$boqno = $worksheet->getCell("J".$i)->getCalculatedValue()."".sprintf('%04d', $boqno);
											$boqaseli = ($queryboq['boq_max'] + 1);
										}else{
											$boqaseli = 1;
											$boqno = $worksheet->getCell("J".$i)->getCalculatedValue()."0001";
										}
										
										$boquery = false;
									}else{
										$boqaseli = ($boqaseli + 1);
										$boqno = $worksheet->getCell("J".$i)->getCalculatedValue()."".sprintf('%04d', $boqaseli);
										$boquery = false;
									}
									$arrayinsertbenar = array(
										'tbl_master_phase_id' => $tbl_master_phase_id,
										'tbl_master_region_id' => $tbl_master_region_id,
										'tbl_master_sitename_id' => $tbl_master_sitename_id,
										'tbl_master_pone_id' => $tbl_master_pone_id,
										'boqno' => $boqno,
										'site_id' => $worksheet->getCell("C".$i)->getCalculatedValue(),
										'site_name' => $worksheet->getCell("D".$i)->getCalculatedValue(),
										'sow_category' => $worksheet->getCell("E".$i)->getCalculatedValue(),
										'area_name' => $worksheet->getCell("H".$i)->getCalculatedValue(),
										'cluster' => $worksheet->getCell("I".$i)->getCalculatedValue(),
										'sow_detail' => $worksheet->getCell("L".$i)->getCalculatedValue(),
										'system_key' => $worksheet->getCell("M".$i)->getCalculatedValue(),
										'site_id_ori' => $worksheet->getCell("N".$i)->getCalculatedValue(),
										'site_name_ori' => $worksheet->getCell("O".$i)->getCalculatedValue(),
										'status_cr_reloc_mapping' => $status_cr_reloc_mapping,
										'network_boq' => $worksheet->getCell("Q".$i)->getCalculatedValue(),
										'wp_id_svc' => $worksheet->getCell("R".$i)->getCalculatedValue(),
										'so_svc' => $worksheet->getCell("S".$i)->getCalculatedValue(),
										'partner_ni' => $worksheet->getCell("T".$i)->getCalculatedValue(),
										'partner_npo' => $worksheet->getCell("U".$i)->getCalculatedValue(),
										'remarks_siteinfo' => $worksheet->getCell("V".$i)->getCalculatedValue(),
										
										'status' => 1,
										'update_by' => $this->auth['nama_user'],
										'update_date' => date('Y-m-d H:i:s'),
										'file_name' => $filen,
										'boqmaxid' => $boqaseli
									);

								}elseif($method == 'U'){
									$boqno = $worksheet->getCell("B".$i)->getCalculatedValue();
									$arrayinsertbenar = array(
										'tbl_master_phase_id' => $tbl_master_phase_id,
										'tbl_master_region_id' => $tbl_master_region_id,
										'tbl_master_sitename_id' => $tbl_master_sitename_id,
										'tbl_master_pone_id' => $tbl_master_pone_id,
										
										'site_id' => $worksheet->getCell("C".$i)->getCalculatedValue(),
										'site_name' => $worksheet->getCell("D".$i)->getCalculatedValue(),
										'sow_category' => $worksheet->getCell("E".$i)->getCalculatedValue(),
										'area_name' => $worksheet->getCell("H".$i)->getCalculatedValue(),
										'cluster' => $worksheet->getCell("I".$i)->getCalculatedValue(),
										'sow_detail' => $worksheet->getCell("L".$i)->getCalculatedValue(),
										'system_key' => $worksheet->getCell("M".$i)->getCalculatedValue(),
										'site_id_ori' => $worksheet->getCell("N".$i)->getCalculatedValue(),
										'site_name_ori' => $worksheet->getCell("O".$i)->getCalculatedValue(),
										'network_boq' => $worksheet->getCell("Q".$i)->getCalculatedValue(),
										'wp_id_svc' => $worksheet->getCell("R".$i)->getCalculatedValue(),
										'so_svc' => $worksheet->getCell("S".$i)->getCalculatedValue(),
										'partner_ni' => $worksheet->getCell("T".$i)->getCalculatedValue(),
										'partner_npo' => $worksheet->getCell("U".$i)->getCalculatedValue(),
										'remarks_siteinfo' => $worksheet->getCell("V".$i)->getCalculatedValue(),
										
										'status' => 1,
										'update_by' => $this->auth['nama_user'],
										'update_date' => date('Y-m-d H:i:s'),
										'file_name' => $filen,
										'boqmaxid' => $boqaseli
									);
								}
									
									/*$arrayinsertbenar = array(
										'tbl_master_phase_id' => $tbl_master_phase_id,
										'tbl_master_region_id' => $tbl_master_region_id,
										'tbl_master_sitename_id' => $tbl_master_sitename_id,
										'tbl_master_pone_id' => $tbl_master_pone_id,
										'boqno' => $boqno,
										'site_id' => $worksheet->getCell("C".$i)->getCalculatedValue(),
										'site_name' => $worksheet->getCell("D".$i)->getCalculatedValue(),
										'sow_category' => $worksheet->getCell("E".$i)->getCalculatedValue(),
										'area_name' => $worksheet->getCell("H".$i)->getCalculatedValue(),
										'cluster' => $worksheet->getCell("I".$i)->getCalculatedValue(),
										'sow_detail' => $worksheet->getCell("L".$i)->getCalculatedValue(),
										'system_key' => $worksheet->getCell("M".$i)->getCalculatedValue(),
										'site_id_ori' => $worksheet->getCell("N".$i)->getCalculatedValue(),
										'site_name_ori' => $worksheet->getCell("O".$i)->getCalculatedValue(),
										'network_boq' => $worksheet->getCell("Q".$i)->getCalculatedValue(),
										'wp_id_svc' => $worksheet->getCell("R".$i)->getCalculatedValue(),
										'so_svc' => $worksheet->getCell("S".$i)->getCalculatedValue(),
										'partner_ni' => $worksheet->getCell("T".$i)->getCalculatedValue(),
										'partner_npo' => $worksheet->getCell("U".$i)->getCalculatedValue(),
										'remarks_siteinfo' => $worksheet->getCell("V".$i)->getCalculatedValue(),
										
										'status' => 1,
										'update_by' => $this->auth['nama_user'],
										'update_date' => date('Y-m-d H:i:s'),
										'file_name' => $filen,
										'boqmaxid' => $boqaseli
									); */

								if($method == 'N'){
									$arrayisiboq = array(
										'boqno' => $boqno
									);
									
									array_push($array_benar, $arrayinsertbenar);
									array_push($arrayboq, $arrayisiboq);
								}elseif($method == 'U'){
									$id = $worksheet->getCell("A".$i)->getCalculatedValue();
									if($id){
										unset($arrayinsertbenar['boqmaxid']);
										$this->db->update('tbl_master_tracker_siteinfo', $arrayinsertbenar, array('id'=>$id) );
									}
								}
								
							}else{
								$arrayinsertsalah = array(
									'row' => $i,
									'phase' => $arrayphasesalah,
									'region' => $arrayregionsalah,
									'sitestatus' => $arraysitestatussalah,
									'pone' => $arrayponesalah,
								);
								array_push($array_salah, $arrayinsertsalah);
							}
						}
					}
					
					if(empty($array_salah)){
						$arrayupload = array(
							'type_tracker' => $type,
							'file_name' => $filen,
							'type_upload' => $method,
							'remark' => $this->input->post('remark'),
							'update_by' => $this->auth['nama_user'],
							'update_date' => date('Y-m-d H:i:s')
						);
						$this->db->insert('tbl_uploader_tracker', $arrayupload);
					}

					if($method == 'U'){
						if($statusdata == true) echo $statusdata;exit;
					}

					if(!empty($arrayboq)){
						$this->db->insert_batch('tbl_master_tracker_siteprogress', $arrayboq);
						$this->db->insert_batch('tbl_master_tracker_sitebinder', $arrayboq);
						$this->db->insert_batch('tbl_master_tracker_mcr', $arrayboq);
						$this->db->insert_batch('tbl_master_tracker_costsales', $arrayboq);
						$this->db->insert_batch('tbl_master_tracker_atf', $arrayboq);
						$this->db->insert_batch('tbl_master_tracker_accclosing', $arrayboq);
					}
					
					$table = "tbl_master_tracker_siteinfo";
					
				break;
				case "siteprogress":
					for($i=6; $i <= $worksheet->getHighestRow(); $i++){
						$statusdata = true;
						$arraysiteinfosalah = array();

						if($worksheet->getCell("B".$i)->getCalculatedValue() != ""){
							$arraysiteinfo = array(
								'boqno' => $worksheet->getCell("B".$i)->getCalculatedValue(),
							);
							$ceksiteinfo = $this->db->get_where('tbl_master_tracker_siteinfo', $arraysiteinfo)->row_array();
							if(isset($ceksiteinfo)){
								$rfit = $worksheet->getCell("J".$i)->getCalculatedValue();
								if ($rfit == null){
									$rfi = null;
								}else{
									$rfi = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($rfit));
									//$rfit = new DateTime("1899-12-30 + $rfit days");
									//$rfi = $rfit->format('Y-m-d');
								}
								
								$tsst = $worksheet->getCell("K".$i)->getCalculatedValue();
								if ($tsst == null){
									$tss = null;
								}else{
									$tss = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($tsst));	
									//$tsst = new DateTime("1899-12-30 + $tsst days");
									//$tss = $tsst->format('Y-m-d');
								}

								$most = $worksheet->getCell("L".$i)->getCalculatedValue();
								if ($most == null){
									$mos = null;
								}else{
									$mos = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($most));	
									//$most = new DateTime("1899-12-30 + $most days");
									//$mos = $most->format('Y-m-d');
								}
								
								$installedt = $worksheet->getCell("M".$i)->getCalculatedValue();
								if ($installedt == null){
									$installed = null;
								}else{
									$installed = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($installedt));	
									//$installedt = new DateTime("1899-12-30 + $installedt days");
									//$installed = $installedt->format('Y-m-d');
								}

								$g900t = $worksheet->getCell("N".$i)->getCalculatedValue();
								if ($g900t == null){
									$g900 = null;
								}else{
									$g900 = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($g900t));
									//$g900t = new DateTime("1899-12-30 + $g900t days");
									//$g900 = $g900t->format('Y-m-d');
								}
								//$g900t = new DateTime("1899-12-30 + $g900t days");
								//$g900 = $g900t->format('Y-m-d');
								
								$g1800t = $worksheet->getCell("O".$i)->getCalculatedValue();
								if ($g1800t == null){
									$g1800 = null;
								}else{
									$g1800 = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($g1800t));
									//$g1800t = new DateTime("1899-12-30 + $g1800t days");
									//$g1800 = $g1800t->format('Y-m-d');
								}
								//$g1800t = new DateTime("1899-12-30 + $g1800t days");
								//$g1800 = $g1800t->format('Y-m-d');

								$u2100t = $worksheet->getCell("P".$i)->getCalculatedValue();
								if ($u2100t == null){
									$u2100 = null;
								}else{
									$u2100 = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($u2100t));
									//$u2100t = new DateTime("1899-12-30 + $u2100t days");
									//$u2100 = $u2100t->format('Y-m-d');
								}
								//$u2100t = new DateTime("1899-12-30 + $u2100t days");
								//$u2100 = $u2100t->format('Y-m-d');
								
								$u900t = $worksheet->getCell("Q".$i)->getCalculatedValue();
								if ($u900t == null){
									$u900 = null;
								}else{
									$u900 = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($u900t));
									//$u900t = new DateTime("1899-12-30 + $u900t days");
									//$u900 = $u900t->format('Y-m-d');
								}//$u900t = new DateTime("1899-12-30 + $u900t days");
								//$u900 = $u900t->format('Y-m-d');

								$l1800t = $worksheet->getCell("R".$i)->getCalculatedValue();
								if ($l1800t == null){
									$l1800 = null;
								}else{
									$l1800 = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($l1800t));
									//$l1800t = new DateTime("1899-12-30 + $l1800t days");
									//$l1800 = $l1800t->format('Y-m-d');
								}
							//$l1800t = new DateTime("1899-12-30 + $l1800t days");
								//$l1800 = $l1800t->format('Y-m-d');
								
								$on_air_baselinet = $worksheet->getCell("S".$i)->getCalculatedValue();
								if ($on_air_baselinet == null){
									$on_air_baseline = null;
								}else{
									$on_air_baseline = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($on_air_baselinet));
									//$on_air_baselinet = new DateTime("1899-12-30 + $on_air_baselinet days");
									//$on_air_baseline = $on_air_baselinet->format('Y-m-d');
								}
								//$on_air_baselinet = new DateTime("1899-12-30 + $on_air_baselinet days");
								//$on_air_baseline = $on_air_baselinet->format('Y-m-d');
				
								$on_air_datet = $worksheet->getCell("T".$i)->getCalculatedValue();
								if ($on_air_datet == null){
									$on_air_date = null;
								}else{
									$on_air_date = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($on_air_datet));
									//$on_air_datet = new DateTime("1899-12-30 + $on_air_datet days");
									//$on_air_date = $on_air_datet->format('Y-m-d');
								}
								//$on_air_datet = new DateTime("1899-12-30 + $on_air_datet days");
								//$on_air_date = $on_air_datet->format('Y-m-d');
								
								$atp_datet = $worksheet->getCell("X".$i)->getCalculatedValue();
								if ($atp_datet == null){
									$atp_date = null;
								}else{
									$atp_date = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($atp_datet));
									//$atp_datet = new DateTime("1899-12-30 + $atp_datet days");
									//$atp_date = $atp_datet->format('Y-m-d');
								}
								//$atp_datet = new DateTime("1899-12-30 + $atp_datet days");
								//$atp_date = $atp_datet->format('Y-m-d');
								
								$arrayinsertbenar =  array(
									'boqno' => $worksheet->getCell("B".$i)->getCalculatedValue(),
									'tbl_master_tracker_siteinfo_id' => $ceksiteinfo['id'],
									'rfi' => $rfi,
									'tss' => $tss,
									'mos' => $mos,
									'installed' => $installed,
									'g900' => $g900,
									'g1800' => $g1800,
									'u2100' => $u2100,
									'u900' => $u900,
									'l1800' => $l1800,
									'on_air_baseline' => $on_air_baseline,
									'on_air_date' => $on_air_date,
									'on_air_week' => $worksheet->getCell("U".$i)->getCalculatedValue(),
									'ic_issues' => $worksheet->getCell("V".$i)->getCalculatedValue(),
									'ic_owner' => $worksheet->getCell("W".$i)->getCalculatedValue(),
									'atp_date' => $atp_date,
									'atp_method' => $worksheet->getCell("Y".$i)->getCalculatedValue(),
									'indosat_pic' => $worksheet->getCell("AA".$i)->getCalculatedValue(),
									'status' => 1,
									'file_name' => $filen,
									'update_by' => $this->auth['nama_user'],
									'update_date' => date('Y-m-d H:i:s'),
								);
								//$this->db->update('tbl_master_tracker_siteprogress', $arraysiteprogress, array('boqno'=>$worksheet->getCell("B".$i)->getCalculatedValue()) );
								array_push($array_benar, $arrayinsertbenar);
							}else{
								$statusdata = false;
								$arraysiteinfosalah['id'] = $worksheet->getCell("A".$i)->getCalculatedValue();
								$arraysiteinfosalah['boqno'] = $worksheet->getCell("B".$i)->getCalculatedValue();
							}
							
							if($statusdata == false){
								$arrayinsertsalah = array(
									'row' => $i,
									'siteinfo' => $arraysiteinfosalah,
								);
								array_push($array_salah, $arrayinsertsalah);
							}
						}
					}
					
					if($array_benar){
						foreach($array_benar as $k => $v){
							$this->db->update('tbl_master_tracker_siteprogress', $array_benar[$k], array('boqno'=>$v['boqno']) );
						}
						
						$arrayupload = array(
							'type_tracker' => $type,
							'file_name' => $filen,
							'type_upload' => $method,
							'remark' => $this->input->post('remark'),
							'update_by' => $this->auth['nama_user'],
							'update_date' => date('Y-m-d H:i:s')
						);
						$this->db->insert('tbl_uploader_tracker', $arrayupload);
					}
					$insertbatchstatus = false;
				break;
				case "mcr":
					for($i=6; $i <= $worksheet->getHighestRow(); $i++){
						$statusdata = true;
						$arraysiteinfosalah = array();

						if($worksheet->getCell("B".$i)->getCalculatedValue() != ""){
							$arraysiteinfo = array(
								'boqno' => $worksheet->getCell("B".$i)->getCalculatedValue(),
							);
							$ceksiteinfo = $this->db->get_where('tbl_master_tracker_siteinfo', $arraysiteinfo)->row_array();
							if(isset($ceksiteinfo)){
								$alarm_submitt = $worksheet->getCell("L".$i)->getCalculatedValue();
								if ($alarm_submitt == null){
									$alarm_submit = null;
								}else{
									$alarm_submit = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($alarm_submitt));
									//$alarm_submitt = $worksheet->getCell("L".$i)->getCalculatedValue();
									//$alarm_submitt = new DateTime("1899-12-30 + $alarm_submitt days");
									//$alarm_submit = $alarm_submitt->format('Y-m-d');
								}
								
								$alarm_approvedt = $worksheet->getCell("M".$i)->getCalculatedValue();
								if ($alarm_approvedt == null){
									$alarm_approved = null;
								}else{
									$alarm_approved = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($alarm_approvedt));
									//$alarm_approvedt = $worksheet->getCell("M".$i)->getCalculatedValue();
									//$alarm_approvedt = new DateTime("1899-12-30 + $alarm_approvedt days");
									//$alarm_approved = $alarm_approvedt->format('Y-m-d');
								}
								
								$ssv_fr_submitt = $worksheet->getCell("N".$i)->getCalculatedValue();
								if ($ssv_fr_submitt == null){
									$ssv_fr_submit = null;
								}else{
									$ssv_fr_submit = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($ssv_fr_submitt));
									//$ssv_fr_submitt = $worksheet->getCell("N".$i)->getCalculatedValue();
									//$ssv_fr_submitt = new DateTime("1899-12-30 + $ssv_fr_submitt days");
									//$ssv_fr_submit = $ssv_fr_submitt->format('Y-m-d');
								}
								
								$ssv_vr_approvedt = $worksheet->getCell("O".$i)->getCalculatedValue();
								if ($ssv_vr_approvedt == null){
									$ssv_vr_approved = null;
								}else{
									$ssv_vr_approved = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($ssv_vr_approvedt));
									//$ssv_vr_approvedt = $worksheet->getCell("O".$i)->getCalculatedValue();
									//$ssv_vr_approvedt = new DateTime("1899-12-30 + $ssv_vr_approvedt days");
									//$ssv_vr_approved = $ssv_vr_approvedt->format('Y-m-d');
								}

								$ssv_frftr_submitt = $worksheet->getCell("P".$i)->getCalculatedValue();
								if ($ssv_frftr_submitt == null){
									$ssv_frftr_submit = null;
								}else{
									$ssv_frftr_submit = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($ssv_frftr_submitt));
									//$ssv_frftr_submitt = $worksheet->getCell("P".$i)->getCalculatedValue();
									//$ssv_frftr_submitt = new DateTime("1899-12-30 + $ssv_frftr_submitt days");
									//$ssv_frftr_submit = $ssv_frftr_submitt->format('Y-m-d');
								}
								
								$ftr_srftr_approvedt = $worksheet->getCell("Q".$i)->getCalculatedValue();
								if ($ftr_srftr_approvedt == null){
									$ftr_srftr_approved = null;
								}else{
									$ftr_srftr_approved = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($ftr_srftr_approvedt));
									//$ftr_srftr_approvedt = $worksheet->getCell("Q".$i)->getCalculatedValue();
									//$ftr_srftr_approvedt = new DateTime("1899-12-30 + $ftr_srftr_approvedt days");
									//$ftr_srftr_approved = $ftr_srftr_approvedt->format('Y-m-d');
								}
								
								$pmr_lv_submitt = $worksheet->getCell("R".$i)->getCalculatedValue();
								if ($pmr_lv_submitt == null){
									$pmr_lv_submit = null;
								}else{
									$pmr_lv_submit = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($pmr_lv_submitt));
									//$pmr_lv_submitt = $worksheet->getCell("R".$i)->getCalculatedValue();
									//$pmr_lv_submitt = new DateTime("1899-12-30 + $pmr_lv_submitt days");
									//$pmr_lv_submit = $pmr_lv_submitt->format('Y-m-d');
								}
								
								$pmr_lv_approvedt = $worksheet->getCell("S".$i)->getCalculatedValue();
								if ($pmr_lv_approvedt == null){
									$pmr_lv_approved = null;
								}else{
									$pmr_lv_approved = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($pmr_lv_approvedt));
									//$pmr_lv_approvedt = $worksheet->getCell("S".$i)->getCalculatedValue();
									//$pmr_lv_approvedt = new DateTime("1899-12-30 + $pmr_lv_approvedt days");
									//$pmr_lv_approved = $pmr_lv_approvedt->format('Y-m-d');
								}
								
								$rtwp_rssit = $worksheet->getCell("T".$i)->getCalculatedValue();
								if ($rtwp_rssit == null){
									$rtwp_rssi = null;
								}else{
									$rtwp_rssi = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($rtwp_rssit));
								}
								//$rtwp_rssit = $worksheet->getCell("T".$i)->getCalculatedValue();
								//$rtwp_rssit = new DateTime("1899-12-30 + $rtwp_rssit days");
								//$rtwp_rssi = $rtwp_rssit->format('Y-m-d');
								
								$hn_submitt = $worksheet->getCell("U".$i)->getCalculatedValue();
								if ($hn_submitt == null){
									$hn_submit = null;
								}else{
									$hn_submit = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($hn_submitt));
								}
								//$hn_submitt = $worksheet->getCell("U".$i)->getCalculatedValue();
								//$hn_submitt = new DateTime("1899-12-30 + $hn_submitt days");
								//$hn_submit = $hn_submitt->format('Y-m-d');
								
								$hn_approvedt = $worksheet->getCell("V".$i)->getCalculatedValue();
								if ($hn_approvedt == null){
									$hn_approved = null;
								}else{
									$hn_approved = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($hn_approvedt));
								}
								//$hn_approvedt = $worksheet->getCell("V".$i)->getCalculatedValue();
								//$hn_approvedt = new DateTime("1899-12-30 + $hn_approvedt days");
								//$hn_approved = $hn_approvedt->format('Y-m-d');
								
								$mcr_submitt = $worksheet->getCell("W".$i)->getCalculatedValue();
								if ($mcr_submitt == null){
									$mcr_submit = null;
								}else{
									$mcr_submit = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($mcr_submitt));
								}
								//$mcr_submitt = $worksheet->getCell("W".$i)->getCalculatedValue();
								//$mcr_submitt = new DateTime("1899-12-30 + $mcr_submitt days");
								//$mcr_submit = $mcr_submitt->format('Y-m-d');
								
								$mcr_exitt = $worksheet->getCell("X".$i)->getCalculatedValue();
								if ($mcr_exitt == null){
									$mcr_exit = null;
								}else{
									$mcr_exit = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($mcr_exitt));
								}
								//$mcr_exitt = $worksheet->getCell("X".$i)->getCalculatedValue();
								//$mcr_exitt = new DateTime("1899-12-30 + $mcr_exitt days");
								//$mcr_exit = $mcr_exitt->format('Y-m-d');
								
								$arrayinsertbenar =  array(
									'boqno' => $worksheet->getCell("B".$i)->getCalculatedValue(),
									'tbl_master_tracker_siteinfo_id' => $ceksiteinfo['id'],
									'alarm_submit' => $alarm_submit,
									'alarm_approved' => $alarm_approved,
									'ssv_fr_submit' => $ssv_fr_submit,
									'ssv_vr_approved' => $ssv_vr_approved,
									'ssv_frftr_submit' => $ssv_frftr_submit,
									'ftr_srftr_approved' => $ftr_srftr_approved,
									'pmr_lv_submit' => $pmr_lv_submit,
									'pmr_lv_approved' => $pmr_lv_approved,
									'rtwp_rssi' => $rtwp_rssi,
									'hn_submit' => $hn_submit,
									'hn_approved' => $hn_approved,
									'mcr_submit' => $mcr_submit,
									'mcr_exit' => $mcr_exit,
									'mcr_issues' => $worksheet->getCell("Y".$i)->getCalculatedValue(),
									'mcr_pic' => $worksheet->getCell("Z".$i)->getCalculatedValue(),
									'70_ssv_sr' => $worksheet->getCell("AA".$i)->getCalculatedValue(),
									'70_ssv_fr' => $worksheet->getCell("AB".$i)->getCalculatedValue(),
									'71_rssi' => $worksheet->getCell("AC".$i)->getCalculatedValue(),
									'73_pmr' => $worksheet->getCell("AD".$i)->getCalculatedValue(),
									'74_alarm_log' => $worksheet->getCell("AE".$i)->getCalculatedValue(),
									'xx_other3' => $worksheet->getCell("AF".$i)->getCalculatedValue(),
									'xx_other4' => $worksheet->getCell("AG".$i)->getCalculatedValue(),
									'file_name' => $filen,
									'status' => 1,
									'update_by' => $this->auth['nama_user'],
									'update_date' => date('Y-m-d H:i:s'),
								);
								//$this->db->update('tbl_master_tracker_siteprogress', $arraysiteprogress, array('boqno'=>$worksheet->getCell("B".$i)->getCalculatedValue()) );
								array_push($array_benar, $arrayinsertbenar);
							}else{
								$statusdata = false;
								$arraysiteinfosalah['id'] = $worksheet->getCell("A".$i)->getCalculatedValue();
								$arraysiteinfosalah['boqno'] = $worksheet->getCell("B".$i)->getCalculatedValue();
							}
							
							if($statusdata == false){
								$arrayinsertsalah = array(
									'row' => $i,
									'siteinfo' => $arraysiteinfosalah,
								);
								array_push($array_salah, $arrayinsertsalah);
							}
						}
					}
					
					if($array_benar){
						foreach($array_benar as $k => $v){
							$this->db->update('tbl_master_tracker_mcr', $array_benar[$k], array('boqno'=>$v['boqno']) );
						}
						
						$arrayupload = array(
							'type_tracker' => $type,
							'file_name' => $filen,
							'type_upload' => $method,
							'remark' => $this->input->post('remark'),
							'update_by' => $this->auth['nama_user'],
							'update_date' => date('Y-m-d H:i:s')
						);
						$this->db->insert('tbl_uploader_tracker', $arrayupload);
					}
					$insertbatchstatus = false;
				break;
				case "atf":
					for($i=6; $i <= $worksheet->getHighestRow(); $i++){
						$statusdata = true;
						$arraysiteinfosalah = array();

						if($worksheet->getCell("B".$i)->getCalculatedValue() != ""){
							$arraysiteinfo = array(
								'boqno' => $worksheet->getCell("B".$i)->getCalculatedValue(),
							);
							$ceksiteinfo = $this->db->get_where('tbl_master_tracker_siteinfo', $arraysiteinfo)->row_array();
							if(isset($ceksiteinfo)){
								$atf_submitt = $worksheet->getCell("I".$i)->getCalculatedValue();
								if ($atf_submitt == null){
									$atf_submit = null;
								}else{
									$atf_submit = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($atf_submitt));
								}
								//$atf_submitt = $worksheet->getCell("I".$i)->getCalculatedValue();
								//$atf_submitt = new DateTime("1899-12-30 + $atf_submitt days");
								//$atf_submit = $atf_submitt->format('Y-m-d');
								
								$atf_approved1t = $worksheet->getCell("J".$i)->getCalculatedValue();
								if ($atf_approved1t == null){
									$atf_approved1 = null;
								}else{
									$atf_approved1 = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($atf_approved1t));
								}
								//$atf_approved1t = $worksheet->getCell("J".$i)->getCalculatedValue();
								//$atf_approved1t = new DateTime("1899-12-30 + $atf_approved1t days");
								//$atf_approved1 = $atf_approved1t->format('Y-m-d');
								
								$dismantlet = $worksheet->getCell("K".$i)->getCalculatedValue();
								if ($dismantlet == null){
									$dismantle = null;
								}else{
									$dismantle = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($dismantlet));
								}
								//$dismantlet = $worksheet->getCell("K".$i)->getCalculatedValue();
								//$dismantlet = new DateTime("1899-12-30 + $dismantlet days");
								//$dismantle = $dismantlet->format('Y-m-d');
								
								$material_pickupt = $worksheet->getCell("L".$i)->getCalculatedValue();
								if ($material_pickupt == null){
									$material_pickup = null;
								}else{
									$material_pickup = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($material_pickupt));
								}
								//$material_pickupt = $worksheet->getCell("L".$i)->getCalculatedValue();
								//$material_pickupt = new DateTime("1899-12-30 + $material_pickupt days");
								//$material_pickup = $material_pickupt->format('Y-m-d');
								
								$material_inbound_nokiat = $worksheet->getCell("M".$i)->getCalculatedValue();
								if ($material_inbound_nokiat == null){
									$material_inbound_nokia = null;
								}else{
									$material_inbound_nokia = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($material_inbound_nokiat));
								}
								//$material_inbound_nokiat = $worksheet->getCell("M".$i)->getCalculatedValue();
								//$material_inbound_nokiat = new DateTime("1899-12-30 + $material_inbound_nokiat days");
								//$material_inbound_nokia = $material_inbound_nokiat->format('Y-m-d');
								
								$material_inbound_isatt = $worksheet->getCell("N".$i)->getCalculatedValue();
								if ($material_inbound_isatt == null){
									$material_inbound_isat = null;
								}else{
									$material_inbound_isat = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($material_inbound_isatt));
								}
								//$material_inbound_isatt = $worksheet->getCell("N".$i)->getCalculatedValue();
								//$material_inbound_isatt = new DateTime("1899-12-30 + $material_inbound_isatt days");
								//$material_inbound_isat = $material_inbound_isatt->format('Y-m-d');
								
								$atf_approved2t = $worksheet->getCell("O".$i)->getCalculatedValue();
								if ($atf_approved2t == null){
									$atf_approved2 = null;
								}else{
									$atf_approved2 = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($atf_approved2t));
								}
								//$atf_approved2t = $worksheet->getCell("O".$i)->getCalculatedValue();
								//$atf_approved2t = new DateTime("1899-12-30 + $atf_approved2t days");
								//$atf_approved2 = $atf_approved2t->format('Y-m-d');
								
								$atf_closedt = $worksheet->getCell("P".$i)->getCalculatedValue();
								if ($atf_closedt == null){
									$atf_closed = null;
								}else{
									$atf_closed = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($atf_closedt));
								}
								//$atf_closedt = $worksheet->getCell("P".$i)->getCalculatedValue();
								//$atf_closedt = new DateTime("1899-12-30 + $atf_closedt days");
								//$atf_closed = $atf_closedt->format('Y-m-d');
								
								$arrayinsertbenar =  array(
									'boqno' => $worksheet->getCell("B".$i)->getCalculatedValue(),
									'tbl_master_tracker_siteinfo_id' => $ceksiteinfo['id'],
									'atf_submit' => $atf_submit,
									'atf_approved1' => $atf_approved1,
									'dismantle' => $dismantle,
									'material_pickup' => $material_pickup,
									'material_inbound_nokia' => $material_inbound_nokia,
									'material_inbound_isat' => $material_inbound_isat,
									'atf_approved2' => $atf_approved2,
									'atf_closed' => $atf_closed,
									'status' => 1,
									'file_name' => $filen,
									'update_by' => $this->auth['nama_user'],
									'update_date' => date('Y-m-d H:i:s'),
								);
								//$this->db->update('tbl_master_tracker_siteprogress', $arraysiteprogress, array('boqno'=>$worksheet->getCell("B".$i)->getCalculatedValue()) );
								array_push($array_benar, $arrayinsertbenar);
							}else{
								$statusdata = false;
								$arraysiteinfosalah['id'] = $worksheet->getCell("A".$i)->getCalculatedValue();
								$arraysiteinfosalah['boqno'] = $worksheet->getCell("B".$i)->getCalculatedValue();
							}
							
							if($statusdata == false){
								$arrayinsertsalah = array(
									'row' => $i,
									'siteinfo' => $arraysiteinfosalah,
								);
								array_push($array_salah, $arrayinsertsalah);
							}
						}
					}
					
					if($array_benar){
						foreach($array_benar as $k => $v){
							$this->db->update('tbl_master_tracker_atf', $array_benar[$k], array('boqno'=>$v['boqno']) );
						}
						
						$arrayupload = array(
							'type_tracker' => $type,
							'file_name' => $filen,
							'type_upload' => $method,
							'remark' => $this->input->post('remark'),
							'update_by' => $this->auth['nama_user'],
							'update_date' => date('Y-m-d H:i:s')
						);
						$this->db->insert('tbl_uploader_tracker', $arrayupload);
					}
					$insertbatchstatus = false;
				break;
				case "sitebinder":
					for($i=6; $i <= $worksheet->getHighestRow(); $i++){
						$statusdata = true;
						$arraysiteinfosalah = array();

						if($worksheet->getCell("B".$i)->getCalculatedValue() != ""){
							$arraysiteinfo = array(
								'boqno' => $worksheet->getCell("B".$i)->getCalculatedValue(),
							);
							$ceksiteinfo = $this->db->get_where('tbl_master_tracker_siteinfo', $arraysiteinfo)->row_array();
							if(isset($ceksiteinfo)){
								$doc_submitt = $worksheet->getCell("AC".$i)->getCalculatedValue();
								if ($doc_submitt == null){
									$doc_submit = null;
								}else{
									$doc_submit = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($doc_submitt));
								}
								//$doc_submitt = $worksheet->getCell("AC".$i)->getCalculatedValue();
								//$doc_submitt = new DateTime("1899-12-30 + $doc_submitt days");
								//$doc_submit = $doc_submitt->format('Y-m-d');
								
								$doc_acceptt = $worksheet->getCell("AE".$i)->getCalculatedValue();
								if ($doc_acceptt == null){
									$doc_accept = null;
								}else{
									$doc_accept = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($doc_acceptt));
								}
								//$doc_acceptt = $worksheet->getCell("AE".$i)->getCalculatedValue();
								//$doc_acceptt = new DateTime("1899-12-30 + $doc_acceptt days");
								//$doc_accept = $doc_acceptt->format('Y-m-d');
								
								$mcr_exit_acceptt = $worksheet->getCell("AM".$i)->getCalculatedValue();
								if ($mcr_exit_acceptt == null){
									$mcr_exit_accept = null;
								}else{
									$mcr_exit_accept = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($mcr_exit_acceptt));
								}
								//$mcr_exit_acceptt = $worksheet->getCell("AM".$i)->getCalculatedValue();
								//$mcr_exit_acceptt = new DateTime("1899-12-30 + $mcr_exit_acceptt days");
								//$mcr_exit_accept = $mcr_exit_acceptt->format('Y-m-d');
								
								$endorse_submitt = $worksheet->getCell("AN".$i)->getCalculatedValue();
								if ($endorse_submitt == null){
									$endorse_submit = null;
								}else{
									$endorse_submit = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($endorse_submitt));
								}
								//$endorse_submitt = $worksheet->getCell("AN".$i)->getCalculatedValue();
								//$endorse_submitt = new DateTime("1899-12-30 + $endorse_submitt days");
								//$endorse_submit = $endorse_submitt->format('Y-m-d');
								
								$endorse_approvedt = $worksheet->getCell("AP".$i)->getCalculatedValue();
								if ($endorse_approvedt == null){
									$endorse_approved = null;
								}else{
									$endorse_approved = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($endorse_approvedt));
								}
								//$endorse_approvedt = $worksheet->getCell("AP".$i)->getCalculatedValue();
								//$endorse_approvedt = new DateTime("1899-12-30 + $endorse_approvedt days");
								//$endorse_approved = $endorse_approvedt->format('Y-m-d');
								
								$dc_submitt = $worksheet->getCell("AR".$i)->getCalculatedValue();
								if ($dc_submitt == null){
									$dc_submit = null;
								}else{
									$dc_submit = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($dc_submitt));
								}
								//$dc_submitt = $worksheet->getCell("AR".$i)->getCalculatedValue();
								//$dc_submitt = new DateTime("1899-12-30 + $dc_submitt days");
								//$dc_submit = $dc_submitt->format('Y-m-d');

								$dc_approvedt = $worksheet->getCell("AT".$i)->getCalculatedValue();
								if ($dc_approvedt == null){
									$dc_approved = null;
								}else{
									$dc_approved = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($dc_approvedt));
								}
								//$dc_approvedt = $worksheet->getCell("AT".$i)->getCalculatedValue();
								//$dc_approvedt = new DateTime("1899-12-30 + $dc_approvedt days");
								//$dc_approved = $dc_approvedt->format('Y-m-d');
								
								$arrayinsertbenar =  array(
									'boqno' => $worksheet->getCell("B".$i)->getCalculatedValue(),
									'tbl_master_tracker_siteinfo_id' => $ceksiteinfo['id'],
									'10_lld_ndb' => $worksheet->getCell("P".$i)->getCalculatedValue(),
									'22_tssr_pdf' => $worksheet->getCell("Q".$i)->getCalculatedValue(),
									'23_sid_pdf' => $worksheet->getCell("R".$i)->getCalculatedValue(),
									'50_boq_pdf' => $worksheet->getCell("S".$i)->getCalculatedValue(),
									'56_atf_xls' => $worksheet->getCell("T".$i)->getCalculatedValue(),
									'56_atf_pdf' => $worksheet->getCell("U".$i)->getCalculatedValue(),
									'57_atp_functional' => $worksheet->getCell("V".$i)->getCalculatedValue(),
									'57_atp_physical' => $worksheet->getCell("W".$i)->getCalculatedValue(),
									'61_redline_pdf' => $worksheet->getCell("X".$i)->getCalculatedValue(),
									'62_bd_dwg' => $worksheet->getCell("Y".$i)->getCalculatedValue(),
									'63_abd_pdf' => $worksheet->getCell("Z".$i)->getCalculatedValue(),
									'xx_others' => $worksheet->getCell("AA".$i)->getCalculatedValue(),
									'xx_others2' => $worksheet->getCell("AB".$i)->getCalculatedValue(),
									'doc_submit' => $doc_submit,
									'reviewer' => $worksheet->getCell("AD".$i)->getCalculatedValue(),
									'doc_accept' => $doc_accept,
									'doc_status' => $worksheet->getCell("AF".$i)->getCalculatedValue(),
									'mcr_exit_accept' => $mcr_exit_accept,
									'endorse_submit' => $endorse_submit,
									'approver' => $worksheet->getCell("AO".$i)->getCalculatedValue(),
									'endorse_approved' => $endorse_approved,
									'endorse_status' => $worksheet->getCell("AQ".$i)->getCalculatedValue(),
									'dc_submit' => $dc_submit,
									'dc_reviewer' => $worksheet->getCell("AS".$i)->getCalculatedValue(),
									'dc_approved' => $dc_approved,
									'dc_status' => $worksheet->getCell("AU".$i)->getCalculatedValue(),
									'oa_to_atp' => $worksheet->getCell("AV".$i)->getCalculatedValue(),
									'atp_to_submit' => $worksheet->getCell("AW".$i)->getCalculatedValue(),
									'submit_to_accept' => $worksheet->getCell("AX".$i)->getCalculatedValue(),
									'accept_to_endorse' => $worksheet->getCell("AY".$i)->getCalculatedValue(),
									'endorse_to_dc_approved' => $worksheet->getCell("AZ".$i)->getCalculatedValue(),
									'remarks' => $worksheet->getCell("BA".$i)->getCalculatedValue(),
									'status' => 1,
									'file_name' => $filen,
									'update_by' => $this->auth['nama_user'],
									'update_date' => date('Y-m-d H:i:s'),
								//	'70_ssv' => $worksheet->getCell("AG".$i)->getCalculatedValue(),
								//	'71_rssi' => $worksheet->getCell("AH".$i)->getCalculatedValue(),
								//	'73_pmr' => $worksheet->getCell("AI".$i)->getCalculatedValue(),
								//	'74_alarm_log' => $worksheet->getCell("AJ".$i)->getCalculatedValue(),
								//	'xx_others3' => $worksheet->getCell("AK".$i)->getCalculatedValue(),
								//	'xx_others4' => $worksheet->getCell("AL".$i)->getCalculatedValue(),
								);
								//$this->db->update('tbl_master_tracker_siteprogress', $arraysiteprogress, array('boqno'=>$worksheet->getCell("B".$i)->getCalculatedValue()) );
								array_push($array_benar, $arrayinsertbenar);
							}else{
								$statusdata = false;
								$arraysiteinfosalah['id'] = $worksheet->getCell("A".$i)->getCalculatedValue();
								$arraysiteinfosalah['boqno'] = $worksheet->getCell("B".$i)->getCalculatedValue();
							}
							
							if($statusdata == false){
								$arrayinsertsalah = array(
									'row' => $i,
									'siteinfo' => $arraysiteinfosalah,
								);
								array_push($array_salah, $arrayinsertsalah);
							}
						}
					}
					
					if($array_benar){
						foreach($array_benar as $k => $v){
							$this->db->update('tbl_master_tracker_sitebinder', $array_benar[$k], array('boqno'=>$v['boqno']) );
						}
						
						$arrayupload = array(
							'type_tracker' => $type,
							'file_name' => $filen,
							'type_upload' => $method,
							'remark' => $this->input->post('remark'),
							'update_by' => $this->auth['nama_user'],
							'update_date' => date('Y-m-d H:i:s')
						);
						$this->db->insert('tbl_uploader_tracker', $arrayupload);
					}
					$insertbatchstatus = false;
				break;
				case "acceptanceclosing":
					for($i=6; $i <= $worksheet->getHighestRow(); $i++){
						$statusdata = true;
						$arraysiteinfosalah = array();

						if($worksheet->getCell("B".$i)->getCalculatedValue() != ""){
							$arraysiteinfo = array(
								'boqno' => $worksheet->getCell("B".$i)->getCalculatedValue(),
							);
							$ceksiteinfo = $this->db->get_where('tbl_master_tracker_siteinfo', $arraysiteinfo)->row_array();
							if(isset($ceksiteinfo)){
								$mcr_exit_datet = $worksheet->getCell("N".$i)->getCalculatedValue();
								if ($mcr_exit_datet == null){
									$mcr_exit_date = null;
								}else{
									$mcr_exit_date = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($mcr_exit_datet));
								}
								//$mcr_exit_datet = $worksheet->getCell("N".$i)->getCalculatedValue();
								//$mcr_exit_datet = new DateTime("1899-12-30 + $mcr_exit_datet days");
								//$mcr_exit_date = $mcr_exit_datet->format('Y-m-d');
								
								$pac_datet = $worksheet->getCell("P".$i)->getCalculatedValue();
								if ($pac_datet == null){
									$pac_date = null;
								}else{
									$pac_date = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($pac_datet));
								}
								//$pac_datet = $worksheet->getCell("P".$i)->getCalculatedValue();
								//$pac_datet = new DateTime("1899-12-30 + $pac_datet days");
								//$pac_date = $pac_datet->format('Y-m-d');
								
								$fac_datet = $worksheet->getCell("P".$i)->getCalculatedValue();
								if ($fac_datet == null){
									$fac_date = null;
								}else{
									$fac_date = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($fac_datet));
								}
								//$fac_datet = $worksheet->getCell("R".$i)->getCalculatedValue();
								//$fac_datet = new DateTime("1899-12-30 + $fac_datet days");
								//$fac_date = $fac_datet->format('Y-m-d');
								
								$babt_submitt = $worksheet->getCell("X".$i)->getCalculatedValue();
								if ($babt_submitt == null){
									$babt_submit = null;
								}else{
									$babt_submit = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($babt_submitt));
								}
								//$babt_submitt = $worksheet->getCell("X".$i)->getCalculatedValue();
								//$babt_submitt = new DateTime("1899-12-30 + $babt_submitt days");
								//$babt_submit = $babt_submitt->format('Y-m-d');
								
								$babt_approvedt = $worksheet->getCell("Y".$i)->getCalculatedValue();
								if ($babt_approvedt == null){
									$babt_approved = null;
								}else{
									$babt_approved = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($babt_approvedt));
								}
								//$babt_approvedt = $worksheet->getCell("Y".$i)->getCalculatedValue();
								//$babt_approvedt = new DateTime("1899-12-30 + $babt_approvedt days");
								//$babt_approved = $babt_approvedt->format('Y-m-d');
								
								$baut1_datet = $worksheet->getCell("Z".$i)->getCalculatedValue();
								if ($baut1_datet == null){
									$baut1_date = null;
								}else{
									$baut1_date = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($baut1_datet));
								}
								//$baut1_datet = $worksheet->getCell("Z".$i)->getCalculatedValue();
								//$baut1_datet = new DateTime("1899-12-30 + $baut1_datet days");
								//$baut1_date = $baut1_datet->format('Y-m-d');

								$bast1_datet = $worksheet->getCell("AB".$i)->getCalculatedValue();
								if ($bast1_datet == null){
									$bast1_date = null;
								}else{
									$bast1_date = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($bast1_datet));
								}
								//$bast1_datet = $worksheet->getCell("AB".$i)->getCalculatedValue();
								//$bast1_datet = new DateTime("1899-12-30 + $bast1_datet days");
								//$bast1_date = $bast1_datet->format('Y-m-d');

								$baut2_datet = $worksheet->getCell("AC".$i)->getCalculatedValue();
								if ($baut2_datet == null){
									$baut2_date = null;
								}else{
									$baut2_datet = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($baut2_datet));
								}
								//$baut2_datet = $worksheet->getCell("AC".$i)->getCalculatedValue();
								//$baut2_datet = new DateTime("1899-12-30 + $baut2_datet days");
								//$baut2_date = $baut2_datet->format('Y-m-d');
								
								$bast2_datet = $worksheet->getCell("AE".$i)->getCalculatedValue();
								if ($bast2_datet == null){
									$bast2_date = null;
								}else{
									$bast2_date = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($bast2_datet));
								}
								//$bast2_datet = $worksheet->getCell("AE".$i)->getCalculatedValue();
								//$bast2_datet = new DateTime("1899-12-30 + $bast2_datet days");
								//$bast2_date = $bast2_datet->format('Y-m-d');
								
								$baut3_datet = $worksheet->getCell("AF".$i)->getCalculatedValue();
								if ($baut3_datet == null){
									$baut3_date = null;
								}else{
									$baut3_date = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($baut3_datet));
								}
								//$baut3_datet = $worksheet->getCell("AF".$i)->getCalculatedValue();
								//$baut3_datet = new DateTime("1899-12-30 + $baut3_datet days");
								//$baut3_date = $baut3_datet->format('Y-m-d');
								
								$bast3_datet = $worksheet->getCell("AH".$i)->getCalculatedValue();
								if ($bast3_datet == null){
									$bast3_date = null;
								}else{
									$bast3_date = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($bast3_datet));
								}
								//$bast3_datet = $worksheet->getCell("AH".$i)->getCalculatedValue();
								//$bast3_datet = new DateTime("1899-12-30 + $bast3_datet days");
								//$bast3_date = $bast3_datet->format('Y-m-d');
								
								$invoice1_datet = $worksheet->getCell("AK".$i)->getCalculatedValue();
								if ($invoice1_datet == null){
									$invoice1_date = null;
								}else{
									$invoice1_date = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($invoice1_datet));
								}
								//$invoice1_datet = $worksheet->getCell("AK".$i)->getCalculatedValue();
								//$invoice1_datet = new DateTime("1899-12-30 + $invoice1_datet days");
								//$invoice1_date = $invoice1_datet->format('Y-m-d');
								
								$remittance1_datet = $worksheet->getCell("AM".$i)->getCalculatedValue();
								if ($remittance1_datet == null){
									$remittance1_date = null;
								}else{
									$remittance1_date = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($remittance1_datet));
								}
								//$remittance1_datet = $worksheet->getCell("AM".$i)->getCalculatedValue();
								//$remittance1_datet = new DateTime("1899-12-30 + $remittance1_datet days");
								//$remittance1_date = $remittance1_datet->format('Y-m-d');

								$invoice2_datet = $worksheet->getCell("AN".$i)->getCalculatedValue();
								if ($invoice2_datet == null){
									$invoice2_date = null;
								}else{
									$invoice2_date = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($invoice2_datet));
								}
								//$invoice2_datet = $worksheet->getCell("AN".$i)->getCalculatedValue();
								//$invoice2_datet = new DateTime("1899-12-30 + $invoice2_datet days");
								//$invoice2_date = $invoice2_datet->format('Y-m-d');

								$remittance2_datet = $worksheet->getCell("AP".$i)->getCalculatedValue();
								if ($remittance2_datet == null){
									$remittance2_date = null;
								}else{
									$remittance2_date = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($remittance2_datet));
								}
								//$remittance2_datet = $worksheet->getCell("AP".$i)->getCalculatedValue();
								//$remittance2_datet = new DateTime("1899-12-30 + $remittance2_datet days");
								//$remittance2_date = $remittance2_datet->format('Y-m-d');
								
								$invoice3_datet = $worksheet->getCell("AQ".$i)->getCalculatedValue();
								if ($invoice3_datet == null){
									$invoice3_date = null;
								}else{
									$invoice3_date = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($invoice3_datet));
								}
								//$invoice3_datet = $worksheet->getCell("AQ".$i)->getCalculatedValue();
								//$invoice3_datet = new DateTime("1899-12-30 + $invoice3_datet days");
								//$invoice3_date = $invoice3_datet->format('Y-m-d');

								$remittance3_datet = $worksheet->getCell("AS".$i)->getCalculatedValue();
								if ($remittance3_datet == null){
									$remittance3_date = null;
								}else{
									$remittance3_date = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($remittance3_datet));
								}
								//$remittance3_datet = $worksheet->getCell("AS".$i)->getCalculatedValue();
								//$remittance3_datet = new DateTime("1899-12-30 + $remittance3_datet days");
								//$remittance3_date = $remittance3_datet->format('Y-m-d');
								
								$arrayinsertbenar =  array(
									'boqno' => $worksheet->getCell("B".$i)->getCalculatedValue(),
									'tbl_master_tracker_siteinfo_id' => $ceksiteinfo['id'],
									'mcr_exit_date' => $mcr_exit_date,
									'mcr_exit_no' => $worksheet->getCell("O".$i)->getCalculatedValue(),
									'pac_date' => $pac_date,
									'pac_no' => $worksheet->getCell("Q".$i)->getCalculatedValue(),
									'fac_date' => $fac_date,
									'fac_no' => $worksheet->getCell("S".$i)->getCalculatedValue(),
									'top_certificate' => $worksheet->getCell("T".$i)->getCalculatedValue(),
									'remarks_certificate' => $worksheet->getCell("U".$i)->getCalculatedValue(),
									'pmis_status' => $worksheet->getCell("V".$i)->getCalculatedValue(),
									'pmp_status' => $worksheet->getCell("W".$i)->getCalculatedValue(),
									'babt_submit' => $babt_submit,
									'babt_approved' => $babt_approved,
									'baut1_date' => $baut1_date,
									'baut1_no' => $worksheet->getCell("AA".$i)->getCalculatedValue(),
									'bast1_date' => $bast1_date,
									'baut2_date' => $baut2_date,
									'baut2_no' => $worksheet->getCell("AD".$i)->getCalculatedValue(),
									'bast2_date' => $bast2_date,
									'baut3_date' => $baut3_date,
									'baut3_no' => $worksheet->getCell("AG".$i)->getCalculatedValue(),
									'bast3_date' => $bast3_date,
									'top_baut' => $worksheet->getCell("AI".$i)->getCalculatedValue(),
									'remarks_baut' => $worksheet->getCell("AJ".$i)->getCalculatedValue(),
									'invoice1_date' => $invoice1_date,
									'invoice1_no' => $worksheet->getCell("AL".$i)->getCalculatedValue(),
									'remittance1_date' => $remittance1_date,
									'invoice2_date' => $invoice2_date,
									'invoice2_no' => $worksheet->getCell("AO".$i)->getCalculatedValue(),
									'remittance2_date' => $remittance2_date,
									'invoice3_date' => $invoice3_date,
									'invoice3_no' => $worksheet->getCell("AR".$i)->getCalculatedValue(),
									'remittance3_date' => $remittance3_date,
									'top_invoice' => $worksheet->getCell("AT".$i)->getCalculatedValue(),
									'remarks_invoice' => $worksheet->getCell("AU".$i)->getCalculatedValue(),
									'status' => 1,
									'file_name' => $filen,
									'update_by' => $this->auth['nama_user'],
									'update_date' => date('Y-m-d H:i:s'),
								);
								//$this->db->update('tbl_master_tracker_siteprogress', $arraysiteprogress, array('boqno'=>$worksheet->getCell("B".$i)->getCalculatedValue()) );
								array_push($array_benar, $arrayinsertbenar);
							}else{
								$statusdata = false;
								$arraysiteinfosalah['id'] = $worksheet->getCell("A".$i)->getCalculatedValue();
								$arraysiteinfosalah['boqno'] = $worksheet->getCell("B".$i)->getCalculatedValue();
							}
							
							if($statusdata == false){
								$arrayinsertsalah = array(
									'row' => $i,
									'siteinfo' => $arraysiteinfosalah,
								);
								array_push($array_salah, $arrayinsertsalah);
							}
						}
					}
					
					if($array_benar){
						foreach($array_benar as $k => $v){
							$this->db->update('tbl_master_tracker_accclosing', $array_benar[$k], array('boqno'=>$v['boqno']) );
						}
						
						$arrayupload = array(
							'type_tracker' => $type,
							'file_name' => $filen,
							'type_upload' => $method,
							'remark' => $this->input->post('remark'),
							'update_by' => $this->auth['nama_user'],
							'update_date' => date('Y-m-d H:i:s')
						);
						$this->db->insert('tbl_uploader_tracker', $arrayupload);
					}
					$insertbatchstatus = false;
				break;
				case "costsales":
					for($i=6; $i <= $worksheet->getHighestRow(); $i++){
						$statusdata = true;
						$arraysiteinfosalah = array();

						if($worksheet->getCell("B".$i)->getCalculatedValue() != ""){
							$arraysiteinfo = array(
								'boqno' => $worksheet->getCell("B".$i)->getCalculatedValue(),
							);
							$ceksiteinfo = $this->db->get_where('tbl_master_tracker_siteinfo', $arraysiteinfo)->row_array();
							if(isset($ceksiteinfo)){
								
								$arrayinsertbenar =  array(
									'boqno' => $worksheet->getCell("B".$i)->getCalculatedValue(),
									'tbl_master_tracker_siteinfo_id' => $ceksiteinfo['id'],
									'pac_baseline' => $worksheet->getCell("M".$i)->getCalculatedValue(),
									'delay_no_onair' => $worksheet->getCell("O".$i)->getCalculatedValue(),
								//	'delay_on_days' => $worksheet->getCell("P".$i)->getCalculatedValue(),
									'delay_no_pac' => $worksheet->getCell("Q".$i)->getCalculatedValue(),
								//	'delay_on_days2' => $worksheet->getCell("R".$i)->getCalculatedValue(),
									'target_sales' => $worksheet->getCell("S".$i)->getCalculatedValue(),
									'actual_sales' => $worksheet->getCell("T".$i)->getCalculatedValue(),
									'target_cost' => $worksheet->getCell("U".$i)->getCalculatedValue(),
									'actual_cost' => $worksheet->getCell("V".$i)->getCalculatedValue(),
									'remarks' => $worksheet->getCell("W".$i)->getCalculatedValue(),
									'file_name' => $filen,
									'update_by' => $this->auth['nama_user'],
									'update_date' => date('Y-m-d H:i:s'),
								);
								//$this->db->update('tbl_master_tracker_siteprogress', $arraysiteprogress, array('boqno'=>$worksheet->getCell("B".$i)->getCalculatedValue()) );
								array_push($array_benar, $arrayinsertbenar);
							}else{
								$statusdata = false;
								$arraysiteinfosalah['id'] = $worksheet->getCell("A".$i)->getCalculatedValue();
								$arraysiteinfosalah['boqno'] = $worksheet->getCell("B".$i)->getCalculatedValue();
							}
							
							if($statusdata == false){
								$arrayinsertsalah = array(
									'row' => $i,
									'siteinfo' => $arraysiteinfosalah,
								);
								array_push($array_salah, $arrayinsertsalah);
							}
						}
					}
					
					if($array_benar){
						foreach($array_benar as $k => $v){
							$this->db->update('tbl_master_tracker_costsales', $array_benar[$k], array('boqno'=>$v['boqno']) );
						}
						
						$arrayupload = array(
							'type_tracker' => $type,
							'file_name' => $filen,
							'type_upload' => $method,
							'remark' => $this->input->post('remark'),
							'update_by' => $this->auth['nama_user'],
							'update_date' => date('Y-m-d H:i:s')
						);
						$this->db->insert('tbl_uploader_tracker', $arrayupload);
					}
					$insertbatchstatus = false;
				break;

				case "received":
					$boquery = true;
					$boqaseli = 1;
					$arrayboq = array();
					for($i=6; $i <= $worksheet->getHighestRow(); $i++) {
						$statusdata = true;
						$arrayphasesalah = array();
						$arraypotypesalah = array();
						$arrayponosalah = array();
						$arraycrnosalah = array();

						if($worksheet->getCell("E".$i)->getCalculatedValue() != "") {
							$arrayphase = array(
								'phase_code' => $worksheet->getCell("E".$i)->getCalculatedValue(),
							);
							$cekphase = $this->db->get_where('tbl_master_phase', $arrayphase)->row_array();
							if(isset($cekphase)) {
								$tbl_master_phase_id = $cekphase['id'];
							}else{
								$statusdata = false;
								$arrayphasesalah['phase_code'] = $worksheet->getCell("E".$i)->getCalculatedValue();
								$arrayphasesalah['phase_name'] = $worksheet->getCell("F".$i)->getCalculatedValue();
								$arrayphasesalah['phase_year'] = $worksheet->getCell("G".$i)->getCalculatedValue();
							}
						}

						$ponod = $worksheet->getCell("K".$i)->getCalculatedValue();
						if($ponod == null){
							$tbl_master_po_id = null;
						}else{
							if($worksheet->getCell("K".$i)->getCalculatedValue() != ""){
								$arraypono = array(
									'po_no' => $worksheet->getCell("K".$i)->getCalculatedValue(),
								);
								$cekpono = $this->db->get_where('tbl_master_po', $arraypono)->row_array();
								if(isset($cekpono)){
									$tbl_master_po_id = $cekpono['id'];
								}else{
									$statusdata = false;
									$arrayponosalah['po_no'] = $worksheet->getCell("K".$i)->getCalculatedValue();
								}
							}
						}
						/*if($worksheet->getCell("K".$i)->getCalculatedValue() != ""){
							$arraypono = array(
								'po_no' => $worksheet->getCell("K".$i)->getCalculatedValue(),
							);
							$cekpono = $this->db->get_where('tbl_master_po', $arraypono)->row_array();
							if(isset($cekpono)){
								$tbl_master_po_id = $cekpono['id'];
							}else{
								$statusdata = false;
								$arrayponosalah['po_no'] = $worksheet->getCell("K".$i)->getCalculatedValue();
							}
						}*/

						$crnod = $worksheet->getCell("BR".$i)->getCalculatedValue();
						if($crnod == null){
							$tbl_master_cr_id = null;
						}else{
							if($worksheet->getCell("BR".$i)->getCalculatedValue() != ""){
								$arraycrno = array(
									'cr_no_nokia' => $worksheet->getCell("BR".$i)->getCalculatedValue(),
								);
								$cekcrno = $this->db->get_where('tbl_master_cr', $arraycrno)->row_array();
								if(isset($cekcrno)){
									$tbl_master_cr_id = $cekcrno['id'];
								}else{
									$statusdata = false;
									$arraycrnosalah['cr_no_nokia'] = $worksheet->getCell("BR".$i)->getCalculatedValue();
								}
							}
						}
						
						$statuscrd = ($worksheet->getCell("AL".$i)->getCalculatedValue() - $worksheet->getCell("BN".$i)->getCalculatedValue());
						if ($statuscrd == 0) {
							$statuscr = "NO CHANGE";
						}elseif ($statuscrd > 0){
							$statuscr = "REDUCTION";
						}elseif ($statuscrd < 0){
							$statuscr = "ADDITIONAL";
						}
						$materialgrossprice = $worksheet->getCell("AM".$i)->getCalculatedValue();
						$materialnettprice = ($worksheet->getCell("AM".$i)->getCalculatedValue() * (1 - $worksheet->getCell("AT".$i)->getCalculatedValue() / 100));
						$totalgrossprice = ($worksheet->getCell("AL".$i)->getCalculatedValue() * $worksheet->getCell("AM".$i)->getCalculatedValue()); 
						$totalnettprice = ($materialnettprice * $worksheet->getCell("AL".$i)->getCalculatedValue());
						$totalnetactual = ($materialnettprice * $worksheet->getCell("BN".$i)->getCalculatedValue());
						$totalnetdelta = ($totalnettprice - $totalnetactual);

						if($statusdata == true){
							if($method == 'N'){
								if($boquery == true){
									$sqlboq = "
										SELECT MAX(id) as boq_max
										FROM tbl_all_database											
									";
									$queryboq = $this->db->query($sqlboq)->row_array();
									if($queryboq['boq_max'] != null){
										$boqno = ($queryboq['boq_max'] + 1);	
										$boqaseli = ($queryboq['boq_max'] + 1);
									}else{
										$boqaseli = 10000000 + 1;
									}
									$boquery = false;
								}else{
									$boqaseli = ($boqaseli + 1);	
									$boquery = false;
								}
								$arrayinsertbenar = array(
								'id_reff1' => $boqaseli,
								'tbl_master_phase_id' => $tbl_master_phase_id,
								'tbl_master_po_id' => $tbl_master_po_id,
								'tbl_master_cr_id' => $tbl_master_cr_id,
								'level' => 1,
								'pr_number' => $worksheet->getCell("I".$i)->getCalculatedValue(),
								'pr_line_item' => $worksheet->getCell("J".$i)->getCalculatedValue(),
								'purchasing_group' => $worksheet->getCell("M".$i)->getCalculatedValue(),
								'document_type' => $worksheet->getCell("N".$i)->getCalculatedValue(),
								'vendor_account_number' => $worksheet->getCell("O".$i)->getCalculatedValue(),
								'contact_person' => $worksheet->getCell("P".$i)->getCalculatedValue(),
								'term_of_payment' => $worksheet->getCell("Q".$i)->getCalculatedValue(),	
								'incoterms_code' => $worksheet->getCell("R".$i)->getCalculatedValue(),
								'incoterms_location' => $worksheet->getCell("S".$i)->getCalculatedValue(),
								'implementer' => $worksheet->getCell("U".$i)->getCalculatedValue(),
								'manager' => $worksheet->getCell("V".$i)->getCalculatedValue(),
								'document_text_free_text_notes' => $worksheet->getCell("W".$i)->getCalculatedValue(),
								'collective_no' => $worksheet->getCell("X".$i)->getCalculatedValue(),
								'discount_type_header' => $worksheet->getCell("Y".$i)->getCalculatedValue(),
								'discount_amount_percentage_header' => $worksheet->getCell("Z".$i)->getCalculatedValue(),
								'line_item' => $worksheet->getCell("AA".$i)->getCalculatedValue(),
								'requester' => $worksheet->getCell("AB".$i)->getCalculatedValue(),
								'rfx_auction_number' => $worksheet->getCell("AC".$i)->getCalculatedValue(),	
								'contract_number' => $worksheet->getCell("AD".$i)->getCalculatedValue(),
								'account_assignment_category' => $worksheet->getCell("AE".$i)->getCalculatedValue(),
								'item_category' => $worksheet->getCell("AF".$i)->getCalculatedValue(),
								'tax_code' => $worksheet->getCell("AG".$i)->getCalculatedValue(),
								'material_number' => $worksheet->getCell("AH".$i)->getCalculatedValue(),
								'short_text' => $worksheet->getCell("AI".$i)->getCalculatedValue(),
								'item_text' => $worksheet->getCell("AJ".$i)->getCalculatedValue(),
								'limitt' => $worksheet->getCell("AK".$i)->getCalculatedValue(),
								'materials_quantity' => $worksheet->getCell("AL".$i)->getCalculatedValue(),
								'material_price' => $worksheet->getCell("AM".$i)->getCalculatedValue(),
								'material_group' => $worksheet->getCell("AN".$i)->getCalculatedValue(),	
								'plant' => $worksheet->getCell("AO".$i)->getCalculatedValue(),
								'delivery_date' => $worksheet->getCell("AP".$i)->getCalculatedValue(),
								'require_gr' => $worksheet->getCell("AQ".$i)->getCalculatedValue(),
								'invoice_receipt' => $worksheet->getCell("AR".$i)->getCalculatedValue(),
								'discount_type_item' => $worksheet->getCell("AS".$i)->getCalculatedValue(),
								'amount_percentage_item' => $worksheet->getCell("AT".$i)->getCalculatedValue(),
								'indicator' => $worksheet->getCell("AU".$i)->getCalculatedValue(),
								'assigned_to_line_item' => $worksheet->getCell("AV".$i)->getCalculatedValue(),
								'service_number' => $worksheet->getCell("AW".$i)->getCalculatedValue(),
								'services_quantity' => $worksheet->getCell("AX".$i)->getCalculatedValue(),
								'gross_price' => $worksheet->getCell("AY".$i)->getCalculatedValue(),	
								'gl_account_number' => $worksheet->getCell("AZ".$i)->getCalculatedValue(),
								'business_area' => $worksheet->getCell("BA".$i)->getCalculatedValue(),
								'cost_center' => $worksheet->getCell("BB".$i)->getCalculatedValue(),
								'wbs' => $worksheet->getCell("BC".$i)->getCalculatedValue(),
								'internal_order' => $worksheet->getCell("BD".$i)->getCalculatedValue(),
								'assets_number' => $worksheet->getCell("BE".$i)->getCalculatedValue(),
								'network_number' => $worksheet->getCell("BF".$i)->getCalculatedValue(),
								'activity_number' => $worksheet->getCell("BG".$i)->getCalculatedValue(),
								'assigned_to_line_item2' => $worksheet->getCell("BH".$i)->getCalculatedValue(),
								'invoicing_plan_date' => $worksheet->getCell("BI".$i)->getCalculatedValue(),
								'percentage_to_be_invoiced' => $worksheet->getCell("BJ".$i)->getCalculatedValue(),
								'values_to_be_invoiced' => $worksheet->getCell("BK".$i)->getCalculatedValue(),
								'buyer' => $worksheet->getCell("BL".$i)->getCalculatedValue(),
								'actual_qty' => $worksheet->getCell("BN".$i)->getCalculatedValue(),	
								'delta_qty' => ($worksheet->getCell("AL".$i)->getCalculatedValue() - $worksheet->getCell("BN".$i)->getCalculatedValue()),	
								'status_cr_qty' => $statuscr,
								'remarkscr' => $worksheet->getCell("BQ".$i)->getCalculatedValue(),
								'material_gross_price' =>  $materialgrossprice,
								'material_nett_price' => $materialnettprice,
								'total_gross_price' => $totalgrossprice,
								'total_nett_price' => $totalnettprice,
								'total_net_actual' => $totalnetactual,
								'total_net_delta' => $totalnetdelta,	
								'file_name' => $filen,
								'update_by' => $this->auth['nama_user'],
								'update_date' => date('Y-m-d H:i:s'),
								'status' => 1
								);
							}elseif($method == 'U'){
								/*if($boquery == true){
									$sqlboq = "
										SELECT MAX(id) as boq_max
										FROM tbl_all_database											
									";
									$queryboq = $this->db->query($sqlboq)->row_array();
									if($queryboq['boq_max'] != null){
										$boqno = ($queryboq['boq_max'] + 1);	
										$boqaseli = ($queryboq['boq_max'] + 1);
									}else{
										$boqaseli = 10000000 + 1;
									}
									$boquery = false;
								}else{
									$boqaseli = ($boqaseli + 1);	
									$boquery = false;
								}*/
								$idreff1 = $worksheet->getCell("A".$i)->getCalculatedValue();
								$arrayinsertbenar = array(
									'id_reff1' => $idreff1,
									'tbl_master_phase_id' => $tbl_master_phase_id,
									'tbl_master_po_id' => $tbl_master_po_id,
									'tbl_master_cr_id' => $tbl_master_cr_id,
									'level' => 1,
									'pr_number' => $worksheet->getCell("I".$i)->getCalculatedValue(),
									'pr_line_item' => $worksheet->getCell("J".$i)->getCalculatedValue(),
									'purchasing_group' => $worksheet->getCell("M".$i)->getCalculatedValue(),
									'document_type' => $worksheet->getCell("N".$i)->getCalculatedValue(),
									'vendor_account_number' => $worksheet->getCell("O".$i)->getCalculatedValue(),
									'contact_person' => $worksheet->getCell("P".$i)->getCalculatedValue(),
									'term_of_payment' => $worksheet->getCell("Q".$i)->getCalculatedValue(),	
									'incoterms_code' => $worksheet->getCell("R".$i)->getCalculatedValue(),
									'incoterms_location' => $worksheet->getCell("S".$i)->getCalculatedValue(),
									'implementer' => $worksheet->getCell("U".$i)->getCalculatedValue(),
									'manager' => $worksheet->getCell("V".$i)->getCalculatedValue(),
									'document_text_free_text_notes' => $worksheet->getCell("W".$i)->getCalculatedValue(),
									'collective_no' => $worksheet->getCell("X".$i)->getCalculatedValue(),
									'discount_type_header' => $worksheet->getCell("Y".$i)->getCalculatedValue(),
									'discount_amount_percentage_header' => $worksheet->getCell("Z".$i)->getCalculatedValue(),
									'line_item' => $worksheet->getCell("AA".$i)->getCalculatedValue(),
									'requester' => $worksheet->getCell("AB".$i)->getCalculatedValue(),
									'rfx_auction_number' => $worksheet->getCell("AC".$i)->getCalculatedValue(),	
									'contract_number' => $worksheet->getCell("AD".$i)->getCalculatedValue(),
									'account_assignment_category' => $worksheet->getCell("AE".$i)->getCalculatedValue(),
									'item_category' => $worksheet->getCell("AF".$i)->getCalculatedValue(),
									'tax_code' => $worksheet->getCell("AG".$i)->getCalculatedValue(),
									'material_number' => $worksheet->getCell("AH".$i)->getCalculatedValue(),
									'short_text' => $worksheet->getCell("AI".$i)->getCalculatedValue(),
									'item_text' => $worksheet->getCell("AJ".$i)->getCalculatedValue(),
									'limitt' => $worksheet->getCell("AK".$i)->getCalculatedValue(),
									'materials_quantity' => $worksheet->getCell("AL".$i)->getCalculatedValue(),
									'material_price' => $worksheet->getCell("AM".$i)->getCalculatedValue(),
									'material_group' => $worksheet->getCell("AN".$i)->getCalculatedValue(),	
									'plant' => $worksheet->getCell("AO".$i)->getCalculatedValue(),
									'delivery_date' => $worksheet->getCell("AP".$i)->getCalculatedValue(),
									'require_gr' => $worksheet->getCell("AQ".$i)->getCalculatedValue(),
									'invoice_receipt' => $worksheet->getCell("AR".$i)->getCalculatedValue(),
									'discount_type_item' => $worksheet->getCell("AS".$i)->getCalculatedValue(),
									'amount_percentage_item' => $worksheet->getCell("AT".$i)->getCalculatedValue(),
									'indicator' => $worksheet->getCell("AU".$i)->getCalculatedValue(),
									'assigned_to_line_item' => $worksheet->getCell("AV".$i)->getCalculatedValue(),
									'service_number' => $worksheet->getCell("AW".$i)->getCalculatedValue(),
									'services_quantity' => $worksheet->getCell("AX".$i)->getCalculatedValue(),
									'gross_price' => $worksheet->getCell("AY".$i)->getCalculatedValue(),	
									'gl_account_number' => $worksheet->getCell("AZ".$i)->getCalculatedValue(),
									'business_area' => $worksheet->getCell("BA".$i)->getCalculatedValue(),
									'cost_center' => $worksheet->getCell("BB".$i)->getCalculatedValue(),
									'wbs' => $worksheet->getCell("BC".$i)->getCalculatedValue(),
									'internal_order' => $worksheet->getCell("BD".$i)->getCalculatedValue(),
									'assets_number' => $worksheet->getCell("BE".$i)->getCalculatedValue(),
									'network_number' => $worksheet->getCell("BF".$i)->getCalculatedValue(),
									'activity_number' => $worksheet->getCell("BG".$i)->getCalculatedValue(),
									'assigned_to_line_item2' => $worksheet->getCell("BH".$i)->getCalculatedValue(),
									'invoicing_plan_date' => $worksheet->getCell("BI".$i)->getCalculatedValue(),
									'percentage_to_be_invoiced' => $worksheet->getCell("BJ".$i)->getCalculatedValue(),
									'values_to_be_invoiced' => $worksheet->getCell("BK".$i)->getCalculatedValue(),
									'buyer' => $worksheet->getCell("BL".$i)->getCalculatedValue(),
									'actual_qty' => $worksheet->getCell("BN".$i)->getCalculatedValue(),	
									'delta_qty' => ($worksheet->getCell("AL".$i)->getCalculatedValue() - $worksheet->getCell("BN".$i)->getCalculatedValue()),	
									'status_cr_qty' => $statuscr,
									'remarkscr' => $worksheet->getCell("BQ".$i)->getCalculatedValue(),
									'material_gross_price' =>  $materialgrossprice,
									'material_nett_price' => $materialnettprice,
									'total_gross_price' => $totalgrossprice,
									'total_nett_price' => $totalnettprice,
									'total_net_actual' => $totalnetactual,
									'total_net_delta' => $totalnetdelta,	
									'file_name' => $filen,
									'update_by' => $this->auth['nama_user'],
									'update_date' => date('Y-m-d H:i:s'),
									'status' => 1
								);
							}
								if($method == 'N'){
									array_push($array_benar, $arrayinsertbenar);
								}elseif($method == 'U'){
									$id = $worksheet->getCell("A".$i)->getCalculatedValue();
									if($id){
										unset($arrayinsertbenar['id']);
										$this->db->update('tbl_all_database', $arrayinsertbenar, array('id'=>$id) ); //echo $sql; exit;
									}
								}
							
						}else{
							$arrayinsertsalah = array(
								'row' => $i,
								//'phase' => $arrayphasesalah,
								'potype' => $arraypotypesalah,
								'masterpo' => $arrayponosalah,
								'mastercr' => $arraycrnosalah,
							);
							array_push($array_salah, $arrayinsertsalah);
						}
					}

					if(empty($array_salah)){
						$arrayupload = array(
							'file_name' => $filen,
							'type_upload' => $method,
							'type_database' => "received",
							'remarks' => $this->input->post('remark'),
							'update_by' => $this->auth['nama_user'],
							'update_date' => date('Y-m-d H:i:s'),
							'status' => 1
						);
						$this->db->insert('tbl_uploader_alldatabase', $arrayupload);
					}
					if($method == 'U'){
						if($statusdata == true) echo $statusdata;exit;
					}
					$table = "tbl_all_database";
				break;

				case "reservation":
					$arrayboq = array();
					for($i=6; $i <= $worksheet->getHighestRow(); $i++){
						$statusdata = true;
						$arrayponosalah = array();
						$arrayreservationsalah = array();

						if($worksheet->getCell("B".$i)->getCalculatedValue() != ""){
							$arrayrcv = array(
								"id" => $worksheet->getCell("B".$i)->getCalculatedValue()
							);
							$cekreceived = $this->db->get_where('tbl_all_database', $arrayrcv)->row_array();
						/*	if(isset($cekreceived)){
								$cekreceived = $cekreceived['id'];
							}else{
								$statusdata = false;
							}*/

							if($worksheet->getCell("BZ".$i)->getCalculatedValue() != ""){
								$boqnod = $worksheet->getCell("BZ".$i)->getCalculatedValue();
								if($boqnod == null){
									$tbl_master_tracker_siteinfo_id = null;
								}else{
									if($worksheet->getCell("BZ".$i)->getCalculatedValue() != ""){
										$arraysiteinfo = array(
										'boqno' => $worksheet->getCell("BZ".$i)->getCalculatedValue(),
										);
										$ceksiteinfo = $this->db->get_where('tbl_master_tracker_siteinfo', $arraysiteinfo)->row_array();
										if(isset($ceksiteinfo)){
											$tbl_master_tracker_siteinfo_id = $ceksiteinfo['id'];
										}else{
											$statusdata = false;
										}
									}
								}
							}

							$statuscrmappingd = ($worksheet->getCell("CF".$i)->getCalculatedValue() - $worksheet->getCell("CG".$i)->getCalculatedValue());
								if ($statuscrmappingd == 0) {
									$statuscrmapping = "NO CHANGE";
								}elseif ($statuscrmappingd > 0){
									$statuscrmapping = "REDUCTION";
								}elseif ($statuscrmappingd < 0){
									$statuscrmapping = "ADDITIONAL";
								}

							$totalgrosspricemapping = ($worksheet->getCell("CF".$i)->getCalculatedValue() * $worksheet->getCell("BT".$i)->getCalculatedValue());
							$totalnettpricemapping = ($worksheet->getCell("CF".$i)->getCalculatedValue() * $worksheet->getCell("BU".$i)->getCalculatedValue());
							$totalnettactualmapping = ($worksheet->getCell("CG".$i)->getCalculatedValue() * $worksheet->getCell("BU".$i)->getCalculatedValue());
							$totalnetdeltamapping = ($totalnettpricemapping - $totalnettactualmapping);

							if(isset($cekreceived)){
								if($statusdata == true){
									if($method == 'N'){
										$arrayinsertbenar = array(
											'id_reff1' => $worksheet->getCell("B".$i)->getCalculatedValue(),
											'level' => 2,
											/*'tbl_master_phase_id' => $cekreceived['tbl_master_phase_id'],
											'tbl_master_potype_id' => $cekreceived['tbl_master_potype_id'],
											'tbl_master_po_id' => $cekreceived['tbl_master_po_id'],
											'tbl_master_cr_id' => $cekreceived['tbl_master_cr_id'],
											'tbl_master_tracker_siteinfo_id' => $siteinfo,*/
											'plan_qty_mapping' => $worksheet->getCell("CF".$i)->getCalculatedValue(),
											'aqtual_qty_mapping' => $worksheet->getCell("CG".$i)->getCalculatedValue(),
											'delta_qty_mapping' => ($worksheet->getCell("CF".$i)->getCalculatedValue() - $worksheet->getCell("CG".$i)->getCalculatedValue()), 
											'status_cr_qty_mapping' => $statuscrmapping,
											'status_cr_reloc_mapping' => $worksheet->getCell("CJ".$i)->getCalculatedValue(),
											'remarks_cr_mapping' => $worksheet->getCell("CK".$i)->getCalculatedValue(),
											'remarks_cr_reloc_mapping' => $worksheet->getCell("CL".$i)->getCalculatedValue(),
											'total_gross_price_mapping' => $totalgrosspricemapping,
											'total_nett_price_mapping' => $totalnettpricemapping,
											'total_nett_actual_mapping' => $totalnettactualmapping,
											'total_net_delta_mapping' => $totalnetdeltamapping,
											'file_name' => $filen,
											'update_by' => $this->auth['nama_user'],
											'update_date' => date('Y-m-d H:i:s'),
											'status' => 1,
											'tbl_master_tracker_siteinfo_id' => $tbl_master_tracker_siteinfo_id,
										);
									}elseif($method == 'U'){
										$arrayinsertbenar = array(
											'id_reff1' => $worksheet->getCell("B".$i)->getCalculatedValue(),
											'level' => 2,
											/*'tbl_master_phase_id' => $cekreceived['tbl_master_phase_id'],
											'tbl_master_potype_id' => $cekreceived['tbl_master_potype_id'],
											'tbl_master_po_id' => $cekreceived['tbl_master_po_id'],
											'tbl_master_cr_id' => $cekreceived['tbl_master_cr_id'],
											'tbl_master_tracker_siteinfo_id' => $siteinfo,*/
											'plan_qty_mapping' => $worksheet->getCell("CF".$i)->getCalculatedValue(),
											'aqtual_qty_mapping' => $worksheet->getCell("CG".$i)->getCalculatedValue(),
											'delta_qty_mapping' => ($worksheet->getCell("CF".$i)->getCalculatedValue() - $worksheet->getCell("CG".$i)->getCalculatedValue()), 
											'status_cr_qty_mapping' => $statuscrmapping,
											'status_cr_reloc_mapping' => $worksheet->getCell("CJ".$i)->getCalculatedValue(),
											'remarks_cr_mapping' => $worksheet->getCell("CK".$i)->getCalculatedValue(),
											'remarks_cr_reloc_mapping' => $worksheet->getCell("CL".$i)->getCalculatedValue(),
											'total_gross_price_mapping' => $totalgrosspricemapping,
											'total_nett_price_mapping' => $totalnettpricemapping,
											'total_nett_actual_mapping' => $totalnettactualmapping,
											'total_net_delta_mapping' => $totalnetdeltamapping,
											'file_name' => $filen,
											'update_by' => $this->auth['nama_user'],
											'update_date' => date('Y-m-d H:i:s'),
											'status' => 1,
											'tbl_master_tracker_siteinfo_id' => $tbl_master_tracker_siteinfo_id,
										);
									}

									if($method == 'N'){
										array_push($array_benar, $arrayinsertbenar);
									}elseif($method == 'U'){
										$id = $worksheet->getCell("A".$i)->getCalculatedValue();
										if($id){
											$this->db->update('tbl_all_database', $arrayinsertbenar, array('id'=>$id) );
										} 
									}

								}else{
									$arrayinsertsalah = array(
										'row' => $i,
										'id_received' => $worksheet->getCell("B".$i)->getCalculatedValue(),
									);
									array_push($array_salah, $arrayinsertsalah);
								}
							}
						}
					}
					if(empty($array_salah)){
						$arrayupload = array(
							'file_name' => $filen,
							'type_database' => "reservation",
							'type_upload' => $method,
							'remarks' => $this->input->post('remark'),
							'update_by' => $this->auth['nama_user'],
							'update_date' => date('Y-m-d H:i:s'),
							'status' => 1
						);
						$this->db->insert('tbl_uploader_alldatabase', $arrayupload);
					}
					if($method == 'U'){
						if($statusdata == true) echo $statusdata;exit;
					}
					
					$table = "tbl_all_database";

				break;

				case "wpid":
					for($i=6; $i <= $worksheet->getHighestRow(); $i++){
						$statusdata = true;
						$arrayreservationsalah = array();

						if($worksheet->getCell("A".$i)->getCalculatedValue() != ""){
							$arrayreservation = array(
								'id' => $worksheet->getCell("A".$i)->getCalculatedValue(),
							);
							$cekreservation = $this->db->get_where('tbl_all_database', $arrayreservation)->row_array();

							if(isset($cekreservation)){
								
								$arrayinsertbenar =  array(
									'id' => $worksheet->getCell("A".$i)->getCalculatedValue(),
									'wpid' => $worksheet->getCell("E".$i)->getCalculatedValue(),
									'wp_name' => $worksheet->getCell("F".$i)->getCalculatedValue(),
									'qc_no' => $worksheet->getCell("G".$i)->getCalculatedValue(),
									'scc_no' => $worksheet->getCell("H".$i)->getCalculatedValue(),
									'por_no' => $worksheet->getCell("I".$i)->getCalculatedValue(),
									'file_name' => $filen,
									'update_by' => $this->auth['nama_user'],
									'update_date' => date('Y-m-d H:i:s'),
								);
								//$this->db->update('tbl_master_tracker_siteprogress', $arraysiteprogress, array('boqno'=>$worksheet->getCell("B".$i)->getCalculatedValue()) );
								array_push($array_benar, $arrayinsertbenar);
							}else{
								$statusdata = false;
								$arrayreservationsalah['id'] = $worksheet->getCell("A".$i)->getCalculatedValue();
							}
							
							if($statusdata == false){
								$arrayinsertsalah = array(
									'row' => $i,
									'id_reservation' => $arraysiteinfosalah,
								);
								array_push($array_salah, $arrayinsertsalah);
							}
						}
					}
					
					if($array_benar){
						foreach($array_benar as $k => $v){
							$this->db->update('tbl_all_database', $array_benar[$k], array('id'=>$v['id']) );
						}
						
						$arrayupload = array(
							'type_database' => "wpid",
							'file_name' => $filen,
							'type_upload' => $method,
							'remarks' => $this->input->post('remark'),
							'update_by' => $this->auth['nama_user'],
							'update_date' => date('Y-m-d H:i:s')
						);
						$this->db->insert('tbl_uploader_alldatabase', $arrayupload);
					}
					$insertbatchstatus = false;
				break;

				case "so":
					for($i=6; $i <= $worksheet->getHighestRow(); $i++){
						$statusdata = true;
						$arrayreservationsalah = array();

						if($worksheet->getCell("A".$i)->getCalculatedValue() != ""){
							$arrayreservation = array(
								'id' => $worksheet->getCell("A".$i)->getCalculatedValue(),
							);
							$cekreservation = $this->db->get_where('tbl_all_database', $arrayreservation)->row_array();

							if(isset($cekreservation)){
								
								$arrayinsertbenar =  array(
									'id' => $worksheet->getCell("A".$i)->getCalculatedValue(),
									'wbs_no' => $worksheet->getCell("E".$i)->getCalculatedValue(),
									'so_no1' => $worksheet->getCell("F".$i)->getCalculatedValue(),
									'so_no2' => $worksheet->getCell("G".$i)->getCalculatedValue(),
									'so_no3' => $worksheet->getCell("H".$i)->getCalculatedValue(),
									'file_name' => $filen,
									'update_by' => $this->auth['nama_user'],
									'update_date' => date('Y-m-d H:i:s'),
								);
								//$this->db->update('tbl_master_tracker_siteprogress', $arraysiteprogress, array('boqno'=>$worksheet->getCell("B".$i)->getCalculatedValue()) );
								array_push($array_benar, $arrayinsertbenar);
							}else{
								$statusdata = false;
								$arrayreservationsalah['id'] = $worksheet->getCell("A".$i)->getCalculatedValue();
							}
							
							if($statusdata == false){
								$arrayinsertsalah = array(
									'row' => $i,
									'id_reservation' => $arraysiteinfosalah,
								);
								array_push($array_salah, $arrayinsertsalah);
							}
						}
					}
					
					if($array_benar){
						foreach($array_benar as $k => $v){
							$this->db->update('tbl_all_database', $array_benar[$k], array('id'=>$v['id']) );
						}
						
						$arrayupload = array(
							'type_database' => "wpid",
							'file_name' => $filen,
							'type_upload' => $method,
							'remarks' => $this->input->post('remark'),
							'update_by' => $this->auth['nama_user'],
							'update_date' => date('Y-m-d H:i:s')
						);
						$this->db->insert('tbl_uploader_alldatabase', $arrayupload);
					}
					$insertbatchstatus = false;
				break;
			}
			
			//echo count($array_salah);exit;
			//echo "<pre>";
			//print_r($array_salah);exit;
				if(count($array_salah) != 0){
					$array_salah['folder_upload'] = $folder_aplod;
					return $array_salah;
					//exit;
				}else{
					if($array_benar){
						if($insertbatchstatus == true){	
							$this->db->insert_batch($table, $array_benar);
						}
						return 1;
					}else{
						return 0;
					}
				}
			
			/*
			if($this->db->trans_status() == false){
				$this->db->trans_rollback();
				return 0;
			}else{
				return $this->db->trans_commit();
			}
			*/
			
		}
		
	}
	
}
