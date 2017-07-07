<?php /* Smarty version 3.1.27, created on 2017-07-06 23:58:52
         compiled from "/home/vagrant/Code/nokia/__application/views/backend/modul/master/form-import.html" */ ?>
<?php
/*%%SmartyHeaderCode:1772479194595e6c4c9f4c65_56894578%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e3648f9312dd63b085b86569c58e880b16477d6' => 
    array (
      0 => '/home/vagrant/Code/nokia/__application/views/backend/modul/master/form-import.html',
      1 => 1488936784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1772479194595e6c4c9f4c65_56894578',
  'variables' => 
  array (
    'acak' => 0,
    'host' => 0,
    'type_import' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_595e6c4ca30c22_40942821',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_595e6c4ca30c22_40942821')) {
function content_595e6c4ca30c22_40942821 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1772479194595e6c4c9f4c65_56894578';
?>
<form method="post" id='frmimport_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
' url='<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
backend/importdata/'  class="form-horizontal" enctype="multipart/form-data">
	<input type='hidden' id='typeimport' name='typeimport' value='<?php echo $_smarty_tpl->tpl_vars['type_import']->value;?>
' />
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
	var typeimport = '<?php echo $_smarty_tpl->tpl_vars['type_import']->value;?>
';
	
	if(typeimport == 'uploadmaster'){
		$('#typemaster').on('change', function(){
			$('#typeimport').val($(this).val());
			alert($('#typemaster').val());
			console.log($('#typemaster').val());
			//if($(this).val() == 'siteinfo'){
			//	$('#method').css({ 'display':'inline' });
			//}else{
			//	$('#method').css({ 'display':'none' });
			//}
		});
	}	
	
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
			if(r==1){
				$.messager.alert('POIN', "Data Saved", 'info');
				$('.info-empty').remove();
				$('#grid_<?php echo $_smarty_tpl->tpl_vars['type_import']->value;?>
').datagrid('reload');
				closeWindow();
			}else{
				$('#result_<?php echo $_smarty_tpl->tpl_vars['type_import']->value;?>
').html(r);
			}
		});
		return false;
	});
	
	$('#cancelImport_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').on('click',function(){
		closeWindow();
		$('#grid_<?php echo $_smarty_tpl->tpl_vars['type_import']->value;?>
').datagrid('reload');
		return false;
	});
<?php echo '</script'; ?>
>
<?php }
}
?>