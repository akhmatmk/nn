<?php /* Smarty version 3.1.27, created on 2017-07-21 14:36:54
         compiled from "/var/www/nokia.dev/public_html/__application/views/backend/modul/form/form-editpmr.html" */ ?>
<?php
/*%%SmartyHeaderCode:11954889885971af164a4606_87452072%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cef054ca32471059a0ce79259ac2a195af6315c9' => 
    array (
      0 => '/var/www/nokia.dev/public_html/__application/views/backend/modul/form/form-editpmr.html',
      1 => 1500619509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11954889885971af164a4606_87452072',
  'variables' => 
  array (
    'acak' => 0,
    'data' => 0,
    'activity_combo' => 0,
    'ne_system_combo' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5971af164ef328_41402665',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5971af164ef328_41402665')) {
function content_5971af164ef328_41402665 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11954889885971af164a4606_87452072';
?>
<div class="row wrapper border-bottom blueaye-bg page-heading">
	<div class="col-lg-10" style='margin-left:20px;'>
		<h3><b>ASSET TRANSFER FORM</b></h3>
		<ol class="breadcrumb" style='margin-bottom:10px !important;'>
            <li>
                Input ATF
            </li>
            <li class="active">
                <strong>Input ATF</strong>
            </li>
        </ol>		
	</div>
</div>
<div class="wrapper wrapper-content">
	<div class="row">
		<div class="col-lg-12" style='padding-right:0px !important;'>
			
			<div class="ibox">
				<div class="ibox-content" style='padding-bottom:5px !important;'>
					
				<form method="post" id='frmpmr_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
' class="form-horizontal">
					<input type='hidden' name='editstatus' value="<?php $_smarty_tpl->tpl_vars['editstatus'] = new Smarty_Variable('edit', null, 0);?>" /> 
					<input type='hidden' name='id' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
" /> 
	
					<div class="form-group"><label class="col-sm-2 control-label">Choose Phase name</label>
						<div class="col-sm-4">
							<select class="form-control-mobile" id="phase_no" name='tbl_master_phase_id'>

							</select>
						</div>
					</div>

					<div class="form-group"><label for="Phase_Code" class="col-sm-2 control-label">Phase Code</label>
						<div class="col-sm-4">
							<input type="text" readonly="readonly" class="form-control" name="Phase_Code" id="Phase_Code">
						</div>
					</div>

					<div class="form-group"><label for="Phase_Name" class="col-sm-2 control-label">Phase Name</label>
						<div class="col-sm-4">
							<input type="text" readonly="readonly" class="form-control" name="Phase_Name" id="Phase_Name">
						</div>
					</div>

					<div class="form-group"><label class="col-sm-2 control-label">BOQ No</label>
						<div class="col-sm-4">
							<select class="form-control-mobile" id="bbq_id" name='bbq_id'>
								
							</select>
						</div>
					</div>

					<div style="display:none" id="frm_atf_no" class="form-group"><label for="atf_no" class="col-sm-2 control-label">ATF No</label>
						<div class="col-sm-4">
							<select class="form-control-mobile" id="atf_no" name='atf_no'>
								
							</select>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-4 col-sm-offset-2">
					        <a style="display:none" class="btn btn-primary" id='editPMR' >Edit</a>
					        <a style="display:none" class="btn btn-primary" id='newPMR'>New</a>
					    </div>	
				    </div>

				    
				    <div class="hr-line-dashed"></div>	
				</form>
				
				<form style="display: none;" method="post" id='frmpmr_header' class="form-horizontal">
					<input type="hidden" class="form-control" name="id_master_tracker" id="id_master_tracker">
					<div id="id_frm_header" style="display: none;" class="form-group"><label for="id" class="col-sm-2 control-label">ID</label>
						<div class="col-sm-4">
							<input type="text" readonly="readonly" class="form-control" name="id" id="id">
						</div>
					</div>

					<div class="form-group"><label for="atf_nokia_no" class="col-sm-2 control-label">ATF Nokia No</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="atf_nokia_no" id="atf_nokia_no">
						</div>
					</div>

					<div class="form-group"><label for="project_name" class="col-sm-2 control-label">Project Name</label>
						<div class="col-sm-4">
							<input type="text" readonly="readonly" class="form-control" id="project_name" id="project_name">
						</div>
					</div>

					<div class="form-group"><label for="atf_status" class="col-sm-2 control-label">ATF Status</label>
						<div class="col-sm-4">
							<input type="text" value="open" class="form-control" name="atf_status" readonly="readonly" id="atf_status">
						</div>
					</div>

					<div class="form-group"><label for="atf_isat_no" class="col-sm-2 control-label">ATF ISAT No</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="atf_isat_no" id="atf_isat_no">
						</div>
					</div>

					<div class="form-group"><label for="atf_isat_date" class="col-sm-2 control-label">ATF ISAT DATE</label>
						<div class="col-sm-4">
							<input class="form-control" type="text" name='atf_isat_date' id="atf_isat_date" value=""  />
						</div>
					</div>

					<div class="form-group"><label for="activity_type" class="col-sm-2 control-label">Activity Type</label>
						<div class="col-sm-4">
							<select class="form-control-mobile" id="activity_type" name='activity_type'>
								<?php echo $_smarty_tpl->tpl_vars['activity_combo']->value;?>

							</select>
						</div>
					</div>

					<div class="form-group"><label for="asset_condition" class="col-sm-2 control-label">Asset Condition</label>
						<div class="col-sm-4">
							<select class="form-control-mobile" id="asset_condition" name='asset_condition'>
								<option value="Recover (Ex-Dismatle)">Recover (Ex-Dismatle)</option>
								<option value="Excess (Brand New)">Excess (Brand New)</option>
							</select>
						</div>
					</div>

					<div class="form-group"><label for="dismantle_plan_date" class="col-sm-2 control-label">Dismantle Plan Date</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="dismantle_plan_date" id="dismantle_plan_date">
						</div>
					</div>

					<div class="form-group"><label for="reason_for_handover" class="col-sm-2 control-label">Reason for Handover</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="reason_for_handover" id="reason_for_handover">
						</div>
					</div>

					<div class="form-group"><label for="po_number" class="col-sm-2 control-label">PO Number</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="po_number" id="po_number">
						</div>
					</div>

					<div class="form-group"><label for="dismantle_actual_date" class="col-sm-2 control-label">Dismantle Actual Date</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="dismantle_actual_date" id="dismantle_actual_date">
						</div>
					</div>

					<div class="form-group"><label for="devision_1" class="col-sm-2 control-label">Division 1</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="devision_1" id="devision_1">
						</div>
					</div>

					<div class="form-group"><label for="region_1" class="col-sm-2 control-label">Region 1</label>
						<div class="col-sm-4">
							<input readonly="readonly" name="region_1" type="text" class="form-control" id="region_1">
						</div>
					</div>

					<div class="form-group"><label for="city_1" class="col-sm-2 control-label">City 1</label>
						<div class="col-sm-4">
							<input readonly="readonly" type="text" class="form-control" name="city_1" id="city_1">
						</div>
					</div>

					<div class="form-group"><label for="site_id_1" class="col-sm-2 control-label">Site ID 1</label>
						<div class="col-sm-4">
							<input type="text" readonly="readonly" class="form-control" name="site_id_1" id="site_id_1">
						</div>
					</div>

					<div class="form-group"><label for="site_name_1" class="col-sm-2 control-label">Site Name 1</label>
						<div class="col-sm-4">
							<input readonly="readonly" type="text" class="form-control" name="site_name_1" id="site_name_1">
						</div>
					</div>

					<div class="form-group"><label for="ne_equip_system_1" class="col-sm-2 control-label">NE Equip System 1</label>
						<div class="col-sm-4">
							<select class="form-control-mobile" id="ne_equip_system_1" name='ne_equip_system_1'>
								<?php echo $_smarty_tpl->tpl_vars['ne_system_combo']->value;?>

							</select>
						</div>
					</div>

					<div class="form-group"><label for="material_brand_1" class="col-sm-2 control-label">Material Brand 1</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="material_brand_1" id="material_brand_1">
						</div>
					</div>

					<div class="form-group"><label for="material_brand_1" class="col-sm-2 control-label"> Vedor Dismantle 1 </label>
						<div class="col-sm-4">
							<input type="text" readonly="readonly" value="NOKIA" class="form-control" name="vendor_dismantle_1" id="vendor_dismantle_1">
						</div>
					</div>

					

					<div class="form-group"><label for="division_2" class="col-sm-2 control-label">Division 2</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="division_2" id="division_2">
						</div>
					</div>

					<div class="form-group"><label for="new_site_name_2_copy_1" class="col-sm-2 control-label">New Site ID 2</label>
						<div class="col-sm-4">
							<select class="form-control" id="new_site_name_2_copy_1" name='new_site_name_2_copy_1'>
								
							</select>
							<input style="display: none" class="form-control" type="text" type="new_site_name_2_copy_2" id="new_site_name_2_copy_2" name="new_site_name_2_copy_2">
						</div>
					</div>

					<input type="hidden" name="new_site_name_2" id="new_site_name_2">

					<div class="form-group"><label for="new_site_id_2" class="col-sm-2 control-label">New Site Name 2</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="new_site_id_2" id="new_site_id_2">
						</div>
					</div>

					<div class="form-group"><label for="region_2" class="col-sm-2 control-label">Region 2</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="region_2" id="region_2">
						</div>
					</div>

					<div class="form-group"><label for="city_2" class="col-sm-2 control-label">City 2</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="city_2" id="city_2">
						</div>
					</div>

					<div class="form-group"><label for="vendor_installation_2" class="col-sm-2 control-label">Vendor Installation 2</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="vendor_installation_2" id="vendor_installation_2">
						</div>
					</div>

					<div class="form-group"><label for="po_re_deploy" class="col-sm-2 control-label">PO Re-Deploy (Service) 2</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="po_re_deploy" id="po_re_deploy">
						</div>
					</div>

					<div class="form-group"><label for="remark_atf" class="col-sm-2 control-label">Remark ATF</label>
						<div class="col-sm-4">
							<textarea class="form-control" id="remark_atf" name="remark_atf">
								
							</textarea>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-4 col-sm-offset-4">
							<input type="hidden" id="method_send"  name="method_send" value="POST">
							<input type="hidden" id="created_by"  name="created_by">
							<input type="hidden" id="created_at"  name="created_at">
							<input type="hidden" id="status"  name="status">
					        <a class="btn btn-primary" id='saveNext' for="save">Save and Next</a>
					        <a class="btn btn-primary" id='saveNext_1' for="saveNext_1">Next</a>
					    </div>
					</div>
				</form>

				<?php echo $_smarty_tpl->getSubTemplate ("backend/modul/form/form-master-material-atf.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

					
					<div style="display: none;" class="loader"></div>
				</div>
			</div>
			
		</div>
	</div>
</div>

<?php echo '<script'; ?>
>
	var type = 'add';
	var countNoAtf = 1;

    $.ajax({
		url: '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
get/PhaseBoqData',
        type: 'get',
        dataType: 'json',
		success: function(data){
			$("#Phase_Name").val("");
			$("#Phase_Code").val("");
			$("#phase_no").html("<option value=''>--Choose-- </option>");
			$.each(data, function(index, element) {
            	var value_1 = element.id+" - "+element.phase_code+" - "+element.phase_name+" - "+element.phase_year;
            	var value_2 = element.phase_code+"-"+element.phase_year;
				$("#phase_no").append("<option value='"+value_1+"'>"+value_2+"</option>");
			});	
   		}
   	});

    $("#saveNext_1").click(function() {
   		$("#saveNext").click();
   	});

    $('#dismantle_plan_date').datebox({
    	required:false
    });

    $('#dismantle_actual_date').datebox({
    	required:false
    });

    $('#atf_isat_date').datebox({
    	required:false
    });

	$( "#saveNext").click(function() {
		var method_send = $("#method_send").val();
		if(method_send == 'POST') var url = 'add';
		else var url = 'edit';
		$.ajax({
   			type: "POST",
   			url: '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
get/atf-'+url,
   			dataType: 'json',
   			data: $('#frmpmr_header').serialize(),
   			success: function(data){
   				if(data != false)
   				{
   					$("#id").val(data);
   					$("#method_send").val("PUT");
   					$("#frmpmr_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
").hide();
   					$("#frmpmr_header").hide();
   					$("#id_progress_atf").val(data);
   					
   					$.ajax({ 
			            url: '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
get/material-atf',
			            data: {
			            	'id_progress_atf' : data
			            },
			            type: 'get',
			            dataType: 'json',
			            success: function(dataMaterial)
			            {
			            	$("#bodyPreview").html("");
			            	var number = 1;
			            	$.each(dataMaterial, function(index, element) {
			            		$template = '<tr id="element_tr_'+ element.id + '">' +
			            						'<td width="2px">'+ number +'<td>' +
			            						'<td>'+element.material_type_l3+'</td>' +
			            						'<td><a class="btn btn-primary" onClick="editMaterial(' + element.id + ')"  id="editMaterial" for="save">Edit</a> ' +
			            							'<a class="btn btn-primary" onClick="deleteMaterial('+ element.id +')"  id="deleteMaterial" for="save">delete</a> ' +
			            						'</td>' +
			            					'</tr>';
			            		$("#bodyPreview").append($template);
			            		number++;
			        		});

			            }
			        });

      				$("#atr_content").show();
   				} 
   				else 
   				{
   					alert('ada yang salah dalam proses save data');
   				}
      			
   			}
		});
	});

	$( "#atf_no").change(function() {
		if ($(this).val() != 'null') {

			$("#editPMR").show();
			$("#newPMR").hide();

		} else 
		{
			$("#editPMR").hide();
			$("#newPMR").show();
		}
	});

	$( "#bbq_id").change(function() {
		if ($(this).val() != 'null') $("#newPMR").show();
		else $("#newPMR").hide(); $("#editPMR").hide();
	});

	
	$( "#editPMR").click(function() {
		var atf_no = $("#atf_no").val();
		var data = {
            'id'		: atf_no,
            'single'	: true
        };

		$.ajax({ 
            url: '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
get/atf-data',
            data: data,
            type: 'get',
            dataType: 'json',
            success: function(data)
            {
            	$("#atr_content").hide();
            	$("#id_frm_header").show();
            	$("#frmpmr_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
").show();
            	$("#method_send").val("PUT");
            	$("#id_master_tracker").val(data.id_tracker_site_info);
            	$("#atf_status").val(data.atf_status);
            	$("#site_name_1").val(data.site_name);
            	$("#project_name").val(data.phase_name);
            	$("#region_1").val(data.region_code);
            	$("#city_1").val(data.area_name);
            	$("#atf_nokia_no").val(data.atf_nokia_no);
            	$("#id").val(data.id);
				$("#frmpmr_header").show();
				$("#atf_isat_no").val(data.atf_nokia_no);
				$("#activity_type").val(data.atf_isat_type);
				$("#asset_condition").val(data.asset_condition);
				$("#reason_for_handover").val(data.reason_for_handover);
				$("#po_number").val(data.po_number);
				$('#dismantle_actual_date').datebox('setValue', data.dismantle_actual_date);
				$('#atf_isat_date').datebox('setValue', data.atf_isat_date);
				$('#dismantle_plan_date').datebox('setValue', data.dismantle_plan_date);
				$("#devision_1").val(data.reason_for_handover);
				$("#site_id_1").val(data.site_id);
				$("#ne_equip_system_1").val(data.id_ne_system);
				$("#material_brand_1").val(data.reason_for_handover);
				$("#division_2").val(data.division_2);
				$("#region_2").val(data.region_2);
				$("#city_2").val(data.city_2);
				$("#new_site_name_2").val(data.new_site_name_2);
				$("#vendor_installation_2").val(data.vendor_instalation_2);
				$("#po_re_deploy").val(data.po_re_deploy);
				$("#remark_atf").val(data.remark_atf);
				$("#created_at").val(data.created_at);
				$("#created_by").val(data.created_by);
				$("#status").val(data.status);

				var new_site_id_2 = data.new_site_id_2;
				var valBoq = $("#bbq_id").val();
				var dataBbq = valBoq.split('-');

				$.ajax({ 
		            url: '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
get/BBQData',
		            data: {
	                	'id'		: dataBbq[0],
	                	'single'	: true
	           		},
		            type: 'get',
		            dataType: 'json',
		            success: function(dataBBQ)
		            {
		            	$("#frmpmr_header").show();
		            	$("#id_master_tracker").val(dataBBQ.id);
		            	$("#site_name_1").val(dataBBQ.site_name);
		            	$("#project_name").val(dataBBQ.phase_name);
		            	$("#region_1").val(dataBBQ.region_code);
		            	$("#city_1").val(dataBBQ.area_name);
		            	$("#site_id_1").val(dataBBQ.site_id);
		            }
		        });

		        $.ajax({ 
		            url: '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
get/warehouse-data',
		            type: 'get',
		            dataType: 'json',
		            success: function(dataWare)
		            {
		            	var a = 1;
		            	$("#new_site_name_2_copy_1").html("");
		            	$.each(dataWare, function(index, element) {

							var value = element.wh_id+" - "+element.wh_address+" - "+element.wh_city+" - "+element.wh_region+" - "+element.wh_name;
	            			if(element.wh_id == new_site_id_2)
	            			{
	            				$("#new_site_name_2_copy_1").append("<option selected value='"+value+"'>"+element.wh_name+"</option>");
	            				$("#new_site_name_2").val(element.wh_name);
	            				$("#region_2").val(element.wh_region);
	            				$("#city_2").val(element.wh_city);
	            				$("#new_site_id_2").val(element.wh_id);
	            			} else {
	            				$("#new_site_name_2_copy_1").append("<option value='"+value+"'>"+element.wh_name+"</option>");
	            			}

	        			});
		            }
		        });
            }
        });
	});

	$( "#newPMR").click(function() {
		var valPhase = $("#phase_no").val();
		var valBoq = $("#bbq_id").val();

		if (valPhase && valBoq) 
		{
			$("#id_frm_header").hide();
			$("#method_send").val("POST");
        	$("#id_master_tracker").val("");
        	$("#atf_status").val("Open");
        	$("#site_name_1").val("");
        	$("#project_name").val("");
        	$("#region_1").val("");
        	$("#city_1").val("");
        	$("#id").val("");
			$("#frmpmr_header").val("");
			$("#atf_isat_no").val("");
			$("#activity_type").val("");
			$("#asset_condition").val("Recover (Ex-Dismatle)");
			$("#reason_for_handover").val("");
			$("#po_number").val("");
			$("#devision_1").val("");
			$("#region_1").val("");
			$("#city_1").val("");
			$("#site_id_1").val("");
			$("#site_name_1").val("");
			$("#ne_equip_system_1").val("");
			$("#material_brand_1").val("");
			$("#division_2").val("");
			$("#region_2").val("");
			$("#city_2").val("");
			$("#new_site_name_2").val("");
			$("#vendor_installation_2").val("");
			$("#po_re_deploy").val("");
			$("#remark_atf").val("");

			$("#frmpmr_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
").show();
			$("#atr_content").hide();
			var dataBbq = valBoq.split('-');
			var data = {
                'id'		: dataBbq[0],
                'single'	: true
            };

            if(countNoAtf < 10)
            {
            	var generate = 'ATF'+ dataBbq[1] +'0' + countNoAtf;
            } else
            	{
            		var generate =  'ATF'+ dataBbq[1] + '' + countNoAtf;
            	}
			
			$('#atf_nokia_no').val(generate);

			$.ajax({ 
	            url: '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
get/BBQData',
	            data: data,
	            type: 'get',
	            dataType: 'json',
	            success: function(data)
	            {
	            	$("#frmpmr_header").show();
	            	$("#id_master_tracker").val(data.id);
	            	$("#site_name_1").val(data.site_name);
	            	$("#project_name").val(data.phase_name);
	            	$("#region_1").val(data.region_code);
	            	$("#city_1").val(data.area_name);
	            	$("#site_id_1").val(data.site_id);
	            }
	        });

	        $.ajax({ 
	            url: '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
get/warehouse-data',
	            type: 'get',
	            dataType: 'json',
	            success: function(data)
	            {
	            	var a = 1;
	            	$("#new_site_name_2_copy_1").html("<option value=' '>-- Silahkan pilih --</option>");
	            	$.each(data, function(index, element) {
            			var value = element.wh_id+" - "+element.wh_address+" - "+element.wh_city+" - "+element.wh_region+" - "+element.wh_name;
            			if(a == 1)
            			{
            				$("#new_site_name_2_copy_1").append("<option selected value='"+value+"'>"+element.wh_name+"</option>");
            				$("#new_site_name_2").val(element.wh_name);
            				$("#region_2").val(element.wh_region).attr('aonly', true);
            				$("#city_2").val(element.wh_city).attr('readonly', true);
            				$("#new_site_id_2").val(element.wh_id).attr('readonly', true);
            			} else {
            				$("#new_site_name_2_copy_1").append("<option value='"+value+"'>"+element.wh_name+"</option>");
            			}

            			a++;
        			});
	            }
	        });

		} else {
			alert('BBQ ANd Phase cant empty');
		}
		
	});

	$("#new_site_name_2_copy_1").change(function() {
		if( $("#new_site_name_2_copy_1").val() != " ")
		{
			var v = $("#new_site_name_2_copy_1").val().split(" - ");
			$("#new_site_id_2").val(v[0]).attr('readonly', true);
			$("#region_2").val(v[3]).attr('readonly', true);
			$("#city_2").val(v[2]).attr('readonly', true);
			$("#new_site_name_2_copy_2").hide();
			$("#new_site_name_2").val(v[4]);
		} else {
			$("#region_2").val("").removeAttr('readonly');
			$("#city_2").val("").removeAttr('readonly');
			$("#new_site_id_2").val("");
			$("#new_site_name_2_copy_2").show();
		}
	});

	$("#new_site_name_2_copy_2").change(function() {
		$("#new_site_id_2").val($("#new_site_name_2_copy_2").val());
	});

	$( "#phase_no" ).change(function() {
		var str = $( this ).val();
		var res = str.split(" - ");

		$("#Phase_Code").val(res[1]);
        $("#Phase_Name").val(res[2]);
		var data = {
                'tbl_master_phase_id'	: res[0],
            };

        var no = 1;

		$.ajax({ 
            url: '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
get/BBQData',
            data: data,
            type: 'get',
            dataType: 'json',
            success: function(data)
            {
            	$("#bbq_id").html("");
            	$("#bbq_id").append("<option value='null'>--silahkan pilih--</option>");
            	$.each(data, function(index, element) {
            		$("#bbq_id").append("<option value='" +element.id+ "-" +element.boqno+ "-" +"'>"+element.boqno+"</option>");
        		});

            }
        });
  		
	});
	
	$( "#bbq_id" ).change(function() {
		var dataBbq = $( this ).val().split('-');
		var data = {
                'bbq_id'	: dataBbq[0]
            };
		$.ajax({ 
            url: '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
get/atf-data',
            data: data,
            type: 'get',
            dataType: 'json',
            success: function(data)
            {
            	$("#atf_no").html("");
            	if(data.length > 0)
            	{
            		countNoAtf = data.length + 1;
            		$("#frm_atf_no").show();
            		$("#atf_no").append("<option value='null'>--silahkan pilih--</option>");
            		$.each(data, function(index, element) {
            			$("#atf_no").append("<option value='"+element.id+"'>"+element.atf_nokia_no+"</option>");
        			});
            	} else
            	{
            		countNoAtf = 1;
            		$("#frm_atf_no").hide();
            	}
            }
        });
  		
	});

	function setValue(array = [])
	{
		for (var key in array) {
    		$("#"+key).val(array[key]);
		}
	}

	$.fn.datebox.defaults.formatter = function(date){
		var y = date.getFullYear();
		var m = date.getMonth()+1;
		var d = date.getDate();
		return y+'-'+(m<10?('0'+m):m)+'-'+(d<10?('0'+d):d);
	};
	$.fn.datebox.defaults.parser = function(s){
		if (!s) return new Date();
		var ss = s.split('-');
		var y = parseInt(ss[0],10);
		var m = parseInt(ss[1],10);
		var d = parseInt(ss[2],10);
		if (!isNaN(y) && !isNaN(m) && !isNaN(d)){
			return new Date(y,m-1,d);
		} else {
			return new Date();
		}
	};

<?php echo '</script'; ?>
>

<link rel="stylesheet" type="text/css" href="https://raw.githubusercontent.com/fareco/css-loader/gh-pages/css/index.css">
<style>
    .loader {
    border: 16px solid #f3f3f3; /* Light grey */
    border-top: 16px solid #3498db; /* Blue */
    border-radius: 50%;
    width: 120px;
    height: 120px;
    animation: spin 2s linear infinite;
    position: fixed;
    top: 50%;
    left: 50%;
    background: rgba(0,0,0,.8);
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style><?php }
}
?>