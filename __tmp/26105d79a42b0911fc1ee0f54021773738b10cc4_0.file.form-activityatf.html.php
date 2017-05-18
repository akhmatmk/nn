<?php /* Smarty version 3.1.27, created on 2017-04-22 00:13:09
         compiled from "/home/vagrant/Code/nokia/__application/views/backend/modul/master/form-activityatf.html" */ ?>
<?php
/*%%SmartyHeaderCode:123522297958fa3da53d64f6_22740399%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26105d79a42b0911fc1ee0f54021773738b10cc4' => 
    array (
      0 => '/home/vagrant/Code/nokia/__application/views/backend/modul/master/form-activityatf.html',
      1 => 1487134347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123522297958fa3da53d64f6_22740399',
  'variables' => 
  array (
    'acak' => 0,
    'host' => 0,
    'editstatus' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58fa3da5416f40_41358902',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58fa3da5416f40_41358902')) {
function content_58fa3da5416f40_41358902 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '123522297958fa3da53d64f6_22740399';
?>
<form method="post" id='frmactivityatf_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
' url='<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
backend/simpandata/tbl_master_activity_atf' class="form-horizontal">
	<input type='hidden' name='editstatus' value='<?php echo $_smarty_tpl->tpl_vars['editstatus']->value;?>
' /> 
	<input type='hidden' name='id' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
" /> 
	
	<div class="form-group"><label class="col-sm-2 control-label">WH ID</label>
		<div class="col-sm-3">
			<input class="form-control" type="text" name='activity' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['activity'])===null||$tmp==='' ? '' : $tmp);?>
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
            <a class="btn btn-primary" id='saveActivity' >Save</a>
            <a class="btn btn-danger" id='cancelActivity'>Cancel</a>
        </div>
    </div>	
</form>

<?php echo '<script'; ?>
>
	$('#saveActivity').on('click',function(){
		submit_form('frmactivityatf_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
',function(r){
			if(r==1){
				$.messager.alert('POIN', "Data Saved", 'info');
				$('.info-empty').remove();
			}else{
				$.messager.alert('POIN', "Failed Saved", 'error');
			}
			closeWindow();
			$('#grid_activityatf').datagrid('reload');
		});
		return false;
	});
	
	$('#cancelActivity').on('click',function(){
		closeWindow();
		$('#grid_activityatf').datagrid('reload');
		return false;
	});

<?php echo '</script'; ?>
>
<?php }
}
?>