<?php /* Smarty version 3.1.27, created on 2017-04-21 05:13:51
         compiled from "/home/vagrant/Code/nokia/__application/views/backend/modul/progress/form-siteinfo.html" */ ?>
<?php
/*%%SmartyHeaderCode:109706507158f9329f6d2d18_54257785%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e92d1b881258c9f4cc6d533ff1d2d342a28501dc' => 
    array (
      0 => '/home/vagrant/Code/nokia/__application/views/backend/modul/progress/form-siteinfo.html',
      1 => 1487866183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109706507158f9329f6d2d18_54257785',
  'variables' => 
  array (
    'acak' => 0,
    'host' => 0,
    'editstatus' => 0,
    'data' => 0,
    'tbl_master_phase_id' => 0,
    'tbl_master_sitename_id' => 0,
    'tbl_master_region_id' => 0,
    'tbl_master_pone_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58f9329f733d70_63928592',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f9329f733d70_63928592')) {
function content_58f9329f733d70_63928592 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '109706507158f9329f6d2d18_54257785';
?>
<form method="post" id='frmsiteinfo_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
' url='<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
backend/simpandata/tbl_master_tracker_siteinfo' class="form-horizontal">
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
	
	<div class="form-group"><label class="col-sm-2 control-label">Site ID</label>
		<div class="col-sm-3">
			<input class="form-control" type="text" name='site_id' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['site_id'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Site Name</label>
		<div class="col-sm-3">
			<input class="form-control" type="text" name='site_name' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['site_name'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">SOW Category</label>
		<div class="col-sm-3">
			<input class="form-control" type="text" name='sow_category' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['sow_category'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Site Status</label>
		<div class="col-sm-4">
			<select class="form-control" name='tbl_master_sitename_id'>
				<?php echo $_smarty_tpl->tpl_vars['tbl_master_sitename_id']->value;?>

			</select>
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Region Code</label>
		<div class="col-sm-4">
			<select class="form-control" name='tbl_master_region_id'>
				<?php echo $_smarty_tpl->tpl_vars['tbl_master_region_id']->value;?>

			</select>
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Area Name</label>
		<div class="col-sm-2">
			<input class="form-control" type="text" name='area_name' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['area_name'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Cluster</label>
		<div class="col-sm-2">
			<input class="form-control" type="text" name='cluster' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['cluster'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">SOW Detail</label>
		<div class="col-sm-2">
			<input class="form-control" type="text" name='sow_detail' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['sow_detail'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">System Key</label>
		<div class="col-sm-2">
			<input class="form-control" type="text" name='system_key' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['system_key'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Site ID Ori</label>
		<div class="col-sm-3">
			<input class="form-control" type="text" name='site_id_ori' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['site_id_ori'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Site Name Ori</label>
		<div class="col-sm-3">
			<input class="form-control" type="text" name='site_name_ori' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['site_name_ori'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">NE Name</label>
		<div class="col-sm-4">
			<select class="form-control" name='tbl_master_pone_id'>
				<?php echo $_smarty_tpl->tpl_vars['tbl_master_pone_id']->value;?>

			</select>
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Network BOQ</label>
		<div class="col-sm-2">
			<input class="form-control" type="text" name='network_boq' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['network_boq'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">WP ID SVC</label>
		<div class="col-sm-2">
			<input class="form-control" type="text" name='wp_id_svc' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['wp_id_svc'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">SO SVC</label>
		<div class="col-sm-2">
			<input class="form-control" type="text" name='so_svc' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['so_svc'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Partner NI</label>
		<div class="col-sm-2">
			<input class="form-control" type="text" name='partner_ni' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['partner_ni'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Partner NPO</label>
		<div class="col-sm-2">
			<input class="form-control" type="text" name='partner_npo' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['partner_npo'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Remarks</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name='remarks_siteinfo' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['remarks_siteinfo'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="hr-line-dashed"></div>
    <div class="form-group">
        <div class="col-sm-4 col-sm-offset-2">
            <a class="btn btn-primary" id='saveSiteInfo' >Save</a>
            <a class="btn btn-danger" id='cancelSiteInfo'>Cancel</a>
        </div>
    </div>	
</form>

<?php echo '<script'; ?>
>
	$('#saveSiteInfo').on('click',function(){
		submit_form('frmsiteinfo_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
',function(r){
			if(r==1){
				$.messager.alert('POIN', "Data Saved", 'info');
				$('.info-empty').remove();
			}else{
				$.messager.alert('POIN', "Data Saved", 'info');
			}
			closeWindow();
			$('#grid_siteinfo').datagrid('reload');
		});
		return false;
	});
	
	$('#cancelSiteInfo').on('click',function(){
		closeWindow();
		$('#grid_siteinfo').datagrid('reload');
		return false;
	});

<?php echo '</script'; ?>
>
<?php }
}
?>