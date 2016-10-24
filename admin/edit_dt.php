<?php
include('include/session_config.php');
$dt_id = isset($_REQUEST['dt_id']) ? $_REQUEST['dt_id'] :0;
if($dt_id<1){exit;}
$sql_edit = "select * from dantoc where dt_id=".$dt_id;
//echo $sql_edit;exit();
$result_cat =  select_one($sql_edit);
if(isset($_REQUEST['update']) && $_REQUEST['update']=='ok'){
	$dt_id = isset($_REQUEST['dt_id']) ? $_REQUEST['dt_id'] :0;
	$dt_order = isset($_REQUEST['dt_order']) ? $_REQUEST['dt_order'] :0;
	$dt_ten = isset($_REQUEST['dt_ten']) ? $_REQUEST['dt_ten'] :"";
	
	
	$sql_update = "UPDATE dantoc SET 
	dt_ten='".$dt_ten."', dt_order='".$dt_order."'  WHERE dt_id=".$dt_id;
	//echo $sql_update; exit();
	$res = exec_update($sql_update);
	header('Location:/admin/list_dt.php');
}
?>

<?php include('include/header.php');?>
            <div id="center-column">
                <div class="top-bar">
                    <h1>Sửa dân tộc : </h1>
                </div>
				<div class="table">
						<form class="table_men" id="form_edit_dt" name="form_edit_dt" method="POST" action="edit_dt.php?update=ok">
						  <table width="800" border="0" align="center" cellpadding="10" cellspacing="10">
							<tr>
							  <td width="251">Tên hệ dân tộc</td>
							  <td width="436"><label for="dt_ten"></label>
							  <input name="dt_ten" type="text" id="dt_ten" value="<?php echo $result_cat['dt_ten']; ?>" size="50" /></td>
							</tr>
							<tr>
							  <td>ID của dân tộc ( không thể sửa )</td>
							  <td><label for="dt_id"></label>
							  <input name="dt_id" type="text" id="dt_id" value="<?php echo $result_cat['dt_id']; ?>" readonly="readonly" size="50" /></td>
							</tr>
							<tr>
							  <td>Vị trí (order)</td>
							  <td><label for="dt_order"></label>
							  <input name="dt_order" type="text" id="dt_order" value="<?php echo $result_cat['dt_order']; ?>"size="50" /></td>
							</tr>
							<tr>
							  <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Lưu lại" />
							  <input name="cancel" type="submit" id="cancel" onclick="MM_goToURL('parent','list_dt.php');return document.MM_returnValue" value="Huỷ" /></td>
							</tr>
						  </table>
						</form>
				</div>
            </div>
        </div>
         <?php include('include/footer.php');?>  