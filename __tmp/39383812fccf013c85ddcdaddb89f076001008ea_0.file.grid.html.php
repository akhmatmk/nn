<?php /* Smarty version 3.1.27, created on 2017-04-14 18:07:26
         compiled from "/home/vagrant/Code/nokia/__application/views/backend/template/grid.html" */ ?>
<?php
/*%%SmartyHeaderCode:64010753058f0ad6e5e4289_70865112%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39383812fccf013c85ddcdaddb89f076001008ea' => 
    array (
      0 => '/home/vagrant/Code/nokia/__application/views/backend/template/grid.html',
      1 => 1490597980,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64010753058f0ad6e5e4289_70865112',
  'variables' => 
  array (
    'submodul' => 0,
    'tinggi_grid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58f0ad6e5f2693_21231103',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f0ad6e5f2693_21231103')) {
function content_58f0ad6e5f2693_21231103 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '64010753058f0ad6e5e4289_70865112';
?>
<style type="text/css">
	.datagrid-row-over td{
		background:#D0E5F5;
	}
	.datagrid-row-selected td{
		background:#FBEC88;
		color:#000;
	}
</style>

<div id='maingrid_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
'>
	<div id='grid_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
' style='height:100%;'></div>
</div>
<?php echo '<script'; ?>
>
$(function(){
	$('#maingrid_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
').css({
		'height':(<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tinggi_grid']->value)===null||$tmp==='' ? 'getClientHeight()-230' : $tmp);?>
)
	});
	genGrid('<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
','grid_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
');
});
<?php echo '</script'; ?>
><?php }
}
?>