<?php /* Smarty version 3.1.27, created on 2017-07-09 13:11:52
         compiled from "C:\xampp\htdocs\nn\__application\views\backend\menu.html" */ ?>
<?php
/*%%SmartyHeaderCode:12448694705961c928596140_46822775%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fae8eb8bb15cca0e6da63a35b8d639aff367fcaf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nn\\__application\\views\\backend\\menu.html',
      1 => 1499518691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12448694705961c928596140_46822775',
  'variables' => 
  array (
    'host' => 0,
    'menu' => 0,
    'x' => 0,
    'y' => 0,
    'z' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5961c9285b5543_09338767',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5961c9285b5543_09338767')) {
function content_5961c9285b5543_09338767 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12448694705961c928596140_46822775';
?>
<ul class="nav metismenu" id="side-menu">
	<li class="nav-header" style=''>
		<img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/img/nokia_white_logo.png" width='130px' height='51px' style='margin-left:15px;'/>
	</li>
	
	<?php
$_from = $_smarty_tpl->tpl_vars['menu']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['x']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->_loop = true;
$foreach_x_Sav = $_smarty_tpl->tpl_vars['x'];
?>
		<li>
			<?php if ($_smarty_tpl->tpl_vars['x']->value['type_menu'] == 'P') {?>
			<a href="#"><i class="fa <?php echo $_smarty_tpl->tpl_vars['x']->value['icon_menu'];?>
"></i> <span class="nav-label"><?php echo $_smarty_tpl->tpl_vars['x']->value['parent'];?>
</span><span class="fa arrow"></span> </a>
			<ul class="nav nav-second-level collapse">
				<?php
$_from = $_smarty_tpl->tpl_vars['x']->value['child'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['y'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['y']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['y']->value) {
$_smarty_tpl->tpl_vars['y']->_loop = true;
$foreach_y_Sav = $_smarty_tpl->tpl_vars['y'];
?>
					<?php if ($_smarty_tpl->tpl_vars['y']->value['type_menu'] == 'C') {?>
						<li><a href="javascript:void(0);" onClick="loadUrl('<?php echo $_smarty_tpl->tpl_vars['host']->value;
echo $_smarty_tpl->tpl_vars['y']->value['url'];?>
')"><?php echo $_smarty_tpl->tpl_vars['y']->value['menu'];?>
</a></li>
					<?php } elseif ($_smarty_tpl->tpl_vars['y']->value['type_menu'] == 'CHC') {?>
						<li>
							<a href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['y']->value['menu'];?>
<span class="fa arrow"></span></a>
							<?php if (isset($_smarty_tpl->tpl_vars['y']->value['sub_child'])) {?>
								<ul class="nav nav-third-level collapse">
									<?php
$_from = $_smarty_tpl->tpl_vars['y']->value['sub_child'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['z'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['z']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['z']->value) {
$_smarty_tpl->tpl_vars['z']->_loop = true;
$foreach_z_Sav = $_smarty_tpl->tpl_vars['z'];
?>
										<li><a href="javascript:void(0);" onClick="loadUrl('<?php echo $_smarty_tpl->tpl_vars['host']->value;
echo $_smarty_tpl->tpl_vars['z']->value['url'];?>
')">- <?php echo $_smarty_tpl->tpl_vars['z']->value['sub_menu'];?>
</a></li>
									<?php
$_smarty_tpl->tpl_vars['z'] = $foreach_z_Sav;
}
?>
								</ul>
							<?php }?>
						</li>
					<?php }?>
				<?php
$_smarty_tpl->tpl_vars['y'] = $foreach_y_Sav;
}
?>
			</ul>
			<?php } elseif ($_smarty_tpl->tpl_vars['x']->value['type_menu'] == 'B') {?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
"><i class="fa <?php echo $_smarty_tpl->tpl_vars['x']->value['icon_menu'];?>
"></i> <span class="nav-label"><?php echo $_smarty_tpl->tpl_vars['x']->value['parent'];?>
</span> </a>
			<?php }?>
		</li>
	<?php
$_smarty_tpl->tpl_vars['x'] = $foreach_x_Sav;
}
?>
</ul>
<?php }
}
?>