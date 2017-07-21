<?php /* Smarty version 3.1.27, created on 2017-07-21 14:36:44
         compiled from "/var/www/nokia.dev/public_html/__application/views/backend/template/grid_dashboard.html" */ ?>
<?php
/*%%SmartyHeaderCode:3485334965971af0c0ca7a2_72768522%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11520f555d914c82ab45fa3bc8ef71409942e06b' => 
    array (
      0 => '/var/www/nokia.dev/public_html/__application/views/backend/template/grid_dashboard.html',
      1 => 1500619509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3485334965971af0c0ca7a2_72768522',
  'variables' => 
  array (
    'submodul' => 0,
    'tinggi_grid' => 0,
    'tablenya' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5971af0c0d2c50_55207211',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5971af0c0d2c50_55207211')) {
function content_5971af0c0d2c50_55207211 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3485334965971af0c0ca7a2_72768522';
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
		'height':(<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tinggi_grid']->value)===null||$tmp==='' ? 'getClientHeight()-120' : $tmp);?>
)
	});
	genGridDashboard('<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
','grid_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
', '', '', '<?php echo $_smarty_tpl->tpl_vars['tablenya']->value;?>
');
});
<?php echo '</script'; ?>
>

<?php }
}
?>