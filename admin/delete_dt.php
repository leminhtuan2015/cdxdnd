<?php 
include('include/session_config.php');

$dt_id = isset($_REQUEST['dt_id']) ? $_REQUEST['dt_id'] :0;
	if(isset($_REQUEST['dongy']) && $_REQUEST['dongy']=='ok' && $dt_id >0){
		$sql="delete from dantoc where dt_id=".$dt_id;
		$res = exec_update($sql);
		header('Location:../admin/list_dt.php');
	}
include('include/header.php');?>

            <div id="center-column">
                <div class="table">
                <form id="delete_dt" name="delete_dt" method="post" action="delete_dt.php?dt_id=<?php echo $dt_id; ?>&dongy=ok">
					  <table width="600" border="0" align="center" cellpadding="10" cellspacing="2">
						<tr>
						  <td align="center"><img src="../upload/images/warning.png" width="48" height="48" alt="warning" />
						  <h2 style="text-decoration:blink"><strong>Bạn có chắc chắn muốn xoá dân tộc này !</strong></h2></td>
						</tr>
						<tr>
						  <td align="center">
						  <input type="submit" name="button" id="button" value="Đồng ý" />
						  <input type="button" name="button2" id="button2" onclick="MM_goToURL('parent','/..');return document.MM_returnValue"value="Huỷ" /></td>
						</tr>
					  </table>
				</form>
                </div>
            </div>
        </div>
        <?php include('include/footer.php');?>   