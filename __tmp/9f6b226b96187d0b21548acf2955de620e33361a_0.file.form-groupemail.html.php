<?php /* Smarty version 3.1.27, created on 2017-07-20 11:46:31
         compiled from "C:\xampp\htdocs\nn\__application\views\backend\modul\master\form-groupemail.html" */ ?>
<?php
/*%%SmartyHeaderCode:88106245597035a726f199_28024187%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f6b226b96187d0b21548acf2955de620e33361a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nn\\__application\\views\\backend\\modul\\master\\form-groupemail.html',
      1 => 1500525986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88106245597035a726f199_28024187',
  'variables' => 
  array (
    'acak' => 0,
    'host' => 0,
    'editstatus' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_597035a72a1e29_09168513',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_597035a72a1e29_09168513')) {
function content_597035a72a1e29_09168513 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '88106245597035a726f199_28024187';
?>
<form method="post" id='frmregion_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
' url='<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
backend/simpandata/tbl_master_group' class="form-horizontal">
	<input type='hidden' name='editstatus' value='<?php echo $_smarty_tpl->tpl_vars['editstatus']->value;?>
' /> 
	<input type='hidden' name='id' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
" /> 
	
	<div class="form-group"><label class="col-sm-2 control-label">Name Group</label>
		<div class="col-sm-3">
			<input class="form-control" type="text" name='name' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="hr-line-dashed"></div>
    <div class="form-group">
        <div class="col-sm-4 col-sm-offset-2">
            <a class="btn btn-primary" id='saveRegion' >Save</a>
            <a class="btn btn-danger" id='cancelRegion'>Cancel</a>
        </div>
    </div>	
</form>

<?php echo '<script'; ?>
>
	$('#saveRegion').on('click',function(){
		submit_form('frmregion_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
',function(r){
			if(r==1){
				$.messager.alert('POIN', "Data Saved", 'info');
				$('.info-empty').remove();
			}else{
				$.messager.alert('POIN', "Failed Saved", 'error');
			}
			closeWindow();
			$('#grid_region').datagrid('reload');
		});
		return false;
	});
	
	$('#cancelRegion').on('click',function(){
		closeWindow();
		$('#grid_region').datagrid('reload');
		return false;
	});

<?php echo '</script'; ?>
>
<?php }
}
?>