<?php 
if (!isset($_SESSION))
{session_start();
}
if(!isset($_SESSION['this_user']) || !isset($_SESSION['this_lever']) || ($_SESSION['this_lever'] != 'admin')){
	header('Location:/admin/index.php');}
include('../config/config.php');
if(isset($_GET['add']) && $_GET['add']='ok'){
$dt_ten=isset($_REQUEST['dt_ten']) ? ($_REQUEST['dt_ten']):"";
$dt_order=isset($_REQUEST['dt_order']) ? ($_REQUEST['dt_order']):"";

$sql_add="INSERT INTO dantoc(dt_ten, dt_order) VALUE (
'".$dt_ten."', '".$dt_order."')";
//echo $sql_add;exit();
$res=exec_update($sql_add);
header('Location:/admin/list_dt.php');
}?>

<?php include('include/header.php');?>

            <div id="center-column">
                <div class="top-bar">
                    <h1>Thêm 1 dân tộc mới</h1>
                </div>
                <div class="table">
                    <form id="form_add_dt" name="form_add_dt" method="POST" action="add_dt.php?add=ok">
						<table class="table_men" width="765" border="0" align="center" cellpadding="10" cellspacing="1">
							<tr>
							  <td width="151">Tên dân tộc</td>
							  <td width="436"><label for="dt_ten"></label>
							  <input name="dt_ten" type="text" id="dt_ten" size="70" /></td>
							</tr>
		
							<tr>
							  <td>Thứ tự hiển thị</td>
							  <td><label for="dt_order"></label>
								<select name="dt_order" id="dt_order">
								<?php for ($stt=0; $stt<=70; $stt++)
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