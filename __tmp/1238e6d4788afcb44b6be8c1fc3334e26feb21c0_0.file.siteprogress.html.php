<?php /* Smarty version 3.1.27, created on 2017-04-14 18:16:13
         compiled from "/home/vagrant/Code/nokia/__application/views/backend/modul/progress/siteprogress.html" */ ?>
<?php
/*%%SmartyHeaderCode:36888796758f0af7d6d0de8_99102243%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1238e6d4788afcb44b6be8c1fc3334e26feb21c0' => 
    array (
      0 => '/home/vagrant/Code/nokia/__application/views/backend/modul/progress/siteprogress.html',
      1 => 1491454414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36888796758f0af7d6d0de8_99102243',
  'variables' => 
  array (
    'submodul' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58f0af7d745569_53493984',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f0af7d745569_53493984')) {
function content_58f0af7d745569_53493984 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '36888796758f0af7d6d0de8_99102243';
?>
<div class="row wrapper border-bottom blueaye-bg page-heading">
	<div class="col-lg-10" style='margin-left:20px;'>
		<h3><b>Site Progress</b></h3>
		<ol class="breadcrumb" style='margin-bottom:10px !important;'>
            <li>
                Master Progress
            </li>
            <li class="active">
                <strong>Site Progress</strong>
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
' style='margin-bottom:5px;'>
							

							<div style='width:100%;margin-bottom: 0px;'>
								<?php echo $_smarty_tpl->getSubTemplate ("backend/template/button_grid.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('varbutton'=>'tracker'), 0);
?>
		
								<label>Site ID</label> : <input type='text' style='width:75px;padding:2px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_siteid' /> &nbsp;
								<label>Site Name</label> : <input type='text' style='width:75px;padding:2px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_sitename' /> &nbsp;
								<label>Region</label> : <input type='text' style='width:75px;padding:2px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_regioncode' /> &nbsp;
								<label>Phase Code</label> : <input type='text' style='width:75px;padding:2px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_phasecode' /> &nbsp;
								<label>SOW</label> : <input type='text' style='width:75px;padding:2px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_sowcategory' /> &nbsp;
								<label>All Field</label> : <input type='text' style='width:75px;padding:2px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_allfield' /> &nbsp;
								<a href="javascript:void(0)" class="l-btn l-btn-small l-btn-plain" group="" id="search_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
" onClick="">
									<span class="l-btn-left l-btn-icon-left">
										<span class="l-btn-text">Filter Data</span><span class="l-btn-icon icon-search">&nbsp;</span>
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
						
						<?php echo $_smarty_tpl->getSubTemplate ("backend/template/grid_editable.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tinggi_grid'=>"getClientHeight()-210",'tablenya'=>"tbl_master_tracker_siteprogress"), 0);
?>

					</div>
					
					<div id='frm_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
' style='display:none;'></div>
					
					<div id='footer_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
' style="padding:5px;">
						<a href="javascript:void(0)" style="" class="l-btn l-btn-small l-btn-plain" group="" id="" onClick="$('#grid_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
').datagrid('acceptChanges');$('#grid_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
').datagrid('reload');">
							<span class="l-btn-left l-btn-icon-left">
								<span class="l-btn-text">Save Editing</span><span class="l-btn-icon icon-save">&nbsp;</span>
							</span>
						</a>
						<a href="javascript:void(0)" style="" class="l-btn l-btn-small l-btn-plain" group="" id="" onClick="$('#grid_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
').datagrid('rejectChanges');">
							<span class="l-btn-left l-btn-icon-left">
								<span class="l-btn-text">Cancel Editing</span><span class="l-btn-icon icon-no">&nbsp;</span>
							</span>
						</a>
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
				'table' : 'tbl_master_tracker_siteprogress',
				'siteid' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_siteid').val(),
				'sitename' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_sitename').val(),
				'regioncode' 	: $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_regioncode').val(),
				'phasecode' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_phasecode').val(),
				'sowcategory' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_sowcategory').val(),
				'allfield' 	: $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_allfield').val(),
				'initial_phase' : 'G',
				'initial_site' : 'B',
				'initial_regioncode' : 'D',
				
			});
		}
	});
	$('#search_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
').on('click', function(){
		$('#grid_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
').datagrid('reload',{
			'table' : 'tbl_master_tracker_siteprogress',
			'siteid' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_siteid').val(),
			'sitename' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_sitename').val(),
			'regioncode' 	: $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_regioncode').val(),
			'phasecode' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_phasecode').val(),
			'sowcategory' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_sowcategory').val(),
			'allfield' 	: $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_allfield').val(),
			'initial_site' : 'B',
			'initial_regioncode' : 'D',
			'initial_phase' : 'G',
		});
	});
	$('#exportdata_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
').on('click', function(){
		param['table'] = 'tbl_master_tracker_siteprogress';
		param['siteid']   = $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_siteid').val();
		param['sitename']   = $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_sitename').val();
		param['regioncode']   = $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_regioncode').val();
		param['phasecode']   = $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_phasecode').val();
		param['siteid']   = $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_siteid').val();
		param['sowcategory']   = $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_sowcategory').val();
		param['allfield']    = $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_allfield').val();
		param['initial_site']   = 'B';
		param['initial_regioncode']   = 'D';
		param['initial_phase']   = 'G';
		
		openWindowWithPostRequest('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
backend/exportdatawithtemplate/siteprogress', param);
	});
<?php echo '</script'; ?>
><?php }
}
?>