<?php /* Smarty version 3.1.27, created on 2017-07-21 14:36:47
         compiled from "/var/www/nokia.dev/public_html/__application/views/backend/template/grid.html" */ ?>
<?php
/*%%SmartyHeaderCode:4761299125971af0f8c3599_62868984%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22c85e6f961bd2dad45af2e06904167d07971485' => 
    array (
      0 => '/var/www/nokia.dev/public_html/__application/views/backend/template/grid.html',
      1 => 1500619509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4761299125971af0f8c3599_62868984',
  'variables' => 
  array (
    'submodul' => 0,
    'tinggi_grid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5971af0f8c5929_18361519',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5971af0f8c5929_18361519')) {
function content_5971af0f8c5929_18361519 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4761299125971af0f8c3599_62868984';
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