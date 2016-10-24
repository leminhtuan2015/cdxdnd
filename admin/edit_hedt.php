<?php
include('include/session_config.php');
$hedt_id = isset($_REQUEST['hedt_id']) ? $_REQUEST['hedt_id'] :0;
if($hedt_id<1){exit;}
$sql_edit = "select * from hedt where hedt_id=".$hedt_id;
//echo $sql_edit;exit();
$result_cat =  select_one($sql_edit);
if(isset($_REQUEST['update']) && $_REQUEST['update']=='ok'){
	$hedt_id = isset($_REQUEST['hedt_id']) ? $_REQUEST['hedt_id'] :0;
	$hedt_ten = isset($_REQUEST['hedt_ten']) ? $_REQUEST['hedt_ten'] :"";
	$hedt_ma = isset($_REQUEST['hedt_ma']) ? $_REQUEST['hedt_ma'] :"";
	
	
	$sql_update = "UPDATE hedt SET 
	hedt_ten='".$hedt_ten."', hedt_ma='".$hedt_ma."'  WHERE hedt_id=".$hedt_id;
	//echo $sql_update; exit();
	$res = exec_update($sql_update);
	header('Location:/admin/list_hedt.php');
}
?>

<?php include('include/header.php');?>
            <div id="center-column">
                <div class="top-bar">
                    <h1>Sửa hệ đào tạo : </h1>
                </div>
				<div class="table">
						<form class="table_men" id="form_edit_hedt" name="form_edit_hedt" method="POST" action="edit_hedt.php?update=ok">
						  <table width="800" border="0" align="center" cellpadding="10" cellspacing="10">
							<tr>
							  <td width="251">Tên hệ điều hành</td>
							  <td width="436"><label for="hedt_ten"></label>
							  <input name="hedt_ten" type="text" id="hedt_ten" value="<?php echo $result_cat['hedt_ten']; ?>" size="50" /></td>
							</tr>
							
							<tr>
							  <td width="251">Mã</td>
							  <td width="436"><label for="hedt_ma"></label>
							  <input name="hedt_ma" type="text" id="hedt_ma" value="<?php echo $result_cat['hedt_ma']; ?>" size="50" /></td>
							</tr>
							
							<tr>
							  <td>ID của hệ ( không thể sửa )</td>
							  <td><label for="hedt_id"></label>
							  <input name="hedt_id" type="text" id="hedt_id" value="<?php echo $result_cat['hedt_id']; ?>" readonly="readonly" size="50" /></td>
							</tr>
							
							<tr>
							  <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Lưu lại" />
							  <input name="cancel" type="submit" id="cancel" onclick="MM_goToURL('parent','list_hedt.php');return document.MM_returnValue" value="Huỷ" /></td>
							</tr>
						  </table>
						</form>
				</div>
            </div>
        </div>
        <?php include('include/footer.php');?>     