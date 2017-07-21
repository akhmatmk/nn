<?php /* Smarty version 3.1.27, created on 2017-06-13 12:56:57
         compiled from "/home/vagrant/Code/nokia/__application/views/backend/main-login.html" */ ?>
<?php
/*%%SmartyHeaderCode:1495985363593f7ea9c371f7_30991007%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98c0a7745e4fa100127905cb57ca05a6847dfbc6' => 
    array (
      0 => '/home/vagrant/Code/nokia/__application/views/backend/main-login.html',
      1 => 1484659674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1495985363593f7ea9c371f7_30991007',
  'variables' => 
  array (
    'host' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_593f7ea9cfea81_97478561',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_593f7ea9cfea81_97478561')) {
function content_593f7ea9cfea81_97478561 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1495985363593f7ea9c371f7_30991007';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POIN v.2 | Nokia</title>
    <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/css/style.css" rel="stylesheet">
	<link href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/plugin/bxslider/css/jquery.bxslider.css" rel="stylesheet" />
</head>

<body class="gray-bg" style='background:#12408E !important;'>

    <div class="loginColumns animated fadeInDown" style=';'>
        <div class="row" >
			<div style='background:#12408E !important; color:#ffffff !important; border:1px solid #00000; display:table;padding:20px;'>
				<div class="col-md-6">
					<ul class="bxslider">
					  <li><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/img/sliderlogin/image1.jpg" /></li>
					  <li><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/img/sliderlogin/image2.jpg" /></li>
					  <li><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/img/sliderlogin/image3.jpg" /></li>
					</ul>
				</div>
				<div class="col-md-6">
					<div class="ibox-content" style='border:none !important;background:#12408E !important; color:#ffffff !important;padding:0px !important;'>
						<center><img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
__assets/img/nokia_white_logo.png" width='250px' height='100px' style='margin-top:15px !important;'/></center>
						<form class="m-t" role="form" action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
backoffice-masuk" method="post">
							<div class="form-group">
								<input type="text" name='user' style='color:black !important;' class="form-control" placeholder="Username" required="">
							</div>
							<div class="form-group">
								<input type="password" name='pwd' style='color:black !important;' class="form-control" placeholder="Password" required="">
							</div>
							<button type="submit" class="btn btn-primary">Login</button>
							
						</form>
						<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
							<div style="text-align:center;margin-top:10px">
								<span style="color:white;"><b><i><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</i></b></span>
							</div>
						<?php }?>	
					</div>
				</div>
				<div class="col-md-12" >
					
					<p class="m-t">
						<small>POIN v.2 &copy; 2016</small>
					</p>
				</div>
            </div>
			
        </div>
        <hr/>
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
__assets/plugin/bxslider/js/jquery.bxslider.js"><?php echo '</script'; ?>
>
	
	<?php echo '<script'; ?>
>
		$(document).ready(function(){
			$('.bxslider').bxSlider({
				auto: true,
				pager: false
			});
		});
	<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
?>