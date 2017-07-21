<?php /* Smarty version 3.1.27, created on 2017-07-09 15:34:28
         compiled from "C:\xampp\htdocs\nn\__application\views\backend\modul\form\form-master-material-atf.html" */ ?>
<?php
/*%%SmartyHeaderCode:1530195735961ea949e52b4_07163715%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a9b83a8a369908f231bc62644b20a089b724c7e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nn\\__application\\views\\backend\\modul\\form\\form-master-material-atf.html',
      1 => 1499518691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1530195735961ea949e52b4_07163715',
  'variables' => 
  array (
    'host' => 0,
    'acak' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5961ea949f8b46_49728241',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5961ea949f8b46_49728241')) {
function content_5961ea949f8b46_49728241 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1530195735961ea949e52b4_07163715';
?>
			  	<div style="display: none;" id="atr_content">
					<div class="row wrapper border-bottom bluedrak-bg page-heading" style="background-color : #134292;color: white">
						<div class="col-lg-10" style="margin-left:20px;">
							<h2 align="center">ADD MATERIAL</h3>
							<h2 align="center">ATF NO</h3>
						</div>
					</div>
						
					<form id="atrmaterial_content" style="margin-top: 20px;" class="form-horizontal">

						<div class="form-group"><label for="hardware_type_l1" class="col-sm-2 control-label">Hardware Type L1</label>
							<div class="col-sm-4">
							<input type="hidden" name="id_atf_material_content" id="id_atf_material_content">
							<input type="hidden" name="id_progress_atf" id="id_progress_atf">
							<input type="hidden" name="type_save_material" id="type_save_material" value="add">
								<select class="form-control-mobile" id="hardware_type_l1" name='hardware_type_l1'>
									
								</select>
							</div>
						</div>

						<div class="form-group"><label for="equipment_type_l2" class="col-sm-2 control-label">Equipment Type L2</label>
							<div class="col-sm-4">
								<select class="form-control-mobile" id="equipment_type_l2" name='equipment_type_l2'>
									
								</select>
							</div>
						</div>

						<div class="form-group"><label for="material_type_l3" class="col-sm-2 control-label">Material Type L3</label>
							<div class="col-sm-4">
								<select class="form-control-mobile" id="material_type_l3" name='material_type_l3'>
									
								</select>
							</div>
						</div>

						<div class="form-group"><label for="product_code_l4" class="col-sm-2 control-label">Product Code L4</label>
							<div class="col-sm-4">
								<select  class="form-control-mobile" id="product_code_l4" name='product_code_l4'>
									
								</select>
							</div>
						</div>

						<div class="form-group"><label for="barcode" class="col-sm-2 control-label">Barcode</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="barcode" id="barcode" name="barcode">
							</div>
						</div>

						<div class="form-group"><label for="serial_number" class="col-sm-2 control-label">Serial Number</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="serial_number" id="serial_number" name="serial_number">
							</div>
						</div>

						<div class="form-group"><label for="quantity" class="col-sm-2 control-label">Quantity</label>
							<div class="col-sm-4">
								<input type="number" class="form-control" id="quantity" name="quantity">
							</div>
						</div>

						<div class="form-group"><label for="uom" class="col-sm-2 control-label">Uom</label>
							<div class="col-sm-4">
							<input type="text" readonly="readonly" class="form-control" id="uom" name="uom">
							</div>
						</div>

						<div class="form-group"><label for="condition" class="col-sm-2 control-label">Condition</label>
							<div class="col-sm-4">
								<select  class="form-control-mobile" id="condition" name='condition'>
									<option value="Damage"> Damage </option>
									<option value="Good"> Good </option>
									<option value="Brand New"> New </option>
								</select>
							</div>
						</div>

						<div class="form-group"><label for="remark" class="col-sm-2 control-label">Remark</label>
							<div class="col-sm-4">
								<textarea class="form-control" id="remark" name="remark">
									
								</textarea>
							</div>
						</div>				

						<div class="form-group">
							<div class="col-sm-4 col-sm-offset-4">
						        <a class="btn btn-primary" id='backAtf'>Back to Atf No</a>
						        <a class="btn btn-primary" id='saveDataMaterial'>Save</a>
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
						 
						$.ajax({ 
				            url: '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
get/data-material-atf',
				            type: 'get',
				            data : {
	                			'group'	: ['a.equipment']
	            			},
				            dataType: 'json',
				            success: function(data)
				            {
				            	$("#hardware_type_l1").html("");
				            	var a = 1;
	            				$("#hardware_type_l1").append("<option value='null'>--silahkan pilih--</option>");
	            				$.each(data, function(index, element) {
	            					if(a == 1)
	            					{
	            						$("#hardware_type_l1").append("<option selected value='" +element.equipment+ "'>"+element.equipment+"</option>");

	            						$.ajax({ 
								            url: '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
get/data-material-atf',
								            data: {
				                				'equipment'	: element.equipment,
				                				'group'	: ['a.type']
				            				},
								            type: 'get',
								            dataType: 'json',
								            success: function(data)
								            {
								            	$("#equipment_type_l2").html("");
					            				$("#equipment_type_l2").append("<option value='null'>--silahkan pilih--</option>");
					            				$.each(data, function(index, element) {
					            					$("#equipment_type_l2").append("<option value='" +element.type+ "'>"+element.type+"</option>");
					        					});
								            }
					        			});


	            					}else {
	            						$("#hardware_type_l1").append("<option value='" +element.equipment+ "'>"+element.equipment+"</option>");
	            					}
	            					a++;
	        					});
				            }
		        		});


						$( "#hardware_type_l1" ).change(function() {
							$.ajax({ 
					            url: '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
get/data-material-atf',
					            data: {
	                				'equipment'	: $( this ).val(),
	                				'group'	: ['a.type']
	            				},
					            type: 'get',
					            dataType: 'json',
					            success: function(data)
					            {
					            	$("#equipment_type_l2").html("");
		            				$("#equipment_type_l2").append("<option value='null'>--silahkan pilih--</option>");
		            				$.each(data, function(index, element) {
		            					$("#equipment_type_l2").append("<option value='" +element.type+ "'>"+element.type+"</option>");
		        					});
					            }
		        			});
						});

						$( "#equipment_type_l2" ).change(function() {
							var data = {
	                			'equipment'	: $( this ).val(),

	            			};
							$.ajax({ 
					            url: '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
get/data-material-atf',
					            data: {
	                				'type'	: $( this ).val(),
	                				'group'	: ['a.modular_type']
	            				},
					            type: 'get',
					            dataType: 'json',
					            success: function(data)
					            {
					            	$("#material_type_l3").html("");
		            				$("#material_type_l3").append("<option value='null'>--silahkan pilih--</option>");
		            				$.each(data, function(index, element) {
		            					$("#material_type_l3").append("<option value='" +element.modular_type+ "'>"+element.modular_type+"</option>");
		        					});

		        					$('.selectSearch').select2();
		        					$('#material_type_l3').select2();
					            }
		        			});
						});

						$( "#material_type_l3" ).change(function() {
							$.ajax({ 
					            url: '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
get/data-material-atf',
					            data: {
	                				'modular_type'	: $( this ).val(),
	                				'group'	: ['a.product_code']
	            				},
					            type: 'get',
					            dataType: 'json',
					            success: function(data)
					            {
					            	
		        					$('.selectSearch').select2();

		        					$("#product_code_l4").html("");
		            				$("#product_code_l4").append("<option value='null'>--silahkan pilih--</option>");
		            				$.each(data, function(index, element) {
		            					$("#product_code_l4").append("<option value='" +element.product_code+ "'>"+element.product_code+"</option>");
		        					});

		        					$('#product_code_l4').select2();
					            }
		        			});
						});

						$( "#product_code_l4" ).change(function() {
							$.ajax({ 
					            url: '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
get/data-material-atf',
					            data: {
	                				'product_code'	: $( this ).val(),
	                				'group'	: ['a.uom']
	            				},
					            type: 'get',
					            dataType: 'json',
					            success: function(data)
					            {
		            				$.each(data, function(index, element) {
		            					$("#uom").val(element.uom);
		        					});
					            }
		        			});
						});

						$("#saveDataMaterial").click(function() {
							if($("#type_save_material").val() == 'add')
								var url = '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
save/material-atf';
							else
								var url = '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
edit/material-atf';

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
				            						'<td>'+ data.material_type_l3+ '</td>' +
				            						'<td><a class="btn btn-primary" onClick="editMaterial(' + data.id + ')"  id="editMaterial" for="save">Edit</a> ' +
				            							'<a class="btn btn-primary" onClick="deleteMaterial('+ data.id +')"  id="deleteMaterial" for="save">Delete</a> ' +
				            						'</td>' +
				            					'</tr>';
				            			$("#bodyPreview").append($template);
					   				}

					   				$("#hardware_type_l1").val("null");
					   				$("#id_atf_material_content").val("");
									$("#remark").val("");
									$("#condition").val("");
									$("#uom").val("");
									$("#quantity").val("");
									$("#serial_number").val("");
									$("#barcode").val("");
									$("#equipment_type_l2").html("");
									$("#material_type_l3").html("");
									$("#product_code_l4").html("");
									$("#type_save_material").val("add");

									$('#myTable tr').size() 
					   			}
							});
						});

						function deleteMaterial(idMaterial)
						{						    	
					    	var deleteConfirm=confirm('Apakah anda yakin menghapus data ini');
							if (deleteConfirm) 
							{
								$.ajax({ 
						            url: '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
delete/material-atf',
						            data: {
						            	'id' : idMaterial
						            },
						            type: 'post',
						            dataType: 'json',
						            success: function(dataMaterial)
						            {
						     			 $.ajax({ 
								            url: '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
get/material-atf',
								            data: {
								            	'id_progress_atf' : $("#id_progress_atf").val()
								            },
								            type: 'get',
								            dataType: 'json',
								            success: function(dataMaterialNew)
								            {
								            	$("#bodyPreview").html("");
								            	var number = 1;
								            	$.each(dataMaterialNew, function(index, element) {
								            		$template = '<tr id="element_tr_'+ element.id + '">' +
								            						'<td>'+ number +'<td>' +
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
						            }
						        });
							} 
						}

						$("#previewMaterial").click(function(){
							$("#atr_content").hide();
							$.ajax({ 
					            url: '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
get/material-atf',
					            data: {
					            	'id_progress_atf' : $("#id").val()
					            },
					            type: 'get',
					            dataType: 'json',
					            success: function(dataMaterial)
					            {
					            	$("#list_material").html("");
					            	var number = 1;
					            	$.each(dataMaterial, function(index, element) {
					            		$template = '<tr>' +
					            						'<td width="2px">'+ number +'</td><td><b>' +
					            						' '+ element.material_type_l3 +', '+ element.product_code_l4 + ', ' + element.quantity + ' ' + element.uom + '<br/>' + element.serial_number + ', ' + element.barcode + ', ' + element.cond + 
					            					'</b></td></tr>';
					            		$("#list_material").append($template);
					            		number++;
					        		});

					            }
					        });
							$("#atf_list_data").show();
						});

						function editMaterial(idMaterial)
						{
							$.ajax({ 
					            url: '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
get/material-atf',
					            data: {
					            	'id' : idMaterial,
					            	'single' : true,
					            },
					            type: 'get',
					            dataType: 'json',
					            success: function(dataMaterial)
					            {
					            	$("#hardware_type_l1").val(dataMaterial.hardware_type_l1);

					            	$.ajax({ 
							            url: '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
get/data-material-atf',
							            data: {
			                				'equipment'	: dataMaterial.hardware_type_l1,
			                				'group'	: ['a.type']
			            				},
							            type: 'get',
							            dataType: 'json',
							            success: function(data)
							            {
							            	$("#equipment_type_l2").html("");
				            				$("#equipment_type_l2").append("<option value='null'>--silahkan pilih--</option>");
				            				$.each(data, function(index, element) {
				            					$("#equipment_type_l2").append("<option value='" +element.type+ "'>"+element.type+"</option>");
				        					});

				        					$("#equipment_type_l2").val(dataMaterial.equipment_type_l2);
							            }
				        			});

					            	$.ajax({ 
							            url: '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
get/data-material-atf',
							            data: {
			                				'type'	: dataMaterial.equipment_type_l2
			            				},
							            type: 'get',
							            dataType: 'json',
							            success: function(data)
							            {
							            	$("#material_type_l3").html("");
				            				$("#material_type_l3").append("<option value='null'>--silahkan pilih--</option>");
				            				$.each(data, function(index, element) {
				            					$("#material_type_l3").append("<option value='" +element.modular_type+ "'>"+element.modular_type+"</option>");
				        					});

				        					$('.selectSearch').select2();
				            				$('#material_type_l3').select2();
				            				$("#material_type_l3").val(dataMaterial.material_type_l3).trigger("change");
				            				
							            }
				        			});

				        			$.ajax({ 
							            url: '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
get/data-material-atf',
							            data: {
			                				'modular_type'	: dataMaterial.material_type_l3,
			                				'group'	: ['a.product_code']
			            				},
							            type: 'get',
							            dataType: 'json',
							            success: function(data)
							            {
				        					$("#product_code_l4").html("");
				            				$("#product_code_l4").append("<option value='null'>--silahkan pilih--</option>");
				            				$.each(data, function(index, element) {
				            					$("#product_code_l4").append("<option selected value='" +element.product_code+ "'>"+element.product_code+"</option>");
				            					
				        					});

				            				$('.selectSearch').select2();
				        					$('#product_code_l4').select2();
				        					$("#product_code_l4").val(dataMaterial.product_code).trigger("change");
							            }
				        			});

					            	$("#id_progress_atf").val(dataMaterial.id_progress_atf);
					            	$("#id_atf_material_content").val(dataMaterial.id);
									$("#remark").val(dataMaterial.remark);
									$("#condition").val(dataMaterial.cond);
									$("#uom").val(dataMaterial.uom);
									$("#quantity").val(dataMaterial.quantity);
									$("#serial_number").val(dataMaterial.serial_number);
									$("#barcode").val(dataMaterial.barcode);
									$("#type_save_material").val('edit');

					            }
					        });
						}

						$("#backAtf").click(function () {
							$("#atr_content").hide();
							$("#frmpmr_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
").show();
							$("#frmpmr_header").show();
						});

					<?php echo '</script'; ?>
>
				</div>
				<?php echo $_smarty_tpl->getSubTemplate ("backend/modul/form/preview-material-atf.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>