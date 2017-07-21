<?php /* Smarty version 3.1.27, created on 2017-04-14 18:07:28
         compiled from "/home/vagrant/Code/nokia/__application/views/backend/modul/master/region.html" */ ?>
<?php
/*%%SmartyHeaderCode:101623914258f0ad702fddc3_14404624%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20cbd88683e252ed85f20cbfcd17892386e7e961' => 
    array (
      0 => '/home/vagrant/Code/nokia/__application/views/backend/modul/master/region.html',
      1 => 1484659674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101623914258f0ad702fddc3_14404624',
  'variables' => 
  array (
    'submodul' => 0,
    'host' => 0,
    'main' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58f0ad7033e0f7_80516959',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f0ad7033e0f7_80516959')) {
function content_58f0ad7033e0f7_80516959 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '101623914258f0ad702fddc3_14404624';
?>
<div class="row wrapper border-bottom blueaye-bg page-heading">
	<div class="col-lg-10" style='margin-left:20px;'>
		<h3><b>Master Region</b></h3>
		<ol class="breadcrumb" style='margin-bottom:10px !important;'>
            <li>
                Master
            </li>
            <li class="active">
                <strong>Master Region</strong>
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
							<select id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_filter_kategori' style='width:100px;padding:5px;'>
								<option value='all'>ALL</option>
								<option value='region_code'>Region</option>
							</select>
							<input type='text' style='width:150px;padding:5px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_txt' />
							<a href="javascript:void(0)" class="l-btn l-btn-small l-btn-plain" group="" id="search_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
" onClick="">
								<span class="l-btn-left l-btn-icon-left">
									<span class="l-btn-text"></span><span class="l-btn-icon icon-search">&nbsp;</span>
								</span>
							</a>
							<a href="javascript:void(0)" class="l-btn l-btn-small l-btn-plain" group="" id="exportdata_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
" onClick="">
								<span class="l-btn-left l-btn-icon-left">
									<span class="l-btn-text">Export Excell</span><span class="l-btn-icon icon-xls">&nbsp;</span>
								</span>
							</a>
							 <?php echo $_smarty_tpl->getSubTemplate ("backend/template/button_grid.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
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
	
	$(document).keypress(function(e) {
		if(e.which == 13) {
			$('#grid_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
').datagrid('reload',{
				'table' : 'tbl_master_region',
				'kat' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_filter_kategori').val(),
				'key' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_txt').val()
			});
		}
	});
	
	$('#search_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
').on('click', function(){
		$('#grid_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
').datagrid('reload',{
			'table' : 'tbl_master_region',
			'kat' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_filter_kategori').val(),
			'key' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_txt').val()
		});
	});
	$('#exportdata_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
').on('click', function(){
		param['table'] = 'tbl_master_region';
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