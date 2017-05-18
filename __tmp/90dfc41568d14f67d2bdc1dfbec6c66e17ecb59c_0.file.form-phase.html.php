<?php /* Smarty version 3.1.27, created on 2017-05-18 09:11:38
         compiled from "/home/vagrant/Code/nokia/__application/views/backend/modul/master/form-phase.html" */ ?>
<?php
/*%%SmartyHeaderCode:1491741169591d02da93d863_31687013%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90dfc41568d14f67d2bdc1dfbec6c66e17ecb59c' => 
    array (
      0 => '/home/vagrant/Code/nokia/__application/views/backend/modul/master/form-phase.html',
      1 => 1484659674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1491741169591d02da93d863_31687013',
  'variables' => 
  array (
    'acak' => 0,
    'host' => 0,
    'editstatus' => 0,
    'data' => 0,
    'checkedyes' => 0,
    'checkedno' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_591d02da9b4588_00581881',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_591d02da9b4588_00581881')) {
function content_591d02da9b4588_00581881 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1491741169591d02da93d863_31687013';
?>
<form method="post" id='frmphase_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
' url='<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
backend/simpandata/tbl_master_phase' class="form-horizontal">
	<input type='hidden' name='editstatus' value='<?php echo $_smarty_tpl->tpl_vars['editstatus']->value;?>
' /> 
	<input type='hidden' name='id' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
" /> 
	<br/>
	<div class="form-group"><label class="col-sm-2 control-label">Phase Code</label> max.10
		<div class="col-sm-3">
			<input class="form-control" type="text" name='phase_code' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['phase_code'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Phase Name</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name='phase_name' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['phase_name'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Year</label>
		<div class="col-sm-3">
			<input class="form-control" type="text" name='phase_year' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['phase_year'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Publish</label>
		<div class="col-sm-2">
			<?php $_smarty_tpl->tpl_vars['checkedyes'] = new Smarty_Variable('', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['checkedno'] = new Smarty_Variable('', null, 0);?>
			
			<?php if ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['publish'])===null||$tmp==='' ? '' : $tmp) == 'Yes') {?>
				<?php $_smarty_tpl->tpl_vars['checkedyes'] = new Smarty_Variable('checked', null, 0);?>
				<?php $_smarty_tpl->tpl_vars['checkedno'] = new Smarty_Variable('', null, 0);?>
			<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['publish'])===null||$tmp==='' ? '' : $tmp) == 'No') {?>
				<?php $_smarty_tpl->tpl_vars['checkedyes'] = new Smarty_Variable('', null, 0);?>
				<?php $_smarty_tpl->tpl_vars['checkedno'] = new Smarty_Variable('checked', null, 0);?>
			<?php }?>
				
			<input type="radio" name="publish" id="publish" <?php echo $_smarty_tpl->tpl_vars['checkedyes']->value;?>
 value="Yes"  /> Yes
				<label for="radio"></label>
			<input type="radio" name="publish" id="publish" <?php echo $_smarty_tpl->tpl_vars['checkedno']->value;?>
 value="No" /> No
				<label for="radio"></label>
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Remarks</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name='remark' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['remark'])===null||$tmp==='' ? '' : $tmp);?>
" />
		</div>
	</div>
	<div class="hr-line-dashed"></div>
    <div class="form-group">
        <div class="col-sm-4 col-sm-offset-2">
            <a class="btn btn-primary" id='savePhase' >Save</a>
            <a class="btn btn-danger" id='cancelPhase'>Cancel</a>
        </div>
    </div>	
</form>

<?php echo '<script'; ?>
>
	$('#savePhase').on('click',function(){
		submit_form('frmphase_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
',function(r){
			if(r==1){
				$.messager.alert('POIN', "Data Saved", 'info');
				$('.info-empty').remove();
			}else{
				$.messager.alert('POIN', "Failed Saved", 'error');
			}
			
			closeWindow();
			$('#grid_phase').datagrid('reload');
		});
		return false;
	});
	
	$('#cancelPhase').on('click',function(){
		closeWindow();
		$('#grid_phase').datagrid('reload');
		return false;
	});

<?php echo '</script'; ?>
>
<?php }
}
?>