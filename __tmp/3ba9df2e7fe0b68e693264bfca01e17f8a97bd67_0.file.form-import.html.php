<?php /* Smarty version 3.1.27, created on 2017-07-09 16:05:59
         compiled from "C:\xampp\htdocs\nn\__application\views\backend\modul\progress\form-import.html" */ ?>
<?php
/*%%SmartyHeaderCode:16660783475961f1f729e674_51496058%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ba9df2e7fe0b68e693264bfca01e17f8a97bd67' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nn\\__application\\views\\backend\\modul\\progress\\form-import.html',
      1 => 1499518691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16660783475961f1f729e674_51496058',
  'variables' => 
  array (
    'acak' => 0,
    'host' => 0,
    'type_import' => 0,
    'combotracker' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5961f1f72d9009_92263199',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5961f1f72d9009_92263199')) {
function content_5961f1f72d9009_92263199 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16660783475961f1f729e674_51496058';
?>
<form method="post" id='frmimport_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
' url='<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
backend/importdata/'  class="form-horizontal" enctype="multipart/form-data">
	<input type='hidden' id='typeimport' name='typeimport' value='<?php echo $_smarty_tpl->tpl_vars['type_import']->value;?>
' />
	<input type='hidden' id='folder' name='folder' value='progress' />
	
	<br/>
	
	<?php if ($_smarty_tpl->tpl_vars['type_import']->value == 'uploadtracker') {?>
	<div class="form-group"><label class="col-sm-2 control-label">Type Tracker</label>
		<div class="col-sm-2">
			<select id='typetracker' name='typetracker' style='padding:3px; width:100px;'>
				<?php echo $_smarty_tpl->tpl_vars['combotracker']->value;?>

			</select>
		</div>
	</div>
	<div id='method' style='display: none;'>	
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
	<?php } else { ?>
	<div class="form-group"><label class="col-sm-2 control-label">Method</label>
		<div class="col-sm-2">
			<select id='methodupload' name='methodupload' style='padding:3px; width:100px;'>
				<option value=''>-- Choose --</option>
				<option value='N'>New Data</option>
				<option value='U'>Update</option>
			</select>
		</div>
	</div>
	<?php }?>
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
		<div class="col-sm-8" ><font color="red"> FIELD WITH FORMAT NUMBER AND VALUE CAN'T BLANK (MIN = 0)</font></div>
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
	
	if(typeimport == 'uploadtracker'){
		$('#typetracker').on('change', function(){
			$('#typeimport').val($(this).val());
			//alert($('#typetracker').val());
			//console.log($('#typetracker').val());
			if($(this).val() == 'siteinfo'){
				$('#method').css({ 'display':'inline' });
			}else{
				$('#method').css({ 'display':'none' });
			}
		});
	}	
	
	$('#download').on('click', function(){
		if(typeimport == 'uploadtracker'){
			if($('#typetracker').val() == ""){
				$.messager.alert('POIN', "Type Tracker Can't Empty!!", 'error');
				return false;
			}
			urltype = $('#typetracker').val();
		}else{
			urltype = typeimport;
		}
		window.open('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
backend/download/'+urltype);
	});
	
	$('#saveImport_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').on('click',function(){
		if(typeimport == 'uploadtracker'){
			if($('#typetracker').val() == ""){
				$.messager.alert('POIN', "Type Tracker Can't Empty!!", 'error');
				return false;
			}
			if($('#typetracker').val() == "siteinfo"){
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