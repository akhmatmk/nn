<?php /* Smarty version 3.1.27, created on 2017-07-20 13:39:17
         compiled from "C:\xampp\htdocs\nn\__application\views\backend\modul\master\form-aproval.html" */ ?>
<?php
/*%%SmartyHeaderCode:1162658652597050151b38f8_95840860%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d06abac60ce975b2d394feb38d7add4f10dd6ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nn\\__application\\views\\backend\\modul\\master\\form-aproval.html',
      1 => 1500532735,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1162658652597050151b38f8_95840860',
  'variables' => 
  array (
    'acak' => 0,
    'host' => 0,
    'editstatus' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_597050151f2105_70461739',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_597050151f2105_70461739')) {
function content_597050151f2105_70461739 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1162658652597050151b38f8_95840860';
?>
<form method="post" id='frmregion_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
' url='<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
backend/simpandata/tbl_master_approval' class="form-horizontal">
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

	<div class="form-group"><label class="col-sm-2 control-label">Approval Ke</label>
		<div class="col-sm-8">
			  	<input type="text" name="approval">
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

<?php echo '</script'; ?>
>
<?php }
}
?>