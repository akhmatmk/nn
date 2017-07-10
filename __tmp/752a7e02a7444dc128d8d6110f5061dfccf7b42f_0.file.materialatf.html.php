<?php /* Smarty version 3.1.27, created on 2017-07-09 14:53:40
         compiled from "C:\xampp\htdocs\nn\__application\views\backend\modul\master\materialatf.html" */ ?>
<?php
/*%%SmartyHeaderCode:3936744045961e104214fc7_21590745%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '752a7e02a7444dc128d8d6110f5061dfccf7b42f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nn\\__application\\views\\backend\\modul\\master\\materialatf.html',
      1 => 1499518691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3936744045961e104214fc7_21590745',
  'variables' => 
  array (
    'submodul' => 0,
    'main' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5961e104257652_63547098',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5961e104257652_63547098')) {
function content_5961e104257652_63547098 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3936744045961e104214fc7_21590745';
?>
<div class="row wrapper border-bottom blueaye-bg page-heading">
	<div class="col-lg-10" style='margin-left:20px;'>
		<h3><b>Master Data</b></h3>
		<ol class="breadcrumb" style='margin-bottom:10px !important;'>
            <li>
                Master Material ATF
            </li>
            <li class="active">
                <strong>Master Data</strong>
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
	
								<label>Vendor</label> : <input type='text' style='width:75px;padding:2px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_vendor' /> &nbsp;
								<label>Level 1</label> : <input type='text' style='width:75px;padding:2px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_equipment' /> &nbsp;
								<label>Level 2</label> : <input type='text' style='width:75px;padding:2px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_type' /> &nbsp;
								<label>Level 3</label> : <input type='text' style='width:75px;padding:2px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_modulartype' /> &nbsp;
								<label>Level 4</label> : <input type='text' style='width:75px;padding:2px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_productcode' /> &nbsp;
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
						
						<?php echo $_smarty_tpl->getSubTemplate ("backend/template/grid.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tablenya'=>"tbl_master_material_atf"), 0);
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
				'table' : 'tbl_master_material_atf',
				'vendor' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_vendor').val(),
				'equipment' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_equipment').val(),
				'type' 	: $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_type').val(),
				'modulartype' 	: $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_modulartype').val(),
				'productcode' 	: $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_productcode').val(),
				'allfield' 	: $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_allfield').val(),
				'initial_vendor' : 'A',
				'initial_equipment' : 'A',
				'initial_type' : 'A',
				'initial_modulartype' : 'A',
				'initial_productcode' : 'A'
			});
		}
	});
	$('#search_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
').on('click', function(){
		$('#grid_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
').datagrid('reload',{
			'table' : 'tbl_master_material_atf',
			'vendor' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_vendor').val(),
			'equipment' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_equipment').val(),
			'type' 	: $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_type').val(),
			'modulartype' 	: $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_modulartype').val(),
			'productcode' 	: $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_productcode').val(),
			'allfield' 	: $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_allfield').val(),
			'initial_vendor' : 'A',
			'initial_equipment' : 'A',
			'initial_type' : 'A',
			'initial_modulartype' : 'A',
			'initial_productcode' : 'A'
		});
	});
	
	$('#exportdata_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
').on('click', function(){
		param['table'] = 'tbl_master_material_atf';
		param['vendor']   = $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_vendor').val();
		param['equipment']   = $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_equipment').val();
		param['type']   = $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_type').val();
		param['modulartype']   	 = $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_modulartype').val();
		param['productcode']    = $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_productcode').val();
	//	param['allfield']    = $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_allfield').val();
		param['initial_vendor']   = 'A';
		param['initial_equipment']   = 'A';
		param['initial_type']   = 'A';
		param['initial_modulartype']   = 'A';
		param['initial_productcode']   = 'A';
		
		openWindowWithPostRequest('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
backend/exportdatawithtemplate/materialatf', param);
	});
<?php echo '</script'; ?>
><?php }
}
?>