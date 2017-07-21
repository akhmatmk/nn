<?php /* Smarty version 3.1.27, created on 2017-07-20 08:55:16
         compiled from "C:\xampp\htdocs\nn\__application\views\backend\modul\progress\form-mastercr.html" */ ?>
<?php
/*%%SmartyHeaderCode:40746716259700d849dad46_02734242%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2cd6591d593b3fbae1e53231e6970eb0291b0f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nn\\__application\\views\\backend\\modul\\progress\\form-mastercr.html',
      1 => 1499518691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40746716259700d849dad46_02734242',
  'variables' => 
  array (
    'acak' => 0,
    'host' => 0,
    'editstatus' => 0,
    'data' => 0,
    'tbl_master_phase_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59700d84a250e8_77987154',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59700d84a250e8_77987154')) {
function content_59700d84a250e8_77987154 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '40746716259700d849dad46_02734242';
?>
<form method="post" id='frmmastercr_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
' url='<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
backend/simpandata/tbl_master_cr' class="form-horizontal">
	<input type='hidden' name='editstatus' value='<?php echo $_smarty_tpl->tpl_vars['editstatus']->value;?>
' /> 
	<input type='hidden' name='id' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
" /> 
	<br/>
	<div class="form-group"><label class="col-sm-2 control-label">Phase</label>
		<div class="col-sm-4">
			<select class="form-control" name='tbl_master_phase_id'>
				<?php echo $_smarty_tpl->tpl_vars['tbl_master_phase_id']->value;?>

			</select>
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">CR No Nokia</label>
		<div class="col-sm-4">
			<input class="form-control" type="text" name='cr_no_nokia' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['cr_no_nokia'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">CR No Indosat</label>
		<div class="col-sm-4">
			<input class="form-control" type="text" name='cr_no_indosat' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['cr_no_indosat'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">CR Status</label>
		<div class="col-sm-4">
			<input class="form-control" type="text" name='cr_status' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['cr_status'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">NODIN</label>
		<div class="col-sm-4">
			<input class="form-control" type="text" name='nodin' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['nodin'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">CR Position</label>
		<div class="col-sm-4">
			<input class="form-control" type="text" name='cr_position' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['cr_position'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">CR Pic</label>
		<div class="col-sm-4">
			<input class="form-control" type="text" name='cr_pic' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['cr_pic'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">CR Submit</label>
		<div class="col-sm-4">
			<input class="form-control" type="text" name='cr_submit' id="dateboxsubmit" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['cr_submit'])===null||$tmp==='' ? '' : $tmp);?>
" style="width:100%;" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">CR Approved</label>
		<div class="col-sm-4">
			<input class="form-control" type="text" name='cr_approved' id="dateboxcrapproved" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['cr_approved'])===null||$tmp==='' ? '' : $tmp);?>
" style="width:100%;" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">PO Received</label>
		<div class="col-sm-4">
			<input class="form-control" type="text" name='po_received' id="dateboxporeceived" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['po_received'])===null||$tmp==='' ? '' : $tmp);?>
" style="width:100%;" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">CR Currency</label>
		<div class="col-sm-4">
			<input class="form-control" type="text" name='cr_currency' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['cr_currency'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Value Before</label>
		<div class="col-sm-4">
			<input class="form-control" type="text" name='value_before' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['value_before'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Value After</label>
		<div class="col-sm-4">
			<input class="form-control" type="text" name='value_after' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['value_after'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Value Delta</label>
		<div class="col-sm-4">
			<input class="form-control" type="text" readonly="true" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['value_delta'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">CR Type</label>
		<div class="col-sm-4">
			<input class="form-control" type="text" name='cr_type' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['cr_type'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Value Additional</label>
		<div class="col-sm-4">
			<input class="form-control" type="text" name='value_additional' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['value_additional'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Value Reduction</label>
		<div class="col-sm-4">
			<input class="form-control" type="text" name='value_reduction' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['value_reduction'])===null||$tmp==='' ? '' : $tmp);?>
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
            <a class="btn btn-primary" id='saveMasterCR' >Save</a>
            <a class="btn btn-danger" id='cancelMasterCR'>Cancel</a>
        </div>
    </div>	
</form>

<?php echo '<script'; ?>
>
	$('#saveMasterCR').on('click',function(){
		submit_form('frmmastercr_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
',function(r){
			if(r==1){
				$.messager.alert('POIN', "Data Saved", 'info');
				$('.info-empty').remove();
			}else{
				$.messager.alert('POIN', "Failed Saved", 'error');
			}
			closeWindow();
			$('#grid_mastercr').datagrid('reload');
		});
		return false;
	});
	
	$('#cancelMasterCR').on('click',function(){
		closeWindow();
		$('#grid_mastercr').datagrid('reload');
		return false;
	});

	$('#dateboxsubmit').datebox({
    	required:false
    });

    $('#dateboxporeceived').datebox({
    required:false
    });

    $('#dateboxcrapproved').datebox({
    required:false
    });

    $.fn.datebox.defaults.formatter = function(date){
		var y = date.getFullYear();
		var m = date.getMonth()+1;
		var d = date.getDate();
		return y+'-'+(m<10?('0'+m):m)+'-'+(d<10?('0'+d):d);
	};
	$.fn.datebox.defaults.parser = function(s){
		if (!s) return new Date();
		var ss = s.split('-');
		var y = parseInt(ss[0],10);
		var m = parseInt(ss[1],10);
		var d = parseInt(ss[2],10);
		if (!isNaN(y) && !isNaN(m) && !isNaN(d)){
			return new Date(y,m-1,d);
		} else {
			return new Date();
		}
	};

<?php echo '</script'; ?>
>
<?php }
}
?>