<?php /* Smarty version 3.1.27, created on 2017-07-21 14:38:14
         compiled from "/var/www/nokia.dev/public_html/__application/views/backend/modul/master/import-point_atf.html" */ ?>
<?php
/*%%SmartyHeaderCode:8853614455971af660b7f01_65257255%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f26615ed2eeefffdc2b6596fb30a241313b7fb8d' => 
    array (
      0 => '/var/www/nokia.dev/public_html/__application/views/backend/modul/master/import-point_atf.html',
      1 => 1500619509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8853614455971af660b7f01_65257255',
  'variables' => 
  array (
    'acak' => 0,
    'host' => 0,
    'type_import' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5971af660f56b3_81793818',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5971af660f56b3_81793818')) {
function content_5971af660f56b3_81793818 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8853614455971af660b7f01_65257255';
?>
<form method="post" id='frmimport_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
' url='<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
importAtf/'  class="form-horizontal" enctype="multipart/form-data">
	<input type='hidden' id='typeimport' name='typeimport' value='point_atf' />
	<input type='hidden' id='folder' name='folder' value='master' />
	
	<br/>
	<div id='method'>	
		<div class="form-group"><label class="col-sm-2 control-label">Method</label>
			<div class="col-sm-2">
				<select id='methodupload' name='methodupload' style='padding:3px; width:100px;'>
					<option value=''>-- Choose --</option>
					<option value='N'>New Data</option>
					<option value='U'>Update</option>
				</select>
			</div>
		</div>	
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Remarks</label>
		<div class="col-sm-8">
			<input class="form-control" type="text" name='remark' />
		</div>
	</div>	
	<div class="form-group"><label class="col-sm-2 control-label">File Excell</label>
		<div class="col-sm-2">
			<input type='file' name='file_import' class='validasi' />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">&nbsp;</label>
		<div class="col-sm-6">
			<a href='javascript:void(0);' id='download' target='_blank'>Download Template</a>
		</div>
	</div>
	<div class="hr-line-dashed"></div>
    <div class="form-group">
        <div class="col-sm-4 col-sm-offset-2">
            <a class="btn btn-primary" id='saveImport_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
' >Save</a>
            <a class="btn btn-danger" id='cancelImport_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
'>Cancel</a>
        </div>
    </div>	
	<div class="hr-line-dashed"></div>
</form>
<div id='result_<?php echo $_smarty_tpl->tpl_vars['type_import']->value;?>
'></div>

<?php echo '<script'; ?>
>
	var typeimport = 'point_atf';
	

	
	$('#download').on('click', function(){
		if(typeimport == 'uploadmaster'){
			if($('#typemaster').val() == ""){
				$.messager.alert('POIN', "Type Tracker Can't Empty!!", 'error');
				return false;
			}
			urltype = $('#typemaster').val();
		}else{
			urltype = typeimport;
		}
		window.open('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
backend/download/'+urltype);
	});

	$('#saveImport_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').on('click',function(){
		if(typeimport == 'uploadmaster'){
			if($('#typemaster').val() == ""){
				$.messager.alert('POIN', "Type Tracker Can't Empty!!", 'error');
				return false;
			}
			if($('#typemaster').val() == "siteinfo"){
				if($('#methodupload').val() == ""){
					$.messager.alert('POIN', "Method Upload Can't Empty!!", 'error');
					return false;
				}		
			}
		}else{
			if($('#methodupload').val() == ""){
				$.messager.alert('POIN', "Method Upload Can't Empty!!", 'error');
				return false;
			}	
		}	
		
		submit_form('frmimport_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
',function(r){
			alert(123);
			if(r==1){
				$.messager.alert('POIN', "Data Saved", 'info');
				$('.info-empty').remove();
				$('#grid_point_atf').datagrid('reload');
				closeWindow();
			}else{
				$('#result_point_atf').html(r);
			}
		});
		return false;
	});
	
	
	$('#cancelImport_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').on('click',function(){
		closeWindow();
		$('#grid_point_atf').datagrid('reload');
		return false;
	});
<?php echo '</script'; ?>
>
<?php }
}
?>