<?php /* Smarty version 3.1.27, created on 2017-04-14 18:08:12
         compiled from "/home/vagrant/Code/nokia/__application/views/backend/modul/database/uploadalldatabase.html" */ ?>
<?php
/*%%SmartyHeaderCode:6377656058f0ad9c7ebce7_50002992%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '704ed3586e6f09d2fb53afd095bd717c5cddd1e9' => 
    array (
      0 => '/home/vagrant/Code/nokia/__application/views/backend/modul/database/uploadalldatabase.html',
      1 => 1484659674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6377656058f0ad9c7ebce7_50002992',
  'variables' => 
  array (
    'submodul' => 0,
    'main' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58f0ad9c83ddc1_10926390',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f0ad9c83ddc1_10926390')) {
function content_58f0ad9c83ddc1_10926390 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6377656058f0ad9c7ebce7_50002992';
?>
<div class="row wrapper border-bottom blueaye-bg page-heading">
	<div class="col-lg-10" style='margin-left:20px;'>
		<h3><b>Upload All Database</b></h3>
		<ol class="breadcrumb" style='margin-bottom:10px !important;'>
            <li>
                PO All Database
            </li>
            <li class="active">
                <strong>Upload All Database</strong>
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
' style='margin-bottom:15px;'>
							Filter
							<select id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_filter_kategori' style='width:100px;padding:5px;'>
								<option value='all'>All</option>
								<option value=''>not</option>
							</select>
							<input type='text' style='width:150px;padding:5px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_txt' />
							<a href="javascript:void(0)" class="l-btn l-btn-small l-btn-plain" group="" id="search_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
" onClick="">
								<span class="l-btn-left l-btn-icon-left">
									<span class="l-btn-text"></span><span class="l-btn-icon icon-search">&nbsp;</span>
						
						</span>
							</a>
							
							<a href="javascript:void(0)" class="l-btn l-btn-small l-btn-plain" group="" id="" onClick="genform('import_data', '<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
', 'windowform');">
								<span class="l-btn-left l-btn-icon-left">
									<span class="l-btn-text">Import Data</span><span class="l-btn-icon icon-import">&nbsp;</span>
								</span>
							</a>
							<a href="javascript:void(0)" class="l-btn l-btn-small l-btn-plain" group="" id="" onClick="genform('download_file_import', '<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
', 'windowform');">
								<span class="l-btn-left l-btn-icon-left">
									<span class="l-btn-text">Download File</span><span class="l-btn-icon icon-xls">&nbsp;</span>
								</span>
							</a>
							<?php echo $_smarty_tpl->getSubTemplate ("backend/template/button_grid.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('varbutton'=>"database"), 0);
?>

						</div>
						
						<?php echo $_smarty_tpl->getSubTemplate ("backend/template/grid.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
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
	
	$('#search_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
').on('click', function(){
		$('#grid_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
').datagrid('reload',{
			'table' : 'tbl_master_masterpo',
			'kat' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_filter_kategori').val(),
			'key' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_txt').val()
		});
	});
	$('#exportdata_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
').on('click', function(){
		param['table'] = 'tbl_master_masterpo';
		param['kat']   = $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_filter_kategori').val();
		param['key']   = $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_txt').val();
		
		openWindowWithPost('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
backend/exportdata/excell/<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
', param);
	});
<?php echo '</script'; ?>
><?php }
}
?>