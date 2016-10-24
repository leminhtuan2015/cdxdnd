<?php 
if (!isset($_SESSION))
{session_start();
}
if(!isset($_SESSION['this_user']) || !isset($_SESSION['this_lever']) || ($_SESSION['this_lever'] != 'admin')){
	header('Location:/admin/index.php');}
include('../config/config.php');
if(isset($_GET['add']) && $_GET['add']='ok'){
$hedt_ten=isset($_REQUEST['hedt_ten']) ? ($_REQUEST['hedt_ten']):"";
$hedt_ma=isset($_REQUEST['hedt_ma']) ? ($_REQUEST['hedt_ma']):"";

$sql_add="INSERT INTO hedt(hedt_ma, hedt_ten) VALUE (
'".$hedt_ma."',
'".$hedt_ten."')";
//echo $sql_add;exit();
$res=exec_update($sql_add);
header('Location:/admin/list_hedt.php');
}?>


<?php include('include/header.php');?>

            <div id="center-column">
                <div class="top-bar">
                    <h1>Thêm hệ đào tạo</h1>
                </div>
                <div class="table">
                    <form id="form_add_hedt" name="form_add_hedt" method="POST" action="add_hedt.php?add=ok">
						<table class="table_men" width="765" border="0" align="center" cellpadding="10" cellspacing="1">
							<tr>
							  <td width="151">Tên hệ đào tạo</td>
							  <td width="436"><label for="hedt_ten"></label>
							  <input name="hedt_ten" type="text" id="hedt_ten" size="70" /></td>
							</tr>
							
							<tr>
							  <td width="151">Mã hệ đào tạo</td>
							  <td width="436"><label for="hedt_ma"></label>
							  <input name="hedt_ma" type="text" id="hedt_ma" size="30" /></td>
							</tr>
		
							<tr>
							  <td>Thứ tự hiển thị</td>
							  <td><label for="hedt_order"></label>
								<select name="hedt_order" id="hedt_order">
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