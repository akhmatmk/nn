<?php /* Smarty version 3.1.27, created on 2017-07-09 13:11:53
         compiled from "C:\xampp\htdocs\nn\__application\views\backend\template\grid_dashboard.html" */ ?>
<?php
/*%%SmartyHeaderCode:2339579035961c929e16350_27890086%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef937d212cdd50be6b45bfbc03f6a22d818da509' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nn\\__application\\views\\backend\\template\\grid_dashboard.html',
      1 => 1499518692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2339579035961c929e16350_27890086',
  'variables' => 
  array (
    'submodul' => 0,
    'tinggi_grid' => 0,
    'tablenya' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5961c929e1e050_17985246',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5961c929e1e050_17985246')) {
function content_5961c929e1e050_17985246 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2339579035961c929e16350_27890086';
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