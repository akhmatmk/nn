<?php /* Smarty version 3.1.27, created on 2017-07-19 07:06:39
         compiled from "C:\xampp\htdocs\nn\__application\views\backend\modul\progress\hasil_import.html" */ ?>
<?php
/*%%SmartyHeaderCode:1075025625596ea28fa54aa6_71502503%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acacc018435880567bcc6e0531a8e7ab2fc45c59' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nn\\__application\\views\\backend\\modul\\progress\\hasil_import.html',
      1 => 1499518692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1075025625596ea28fa54aa6_71502503',
  'variables' => 
  array (
    'type' => 0,
    'data' => 0,
    'rows' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_596ea28fad1ac7_77756660',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_596ea28fad1ac7_77756660')) {
function content_596ea28fad1ac7_77756660 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1075025625596ea28fa54aa6_71502503';
if ($_smarty_tpl->tpl_vars['type']->value == 'masterpo') {?>
	<h1>Wrong Data</h1>
	<br />
	
	<table width='100%'>
		<tr style='background:#F2F2F2;'>
			<td width='15%' align='center'><b>Rows Excel</b></td>
			<td width='15%' align='center'><b>Phase Code</b></td>
			<td width='15%' align='center'><b>PO Type</b></td>
			<td width='15%' align='center'><b>Currency</b></td>
		</tr>
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
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['rows']->value['row'])===null||$tmp==='' ? '' : $tmp);?>
</td>
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['rows']->value['phase']['phase_code'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['rows']->value['potype']['po_type'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['rows']->value['currency']['currency'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
			</tr>
		<?php
$_smarty_tpl->tpl_vars['rows'] = $foreach_rows_Sav;
}
?>
	</table>
	
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'mastercr') {?>
	<h1>Wrong Data</h1>
	<br />
	
	<table width='100%'>
		<tr style='background:#F2F2F2;'>
			<td width='15%' align='center'><b>Rows Excel</b></td>
			<td width='15%' align='center'><b>Phase Code</b></td>
		</tr>
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
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['rows']->value['row'])===null||$tmp==='' ? '' : $tmp);?>
</td>
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['rows']->value['phase']['phase_code'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
			</tr>
		<?php
$_smarty_tpl->tpl_vars['rows'] = $foreach_rows_Sav;
}
?>
	</table>
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'siteinfo') {?>
	<h1>Wrong Data</h1>
	<br />
	<table width='100%'>
		<tr style='background:#F2F2F2;'>
			<td width='15%' align='center'><b>Rows Excel</b></td>
			<td width='15%' align='center'><b>Phase Code</b></td>
			<td width='15%' align='center'><b>Region Code</b></td>
			<td width='15%' align='center'><b>Site Status</b></td>
			<td width='15%' align='center'><b>NE Name</b></td>
		</tr>
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
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['rows']->value['row'])===null||$tmp==='' ? '' : $tmp);?>
</td>
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['rows']->value['phase']['phase_code'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['rows']->value['region']['region_code'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['rows']->value['sitename']['site_status'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['rows']->value['pone']['po_ne'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
			</tr>
		<?php
$_smarty_tpl->tpl_vars['rows'] = $foreach_rows_Sav;
}
?>
	</table>
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'siteprogress') {?>
	<h1>Wrong Data</h1>
	<br />
	<table width='100%'>
		<tr style='background:#F2F2F2;'>
			<td width='15%' align='center'><b>Rows Excel</b></td>
			<td width='15%' align='center'><b>ID SiteInfo</b></td>
			<td width='15%' align='center'><b>BoqNo</b></td>
		</tr>
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
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['rows']->value['row'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['rows']->value['siteinfo']['id'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['rows']->value['siteinfo']['boqno'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
			</tr>
		<?php
$_smarty_tpl->tpl_vars['rows'] = $foreach_rows_Sav;
}
?>
	</table>
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'mcr') {?>
	<h1>Wrong Data</h1>
	<br />
	<table width='100%'>
		<tr style='background:#F2F2F2;'>
			<td width='15%' align='center'><b>Rows Excel</b></td>
			<td width='15%' align='center'><b>ID SiteInfo</b></td>
			<td width='15%' align='center'><b>BoqNo</b></td>
		</tr>
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
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['rows']->value['row'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['rows']->value['siteinfo']['id'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['rows']->value['siteinfo']['boqno'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
			</tr>
		<?php
$_smarty_tpl->tpl_vars['rows'] = $foreach_rows_Sav;
}
?>
	</table>
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'atf') {?>
	<h1>Wrong Data</h1>
	<br />
	<table width='100%'>
		<tr style='background:#F2F2F2;'>
			<td width='15%' align='center'><b>Rows Excel</b></td>
			<td width='15%' align='center'><b>ID SiteInfo</b></td>
			<td width='15%' align='center'><b>BoqNo</b></td>
		</tr>
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
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['rows']->value['row'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['rows']->value['siteinfo']['id'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['rows']->value['siteinfo']['boqno'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
			</tr>
		<?php
$_smarty_tpl->tpl_vars['rows'] = $foreach_rows_Sav;
}
?>
	</table>
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'sitebinder') {?>
	<h1>Wrong Data</h1>
	<br />
	<table width='100%'>
		<tr style='background:#F2F2F2;'>
			<td width='15%' align='center'><b>Rows Excel</b></td>
			<td width='15%' align='center'><b>ID SiteInfo</b></td>
			<td width='15%' align='center'><b>BoqNo</b></td>
		</tr>
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
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['rows']->value['row'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['rows']->value['siteinfo']['id'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['rows']->value['siteinfo']['boqno'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
			</tr>
		<?php
$_smarty_tpl->tpl_vars['rows'] = $foreach_rows_Sav;
}
?>
	</table>
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'costsales') {?>
	<h1>Wrong Data</h1>
	<br />
	<table width='100%'>
		<tr style='background:#F2F2F2;'>
			<td width='15%' align='center'><b>Rows Excel</b></td>
			<td width='15%' align='center'><b>ID SiteInfo</b></td>
			<td width='15%' align='center'><b>BoqNo</b></td>
		</tr>
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
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['rows']->value['row'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['rows']->value['siteinfo']['id'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['rows']->value['siteinfo']['boqno'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
			</tr>
		<?php
$_smarty_tpl->tpl_vars['rows'] = $foreach_rows_Sav;
}
?>
	</table>
<?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'tss_database') {?>
	<h1>Wrong Data</h1>
	<br />
	<table width='100%'>
		<tr style='background:#F2F2F2;'>
			<td width='15%' align='center'><b>Rows Excel</b></td>
			<td width='15%' align='center'><b>ID</b></td>
			<td width='15%' align='center'><b>Phase</b></td>
		</tr>
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
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['rows']->value['row'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['rows']->value['id']['id'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['rows']->value['phase']['phase_code'])===null||$tmp==='' ? '-' : $tmp);?>
</td>
			</tr>
		<?php
$_smarty_tpl->tpl_vars['rows'] = $foreach_rows_Sav;
}
?>
	</table>
<?php }

}
}
?>