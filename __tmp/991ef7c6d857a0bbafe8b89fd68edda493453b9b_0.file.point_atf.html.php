<?php /* Smarty version 3.1.27, created on 2017-07-07 11:29:12
         compiled from "/home/vagrant/Code/nokia/__application/views/backend/modul/progress/point_atf.html" */ ?>
<?php
/*%%SmartyHeaderCode:1939996215595f0e18d84a12_21235653%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '991ef7c6d857a0bbafe8b89fd68edda493453b9b' => 
    array (
      0 => '/home/vagrant/Code/nokia/__application/views/backend/modul/progress/point_atf.html',
      1 => 1499401748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1939996215595f0e18d84a12_21235653',
  'variables' => 
  array (
    'submodul' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_595f0e18dd0de1_22323509',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_595f0e18dd0de1_22323509')) {
function content_595f0e18dd0de1_22323509 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1939996215595f0e18d84a12_21235653';
?>
<div class="row wrapper border-bottom blueaye-bg page-heading">
	<div class="col-lg-10" style='margin-left:20px;'>
		<h3><b>ATF</b></h3>
		<ol class="breadcrumb" style='margin-bottom:10px !important;'>
            <li>
                Report ATF
            </li>
            <li class="active">
                <strong>ATF</strong>
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
								<?php echo $_smarty_tpl->getSubTemplate ("backend/template/button_grid.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('varbutton'=>"received"), 0);
?>
	
								<label>Atf No</label> : <input type='text' style='width:75px;padding:2px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_atfno' /> &nbsp;
								<label>Isat No</label> : <input type='text' style='width:75px;padding:2px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_isatno' /> &nbsp;
								<label>Site Info</label> : <input type='text' style='width:75px;padding:2px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_siteinfo' /> &nbsp;
								<label>Remark Atf</label> : <input type='text' style='width:75px;padding:2px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_remarkatf' /> &nbsp;
								<label>Po Number</label> : <input type='text' style='width:75px;padding:2px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_ponumber' /> &nbsp;
								<label>All Field</label> : <input type='text' style='width:75px;padding:2px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_allfield' /> &nbsp;
								<a href="javascript:void(0)" class="l-btn l-btn-small l-btn-plain" group="" id="search_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
" onClick="">
									<span class="l-btn-left l-btn-icon-left">
										<span class="l-btn-text">Filter Data</span><span class="l-btn-icon icon-search">&nbsp;</span>
									</span>	
								</a>	
								<a href="javascript:void(0)" style="float: right;" class="l-btn l-btn-small l-btn-plain" group="" id="exportdata_receivedallexport" onClick="">
									<span class="l-btn-left l-btn-icon-left">
										<span class="l-btn-text">Export</span><span class="l-btn-icon icon-xls">&nbsp;</span>
									</span>
								</a>						
							</div>
						</div>
						
						<?php echo $_smarty_tpl->getSubTemplate ("backend/template/grid_editable.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tinggi_grid'=>"getClientHeight()-210",'tablenya'=>"tbl_master_tracker_atf"), 0);
?>

					</div>
					
					
					<div id='frm_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
' style='display:none;'></div>
					<div id='footer_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
' style="padding:5px;">
						
					</div>
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
				'table' : 'tbl_master_tracker_atf',
				'atf_nokia_no' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_atfno').val(),
				'isat_no' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_isatno').val(),
				'site_info' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_siteinfo').val(),
				'remark_atf' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_remarkatf').val(),
				'po_number' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_ponumber').val(),
				'allfield' 	: $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_allfield').val(),
				'initial_phase' : 'B',
				'initial_potype' : 'D',
				'initial_pono' : 'C',
				'initial_itemtext' : 'A'
			});
		}
	});

	$('#search_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
').on('click', function(){
		$('#grid_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
').datagrid('reload',{
			'table' : 'tbl_all_database',
				'atf_nokia_no' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_atfno').val(),
				'isat_no' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_isatno').val(),
				'site_info' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_siteinfo').val(),
				'remark_atf' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_remarkatf').val(),
				'po_number' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_ponumber').val(),
				'allfield' 	: $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_allfield').val(),
				'initial_phase' : 'B',
				'initial_potype' : 'D',
				'initial_pono' : 'C',
				'initial_itemtext' : 'A'
		});
	});
	
<?php echo '</script'; ?>
><?php }
}
?>