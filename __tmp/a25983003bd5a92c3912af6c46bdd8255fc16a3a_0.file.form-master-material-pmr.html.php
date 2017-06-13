<?php /* Smarty version 3.1.27, created on 2017-06-14 03:23:20
         compiled from "/home/vagrant/Code/nokia/__application/views/backend/modul/form/form-master-material-pmr.html" */ ?>
<?php
/*%%SmartyHeaderCode:1011139538594049b84b1d06_22058926%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a25983003bd5a92c3912af6c46bdd8255fc16a3a' => 
    array (
      0 => '/home/vagrant/Code/nokia/__application/views/backend/modul/form/form-master-material-pmr.html',
      1 => 1497386343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1011139538594049b84b1d06_22058926',
  'variables' => 
  array (
    'phase_no' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_594049b84e5c44_36259663',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_594049b84e5c44_36259663')) {
function content_594049b84e5c44_36259663 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1011139538594049b84b1d06_22058926';
?>
			  	<div style="display: none" id="pmr_content">
					<div class="row wrapper border-bottom bluedrak-bg page-heading" style="background-color : #134292;color: white">
						<div class="col-lg-10" style="margin-left:20px;">
							<h2 align="center">ADD ATF</h3>
							<h2 align="center">PMR NO</h3>
						</div>
					</div>
						
					<form id="atrmaterial_content" style="margin-top: 20px;" class="form-horizontal">
						<input type="hidden" name="id_progress_pmr" id="id_progress_pmr">		
						<input type="hidden" name="type_save_material" id="type_save_material" value="add">			
						<div class="form-group"><label class="col-sm-2 control-label">Choose Phase name</label>
							<div class="col-sm-4">
								<select class="form-control-mobile" id="tbl_master_phase_id" name='tbl_master_phase_id'>
									<?php echo $_smarty_tpl->tpl_vars['phase_no']->value;?>

								</select>
							</div>
						</div>

						<div class="form-group"><label class="col-sm-2 control-label">BBQ No</label>
							<div class="col-sm-4">
								<select class="form-control-mobile" id="bbq_id" name='bbq_id'>
									
								</select>
							</div>
						</div>

						<div style="display:none" id="frm_atf_no_no" class="form-group"><label for="atf_no" class="col-sm-2 control-label">ATF No</label>
							<div class="col-sm-4">
								<select class="form-control-mobile" id="atf_no" name='atf_no'>
									
								</select>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-4 col-sm-offset-4">
						        <a class="btn btn-primary" id='backPMR'>Back to PMR NO</a>
						        <a class="btn btn-primary" id='saveDataPMR'>Save</a>
						    </div>
						</div>

					</form>

					<div class="row wrapper border-bottom bluedrak-bg page-heading" style="background-color : #134292;color: white">
						<div class="col-lg-10" style="margin-left:20px;">
							<h3>Result</h3>
						</div>
					</div>

					<table class="table" id="tablePreview">
					    <tbody id="bodyPreview">
					      	
					    </tbody>
					    <tr>
					    	<td colspan="3" align="right">
					    		<a class="btn btn-primary" id='previewMaterial'>Next Review</a>
					    	</td>
					    </tr>
				  </table>
					
					<link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/css/select2.min.css" rel="stylesheet" />
			  		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/js/select2.min.js"><?php echo '</script'; ?>
>
					
					<?php echo '<script'; ?>
 type="text/javascript">
						 $( "#tbl_master_phase_id" ).change(function() {
							var data = {
					                'phase_id'	: $( this ).val(),
					            };
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
					            		$("#bbq_id").append("<option value='" +element.id+ "-" +element.boqno+ "'>"+element.boqno+"</option>");
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
					            		$("#frm_atf_no_no").show();
					            		$("#atf_no").append("<option value='null'>--silahkan pilih--</option>");
					            		$.each(data, function(index, element) {
					            			$("#atf_no").append("<option value='"+element.id+"'>"+element.atf_nokia_no+"</option>");
					        			});
					            	} else
					            	{
					            		$("#frm_atf_no_no").hide();
					            	}
					            }
					        });
					  		
						});

						$("#saveDataPMR").click(function() {
							if($("#type_save_material").val() == 'add')
								var url = '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
save/material-pmr';
							else
								var url = '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
edit/material-pmr';

							$.ajax({
					   			type: "POST",
					   			url: url,
					   			dataType: 'json',
					   			data: $('#atrmaterial_content').serialize(),   
					   			success: function(data){

					   	// 			if($("#type_save_material").val() == "add")
					   	// 			{
					   	// 				$bodytr = $('#bodyPreview tr').size() + 1;
					   	// 				$template = '<tr id="element_tr_'+ data.id + '"">' +
				     //        						'<td>'+  $bodytr +'<td>' +
				     //        						'<td>'+ data.material_type_l3+ '</td>' +
				     //        						'<td><a class="btn btn-primary" onClick="editMaterial(' + data.id + ')"  id="editMaterial" for="save">Edit</a> ' +
				     //        							'<a class="btn btn-primary" onClick="deleteMaterial('+ data.id +')"  id="deleteMaterial" for="save">Delete</a> ' +
				     //        						'</td>' +
				     //        					'</tr>';
				     //        			$("#bodyPreview").append($template);
					   	// 			}

					   	// 			$("#hardware_type_l1").val("null");
					   	// 			$("#id_atf_material_content").val("");
									// $("#remark").val("");
									// $("#condition").val("");
									// $("#uom").val("");
									// $("#quantity").val("");
									// $("#serial_number").val("");
									// $("#barcode").val("");
									// $("#equipment_type_l2").html("");
									// $("#material_type_l3").html("");
									// $("#product_code_l4").html("");
									// $("#type_save_material").val("add");

									// $('#myTable tr').size() 
					   			}
							});
						});
					<?php echo '</script'; ?>
>
				</div>
				<?php echo $_smarty_tpl->getSubTemplate ("backend/modul/form/preview-material-atf.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>