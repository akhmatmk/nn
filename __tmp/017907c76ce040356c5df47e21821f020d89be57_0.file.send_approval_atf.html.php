<?php /* Smarty version 3.1.27, created on 2017-07-21 15:15:48
         compiled from "/var/www/nokia.dev/public_html/__application/views/backend/modul/form/send_approval_atf.html" */ ?>
<?php
/*%%SmartyHeaderCode:16710838045971b8342c9416_47819097%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '017907c76ce040356c5df47e21821f020d89be57' => 
    array (
      0 => '/var/www/nokia.dev/public_html/__application/views/backend/modul/form/send_approval_atf.html',
      1 => 1500619509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16710838045971b8342c9416_47819097',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5971b8342eea19_57267087',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5971b8342eea19_57267087')) {
function content_5971b8342eea19_57267087 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16710838045971b8342c9416_47819097';
?>
			  	<div style="display: none;" id="req_aprove">
					<div class="row wrapper border-bottom bluedrak-bg page-heading" style="background-color : #134292;color: white">
						<div class="col-lg-10" style="margin-left:20px;">
							<h2 align="center">Request Aproval</h3>
						</div>
					</div>
					
					<form id="atrmaterial_content" style="margin-top: 20px;" class="form-horizontal">
						<div class="form-group"><label for="remark" class="col-sm-2 control-label">From</label>
							<div class="col-sm-4">
								<input class="form-control-mobile" type="text" name="from">
							</div>
						</div>

						<div class="form-group"><label for="remark" class="col-sm-2 control-label">To</label>
							<div class="col-sm-4">
								<select class="form-control" id="to" name="to">
  				</select>
								
							</div>
						</div>	

						<div class="form-group"><label for="remark" class="col-sm-2 control-label">CC</label>
							<div class="col-sm-4">
								<textarea class="form-control-mobile" readonly="readonly"></textarea>
							</div>
						</div>				

						<div class="form-group">
							<div class="col-sm-4 col-sm-offset-4">
						        <a class="btn btn-primary" id='backAtf'>Back to Atf No</a>
						        <a class="btn btn-primary" id='saveDataMaterial'>Send</a>
						    </div>
						</div>

					</form>
				</div>

				<?php echo '<script'; ?>
 type="text/javascript">
					 
				<?php echo '</script'; ?>
><?php }
}
?>