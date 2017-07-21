<?php /* Smarty version 3.1.27, created on 2017-07-20 08:37:06
         compiled from "C:\xampp\htdocs\nn\__application\views\backend\modul\usermanagement\form_user_role.html" */ ?>
<?php
/*%%SmartyHeaderCode:327430203597009425c6754_22181396%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f950b341653b3e1598e6e8320eb7334c3f618a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nn\\__application\\views\\backend\\modul\\usermanagement\\form_user_role.html',
      1 => 1499518692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '327430203597009425c6754_22181396',
  'variables' => 
  array (
    'main' => 0,
    'acak' => 0,
    'role' => 0,
    'rows' => 0,
    'stsbuat' => 0,
    'stsbaca' => 0,
    'stsubah' => 0,
    'stshapus' => 0,
    'riws' => 0,
    'stsbuatChild' => 0,
    'stsbacaChild' => 0,
    'stsubahChild' => 0,
    'stshapusChild' => 0,
    'ruws' => 0,
    'stsbuatSubChild' => 0,
    'stsbacaSubChild' => 0,
    'stsubahSubChild' => 0,
    'stshapusSubChild' => 0,
    'id_group' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59700942662b74_64299266',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59700942662b74_64299266')) {
function content_59700942662b74_64299266 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '327430203597009425c6754_22181396';
?>
<div id='divatas' style='overflow-y:auto;'>
	<form method='post' url="" id="form_<?php echo $_smarty_tpl->tpl_vars['main']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
" enctype="multipart/form-data">			
		<table cellspacing="1" cellpadding="0" border="0" style="width:100%; border: 1px solid #4C4747;">
			<tr style='background:#7DB3CB; color:#fff; font-weight:bold;'>
				<td align='center' width='30%'>Modul</td>
				<td align='center'>Create</td>
				<td align='center'>Read</td>
				<td align='center'>Update</td>
				<td align='center'>Delete</td>
			</tr>
			
			<?php
$_from = $_smarty_tpl->tpl_vars['role']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['rows']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
$_smarty_tpl->tpl_vars['rows']->_loop = true;
$foreach_rows_Sav = $_smarty_tpl->tpl_vars['rows'];
?>
				<?php if ($_smarty_tpl->tpl_vars['rows']->value['buat'] == 1) {?>
					<?php $_smarty_tpl->tpl_vars['stsbuat'] = new Smarty_Variable('checked', null, 0);?>
				<?php } elseif ($_smarty_tpl->tpl_vars['rows']->value['buat'] == 0) {?>
					<?php $_smarty_tpl->tpl_vars['stsbuat'] = new Smarty_Variable('', null, 0);?>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['rows']->value['baca'] == 1) {?>
					<?php $_smarty_tpl->tpl_vars['stsbaca'] = new Smarty_Variable('checked', null, 0);?>
				<?php } elseif ($_smarty_tpl->tpl_vars['rows']->value['baca'] == 0) {?>
					<?php $_smarty_tpl->tpl_vars['stsbaca'] = new Smarty_Variable('', null, 0);?>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['rows']->value['ubah'] == 1) {?>
					<?php $_smarty_tpl->tpl_vars['stsubah'] = new Smarty_Variable('checked', null, 0);?>
				<?php } elseif ($_smarty_tpl->tpl_vars['rows']->value['ubah'] == 0) {?>
					<?php $_smarty_tpl->tpl_vars['stsubah'] = new Smarty_Variable('', null, 0);?>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['rows']->value['hapus'] == 1) {?>
					<?php $_smarty_tpl->tpl_vars['stshapus'] = new Smarty_Variable('checked', null, 0);?>
				<?php } elseif ($_smarty_tpl->tpl_vars['rows']->value['hapus'] == 0) {?>
					<?php $_smarty_tpl->tpl_vars['stshapus'] = new Smarty_Variable('', null, 0);?>
				<?php }?>
				
				<tr style='background:#F2F2F2; color:#333333; font-weight:bold;'>
					<td style='padding-left:5px;'><?php echo $_smarty_tpl->tpl_vars['rows']->value['nama_menu'];?>
</td>
					<td align='center'><input type="checkbox" class='cek_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
' name="checkbuat[]"  data="C_<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['stsbuat']->value;?>
></td>
					<td align='center'><input type="checkbox" class='cek_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
' name="checkbaca[]"  data="R_<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['stsbaca']->value;?>
 ></td>
					<td align='center'><input type="checkbox" class='cek_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
' name="checkubah[]"  data="U_<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['stsubah']->value;?>
 ></td>
					<td align='center'><input type="checkbox" class='cek_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
' name="checkhapus[]" data="D_<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['stshapus']->value;?>
 ></td>
				</tr>
				<?php
$_from = $_smarty_tpl->tpl_vars['rows']->value['child_menu'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['riws'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['riws']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['riws']->value) {
$_smarty_tpl->tpl_vars['riws']->_loop = true;
$foreach_riws_Sav = $_smarty_tpl->tpl_vars['riws'];
?>
					<?php if ($_smarty_tpl->tpl_vars['riws']->value['buat'] == 1) {?>
						<?php $_smarty_tpl->tpl_vars['stsbuatChild'] = new Smarty_Variable('checked', null, 0);?>
					<?php } elseif ($_smarty_tpl->tpl_vars['riws']->value['buat'] == 0) {?>
						<?php $_smarty_tpl->tpl_vars['stsbuatChild'] = new Smarty_Variable('', null, 0);?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['riws']->value['baca'] == 1) {?>
						<?php $_smarty_tpl->tpl_vars['stsbacaChild'] = new Smarty_Variable('checked', null, 0);?>
					<?php } elseif ($_smarty_tpl->tpl_vars['riws']->value['baca'] == 0) {?>
						<?php $_smarty_tpl->tpl_vars['stsbacaChild'] = new Smarty_Variable('', null, 0);?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['riws']->value['ubah'] == 1) {?>
						<?php $_smarty_tpl->tpl_vars['stsubahChild'] = new Smarty_Variable('checked', null, 0);?>
					<?php } elseif ($_smarty_tpl->tpl_vars['riws']->value['ubah'] == 0) {?>
						<?php $_smarty_tpl->tpl_vars['stsubahChild'] = new Smarty_Variable('', null, 0);?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['riws']->value['hapus'] == 1) {?>
						<?php $_smarty_tpl->tpl_vars['stshapusChild'] = new Smarty_Variable('checked', null, 0);?>
					<?php } elseif ($_smarty_tpl->tpl_vars['riws']->value['hapus'] == 0) {?>
						<?php $_smarty_tpl->tpl_vars['stshapusChild'] = new Smarty_Variable('', null, 0);?>
					<?php }?>
				
					<tr style='background:#F2F2F2; color:#333333;'>
						<td style='padding-left:15px;'>- <?php echo $_smarty_tpl->tpl_vars['riws']->value['nama_menu_child'];?>
</td>
						<td align='center'><input type="checkbox" class='cek_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
' name="checkbuat[]" data="C_<?php echo $_smarty_tpl->tpl_vars['riws']->value['id_child'];?>
" <?php echo $_smarty_tpl->tpl_vars['stsbuatChild']->value;?>
></td>
						<td align='center'><input type="checkbox" class='cek_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
' name="checkbaca[]" data="R_<?php echo $_smarty_tpl->tpl_vars['riws']->value['id_child'];?>
"<?php echo $_smarty_tpl->tpl_vars['stsbacaChild']->value;?>
 ></td>
						<td align='center'><input type="checkbox" class='cek_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
' name="checkubah[]" data="U_<?php echo $_smarty_tpl->tpl_vars['riws']->value['id_child'];?>
"<?php echo $_smarty_tpl->tpl_vars['stsubahChild']->value;?>
 ></td>
						<td align='center'><input type="checkbox" class='cek_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
' name="checkhapus[]" data="D_<?php echo $_smarty_tpl->tpl_vars['riws']->value['id_child'];?>
" <?php echo $_smarty_tpl->tpl_vars['stshapusChild']->value;?>
 ></td>
					</tr>
					
					<?php if (isset($_smarty_tpl->tpl_vars['riws']->value['sub_child_menu'])) {?>
						<?php
$_from = $_smarty_tpl->tpl_vars['riws']->value['sub_child_menu'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ruws'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ruws']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ruws']->value) {
$_smarty_tpl->tpl_vars['ruws']->_loop = true;
$foreach_ruws_Sav = $_smarty_tpl->tpl_vars['ruws'];
?>
							<?php if ($_smarty_tpl->tpl_vars['ruws']->value['buat'] == 1) {?>
								<?php $_smarty_tpl->tpl_vars['stsbuatSubChild'] = new Smarty_Variable('checked', null, 0);?>
							<?php } elseif ($_smarty_tpl->tpl_vars['ruws']->value['buat'] == 0) {?>
								<?php $_smarty_tpl->tpl_vars['stsbuatSubChild'] = new Smarty_Variable('', null, 0);?>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['ruws']->value['baca'] == 1) {?>
								<?php $_smarty_tpl->tpl_vars['stsbacaSubChild'] = new Smarty_Variable('checked', null, 0);?>
							<?php } elseif ($_smarty_tpl->tpl_vars['ruws']->value['baca'] == 0) {?>
								<?php $_smarty_tpl->tpl_vars['stsbacaSubChild'] = new Smarty_Variable('', null, 0);?>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['ruws']->value['ubah'] == 1) {?>
								<?php $_smarty_tpl->tpl_vars['stsubahSubChild'] = new Smarty_Variable('checked', null, 0);?>
							<?php } elseif ($_smarty_tpl->tpl_vars['ruws']->value['ubah'] == 0) {?>
								<?php $_smarty_tpl->tpl_vars['stsubahSubChild'] = new Smarty_Variable('', null, 0);?>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['ruws']->value['hapus'] == 1) {?>
								<?php $_smarty_tpl->tpl_vars['stshapusSubChild'] = new Smarty_Variable('checked', null, 0);?>
							<?php } elseif ($_smarty_tpl->tpl_vars['ruws']->value['hapus'] == 0) {?>
								<?php $_smarty_tpl->tpl_vars['stshapusSubChild'] = new Smarty_Variable('', null, 0);?>
							<?php }?>
							
							<tr style='background:#EAEAEA; color:#333333;'>
								<td style='padding-left:20px;'>+ <?php echo $_smarty_tpl->tpl_vars['ruws']->value['nama_menu_sub_child'];?>
</td>
								<td align='center'><input type="checkbox" class='cek_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
' name="checkbuat[]" data="C_<?php echo $_smarty_tpl->tpl_vars['ruws']->value['id_sub_child'];?>
" <?php echo $_smarty_tpl->tpl_vars['stsbuatSubChild']->value;?>
></td>
								<td align='center'><input type="checkbox" class='cek_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
' name="checkbaca[]" data="R_<?php echo $_smarty_tpl->tpl_vars['ruws']->value['id_sub_child'];?>
"<?php echo $_smarty_tpl->tpl_vars['stsbacaSubChild']->value;?>
 ></td>
								<td align='center'><input type="checkbox" class='cek_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
' name="checkubah[]" data="U_<?php echo $_smarty_tpl->tpl_vars['ruws']->value['id_sub_child'];?>
"<?php echo $_smarty_tpl->tpl_vars['stsubahSubChild']->value;?>
 ></td>
								<td align='center'><input type="checkbox" class='cek_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
' name="checkhapus[]" data="D_<?php echo $_smarty_tpl->tpl_vars['ruws']->value['id_sub_child'];?>
" <?php echo $_smarty_tpl->tpl_vars['stshapusSubChild']->value;?>
 ></td>
							</tr>
						<?php
$_smarty_tpl->tpl_vars['ruws'] = $foreach_ruws_Sav;
}
?>
					<?php }?>
					
				<?php
$_smarty_tpl->tpl_vars['riws'] = $foreach_riws_Sav;
}
?>
			<?php
$_smarty_tpl->tpl_vars['rows'] = $foreach_rows_Sav;
}
?>
				
		</table>
	</form>
</div>

<div style='margin-top:10px;'>
    <a class="btn btn-primary" id='simpan_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
' >Save</a>
    <a class="btn btn-danger" id='cancel_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
'>Cancel</a>
    <a class="btn btn-info" style='float:right;' id='selectall_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
'>Select All</a>
    
</div>

<?php echo '<script'; ?>
>
	$('#divatas').css({ 'height':getClientHeight()-280 });
	$('#simpan_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').on('click',function(e){
		//loadingna();
		var pecah={};
		$('.cek_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
:checkbox:checked').each(function(i) { 
			pecah[i]=$(this).attr("data");
		});
		$.post(host+'backend/simpandata/user_role_group',{ data:pecah, 'id':'<?php echo (($tmp = @$_smarty_tpl->tpl_vars['id_group']->value)===null||$tmp==='' ? '' : $tmp);?>
', 'editstatus':'add_role' } ,function(r){
			if(r==1){
				$.messager.alert('POIN', "Data Saved", 'info');
			}else{
				$.messager.alert('POIN', "Data Not Saved", 'error');
			}
			
			closeWindow();
			//$('#grid_').datagrid('reload');
		});
		
		//winLoadingClose();
		return false;
	});
	$('#cancel_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').on('click',function(e){
		closeWindow();
	});
	
	$('#selectall_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').on('click',function(e){
		$(".cek_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
").attr('checked', true );
	});
	$('#unselectall_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
').on('click',function(e){
		$(".cek_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
").attr('checked', false );
	});
<?php echo '</script'; ?>
><?php }
}
?>