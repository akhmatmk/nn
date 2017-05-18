<?php /* Smarty version 3.1.27, created on 2017-04-14 18:16:03
         compiled from "/home/vagrant/Code/nokia/__application/views/backend/modul/progress/uploadtracker.html" */ ?>
<?php
/*%%SmartyHeaderCode:143911387658f0af73b17005_43552064%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13ae11062452dac95bd4b585af5c18c4964019d1' => 
    array (
      0 => '/home/vagrant/Code/nokia/__application/views/backend/modul/progress/uploadtracker.html',
      1 => 1488371749,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143911387658f0af73b17005_43552064',
  'variables' => 
  array (
    'submodul' => 0,
    'main' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58f0af73b55c43_37081123',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f0af73b55c43_37081123')) {
function content_58f0af73b55c43_37081123 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '143911387658f0af73b17005_43552064';
?>
<div class="row wrapper border-bottom blueaye-bg page-heading">
	<div class="col-lg-10" style='margin-left:20px;'>
		<h3><b>Upload Tracker</b></h3>
		<ol class="breadcrumb" style='margin-bottom:10px !important;'>
            <li>
                Master Progress
            </li>
            <li class="active">
                <strong>Upload Tracker</strong>
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
							<label>All Field</label> : <input type='text' style='width:100px;padding:2px;' id='<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_allfield' /> &nbsp;
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
	
	jQuery(document).ready(function(){
		$.messager.show({
			title:'My Title',
			msg:'Message will be closed after 5 seconds.',
			width: 300,
			height: 100,
			 style:{
		        right:'',
		        top:document.body.scrollTop+document.documentElement.scrollTop,
		        bottom:''
		    }
		});
	});

	$('#search_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
').on('click', function(){
		$('#grid_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
').datagrid('reload',{
			'table' : 'tbl_uploader_tracker',
			'allfield' 	: $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_allfield').val(),
			
		});
	});

	$(document).keypress(function(e) {
		if(e.which == 13) {
			$('#grid_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
').datagrid('reload',{
				'table' : 'tbl_uploader_tracker',
				'allfield' 	: $('#<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
_allfield').val(),
				
			});
		}
	});
	
<?php echo '</script'; ?>
><?php }
}
?>