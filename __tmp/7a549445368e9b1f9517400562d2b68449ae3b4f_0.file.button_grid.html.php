<?php /* Smarty version 3.1.27, created on 2017-06-14 14:37:57
         compiled from "/home/vagrant/Code/nokia/__application/views/backend/template/button_grid.html" */ ?>
<?php
/*%%SmartyHeaderCode:13125355615940e7d5ed8a11_80435854%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a549445368e9b1f9517400562d2b68449ae3b4f' => 
    array (
      0 => '/home/vagrant/Code/nokia/__application/views/backend/template/button_grid.html',
      1 => 1490253454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13125355615940e7d5ed8a11_80435854',
  'variables' => 
  array (
    'varbutton' => 0,
    'main' => 0,
    'submodul' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5940e7d5f20f59_39637183',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5940e7d5f20f59_39637183')) {
function content_5940e7d5f20f59_39637183 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13125355615940e7d5ed8a11_80435854';
?>
<span id='tombol'>
	<?php if ((($tmp = @$_smarty_tpl->tpl_vars['varbutton']->value)===null||$tmp==='' ? '' : $tmp) == 'tracker') {?>
			
	<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['varbutton']->value)===null||$tmp==='' ? '' : $tmp) == 'siteinfo') {?>
		<a href="javascript:void(0)" style='float:right;' class="l-btn l-btn-small l-btn-plain" group="" id="" onClick="genform('active', '<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
');">
			<span class="l-btn-left l-btn-icon-left">
				<span class="l-btn-text">Active</span><span class="l-btn-icon icon-ok">&nbsp;</span>
			</span>
		</a>	
		<a href="javascript:void(0)" style='float:right;' class="l-btn l-btn-small l-btn-plain" group="" id="" onClick="genform('inactive', '<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
');">
			<span class="l-btn-left l-btn-icon-left">
				<span class="l-btn-text">Inactive</span><span class="l-btn-icon icon-no">&nbsp;</span>
			</span>
		</a>	
		&nbsp;			
		<a href="javascript:void(0)" style='float:right;' class="l-btn l-btn-small l-btn-plain" group="" id="" onClick="genform('add', '<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
', 'windowform');">
			<span class="l-btn-left l-btn-icon-left">
				<span class="l-btn-text">Add</span><span class="l-btn-icon icon-add">&nbsp;</span>
			</span>
		</a>
		&nbsp;
		<a href="javascript:void(0)" style='float:right;' class="l-btn l-btn-small l-btn-plain" group="" id="" onClick="genform('edit', '<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
', 'windowform');">
			<span class="l-btn-left l-btn-icon-left">
				<span class="l-btn-text">Edit</span><span class="l-btn-icon icon-edit">&nbsp;</span>
			</span>
		</a>
		&nbsp;
	<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['varbutton']->value)===null||$tmp==='' ? '' : $tmp) == 'received') {?>
		<a href="javascript:void(0)" style='float:right;' class="l-btn l-btn-small l-btn-plain" group="" id="" onClick="genform('active', '<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
');">
			<span class="l-btn-left l-btn-icon-left">
				<span class="l-btn-text">Active</span><span class="l-btn-icon icon-ok">&nbsp;</span>
			</span>
		</a>	
		<a href="javascript:void(0)" style='float:right;' class="l-btn l-btn-small l-btn-plain" group="" id="" onClick="genform('inactive', '<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
');">
			<span class="l-btn-left l-btn-icon-left">
				<span class="l-btn-text">Inactive</span><span class="l-btn-icon icon-no">&nbsp;</span>
			</span>
		</a>	
		&nbsp;			
	<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['varbutton']->value)===null||$tmp==='' ? '' : $tmp) == 'database') {?>
		<a href="javascript:void(0)" style='float:right;' class="l-btn l-btn-small l-btn-plain" group="" id="" onClick="genform('undelete', '<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
');">
			<span class="l-btn-left l-btn-icon-left">
				<span class="l-btn-text">Undelete</span><span class="l-btn-icon icon-ok">&nbsp;</span>
			</span>
		</a>
		<a href="javascript:void(0)" style='float:right;' class="l-btn l-btn-small l-btn-plain" group="" id="" onClick="genform('delete', '<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
');">
			<span class="l-btn-left l-btn-icon-left">
				<span class="l-btn-text">Delete</span><span class="l-btn-icon icon-no">&nbsp;</span>
			</span>
		</a>	
		&nbsp;
	<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['varbutton']->value)===null||$tmp==='' ? '' : $tmp) == 'dollar') {?>
		<a href="javascript:void(0)" style='float:right;' class="l-btn l-btn-small l-btn-plain" group="" id="" onClick="genform('edit', '<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
', 'windowform');">
			<span class="l-btn-left l-btn-icon-left">
				<span class="l-btn-text">Edit</span><span class="l-btn-icon icon-edit">&nbsp;</span>
			</span>
		</a>
		&nbsp;
	<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['varbutton']->value)===null||$tmp==='' ? '' : $tmp) == 'tss') {?>			
		<a href="javascript:void(0)" style='float:right;' class="l-btn l-btn-small l-btn-plain" group="" id="" onClick="genform('edit', '<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
', 'windowform');">
			<span class="l-btn-left l-btn-icon-left">
				<span class="l-btn-text">Edit Form</span><span class="l-btn-icon icon-edit">&nbsp;</span>
			</span>
		</a>
		&nbsp;
	<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['varbutton']->value)===null||$tmp==='' ? '' : $tmp) == 'tss_database') {?>
		<a href="javascript:void(0)" style='float:right;' class="l-btn l-btn-small l-btn-plain" group="" id="" onClick="genform('active', '<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
');">
			<span class="l-btn-left l-btn-icon-left">
				<span class="l-btn-text">Active</span><span class="l-btn-icon icon-ok">&nbsp;</span>
			</span>
		</a>	
		<a href="javascript:void(0)" style='float:right;' class="l-btn l-btn-small l-btn-plain" group="" id="" onClick="genform('inactive', '<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
');">
			<span class="l-btn-left l-btn-icon-left">
				<span class="l-btn-text">Inactive</span><span class="l-btn-icon icon-no">&nbsp;</span>
			</span>
		</a>	
		&nbsp;			
	<?php } else { ?>
		<a href="javascript:void(0)" style='float:right;' class="l-btn l-btn-small l-btn-plain" group="" id="" onClick="genform('active', '<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
');">
			<span class="l-btn-left l-btn-icon-left">
				<span class="l-btn-text">Active</span><span class="l-btn-icon icon-ok">&nbsp;</span>
			</span>
		</a>	
		<a href="javascript:void(0)" style='float:right;' class="l-btn l-btn-small l-btn-plain" group="" id="" onClick="genform('inactive', '<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
');">
			<span class="l-btn-left l-btn-icon-left">
				<span class="l-btn-text">Inactive</span><span class="l-btn-icon icon-no">&nbsp;</span>
			</span>
		</a>	
		&nbsp;			
		<a href="javascript:void(0)" style='float:right;' class="l-btn l-btn-small l-btn-plain" group="" id="" onClick="genform('edit', '<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
', 'windowform');">
			<span class="l-btn-left l-btn-icon-left">
				<span class="l-btn-text">Edit</span><span class="l-btn-icon icon-edit">&nbsp;</span>
			</span>
		</a>
		&nbsp;
		<a href="javascript:void(0)" style='float:right;' class="l-btn l-btn-small l-btn-plain" group="" id="" onClick="genform('add', '<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
', 'windowform');">
			<span class="l-btn-left l-btn-icon-left">
				<span class="l-btn-text">Add</span><span class="l-btn-icon icon-add">&nbsp;</span>
			</span>
		</a>
		&nbsp;
	<?php }?>
</span><?php }
}
?>