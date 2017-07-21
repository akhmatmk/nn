<?php /* Smarty version 3.1.27, created on 2017-05-01 11:56:13
         compiled from "/home/vagrant/Code/nokia/__application/views/backend/footer-template.html" */ ?>
<?php
/*%%SmartyHeaderCode:4471183635906bfed935401_34320336%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffaeac95ca8533d9524be0545cacdda5d495612e' => 
    array (
      0 => '/home/vagrant/Code/nokia/__application/views/backend/footer-template.html',
      1 => 1493614479,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4471183635906bfed935401_34320336',
  'variables' => 
  array (
    'host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5906bfed947c09_89974756',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5906bfed947c09_89974756')) {
function content_5906bfed947c09_89974756 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4471183635906bfed935401_34320336';
?>
			<div class="footer">
				<div>
					Purchase Order Inventory Nokia v.2 &copy; 2016
				</div>
			</div>
		</div>
	</div>
	
    <!-- Mainly scripts -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/js/jquery-2.1.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/js/plugins/metisMenu/jquery.metisMenu.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/js/plugins/slimscroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>

	<!-- Easy UI -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/easyui/jquery.easyui.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/easyui/edatagrid.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/easyui/cellediting.js"><?php echo '</script'; ?>
>

    <!-- Custom and plugin javascript -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/js/inspinia.js"><?php echo '</script'; ?>
>
    
	
    <!-- Toastr -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/js/plugins/toastr/toastr.min.js"><?php echo '</script'; ?>
>	
	<?php echo '<script'; ?>
>
        $(document).ready(function() {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.success('Nokia', 'Welcome to POIN v.2');
            }, 1300);
		});
	<?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>