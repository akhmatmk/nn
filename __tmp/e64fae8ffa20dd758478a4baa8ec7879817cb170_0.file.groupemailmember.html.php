<?php /* Smarty version 3.1.27, created on 2017-07-21 17:07:11
         compiled from "/var/www/nokia.dev/public_html/__application/views/backend/modul/master/groupemailmember.html" */ ?>
<?php
/*%%SmartyHeaderCode:17252654165971d24fdd4d09_33646549%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e64fae8ffa20dd758478a4baa8ec7879817cb170' => 
    array (
      0 => '/var/www/nokia.dev/public_html/__application/views/backend/modul/master/groupemailmember.html',
      1 => 1500619509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17252654165971d24fdd4d09_33646549',
  'variables' => 
  array (
    'submodul' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5971d24fe123a8_90707521',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5971d24fe123a8_90707521')) {
function content_5971d24fe123a8_90707521 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17252654165971d24fdd4d09_33646549';
?>
<div class="row wrapper border-bottom blueaye-bg page-heading">
	<div class="col-lg-10" style='margin-left:20px;'>
		<h3><b>Master Group</b></h3>
		<ol class="breadcrumb" style='margin-bottom:10px !important;'>
            <li>
                Master Data
            </li>
            <li class="active">
                <strong>Master Group </strong>
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
' style='margin-bottom:15px;'>
							<input type='text' style='width:150px;padding:5px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_txt' />
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
				'table' : 'tbl_master_phase',
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
			'table' : 'tbl_master_phase',
			'kat' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_filter_kategori').val(),
			'key' : $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_txt').val()
		});
	});
<?php echo '</script'; ?>
><?php }
}
?>