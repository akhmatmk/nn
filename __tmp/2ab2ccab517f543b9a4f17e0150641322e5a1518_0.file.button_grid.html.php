<?php /* Smarty version 3.1.27, created on 2017-07-21 14:36:47
         compiled from "/var/www/nokia.dev/public_html/__application/views/backend/template/button_grid.html" */ ?>
<?php
/*%%SmartyHeaderCode:1969985705971af0f89e905_77455814%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ab2ccab517f543b9a4f17e0150641322e5a1518' => 
    array (
      0 => '/var/www/nokia.dev/public_html/__application/views/backend/template/button_grid.html',
      1 => 1500619509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1969985705971af0f89e905_77455814',
  'variables' => 
  array (
    'varbutton' => 0,
    'main' => 0,
    'submodul' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5971af0f8c1858_96103959',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5971af0f8c1858_96103959')) {
function content_5971af0f8c1858_96103959 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1969985705971af0f89e905_77455814';
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