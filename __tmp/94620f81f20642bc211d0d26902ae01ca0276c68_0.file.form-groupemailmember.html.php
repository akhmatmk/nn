<?php /* Smarty version 3.1.27, created on 2017-07-20 12:38:11
         compiled from "C:\xampp\htdocs\nn\__application\views\backend\modul\master\form-groupemailmember.html" */ ?>
<?php
/*%%SmartyHeaderCode:721408713597041c39d6f34_14016962%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94620f81f20642bc211d0d26902ae01ca0276c68' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nn\\__application\\views\\backend\\modul\\master\\form-groupemailmember.html',
      1 => 1500529082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '721408713597041c39d6f34_14016962',
  'variables' => 
  array (
    'acak' => 0,
    'host' => 0,
    'editstatus' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_597041c3a0da34_63008597',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_597041c3a0da34_63008597')) {
function content_597041c3a0da34_63008597 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '721408713597041c39d6f34_14016962';
?>
<form method="post" id='frmregion_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
' url='<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
backend/simpandata/tbl_member_master_group' class="form-horizontal">
	<input type='hidden' name='editstatus' value='<?php echo $_smarty_tpl->tpl_vars['editstatus']->value;?>
' /> 
	<input type='hidden' name='id' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
" /> 
	
	<div class="form-group"><label class="col-sm-2 control-label">Name Group</label>
		<div class="col-sm-8">
			  	<select class="form-control" id="id_name_group" name="id_group">
  				</select>
		</div>
	</div>

	<div class="form-group"><label class="col-sm-2 control-label">User</label>
		<div class="col-sm-8">
			  	<select class="form-control" id="id_name_user" name="id_user">
  				</select>
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

	 $.ajax({ 
	    url: '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
get/group',
	    type: 'get',
	    dataType: 'json',
	    success: function(dataGroup)
	    {
	    	var a = 1;
	    	$("#id_name_group").html("<option>-Pilih-</option>");
	    	$.each(dataGroup, function(index, element) {
				$("#id_name_group").append("<option value='"+element.id+"'>"+element.name+"</option>");
			});
	    }
	});

	 $.ajax({ 
	    url: '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
get/user',
	    type: 'get',
	    dataType: 'json',
	    success: function(dataGroup)
	    {
	    	var a = 1;
	    	$("#id_name_user").html("<option>-Pilih-</option>");
	    	$.each(dataGroup, function(index, element) {
				$("#id_name_user").append("<option value='"+element.id+"'>"+element.nama_user+"</option>");
			});
	    }
	});

<?php echo '</script'; ?>
>
<?php }
}
?>