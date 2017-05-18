<?php /* Smarty version 3.1.27, created on 2017-04-17 11:13:32
         compiled from "/home/vagrant/Code/nokia/__application/views/backend/modul/master/nesystem.html" */ ?>
<?php
/*%%SmartyHeaderCode:63488739558f440ec921935_69874344%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '060ae3e1c305d67129712e1838da95bea3be8768' => 
    array (
      0 => '/home/vagrant/Code/nokia/__application/views/backend/modul/master/nesystem.html',
      1 => 1491208009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63488739558f440ec921935_69874344',
  'variables' => 
  array (
    'submodul' => 0,
    'main' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58f440eca70041_05091880',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f440eca70041_05091880')) {
function content_58f440eca70041_05091880 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '63488739558f440ec921935_69874344';
?>
<div class="row wrapper border-bottom blueaye-bg page-heading">
	<div class="col-lg-10" style='margin-left:20px;'>
		<h3><b>Master Data</b></h3>
		<ol class="breadcrumb" style='margin-bottom:10px !important;'>
            <li>
                Master Data
            </li>
            <li class="active">
                <strong>Master NE System</strong>
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
	
								<label>NE System</label> : <input type='text' style='width:75px;padding:2px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_nesystem' /> &nbsp;
								<label>NE Group</label> : <input type='text' style='width:75px;padding:2px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_negroup' /> &nbsp;
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
						
						<?php echo $_smarty_tpl->getSubTemplate ("backend/template/grid.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tablenya'=>"tbl_master_ne_system"), 0);
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
				'table' : 'tbl_master_ne_system',
				'nesystem' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_nesystem').val(),
				'negroup' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_negroup').val(),
				'initial_nesystem' : 'A',
				'initial_negroup' : 'A',
			});
		}
	});
	$('#search_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
').on('click', function(){
		$('#grid_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
').datagrid('reload',{
			'table' : 'tbl_master_ne_system',
			'nesystem' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_nesystem').val(),
			'negroup' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_negroup').val(),
			'initial_nesystem' : 'A',
			'initial_negroup' : 'A',
		});
	});
	
	$('#exportdata_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
').on('click', function(){
		param['table'] = 'tbl_master_ne_system';
		param['nesystem']   = $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_nesystem').val();
		param['negroup']   = $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_negroup').val();
		param['initial_nesystem']   = 'A';
		param['initial_negroup']   = 'A';
		
		openWindowWithPostRequest('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
backend/exportdatawithtemplate/nesystem', param);
	});
<?php echo '</script'; ?>
><?php }
}
?>