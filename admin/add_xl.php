<?php 
if (!isset($_SESSION))
{session_start();
}
if(!isset($_SESSION['this_user']) || !isset($_SESSION['this_lever']) || ($_SESSION['this_lever'] != 'admin')){
	header('Location:admin/index.php');}
include('../config/config.php');
if(isset($_GET['add']) && $_GET['add']='ok'){
$xl_ten=isset($_REQUEST['xl_ten']) ? ($_REQUEST['xl_ten']):"";

$sql_add="INSERT INTO xl(xl_ten) VALUE (
'".$xl_ten."')";
//echo $sql_add;exit();
$res=exec_update($sql_add);
header('Location:/admin/');
}?>


<?php include('include/header.php');?>

            <div id="center-column">
                <div class="top-bar">
                    <h1>Thêm xếp loại tốt nghiệp mới</h1>
                </div>
                <div class="table">
                    <form id="form_add_xl" name="form_add_xl" method="POST" action="add_xl.php?add=ok">
						<table class="table_men" width="765" border="0" align="center" cellpadding="10" cellspacing="1">
							<tr>
							  <td width="151">Tên xếp loại</td>
							  <td width="436"><label for="xl_ten"></label>
							  <input name="xl_ten" type="text" id="xl_ten" size="70" /></td>
							</tr>
		
							<tr>
							  <td>Thứ tự hiển thị</td>
							  <td><label for="xl_order"></label>
								<select name="xl_order" id="xl_order">
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