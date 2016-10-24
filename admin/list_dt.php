<?php 
include('include/session_config.php');
$sql = "select * from dantoc";
$result = exec_select($sql);
?>
<?php include('include/header.php');?>
            <div id="center-column">
                <div class="top-bar">
                    <a href="add_dt.php" class="button">THÊM 1 DÂN TỘC MỚI</a>
                    <h1>Danh sách dân tộc</h1>
                </div>
				<div class="table">
					<form id="form1" name="form1" method="post" action="">
					  <table width="765" height="144" border="1" align="center" cellpadding="10" cellspacing="5">
						<tr>
						  <td align="center">STT</td>
						  <td align="center">Thứ tự</td>
						  <td align="center">Dân tộc</td>
						  <td align="center">Sửa</td>
						  <td align="center">Xoá</td>
						</tr>
						<?php foreach($result as $res_cat){ ?>
						  <tr>
							<td align="center"><?php echo $res_cat['dt_id']; ?></td>
							<td align="center"><?php echo $res_cat['dt_order']; ?></td>
							<td><?php echo $res_cat['dt_ten']; ?></td>
							<td align="center"><a href="edit_dt.php?dt_id=<?php echo $res_cat['dt_id']; ?>">
							<img src="../images/edit.png" width="25" height="25" alt="sửa chuyên mục" longdesc="edit_dt.php" /></a></td>
							<td align="center"><a href="delete_dt.php?dt_id=<?php echo $res_cat['dt_id']; ?>"><img src="images/minus white.png" width="25" height="25" alt="Xoá " /></a></td>
						  </tr>
						<?php }?>
					  </table>
					</form>
				</div>
            </div>
        </div>
        <?php include('include/footer.php');?>   