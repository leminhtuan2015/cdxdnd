<?php 
include('include/session_config.php');
$sql = "select * from hedt";
$result = exec_select($sql);
?>
<?php include('include/header.php');?>
            <div id="center-column">
                <div class="top-bar">
                    <a href="add_hedt.php" class="button">THÊM HỆ ĐÀO TẠO MỚI</a>
                    <h1>Danh sách hệ đào tạo</h1>
                </div>
				<div class="table">
					<form id="form1" name="form1" method="post" action="">
					  <table width="765" height="144" border="1" align="center" cellpadding="10" cellspacing="5">
						<tr>
						  <td align="center">ID</td>
						  <td>Mã hệ đào tạo</td>
						  <td>Tên hệ đào tạo</td>
						  <td align="center">Sửa</td>
						  <td align="center">Xoá</td>
						</tr>
						<?php foreach($result as $res_cat){ ?>
						  <tr>
							<td align="center"><?php echo $res_cat['hedt_id']; ?></td>
							<td><?php echo $res_cat['hedt_ma']; ?></td>
							<td><?php echo $res_cat['hedt_ten']; ?></td>
							<td align="center"><a href="edit_hedt.php?hedt_id=<?php echo $res_cat['hedt_id']; ?>">
							<img src="../images/edit.png" width="25" height="25" alt="sửa chuyên mục" longdesc="edit_hedt.php" /></a></td>
							<td align="center"><a href="delete_hedt.php?hedt_id=<?php echo $res_cat['hedt_id']; ?>"><img src="images/minus white.png" width="25" height="25" alt="Xoá " /></a></td>
						  </tr>
						  <?php }?>
					  </table>
					</form>
				</div>
            </div>
        </div>
        <?php include('include/footer.php');?>   