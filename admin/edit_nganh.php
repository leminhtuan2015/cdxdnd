<?php
include('include/session_config.php');

$nganh_id = isset($_REQUEST['nganh_id']) ? $_REQUEST['nganh_id'] :0;
//echo $nganh_id;
if($nganh_id<1){exit;}
$sql_edit = "select * from nganh where nganh_id=".$nganh_id;
//echo $sql_edit;exit();
$result_nganh =  select_one($sql_edit);

$sql_hedt = "select * from hedt";
$result_hedt = exec_select($sql_hedt);

if(isset($_REQUEST['update']) && $_REQUEST['update']=='ok'){
	$nganh_id = isset($_REQUEST['nganh_id']) ? $_REQUEST['nganh_id'] :0;
	$hedt_id = isset($_REQUEST['hedt_id']) ? $_REQUEST['hedt_id'] :0;
	$nganh_ten = isset($_REQUEST['nganh_ten']) ? $_REQUEST['nganh_ten'] :"";
	$nganh_ma = isset($_REQUEST['nganh_ma']) ? $_REQUEST['nganh_ma'] :"";
	
	
	$sql_update = "UPDATE nganh SET 
	nganh_ten='".$nganh_ten."', nganh_ma='".$nganh_ma."', he_id='".$hedt_id."'  WHERE nganh_id=".$nganh_id;
	//echo $sql_update; exit();
	$res = exec_update($sql_update);
	header('Location:/admin/list_nganh.php');
}
?>

<?php include('include/header.php');?>
            <div id="center-column">
                <div class="top-bar">
                    <h1>Sửa ngành đào tạo : </h1>
                </div>
				<div class="table">
						<form class="table_men" id="form_edit_nganh" name="form_edit_nganh" method="POST" action="edit_nganh.php?update=ok">
						  <table width="800" border="0" align="center" cellpadding="10" cellspacing="10">
							
							<tr>
							  <td>ID của hệ ( không thể sửa )</td>
							  <td><label for="nganh_id"></label>
							  <input name="nganh_id" type="text" id="nganh_id" value="<?php echo $result_nganh['nganh_id']; ?>" readonly="readonly" size="50" /></td>
							</tr>
							
							<tr>
							  <td width="251">Tên hệ đào tạo:</td>
							  <td width="436"><label for="nganh_ten"></label>
							  <input name="nganh_ten" type="text" id="nganh_ten" value="<?php echo $result_nganh['nganh_ten']; ?>" size="50" /></td>
							</tr>
							
							<tr>
							  <td width="251">Mã</td>
							  <td width="436"><label for="nganh_ma"></label>
							  <input name="nganh_ma" type="text" id="nganh_ma" value="<?php echo $result_nganh['nganh_ma']; ?>" size="50" /></td>
							</tr>
							<tr>
							  <td>Hệ đào tạo</td>
								  <td>	<label for="hedt_id"></label>
										<select name="hedt_id" id="hedt_id" >
											<?php foreach($result_hedt as $row_he) {  ?>
											<option value="<?php echo $row_he['hedt_id']?>"<?php if (!(strcmp($row_he['hedt_id'], $result_nganh['he_id']))) {echo "selected=\"selected\"";} ?>><?php echo $row_he['hedt_ten']?></option>
											<?php }?>
										</select>
								  </td>
							</tr>
							
							
							<tr>
							  <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Lưu lại" />
							  <input name="cancel" type="submit" id="cancel" onclick="MM_goToURL('parent','list_nganh.php');return document.MM_returnValue" value="Huỷ" /></td>
							</tr>
						  </table>
						</form>
				</div>
            </div>
        </div>
        <?php include('include/footer.php');?>    