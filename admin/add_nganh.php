<?php 
if (!isset($_SESSION))
{session_start();
}
if(!isset($_SESSION['this_user']) || !isset($_SESSION['this_lever']) || ($_SESSION['this_lever'] != 'admin')){
	header('Location:/admin/index.php');}
include('../config/config.php');

$sql_hedt = "select * from hedt";
$result_show_hedt = exec_select($sql_hedt);

if(isset($_GET['add']) && $_GET['add']='ok'){
$nganh_ma=isset($_REQUEST['nganh_ma']) ? ($_REQUEST['nganh_ma']):"";
$nganh_ten=isset($_REQUEST['nganh_ten']) ? ($_REQUEST['nganh_ten']):"";
$he_id=isset($_REQUEST['he_id']) ? ($_REQUEST['he_id']):"";
$nganh_order=isset($_REQUEST['nganh_order']) ? ($_REQUEST['nganh_order']):"";

$sql_add="INSERT INTO nganh(nganh_ma, nganh_ten,he_id,nganh_order) VALUE (
'".$nganh_ma."','".$nganh_ten."','".$he_id."','".$nganh_order."')";
//echo $sql_add;exit();
$res=exec_update($sql_add);
header('Location:/admin/list_nganh.php');
}?>

<?php include('include/header.php');?>

            <div id="center-column">
                <div class="top-bar">
                    <h1>Thêm ngành đào tạo</h1>
                </div>
                <div class="table">
                    <form id="form_add_nganh" name="form_add_nganh" method="POST" action="add_nganh.php?add=ok">
						<table class="table_men" width="765" border="0" align="center" cellpadding="10" cellspacing="1">
							<tr>
							  <td width="151">Tên ngành đào tạo</td>
							  <td width="436"><label for="nganh_ten"></label>
							  <input name="nganh_ten" type="text" id="nganh_ten" size="70" /></td>
							</tr>
							
							<tr>
							  <td width="151">Mã ngành đào tạo</td>
							  <td width="436"><label for="nganh_ma"></label>
							  <input name="nganh_ma" type="text" id="nganh_ma" size="30" /></td>
							</tr>
							
							<tr>
								<td>Hệ đào tạo đăng ký</td>
								<td><label for="he_id"></label>
									<select name="he_id" id="he_id">
										<option value="0" selected="selected">Chọn hệ đào tạo đăng ký</option>
										<?php foreach($result_show_hedt as $row_he) {  ?>
										<option value="<?php echo $row_he['hedt_id']?>"><?php echo $row_he['hedt_ten']?></option>
										<?php }?>
									</select>
								</td>
							</tr>
							
							<tr>
							  <td>Thứ tự hiển thị</td>
							  <td><label for="nganh_order"></label>
								<select name="nganh_order" id="nganh_order">
								<?php for ($stt=-30; $stt<=30; $stt++)
								{
									if ($stt==0){
										echo '<option value="0" selected="selected">0</option>';}
									else
									{
										echo '<option value="'.$stt.'">'.$stt.'</option>';}
								}
								?>
							  </select></td>
							</tr>
							
							<tr>
							  <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Lưu lại" /> 
							  <input type="reset" name="button2" id="button2" value="Nhập lại" /></td>
							</tr>
						</table>
					</form>
					</div>
            </div>
        </div>
      <?php include('include/footer.php');?>     