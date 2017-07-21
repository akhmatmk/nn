<?php /* Smarty version 3.1.27, created on 2017-04-23 17:10:10
         compiled from "/home/vagrant/Code/nokia/__application/views/backend/modul/progress/form-masterpo.html" */ ?>
<?php
/*%%SmartyHeaderCode:29251898858fc7d8274b965_68959271%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3733683beae4f4d20acdba1de5cb770deae9f164' => 
    array (
      0 => '/home/vagrant/Code/nokia/__application/views/backend/modul/progress/form-masterpo.html',
      1 => 1489582346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29251898858fc7d8274b965_68959271',
  'variables' => 
  array (
    'acak' => 0,
    'host' => 0,
    'editstatus' => 0,
    'data' => 0,
    'tbl_master_phase_id' => 0,
    'tbl_master_potype_id' => 0,
    'tbl_master_currency_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58fc7d82799f43_09432537',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58fc7d82799f43_09432537')) {
function content_58fc7d82799f43_09432537 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '29251898858fc7d8274b965_68959271';
?>
<form method="post" id='frmmasterpo_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
' url='<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
backend/simpandata/tbl_master_po' class="form-horizontal">
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
	<div class="form-group"><label class="col-sm-2 control-label">PO Type</label>
		<div class="col-sm-4">
			<select class="form-control" name='tbl_master_potype_id'>
				<?php echo $_smarty_tpl->tpl_vars['tbl_master_potype_id']->value;?>

			</select>
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Currency</label>
		<div class="col-sm-4">
			<select class="form-control" name='tbl_master_currency_id'>
				<?php echo $_smarty_tpl->tpl_vars['tbl_master_currency_id']->value;?>

			</select>
		</div>
	</div>	
	<div class="form-group"><label class="col-sm-2 control-label">PO No</label>
		<div class="col-sm-4">
			<input class="form-control" type="text" name='po_no' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['po_no'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Project Name</label>
		<div class="col-sm-4">
			<input class="form-control" type="text" name='project_name' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['project_name'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Basic Contract</label>
		<div class="col-sm-4">
			<input class="form-control" type="text" name='basic_contract' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['basic_contract'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">PO Date</label>
		<div class="col-sm-4">
			<input class="form-control" type="text" name='po_date' id="dateboxpodate" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['po_date'])===null||$tmp==='' ? '' : $tmp);?>
" style="width:100%;" />  
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">PO Received</label>
		<div class="col-sm-4">
			<input class="form-control" type="text" name='po_received' id="dateboxporeceived" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['po_received'])===null||$tmp==='' ? '' : $tmp);?>
" style="width:100%;" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">PO Delivery</label>
		<div class="col-sm-4">
			<input class="form-control" type="text" name='po_delivery' id="datbeboxpodelivery" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['po_delivery'])===null||$tmp==='' ? '' : $tmp);?>
" style="width:100%;" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Revisi On No</label>
		<div class="col-sm-4">
			<input class="form-control" type="text" name='revision_no' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['revision_no'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div> 
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">PO Gross IDR</label>
		<div class="col-sm-4">
			<input class="form-control" type="text" name='po_gross_idr' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['po_gross_idr'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">PO Nett IDR</label>
		<div class="col-sm-4">
			<input class="form-control" type="text" name='po_nett_idr' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['po_nett_idr'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Jis Dorr Rate</label>
		<div class="col-sm-4">
			<input class="form-control" type="text" name='jis_dorr_rate' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['jis_dorr_rate'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">PO Gross USD</label>
		<div class="col-sm-4">
			<input class="form-control" type="text" readonly="true" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['po_gross_usd'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">PO Nett USD</label>
		<div class="col-sm-4">
			<input class="form-control" type="text" readonly="true" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['po_nett_usd'])===null||$tmp==='' ? '' : $tmp);?>
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
            <a class="btn btn-primary" id='saveMasterPO' >Save</a>
            <a class="btn btn-danger" id='cancelMasterPO'>Cancel</a>
        </div>
    </div>	
</form>

<?php echo '<script'; ?>
>
	$('#saveMasterPO').on('click',function(){
		submit_form('frmmasterpo_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
',function(r){
			if(r==1){
				$.messager.alert('POIN', "Data Saved", 'info');
				$('.info-empty').remove();
			}else{
				$.messager.alert('POIN', "Failed Saved", 'error');
			}
			closeWindow();
			$('#grid_masterpo').datagrid('reload');
		});
		return false;
	});
	
	$('#cancelMasterPO').on('click',function(){
		closeWindow();
		$('#grid_masterpo').datagrid('reload');
		return false;
	});

	$('#dateboxpodate').datebox({
    	required:false
    });

    $('#dateboxporeceived').datebox({
    required:false
    });

    $('#datbeboxpodelivery').datebox({
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