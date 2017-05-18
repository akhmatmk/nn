<?php /* Smarty version 3.1.27, created on 2017-04-20 20:18:18
         compiled from "/home/vagrant/Code/nokia/__application/views/backend/modul/progress/masterpmr.html" */ ?>
<?php
/*%%SmartyHeaderCode:118551788958f8b51ad116a1_72469851%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd58003dc17a2329e718f64608a97c495062d9abe' => 
    array (
      0 => '/home/vagrant/Code/nokia/__application/views/backend/modul/progress/masterpmr.html',
      1 => 1487752500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118551788958f8b51ad116a1_72469851',
  'variables' => 
  array (
    'submodul' => 0,
    'main' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58f8b51adaad08_81066332',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f8b51adaad08_81066332')) {
function content_58f8b51adaad08_81066332 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '118551788958f8b51ad116a1_72469851';
?>
<div class="row wrapper border-bottom blueaye-bg page-heading">
	<div class="col-lg-10" style='margin-left:20px;'>
		<h3><b>Master PMR</b></h3>
		<ol class="breadcrumb" style='margin-bottom:10px !important;'>
            <li>
                Master Progress
            </li>
            <li class="active">
                <strong>Master PMR</strong>
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
	
								<label>PMR NO</label> : <input type='text' style='width:75px;padding:2px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_pmrno' /> &nbsp;
								<label>Region At</label> : <input type='text' style='width:75px;padding:2px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_regionat' /> &nbsp;
								<label>Latest Mileston</label> : <input type='text' style='width:75px;padding:2px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_latestmileston' /> &nbsp;
								<label>All Field</label> : <input type='text' style='width:75px;padding:2px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_allfield' /> &nbsp;
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
						
						<?php echo $_smarty_tpl->getSubTemplate ("backend/template/grid.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tablenya'=>"tbl_master_progress_pmr"), 0);
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
				'table' : 'tbl_master_progress_pmr',
				'pmrno' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_pmrno').val(),
				'regionat' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_regionat').val(),
				'latestmileston' 	: $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_latestmileston').val(),
				'allfield' 	: $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_allfield').val(),
				'initial_pmrno' : 'A',
				'initial_regionat' : 'A',
				'initial_latesmileston' : 'A',
				
			});
		}
	});
	$('#search_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
').on('click', function(){
		$('#grid_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
').datagrid('reload',{
			'table' : 'tbl_master_progress_pmr',
			'pmrno' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_pmrno').val(),
			'regionat' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_regionat').val(),
			'latestmileston' 	: $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_latestmileston').val(),
			'allfield' 	: $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_allfield').val(),
			'initial_pmrno' : 'A',
			'initial_regionat' : 'A',
			'initial_latesmileston' : 'A',
			
		});
	});
	
	$('#exportdata_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
').on('click', function(){
		param['table'] = 'tbl_master_progress_pmr';
		param['pmrno']   = $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_pmrno').val();
		param['regionat']   = $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_regionat').val();
		param['latestmileston']    = $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_latestmileston').val();
		param['allfield']    = $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_allfield').val();
		param['initial_phase']   = 'B';
		param['initial_regionat']   = 'A';
		param['initial_latesmileston']   = 'A';
		
		openWindowWithPostRequest('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
backend/exportdatawithtemplate/mastercr', param);
	});
<?php echo '</script'; ?>
><?php }
}
?>