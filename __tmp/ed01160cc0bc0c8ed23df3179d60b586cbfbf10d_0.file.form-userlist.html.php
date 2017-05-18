<?php /* Smarty version 3.1.27, created on 2017-04-14 18:10:46
         compiled from "/home/vagrant/Code/nokia/__application/views/backend/modul/usermanagement/form-userlist.html" */ ?>
<?php
/*%%SmartyHeaderCode:80507383058f0ae368caa02_38151491%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed01160cc0bc0c8ed23df3179d60b586cbfbf10d' => 
    array (
      0 => '/home/vagrant/Code/nokia/__application/views/backend/modul/usermanagement/form-userlist.html',
      1 => 1484659675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80507383058f0ae368caa02_38151491',
  'variables' => 
  array (
    'acak' => 0,
    'host' => 0,
    'editstatus' => 0,
    'data' => 0,
    'stsdisabled' => 0,
    'user_group' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58f0ae369266a5_32396391',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f0ae369266a5_32396391')) {
function content_58f0ae369266a5_32396391 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '80507383058f0ae368caa02_38151491';
?>
<form method="post" id='frmuser_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
' url='<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
backend/simpandata/tbl_user' class="form-horizontal">
	<input type='hidden' name='editstatus' value='<?php echo $_smarty_tpl->tpl_vars['editstatus']->value;?>
' /> 
	<input type='hidden' name='id' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
" /> 
	<br/>
	
	<?php if ($_smarty_tpl->tpl_vars['editstatus']->value == 'add') {?>
		<?php $_smarty_tpl->tpl_vars['stsdisabled'] = new Smarty_Variable('', null, 0);?>
	<?php } elseif ($_smarty_tpl->tpl_vars['editstatus']->value == 'edit') {?>
		<?php $_smarty_tpl->tpl_vars['stsdisabled'] = new Smarty_Variable('disabled', null, 0);?>
	<?php }?>
	
	<div class="form-group"><label class="col-sm-2 control-label">Full Name</label>
		<div class="col-sm-6">
			<input class="form-control" type="text" name='nama_lengkap' id='nama_lengkap' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['nama_lengkap'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Username</label>
		<div class="col-sm-4">
			<input class="form-control" type="text" <?php echo $_smarty_tpl->tpl_vars['stsdisabled']->value;?>
 name='nama_user' id='nama_user' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['nama_user'])===null||$tmp==='' ? '' : $tmp);?>
" />
			<br/>
			<span id='chkresult'></span>
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Password</label>
		<div class="col-sm-4">
			<input class="form-control" type="password" name='password' id='password' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['password'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Group User</label>
		<div class="col-sm-4">
			<select class="form-control" name='cl_user_group_id'>
				<?php echo $_smarty_tpl->tpl_vars['user_group']->value;?>

			</select>
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Email User</label>
		<div class="col-sm-6">
			<input class="form-control" type="text" name='email' id='email' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['email'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="hr-line-dashed"></div>
    <div class="form-group">
        <div class="col-sm-4 col-sm-offset-2">
            <a class="btn btn-primary" id='saveUserList_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
' >Save</a>
            <a class="btn btn-danger" id='cancelUserList_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
'>Cancel</a>
        </div>
    </div>	
</form>

<?php echo '<script'; ?>
>
	$('#nama_user').on('change', function(){
		$.post(host+'backend/getdisplay/usermanagement/check_username', { 'username':$(this).val() }, function(resp){
			if(resp == 1){
				result = '<font color="green">User Available</font>';
			}else{
				result = '<font color="red">User Exist</font>';
				$('#nama_user').val('');
			}
			
			$('#chkresult').html(result);
		});
	});
	
	$('#saveUserList_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').on('click',function(){
		submit_form('frmuser_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
',function(r){
			if(r==1){
				$.messager.alert('POIN', "Data Saved", 'info');
				$('.info-empty').remove();
			}else{
				$.messager.alert('POIN', "Failed Saved", 'error');
			}
			closeWindow();
			$('#grid_userlist').datagrid('reload');
		});
		return false;
	});
	
	$('#cancelUserList_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').on('click',function(){
		closeWindow();
		$('#grid_userlist').datagrid('reload');
		return false;
	});	
<?php echo '</script'; ?>
><?php }
}
?>