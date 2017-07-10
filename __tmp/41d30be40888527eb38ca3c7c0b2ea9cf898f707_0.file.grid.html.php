<?php /* Smarty version 3.1.27, created on 2017-07-09 14:53:22
         compiled from "C:\xampp\htdocs\nn\__application\views\backend\template\grid.html" */ ?>
<?php
/*%%SmartyHeaderCode:1329323525961e0f27ba441_03773098%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41d30be40888527eb38ca3c7c0b2ea9cf898f707' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nn\\__application\\views\\backend\\template\\grid.html',
      1 => 1499518692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1329323525961e0f27ba441_03773098',
  'variables' => 
  array (
    'submodul' => 0,
    'tinggi_grid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5961e0f27c2148_24665124',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5961e0f27c2148_24665124')) {
function content_5961e0f27c2148_24665124 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1329323525961e0f27ba441_03773098';
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