<?php /* Smarty version 3.1.27, created on 2017-07-09 13:11:52
         compiled from "C:\xampp\htdocs\nn\__application\views\backend\main-backend.html" */ ?>
<?php
/*%%SmartyHeaderCode:6391922155961c92853c3b8_93555940%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f9eae74b1077fce00011b4623cd8be300c68b1c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nn\\__application\\views\\backend\\main-backend.html',
      1 => 1499518691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6391922155961c92853c3b8_93555940',
  'variables' => 
  array (
    'host' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5961c92857ea43_39105842',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5961c92857ea43_39105842')) {
function content_5961c92857ea43_39105842 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6391922155961c92853c3b8_93555940';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>POIN v.2 | Nokia</title>

    <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/css/style.css" rel="stylesheet">
	
    <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/easyui/themes/metro-gray/easyui.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/easyui/themes/icon.css" rel="stylesheet">

    

	<?php echo '<script'; ?>
>
		var host = "<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
";	
	<?php echo '</script'; ?>
>
</head>
<body class='fixed-sidebar'>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
				<?php echo $_smarty_tpl->getSubTemplate ("backend/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

			</div>
		</nav>
		<div id="page-wrapper" class="gray-bg">
			<div class="row border-bottom">
				<nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
					<div class="navbar-header">
						<a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
					</div>
					<ul class="nav navbar-top-links navbar-right">
						<li>
							<span class="m-r-sm text-white welcome-message">Access From : <?php echo $_smarty_tpl->tpl_vars['auth']->value['nama_lengkap'];?>
</span>
						</li>
						<li>
							<a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
backoffice-keluar" style='color:#ffffff !important;'>
								<i class="fa fa-sign-out"></i> Log out
							</a>
						</li>
					</ul>
				</nav>
			</div>
			
			<div id='mainContainer'></div>
			
			
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
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/js/fungsi.js"><?php echo '</script'; ?>
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