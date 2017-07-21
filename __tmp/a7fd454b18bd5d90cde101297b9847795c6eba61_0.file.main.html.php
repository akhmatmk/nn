<?php /* Smarty version 3.1.27, created on 2017-06-13 12:57:02
         compiled from "/home/vagrant/Code/nokia/__application/views/backend/modul/beranda/main.html" */ ?>
<?php
/*%%SmartyHeaderCode:982670324593f7eaed04cf5_46100328%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7fd454b18bd5d90cde101297b9847795c6eba61' => 
    array (
      0 => '/home/vagrant/Code/nokia/__application/views/backend/modul/beranda/main.html',
      1 => 1485416640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '982670324593f7eaed04cf5_46100328',
  'variables' => 
  array (
    'submodul' => 0,
    'host' => 0,
    'main' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_593f7eaed59327_78237161',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_593f7eaed59327_78237161')) {
function content_593f7eaed59327_78237161 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '982670324593f7eaed04cf5_46100328';
?>
<div class="wrapper wrapper-content">
   
   
</div>
        <div class="col-lg-12" style='padding-right:0px !important;'>
            
            <div class="ibox">
                <div class="ibox-content" style='padding-bottom:0px !important;'>
                    
                    <div id='grid_nya_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
'>
                        <?php echo $_smarty_tpl->getSubTemplate ("backend/template/grid_dashboard.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tablenya'=>"main"), 0);
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
    $('#exportdata_<?php echo $_smarty_tpl->tpl_vars['submodul']->value;?>
').on('click', function(){
        param['table'] = 'tbl_master_phase';
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