<?php /* Smarty version 3.1.27, created on 2017-06-14 14:43:10
         compiled from "/home/vagrant/Code/nokia/__application/views/backend/modul/progress/point_pmr.html" */ ?>
<?php
/*%%SmartyHeaderCode:5706681465940e90e285931_72379167%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad55df1532cc8fb690c1eb97602706f928d03adf' => 
    array (
      0 => '/home/vagrant/Code/nokia/__application/views/backend/modul/progress/point_pmr.html',
      1 => 1497426188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5706681465940e90e285931_72379167',
  'variables' => 
  array (
    'submodul' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5940e90e2c7228_40496632',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5940e90e2c7228_40496632')) {
function content_5940e90e2c7228_40496632 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5706681465940e90e285931_72379167';
?>
<div class="row wrapper border-bottom blueaye-bg page-heading">
	<div class="col-lg-10" style='margin-left:20px;'>
		<h3><b>PMR</b></h3>
		<ol class="breadcrumb" style='margin-bottom:10px !important;'>
            <li>
                Report PMR
            </li>
            <li class="active">
                <strong>PMR</strong>
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
				'siteid' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_siteid').val(),
				'sitename' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_sitename').val(),
				'regioncode' 	: $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_regioncode').val(),
				'phasecode' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_phasecode').val(),
				'allfield' 	: $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_allfield').val(),
				'initial_phase' : 'G',
				'initial_regioncode' : 'D',
				'initial_site' : 'B'
			});
		}
	});
	
<?php echo '</script'; ?>
><?php }
}
?>