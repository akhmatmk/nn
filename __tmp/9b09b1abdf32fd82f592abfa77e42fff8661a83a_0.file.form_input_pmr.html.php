<?php /* Smarty version 3.1.27, created on 2017-06-14 03:21:01
         compiled from "/home/vagrant/Code/nokia/__application/views/backend/modul/form/form_input_pmr.html" */ ?>
<?php
/*%%SmartyHeaderCode:8570766975940492d670d84_84822445%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b09b1abdf32fd82f592abfa77e42fff8661a83a' => 
    array (
      0 => '/home/vagrant/Code/nokia/__application/views/backend/modul/form/form_input_pmr.html',
      1 => 1497383875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8570766975940492d670d84_84822445',
  'variables' => 
  array (
    'acak' => 0,
    'data' => 0,
    'phase_no' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5940492d6c96a7_60944864',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5940492d6c96a7_60944864')) {
function content_5940492d6c96a7_60944864 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8570766975940492d670d84_84822445';
?>
<div class="row wrapper border-bottom blueaye-bg page-heading">
	<div class="col-lg-10" style='margin-left:20px;'>
		<h3><b>Master Progress</b></h3>
		<ol class="breadcrumb" style='margin-bottom:10px !important;'>
            <li>
                Input PMR
            </li>
            <li class="active">
                <strong>Input PMR</strong>
            </li>
        </ol>		
	</div>
</div>
<div class="wrapper wrapper-content">
	<div class="row">
		<div class="col-lg-12" style='padding-right:0px !important;'>
			
			<div class="ibox">
				<div class="ibox-content" style='padding-bottom:5px !important;'>
					
				<form method="post" id='frmpmr_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
' class="form-horizontal">
					<input type='hidden' name='editstatus' value="<?php $_smarty_tpl->tpl_vars['editstatus'] = new Smarty_Variable('edit', null, 0);?>" /> 
					<input type='hidden' name='id' value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
" /> 
	
					<div class="form-group"><label class="col-sm-2 control-label">Choose Phase name</label>
						<div class="col-sm-4">
							<select class="form-control-mobile" id="phase_no" name='tbl_master_phase_id'>
								<?php echo $_smarty_tpl->tpl_vars['phase_no']->value;?>

							</select>
						</div>
					</div>


					<div id="frm_atf_no" class="form-group"><label for="atf_no" class="col-sm-2 control-label">PMR No</label>
						<div class="col-sm-4">
							<select class="form-control-mobile" id="pmr_no_na" name='pmr_no_na'>
								<option value="">-- Silahkan Pilih -</option>>
							</select>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-4 col-sm-offset-2">
					        <a style="display:none" class="btn btn-primary" id='editPMR' >Edit</a>
					        <a style="display:none" class="btn btn-primary" id='newPMR'>New</a>
					    </div>	
				    </div>

				    
				    <div class="hr-line-dashed"></div>	
				</form>
				
				<form style="display: none;" method="post" id='frmpmr_header' class="form-horizontal">
					<input type="hidden" class="form-control" name="id_master_tracker" id="id_master_tracker">
					<div id="id_frm_header" style="display: none;" class="form-group"><label for="id" class="col-sm-2 control-label">ID</label>
						<div class="col-sm-4">
							<input type="text" readonly="readonly" class="form-control" name="id" id="id">
						</div>
					</div>

					<div class="form-group"><label for="pmr_no" class="col-sm-2 control-label">PMR No</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" readonly="readonly" name="pmr_no" id="pmr_no">
						</div>
					</div>

					<div class="form-group"><label for="pick_up_at" class="col-sm-2 control-label">Pick up at</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="pick_up_at" id="pick_up_at">
						</div>
					</div>

					<div class="form-group"><label for="site_addres_at" class="col-sm-2 control-label">Site Addres At</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="site_addres_at" id="site_addres_at">
						</div>
					</div>

					<div class="form-group"><label for="region_at" class="col-sm-2 control-label">Region At</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="region_at" id="region_at">
						</div>
					</div>

					<div class="form-group"><label for="company" class="col-sm-2 control-label">Company</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="company" id="company">
						</div>
					</div>

					<div class="form-group"><label for="pic1" class="col-sm-2 control-label">Pic 1</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="pic1" id="pic1">
						</div>
					</div>

					<div class="form-group"><label for="delivery_to" class="col-sm-2 control-label">Delivery 1</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="delivery_to" id="delivery_to">
						</div>
					</div>

					<div class="form-group"><label for="site_addres_to" class="col-sm-2 control-label">Site Addres to</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="site_addres_to" id="site_addres_to">
						</div>
					</div>

					<div class="form-group"><label for="site_addres_to" class="col-sm-2 control-label">Site Addres to</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="site_addres_to" id="site_addres_to">
						</div>
					</div>

					<div class="form-group"><label for="region_to" class="col-sm-2 control-label">Site Addres to</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="region_to" id="region_to">
						</div>
					</div>

					<div class="form-group"><label for="tranporter" class="col-sm-2 control-label">Site Addres to</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="tranporter" id="tranporter">
						</div>
					</div>

					<div class="form-group"><label for="pic2" class="col-sm-2 control-label">PIC 2</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="pic2" id="pic2">
						</div>
					</div>

					<div class="form-group"><label for="hardware_ne" class="col-sm-2 control-label">HARDWARE NE</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="hardware_ne" id="hardware_ne">
						</div>
					</div>

					<div class="form-group"><label for="pick_up_request_date" class="col-sm-2 control-label">Pick up request date</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="pick_up_request_date" id="pick_up_request_date">
						</div>
					</div>

					<div class="form-group"><label for="pick_up_request_time" class="col-sm-2 control-label">Pick up request time</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="pick_up_request_time" id="pick_up_request_time">
						</div>
					</div>

					<div class="form-group"><label for="remark_delivery" class="col-sm-2 control-label">Remark delivery</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="remark_delivery" id="remark_delivery">
						</div>
					</div>

					<div class="form-group"><label for="phase_code" class="col-sm-2 control-label">Phase Code</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="phase_code" id="phase_code">
						</div>
					</div>

					<div class="form-group"><label for="phase_name" class="col-sm-2 control-label">Phase Name</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="phase_name" id="phase_name">
						</div>
					</div>

					<div class="form-group"><label for="spare_3" class="col-sm-2 control-label">Spare 3</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="spare_3" id="spare_3">
						</div>
					</div>

					<div class="form-group"><label for="spare_4" class="col-sm-2 control-label">Spare 4</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="spare_4" id="spare_4">
						</div>
					</div>

					<div class="form-group"><label for="spare_5" class="col-sm-2 control-label">Spare 5</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="spare_5" id="spare_5">
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-4 col-sm-offset-4">
							<input type="hidden" id="method_send"  name="method_send" value="POST">
					        <a class="btn btn-primary" id='saveNext' for="save">Save and Next</a>
					    </div>
					</div>
				</form>

				<?php echo $_smarty_tpl->getSubTemplate ("backend/modul/form/form-master-material-pmr.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

					
					<div style="display: none;" class="loader"></div>
				</div>
			</div>
			
		</div>
	</div>
</div>

<?php echo '<script'; ?>
>
	$("#phase_no").change(function() {

		var selectedOption = $(this).find("option:selected").text();

		var data = {
                'phase_id'	: selectedOption,
            };
		$.ajax({ 
            url: '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
get/pmrNo',
            data: data,
            type: 'get',
            dataType: 'json',
            success: function(data)
            {
            	$("#pmr_no_na").html("");
            	$("#pmr_no_na").append("<option value='null'>--silahkan pilih--</option>");
            	var no = 1;
            	$.each(data, function(index, element) {
            		$("#pmr_no_na").append("<option value='" +element.id+ "-" +element.boqno+ "'>"+element.boqno+"</option>");
            		no ++;
        		});

            	var today = new Date();
				var dd = today.getDate();
				var mm = today.getMonth()+1; 

				var yyyy = today.getFullYear();
				if(dd<10){
				    dd='0'+dd;
				} 
				if(mm<10){
				    mm='0'+mm;
				} 
				var today = dd+''+mm+''+yyyy;

            	var getPMRNO = "PMR"+selectedOption+""+today;
            	
            	$("#newPMR").show();
            	$("#pmr_no").val(getPMRNO);
            	$("#method_send").val('POST');
            	
            }
        });
	});

	$("#newPMR").click(function() {
		$("#frmpmr_header").show();

	});

	$("#newPMR").click(function() {
		$("#frmpmr_header").show();

	});

	$( "#saveNext").click(function() {
		var method_send = $("#method_send").val();
		if(method_send == 'POST') var url = 'add';
		else var url = 'edit';
		$.ajax({
   			type: "POST",
   			url: '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
get/pmr-'+url,
   			dataType: 'json',
   			data: $('#frmpmr_header').serialize(),
   			success: function(data){
   				if(data != false)
   				{
   					$("#id").val(data);
   					$("#method_send").val("PUT");
   					$("#frmpmr_<?php echo $_smarty_tpl->tpl_vars['acak']->value;?>
").hide();
   					$("#frmpmr_header").hide();
   					$("#id_progress_pmr").val(data);
   					$("#pmr_content").show();
   				} 
   				else 
   				{
   					alert('ada yang salah dalam proses save data');
   				}
      			
   			}
		});
	});

	function setValue(array = [])
	{
		for (var key in array) {
    		$("#"+key).val(array[key]);
		}
	}

	$.fn.datebox.defaults.formatter = function(date){
		var y = date.getFullYear();
		var m = date.getMonth()+1;
		var d = date.getDate();
		return y+'-'+(m<10?('0'+m):m)+'-'+(d<10?('0'+d):d);
	};
	$.fn.datebox.defaults.parser = function(s){
		if (!s) return new Date();
		var ss = s.split('-');
		var y = parseInt(ss[0],10);
		var m = parseInt(ss[1],10);
		var d = parseInt(ss[2],10);
		if (!isNaN(y) && !isNaN(m) && !isNaN(d)){
			return new Date(y,m-1,d);
		} else {
			return new Date();
		}
	};

<?php echo '</script'; ?>
>

<link rel="stylesheet" type="text/css" href="https://raw.githubusercontent.com/fareco/css-loader/gh-pages/css/index.css">
<style>
    .loader {
    border: 16px solid #f3f3f3; /* Light grey */
    border-top: 16px solid #3498db; /* Blue */
    border-radius: 50%;
    width: 120px;
    height: 120px;
    animation: spin 2s linear infinite;
    position: fixed;
    top: 50%;
    left: 50%;
    background: rgba(0,0,0,.8);
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style><?php }
}
?>