<?php /* Smarty version 3.1.27, created on 2017-04-14 18:08:17
         compiled from "/home/vagrant/Code/nokia/__application/views/backend/template/grid_celledit.html" */ ?>
<?php
/*%%SmartyHeaderCode:199343239458f0ada12ff2b0_20489841%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e343ef49be7bc9a121955655b15843250079e4f' => 
    array (
      0 => '/home/vagrant/Code/nokia/__application/views/backend/template/grid_celledit.html',
      1 => 1487767845,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199343239458f0ada12ff2b0_20489841',
  'variables' => 
  array (
    'submodul' => 0,
    'tinggi_grid' => 0,
    'tablenya' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58f0ada13103b2_06571353',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f0ada13103b2_06571353')) {
function content_58f0ada13103b2_06571353 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '199343239458f0ada12ff2b0_20489841';
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
	genGridCellEditing('<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
','grid_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
', '', '', '<?php echo $_smarty_tpl->tpl_vars['tablenya']->value;?>
');
});
<?php echo '</script'; ?>
>

<?php }
}
?>