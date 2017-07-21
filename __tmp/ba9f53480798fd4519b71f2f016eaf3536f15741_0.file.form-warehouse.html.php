<?php /* Smarty version 3.1.27, created on 2017-05-17 10:07:26
         compiled from "/home/vagrant/Code/nokia/__application/views/backend/modul/master/form-warehouse.html" */ ?>
<?php
/*%%SmartyHeaderCode:1637774162591bbe6e48f2c1_95917485%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba9f53480798fd4519b71f2f016eaf3536f15741' => 
    array (
      0 => '/home/vagrant/Code/nokia/__application/views/backend/modul/master/form-warehouse.html',
      1 => 1494990422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1637774162591bbe6e48f2c1_95917485',
  'variables' => 
  array (
    'acak' => 0,
    'host' => 0,
    'editstatus' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_591bbe6e55c025_47823107',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_591bbe6e55c025_47823107')) {
function content_591bbe6e55c025_47823107 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1637774162591bbe6e48f2c1_95917485';
?>
<form method="post" id='frmwarehouse_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
' url='<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
backend/simpandata/tbl_master_warehouse' class="form-horizontal">
	<input type='hidden' name='editstatus' value='<?php echo $_smarty_tpl->tpl_vars['editstatus']->value;?>
' /> 
	<input type='hidden' name='id' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
" /> 
	
	<div class="form-group"><label class="col-sm-2 control-label">WH ID</label>
		<div class="col-sm-3">
			<input class="form-control" type="text" name='wh_id' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['wh_id'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">WH Name</label>
		<div class="col-sm-3">
			<input class="form-control" type="text" name='wh_name' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['wh_name'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">WH Address</label>
		<div class="col-sm-3">
			<input class="form-control" type="text" name='wh_address' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['wh_address'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">WH City</label>
		<div class="col-sm-3">
			<input class="form-control" type="text" name='wh_city' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['wh_city'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">WH Region</label>
		<div class="col-sm-3">
			<input class="form-control" type="text" name='wh_region' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['wh_region'])===null||$tmp==='' ? '' : $tmp);?>
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
            <a class="btn btn-primary" id='saveWarehouse' >Save</a>
            <a class="btn btn-danger" id='cancelWarehouse'>Cancel</a>
        </div>
    </div>	
</form>

<?php echo '<script'; ?>
>
	$('#saveWarehouse').on('click',function(){
		submit_form('frmwarehouse_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
',function(r){
			if(r==1){
				$.messager.alert('POIN', "Data Saved", 'info');
				$('.info-empty').remove();
			}else{
				$.messager.alert('POIN', "Failed Saved", 'error');
			}
			closeWindow();
			$('#grid_warehouse').datagrid('reload');
		});
		return false;
	});
	
	$('#cancelWarehouse').on('click',function(){
		closeWindow();
		$('#grid_warehouse').datagrid('reload');
		return false;
	});

<?php echo '</script'; ?>
>
<?php }
}
?>