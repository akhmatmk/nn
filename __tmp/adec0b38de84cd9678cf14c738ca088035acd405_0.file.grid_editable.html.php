<?php /* Smarty version 3.1.27, created on 2017-04-14 18:07:34
         compiled from "/home/vagrant/Code/nokia/__application/views/backend/template/grid_editable.html" */ ?>
<?php
/*%%SmartyHeaderCode:160435274558f0ad76ce4e73_49859175%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adec0b38de84cd9678cf14c738ca088035acd405' => 
    array (
      0 => '/home/vagrant/Code/nokia/__application/views/backend/template/grid_editable.html',
      1 => 1485933096,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160435274558f0ad76ce4e73_49859175',
  'variables' => 
  array (
    'submodul' => 0,
    'tinggi_grid' => 0,
    'tablenya' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58f0ad76cf66f7_17715567',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f0ad76cf66f7_17715567')) {
function content_58f0ad76cf66f7_17715567 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '160435274558f0ad76ce4e73_49859175';
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