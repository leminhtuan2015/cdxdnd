<?php 
if (!isset($_SESSION))
{session_start();
}
if(!isset($_SESSION['this_user']) || !isset($_SESSION['this_lever']) || ($_SESSION['this_lever'] != 'admin')){
	header('Location:/admin/index.php');}
include('../config/config.php');
if(isset($_GET['add']) && $_GET['add']='ok'){
$dk_ten=isset($_REQUEST['dk_ten']) ? ($_REQUEST['dk_ten']):"";

$sql_add="INSERT INTO dk(dk_ten) VALUE (
'".$dk_ten."')";
//echo $sql_add;exit();
$res=exec_update($sql_add);
header('Location:/admin/');
}?>


<?php include('include/header.php');?>

            <div id="center-column">
                <div class="top-bar">
                    <h1>Thêm phương thức đk xét tuyển</h1>
                </div>
                <div class="table">
                    <form id="form_add_dk" name="form_add_dk" method="POST" action="add_dk.php?add=ok">
						<table class="table_men" width="765" border="0" align="center" cellpadding="10" cellspacing="1">
							<tr>
							  <td width="151">Phương thức đk xét tuyển</td>
							  <td width="436"><label for="dk_ten"></label>
							  <input name="dk_ten" type="text" id="dk_ten" size="70" /></td>
							</tr>
		
							<tr>
							  <td>Thứ tự hiển thị</td>
							  <td><label for="dk_order"></label>
								<select name="dk_order" id="dk_order">
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
        <div id="footer">
          <p>Trường cao đẳng xây dựng Nam Định</p>
        </div>
    </div>
</body>
</html>