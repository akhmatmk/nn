<?php /* Smarty version 3.1.27, created on 2017-07-09 14:53:40
         compiled from "C:\xampp\htdocs\nn\__application\views\backend\modul\master\partner.html" */ ?>
<?php
/*%%SmartyHeaderCode:10557333045961e104d57f70_04289879%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd06bd78b8ac5f1136ea3243b6a132529ad78eb06' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nn\\__application\\views\\backend\\modul\\master\\partner.html',
      1 => 1499518691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10557333045961e104d57f70_04289879',
  'variables' => 
  array (
    'submodul' => 0,
    'main' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5961e104d96787_20894573',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5961e104d96787_20894573')) {
function content_5961e104d96787_20894573 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10557333045961e104d57f70_04289879';
?>
<div class="row wrapper border-bottom blueaye-bg page-heading">
	<div class="col-lg-10" style='margin-left:20px;'>
		<h3><b>Master Data</b></h3>
		<ol class="breadcrumb" style='margin-bottom:10px !important;'>
            <li>
                Master Data
            </li>
            <li class="active">
                <strong>Master Partner</strong>
            </li>
        </ol>		
	</div>
</div>
<div class="wrapper wrapper-content">
	<div class="row">
		<div class="col-lg-12" style='padding-right:0px !important;'>
			
			<div class="ibox">
				<div class="ibox-content" style='padding-bottom:0px !important;'>
					
					<div id='grid_nya_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
' style='height:400px;width:100%;'>
						<div id='tb_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
' style='margin-bottom:10px;'>
							

							<div style='width:100%;margin-bottom: 3px;'>
								<?php echo $_smarty_tpl->getSubTemplate ("backend/template/button_grid.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
	
								<label>Partner Code</label> : <input type='text' style='width:75px;padding:2px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_partnercode' /> &nbsp;
								<label>Partner Name</label> : <input type='text' style='width:75px;padding:2px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_partnername' /> &nbsp;
								<label>Company</label> : <input type='text' style='width:75px;padding:2px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_company' /> &nbsp;
								<a href="javascript:void(0)" class="l-btn l-btn-small l-btn-plain" group="" id="search_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
" onClick="">
									<span class="l-btn-left l-btn-icon-left">
										<span class="l-btn-text">Filter Data</span><span class="l-btn-icon icon-search">&nbsp;</span>
									</span>	
								</a>
								<a href="javascript:void(0)" style="float: right;" class="l-btn l-btn-small l-btn-plain" group="" id="" onClick="genform('import_data', '<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
', 'windowform');">
									<span class="l-btn-left l-btn-icon-left">
										<span class="l-btn-text">Import</span><span class="l-btn-icon icon-import">&nbsp;</span>
									</span>
								</a>	
								<a href="javascript:void(0)" style="float: right;" class="l-btn l-btn-small l-btn-plain" group="" id="exportdata_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
" onClick="">
									<span class="l-btn-left l-btn-icon-left">
										<span class="l-btn-text">Export</span><span class="l-btn-icon icon-xls">&nbsp;</span>
									</span>
								</a>						
							</div>
						</div>
						
						<?php echo $_smarty_tpl->getSubTemplate ("backend/template/grid.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tablenya'=>"tbl_master_partner"), 0);
?>

					</div>
					
					<div id='frm_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
' style='display:none;'></div>
				
				</div>
			</div>
			
		</div>
	</div>
</div>

<?php echo '<script'; ?>
>
	var submodul = "<?php echo (($tmp = @$_smarty_tpl->tpl_vars['submodul']->value)===null||$tmp==='' ? '' : $tmp);?>
";
	var param = {};
	
	$(document).keypress(function(e) {
		if(e.which == 13) {
			$('#grid_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
').datagrid('reload',{
				'table' : 'tbl_master_partner',
				'partnername' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_partnername').val(),
				'partnercode' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_partnercode').val(),
				'company' 	: $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_company').val(),
				'initial_partnername' : 'A',
				'initial_partnercode' : 'A',
				'initial_company' : 'A',
			});
		}
	});
	$('#search_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
').on('click', function(){
		$('#grid_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
').datagrid('reload',{
			'table' : 'tbl_master_partner',
			'partnername' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_partnername').val(),
			'partnercode' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_partnercode').val(),
			'company' 	: $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_company').val(),
			'initial_partnername' : 'A',
			'initial_partnercode' : 'A',
			'initial_company' : 'A',
		});
	});
	
	$('#exportdata_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
').on('click', function(){
		param['table'] = 'tbl_master_partner';
		param['partnername']   = $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_partnername').val();
		param['partnercode']   = $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_partnercode').val();
		param['company']   = $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_company').val();
		param['initial_partnername']   = 'A';
		param['initial_partnercode']   = 'A';
		param['initial_company']   = 'A';
		
		openWindowWithPostRequest('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
backend/exportdatawithtemplate/partner', param);
	});
<?php echo '</script'; ?>
><?php }
}
?>