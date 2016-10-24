<?php 
include('include/session_config.php');
$sql = "select * from nganh";
$result = exec_select($sql);
?>
<?php include('include/header.php');?>
            <div id="center-column">
                <div class="top-bar">
                    <a href="add_nganh.php" class="button">THÊM NGÀNH ĐÀO TẠO MỚI</a>
                    <h1>Danh sách ngành đào tạo</h1>
                </div>
				<div class="table">
					<form id="form_nganh" name="form_nganh" method="post" action="">
					  <table width="765" height="144" border="1" align="center" cellpadding="10" cellspacing="5">
						<tr>
						  <td align="center">ID</td>
						  <td>Tên ngành đào tạo</td>
						  <td>Mã ngành đào tạo</td>
						  <td>Hệ đào tạo</td>
						  <td align="center">Sửa</td>
						  <td align="center">Xoá</td>
						</tr>
						<?php foreach($result as $res_nganh){ ?>
						  <tr>
							<td align="center"><?php echo $res_nganh['nganh_id']; ?></td>
							<td><?php echo $res_nganh['nganh_ten']; ?></td>
							<td><?php echo $res_nganh['nganh_ma']; ?></td>
							<td>
								<?php
								$hedt_id= $res_nganh['he_id'];
								$sql_he = "select * from `hedt` where hedt_id={$hedt_id}";
								$row_he =select_one($sql_he);  
								echo $row_he['hedt_ten'];?>
							</td>
							<td align="center"><a href="edit_nganh.php?nganh_id=<?php echo $res_nganh['nganh_id']; ?>">
							<img src="../images/edit.png" width="25" height="25" alt="sửa chuyên mục" longdesc="edit_hedt.php" /></a></td>
							<td align="center"><a href="delete_nganh.php?nganh_id=<?php echo $res_nganh['nganh_id']; ?>"><img src="images/minus white.png" width="25" height="25" alt="Xoá " /></a></td>
						  </tr>
						  <?php }?>
					  </table>
					</form>
				</div>
            </div>
        </div>
        <?php include('include/footer.php');?>   