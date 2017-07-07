<?php /* Smarty version 3.1.27, created on 2017-07-06 23:59:57
         compiled from "/home/vagrant/Code/nokia/__application/views/backend/modul/master/form-materialatf.html" */ ?>
<?php
/*%%SmartyHeaderCode:208291871595e6c8dd8f156_02469738%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb045fe9c092157d273924e23342484ff0032d7d' => 
    array (
      0 => '/home/vagrant/Code/nokia/__application/views/backend/modul/master/form-materialatf.html',
      1 => 1495074036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208291871595e6c8dd8f156_02469738',
  'variables' => 
  array (
    'acak' => 0,
    'host' => 0,
    'editstatus' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_595e6c8ddd5890_72598832',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_595e6c8ddd5890_72598832')) {
function content_595e6c8ddd5890_72598832 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '208291871595e6c8dd8f156_02469738';
?>
<form method="post" id='frmmaterialatf_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
' url='<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
backend/simpandata/tbl_master_material_atf' class="form-horizontal">
	<input type='hidden' name='editstatus' value='<?php echo $_smarty_tpl->tpl_vars['editstatus']->value;?>
' /> 
	<input type='hidden' name='id' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
" /> 
	
	<div class="form-group"><label class="col-sm-2 control-label">Vendor</label>
		<div class="col-sm-3">
			<input class="form-control" type="text" name='vendor' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['vendor'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Equipment</label>
		<div class="col-sm-3">
			<input class="form-control" type="text" name='equipment' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['equipment'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Type</label>
		<div class="col-sm-3">
			<input class="form-control" type="text" name='type' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['type'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Modular Type</label>
		<div class="col-sm-3">
			<input class="form-control" type="text" name='modular_type' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['modular_type'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Uom</label>
		<div class="col-sm-3">
			<input class="form-control" type="text" name='uom' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['uom'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Product Code</label>
		<div class="col-sm-3">
			<input class="form-control" type="text" name='product_code' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['product_code'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Remarks</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name='remarks' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['remarks'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="hr-line-dashed"></div>
    <div class="form-group">
        <div class="col-sm-4 col-sm-offset-2">
            <a class="btn btn-primary" id='saveMaterialATF' >Save</a>
            <a class="btn btn-danger" id='cancelMaterialATF'>Cancel</a>
        </div>
    </div>	
</form>

<?php echo '<script'; ?>
>
	$('#saveMaterialATF').on('click',function(){
		submit_form('frmmaterialatf_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
',function(r){
			if(r==1){
				$.messager.alert('POIN', "Data Saved", 'info');
				$('.info-empty').remove();
			}else{
				$.messager.alert('POIN', "Failed Saved", 'error');
			}
			closeWindow();
			$('#grid_materialatf').datagrid('reload');
		});
		return false;
	});
	
	$('#cancelMaterialATF').on('click',function(){
		closeWindow();
		$('#grid_materialatf').datagrid('reload');
		return false;
	});

<?php echo '</script'; ?>
>
<?php }
}
?>