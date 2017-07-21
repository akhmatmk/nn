<?php /* Smarty version 3.1.27, created on 2017-04-14 18:23:29
         compiled from "/home/vagrant/Code/nokia/__application/views/backend/modul/database/reservationall.html" */ ?>
<?php
/*%%SmartyHeaderCode:9967439758f0b13138af78_04093504%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1932089d62aa6124c84f2204c3c44d75cc1b3fd0' => 
    array (
      0 => '/home/vagrant/Code/nokia/__application/views/backend/modul/database/reservationall.html',
      1 => 1488968795,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9967439758f0b13138af78_04093504',
  'variables' => 
  array (
    'submodul' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58f0b1313d28a4_00611741',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f0b1313d28a4_00611741')) {
function content_58f0b1313d28a4_00611741 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9967439758f0b13138af78_04093504';
?>
<div class="row wrapper border-bottom blueaye-bg page-heading">
	<div class="col-lg-10" style='margin-left:20px;'>
		<h3><b>PO Reservation All</b></h3>
		<ol class="breadcrumb" style='margin-bottom:10px !important;'>
            <li>
                PO All Database
            </li>
            <li class="active">
                <strong>PO Reservation All</strong>
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
'>
						<div id='tb_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
' style='margin-bottom:10px;'>
							

							<div style='width:100%;margin-bottom: 3px;'>
								<?php echo $_smarty_tpl->getSubTemplate ("backend/template/button_grid.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('varbutton'=>"received"), 0);
?>
	
								<label>Year</label> : <input type='text' style='width:75px;padding:2px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_phaseyear' /> &nbsp;
								<label>Phase</label> : <input type='text' style='width:75px;padding:2px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_phasename' /> &nbsp;
								<label>PO Type</label> : <input type='text' style='width:75px;padding:2px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_potype' /> &nbsp;
								<label>PO No</label> : <input type='text' style='width:75px;padding:2px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_pono' /> &nbsp;
								<label>Item Text</label> : <input type='text' style='width:75px;padding:2px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_itemtext' /> &nbsp;
								<label>All Field</label> : <input type='text' style='width:75px;padding:2px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_allfield' /> &nbsp;
								<a href="javascript:void(0)" class="l-btn l-btn-small l-btn-plain" group="" id="search_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
" onClick="">
									<span class="l-btn-left l-btn-icon-left">
										<span class="l-btn-text">Filter Data</span><span class="l-btn-icon icon-search">&nbsp;</span>
									</span>	
								</a>
								<a href="javascript:void(0)" style="float: right;" class="l-btn l-btn-small l-btn-plain" group="" id="exportdata_reservationallexport" onClick="">
									<span class="l-btn-left l-btn-icon-left">
										<span class="l-btn-text">Export</span><span class="l-btn-icon icon-xls">&nbsp;</span>
									</span>
								</a>						
							</div>
						</div>
						
						<?php echo $_smarty_tpl->getSubTemplate ("backend/template/grid.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tablenya'=>"tbl_all_database"), 0);
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
				'table' : 'tbl_all_database',
				'phasename' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_phasename').val(),
				'phaseyear' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_phaseyear').val(),
				'potype' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_potype').val(),
				'pono' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_pono').val(),
				'itemtext' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_itemtext').val(),
				'allfield' 	: $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_allfield').val(),
				'initial_phase' : 'J',
				'initial_potype' : 'E',
				'initial_pono' : 'D',
				'initial_itemtext' : 'H'
			});
		}
	});
	$('#search_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
').on('click', function(){
		$('#grid_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
').datagrid('reload',{
			'table' : 'tbl_all_database',
				'phasename' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_phasename').val(),
				'phaseyear' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_phaseyear').val(),
				'potype' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_potype').val(),
				'pono' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_pono').val(),
				'itemtext' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_itemtext').val(),
				'allfield' 	: $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_allfield').val(),
				'initial_phase' : 'J',
				'initial_potype' : 'E',
				'initial_pono' : 'D',
				'initial_itemtext' : 'H'
		});
	});
	$('#exportdata_reservationallexport').on('click', function(){
		param['table'] = 'tbl_all_database';
		param['phasename']   = $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_phasename').val();
		param['phaseyear']   = $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_phaseyear').val();
		param['potype']   = $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_potype').val();
		param['pono']   = $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_pono').val();
		param['itemtext']   = $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_itemtext').val();
		param['allfield']    = $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_allfield').val();
		param['initial_phase']   = 'J';
		param['initial_potype']   = 'E';
		param['initial_pono']   = 'D';
		param['initial_itemtext']   = 'H';				

		openWindowWithPostRequest('<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
backend/exportdatawithtemplate/reservationallexport', param);
	});
<?php echo '</script'; ?>
><?php }
}
?>