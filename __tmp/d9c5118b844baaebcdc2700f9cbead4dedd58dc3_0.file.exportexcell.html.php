<?php /* Smarty version 3.1.27, created on 2017-04-15 15:04:18
         compiled from "/home/vagrant/Code/nokia/__application/views/backend/modul/master/exportexcell.html" */ ?>
<?php
/*%%SmartyHeaderCode:27404211458f1d4022baf87_84033195%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9c5118b844baaebcdc2700f9cbead4dedd58dc3' => 
    array (
      0 => '/home/vagrant/Code/nokia/__application/views/backend/modul/master/exportexcell.html',
      1 => 1484659674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27404211458f1d4022baf87_84033195',
  'variables' => 
  array (
    'submodul' => 0,
    'data' => 0,
    'rows' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58f1d40235c1e7_70167164',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f1d40235c1e7_70167164')) {
function content_58f1d40235c1e7_70167164 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '27404211458f1d4022baf87_84033195';
if ($_smarty_tpl->tpl_vars['submodul']->value == 'phase') {?>
	<table>
		<thead>
			<tr>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='5%'>ID</td>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='10%'>Phase Code</td>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='20%'>Phase Name</td>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='10%'>Year</td>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='20%'>Remark</td>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='10%'>Publish</td>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='20%'>Update By</td>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='20%'>Update Date</td>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='10%'>Status</td>
			</tr>
		</thead>
		<tbody>
		<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['rows']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
$_smarty_tpl->tpl_vars['rows']->_loop = true;
$foreach_rows_Sav = $_smarty_tpl->tpl_vars['rows'];
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['phase_code'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['phase_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['phase_year'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['remark'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['publish'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['update_by'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['update_date'];?>
</td>
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['rows']->value['status'])===null||$tmp==='' ? '' : $tmp) == '1') {?>
					<td>Active</td>
				<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['rows']->value['status'])===null||$tmp==='' ? '' : $tmp) == '0') {?>
					<td>Inactive</td>
				<?php }?>
			</tr>
		<?php
$_smarty_tpl->tpl_vars['rows'] = $foreach_rows_Sav;
}
?>
		</tbody>
	</table>

<?php } elseif ($_smarty_tpl->tpl_vars['submodul']->value == 'potype') {?>
	<table>
		<thead>
			<tr>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='5%'>ID</td>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='10%'>PO Type</td>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='20%'>Remark</td>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='20%'>Update By</td>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='20%'>Update Date</td>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='10%'>Status</td>
			</tr>
		</thead>
		<tbody>
		<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['rows']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
$_smarty_tpl->tpl_vars['rows']->_loop = true;
$foreach_rows_Sav = $_smarty_tpl->tpl_vars['rows'];
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['po_type'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['remark'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['update_by'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['update_date'];?>
</td>
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['rows']->value['status'])===null||$tmp==='' ? '' : $tmp) == '1') {?>
					<td>Active</td>
				<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['rows']->value['status'])===null||$tmp==='' ? '' : $tmp) == '0') {?>
					<td>Inactive</td>
				<?php }?>
			</tr>
		<?php
$_smarty_tpl->tpl_vars['rows'] = $foreach_rows_Sav;
}
?>
		</tbody>
	</table>
	
<?php } elseif ($_smarty_tpl->tpl_vars['submodul']->value == 'pocurrency') {?>
	<table>
		<thead>
			<tr>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='5%'>ID</td>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='10%'>Currency</td>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='20%'>Remark</td>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='20%'>Update By</td>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='20%'>Update Date</td>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='10%'>Status</td>
			</tr>
		</thead>
		<tbody>
		<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['rows']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
$_smarty_tpl->tpl_vars['rows']->_loop = true;
$foreach_rows_Sav = $_smarty_tpl->tpl_vars['rows'];
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['currency'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['remark'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['update_by'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['update_date'];?>
</td>
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['rows']->value['status'])===null||$tmp==='' ? '' : $tmp) == '1') {?>
					<td>Active</td>
				<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['rows']->value['status'])===null||$tmp==='' ? '' : $tmp) == '0') {?>
					<td>Inactive</td>
				<?php }?>
			</tr>
		<?php
$_smarty_tpl->tpl_vars['rows'] = $foreach_rows_Sav;
}
?>
		</tbody>
	</table>
	
<?php } elseif ($_smarty_tpl->tpl_vars['submodul']->value == 'region') {?>
	<table>
		<thead>
			<tr>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='5%'>ID</td>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='10%'>Region Code</td>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='20%'>Remark</td>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='20%'>Update By</td>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='20%'>Update Date</td>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='10%'>Status</td>
			</tr>
		</thead>
		<tbody>
		<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['rows']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
$_smarty_tpl->tpl_vars['rows']->_loop = true;
$foreach_rows_Sav = $_smarty_tpl->tpl_vars['rows'];
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['region_code'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['remark'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['update_by'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['update_date'];?>
</td>
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['rows']->value['status'])===null||$tmp==='' ? '' : $tmp) == '1') {?>
					<td>Active</td>
				<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['rows']->value['status'])===null||$tmp==='' ? '' : $tmp) == '0') {?>
					<td>Inactive</td>
				<?php }?>
			</tr>
		<?php
$_smarty_tpl->tpl_vars['rows'] = $foreach_rows_Sav;
}
?>
		</tbody>
	</table>
	
<?php } elseif ($_smarty_tpl->tpl_vars['submodul']->value == 'nename') {?>
	<table>
		<thead>
			<tr>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='5%'>ID</td>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='10%'>NE Name</td>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='20%'>Remark</td>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='20%'>Update By</td>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='20%'>Update Date</td>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='10%'>Status</td>
			</tr>
		</thead>
		<tbody>
		<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['rows']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
$_smarty_tpl->tpl_vars['rows']->_loop = true;
$foreach_rows_Sav = $_smarty_tpl->tpl_vars['rows'];
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['po_ne'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['remark'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['update_by'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['update_date'];?>
</td>
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['rows']->value['status'])===null||$tmp==='' ? '' : $tmp) == '1') {?>
					<td>Active</td>
				<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['rows']->value['status'])===null||$tmp==='' ? '' : $tmp) == '0') {?>
					<td>Inactive</td>
				<?php }?>
			</tr>
		<?php
$_smarty_tpl->tpl_vars['rows'] = $foreach_rows_Sav;
}
?>
		</tbody>
	</table>
	
<?php } elseif ($_smarty_tpl->tpl_vars['submodul']->value == 'sitename') {?>
	<table>
		<thead>
			<tr>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='5%'>ID</td>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='10%'>Site Status</td>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='20%'>Remark</td>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='20%'>Update By</td>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='20%'>Update Date</td>
				<td style='text-align:center;font-weight:bold;background:#FAFAFA;' width='10%'>Status</td>
			</tr>
		</thead>
		<tbody>
		<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['rows']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
$_smarty_tpl->tpl_vars['rows']->_loop = true;
$foreach_rows_Sav = $_smarty_tpl->tpl_vars['rows'];
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['site_status'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['remark'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['update_by'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['update_date'];?>
</td>
				<?php if ((($tmp = @$_smarty_tpl->tpl_vars['rows']->value['status'])===null||$tmp==='' ? '' : $tmp) == '1') {?>
					<td>Active</td>
				<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['rows']->value['status'])===null||$tmp==='' ? '' : $tmp) == '0') {?>
					<td>Inactive</td>
				<?php }?>
			</tr>
		<?php
$_smarty_tpl->tpl_vars['rows'] = $foreach_rows_Sav;
}
?>
		</tbody>
	</table>

<?php }
}
}
?>