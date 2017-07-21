<?php /* Smarty version 3.1.27, created on 2017-07-21 15:21:25
         compiled from "/var/www/nokia.dev/public_html/__application/views/backend/modul/form/preview-material-atf.html" */ ?>
<?php
/*%%SmartyHeaderCode:6931662165971b9857c9a10_28310693%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1df8441bcf6304e34e9f323b4dc89a285231f2f9' => 
    array (
      0 => '/var/www/nokia.dev/public_html/__application/views/backend/modul/form/preview-material-atf.html',
      1 => 1500625279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6931662165971b9857c9a10_28310693',
  'variables' => 
  array (
    'host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5971b9857cc3b4_95505154',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5971b9857cc3b4_95505154')) {
function content_5971b9857cc3b4_95505154 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6931662165971b9857c9a10_28310693';
?>
			  	<div style="display: none;" id="atf_list_data">
					<div class="row wrapper border-bottom bluedrak-bg page-heading" style="background-color : #134292;color: white">
						<div class="col-lg-10" style="margin-left:20px;">
							<h2 align="center">List Material</h3>
							<h2 align="center">ATF NO</h3>
						</div>
					</div>
					
					<table class="table" style="color: black;font-size: 15px">
					    <tbody id='list_material'>
					      
					    </tbody>
					  </table>
					  	<div class="form-group">
							<div class="col-sm-4 col-sm-offset-4">
						        <a class="btn btn-primary" id='backMaterialAtf'>Back</a>
						        <a class="btn btn-primary" id='req-aproval'>Req Aproval</a>
						    </div>
						</div>
				</div>

				<?php echo '<script'; ?>
 type="text/javascript">
					
					$("#req-aproval").click(function (){
						$("#atf_list_data").hide();
						$("#req_aprove").show();
						var no_atf = $("#atf_nokia_no").val();

						$.ajax({ 
					    	url: '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
get/groupByIsatNo',
					    	type: 'get',
					    	dataType: 'json',
					    	success: function(dataGroup)
					    	{
					    		$("#to").html("<option>-Pilih-</option>");
					    		$.each(dataGroup, function(index, element) {
									$("#to").append("<option value='"+element.id+"'>"+element.name+"</option>");
								});
					    	}
						});

					});
				<?php echo '</script'; ?>
>

				<?php echo $_smarty_tpl->getSubTemplate ("backend/modul/form/send_approval_atf.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>