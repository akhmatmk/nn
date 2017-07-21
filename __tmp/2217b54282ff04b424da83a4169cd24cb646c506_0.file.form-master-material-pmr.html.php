<?php /* Smarty version 3.1.27, created on 2017-07-21 14:36:54
         compiled from "/var/www/nokia.dev/public_html/__application/views/backend/modul/form/form-master-material-pmr.html" */ ?>
<?php
/*%%SmartyHeaderCode:2541668445971af16b8d888_75311946%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2217b54282ff04b424da83a4169cd24cb646c506' => 
    array (
      0 => '/var/www/nokia.dev/public_html/__application/views/backend/modul/form/form-master-material-pmr.html',
      1 => 1500619509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2541668445971af16b8d888_75311946',
  'variables' => 
  array (
    'phase_no' => 0,
    'host' => 0,
    'acak' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5971af16b913c5_01018092',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5971af16b913c5_01018092')) {
function content_5971af16b913c5_01018092 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2541668445971af16b8d888_75311946';
?>
			  	<div style="display: none" id="pmr_content">
			  		<div>
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

						<div id="frm_atf_no_no" class="form-group"><label for="atf_no" class="col-sm-2 control-label">ATF No</label>
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
					    		<!-- <a class="btn btn-primary" id='previewMaterial'>Next Review</a> -->
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

						function deleteMaterial(idMaterial)
						{
							$.ajax({ 
						            url: '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
delete/material-pmr',
						            data: {
						            	'id' : idMaterial
						            },
						            type: 'post',
						            dataType: 'json',
						            success: function(dataMaterial)
						            {
						     			$.ajax({ 
								            url: '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
get/material-pmr',
								            data: {
								            	'id_progress_atf' : $("#id_progress_pmr").val()
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
								            						'<td>'+element.atf_nokia_no+'</td>' +
								            						'<td><a class="btn btn-primary" onClick="deleteMaterial('+ element.id +')"  id="deleteMaterial" for="save">delete</a> ' +
								            						'</td>' +
								            					'</tr>';
								            		$("#bodyPreview").append($template);
								            		number++;
								        		});

								            }
								        });    	
						            }
						       });
						} 

						$("#backPMR").click(function () {
							$("#pmr_content").hide();
							$("#frmpmr_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
").show();
							$("#frmpmr_header").show();
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
					   				if($("#type_save_material").val() == "add")
					   				{
					   					$bodytr = $('#bodyPreview tr').size() + 1;
					   					$template = '<tr id="element_tr_'+ data.id + '"">' +
				            						'<td>'+  $bodytr +'<td>' +
				            						'<td>'+ data.created_name+ '</td>' +
				            						'<td>' +
				            							'<a class="btn btn-primary" onClick="deleteMaterial('+ data.id +')"  id="deleteMaterial" for="save">Delete</a> ' +
				            						'</td>' +
				            					'</tr>';
				            			$("#bodyPreview").append($template);
					   				}
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