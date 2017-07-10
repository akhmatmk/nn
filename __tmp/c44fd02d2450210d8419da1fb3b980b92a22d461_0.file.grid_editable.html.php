<?php /* Smarty version 3.1.27, created on 2017-07-09 13:13:29
         compiled from "C:\xampp\htdocs\nn\__application\views\backend\template\grid_editable.html" */ ?>
<?php
/*%%SmartyHeaderCode:10960985965961c9897da617_61437705%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c44fd02d2450210d8419da1fb3b980b92a22d461' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nn\\__application\\views\\backend\\template\\grid_editable.html',
      1 => 1499518692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10960985965961c9897da617_61437705',
  'variables' => 
  array (
    'submodul' => 0,
    'tinggi_grid' => 0,
    'tablenya' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5961c9897de493_59428246',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5961c9897de493_59428246')) {
function content_5961c9897de493_59428246 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10960985965961c9897da617_61437705';
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
	genGridEditable('<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
','grid_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
', '', '', '<?php echo $_smarty_tpl->tpl_vars['tablenya']->value;?>
');
});
<?php echo '</script'; ?>
>

<?php }
}
?>