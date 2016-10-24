<?php 
include('include/session_config.php');
	
	$ts_id = isset($_REQUEST['ts_id']) ? $_REQUEST['ts_id'] : 0;
	if($ts_id<1){exit;}
	$sql_view = "select * from ts where ts_id=".$ts_id;
	$row_view =select_one($sql_view); 
	//echo $ts_id;
?>

<?php include('include/header.php');?>

            <div id="center-column">
			
				<div class="top-bar">
                    <h1 style="text-align:center">THÔNG TIN CHI TIẾT THÍ SINH</h1>
                </div>
				
                <div class="table">
					<table class="table_veiw" width="765" border="0" align="center" cellpadding="10" cellspacing="1">
					<tr>
						<td width="151">Họ và tên</td>
						<td width="436"><?php echo $row_view['ts_ten']; ?></td>
					</tr>
					<tr>
						<td>Ngày tháng năm sinh</td>
						<td><?php echo $row_view['ts_born']; ?></td>
					</tr>
					<tr>
						<td>Giới tính</td>
						<td>
							<?php if( $row_view['ts_gt']==0) {?><p>Chưa chọn giới tính</p>
							<?php } else if( $row_view['ts_gt']==1) {?> <p>Nam</p>
							<?php } else {?><p>Nữ</p>
							<?php }?>
						</td>
					</tr>
					<tr>
						<td>Dân tộc</td>
						<td>					
							<?php $dt_id= $row_view['ts_dt']; ?>
							<?php $dt_sql = "select * from `dantoc` where dt_id={$dt_id}"; ?>
							<?php $row_dt =select_one($dt_sql);  
								  echo $row_dt['dt_ten'];?>
						</td>
					</tr>
			
					<tr>
						<td>Chọn trình độ học vấn</td>
						<td>
							<?php $hv_id= $row_view['ts_hocvan']; ?>
							<?php $hv_sql = "select * from `hv` where hv_id={$hv_id}"; ?>
							<?php $row_hv =select_one($hv_sql);  
								  echo $row_hv['hv_name'];?></td>
					</tr>
					<tr>
						<td>Xếp loại tốt nghiệp</td>
						<td>
							<?php $xl_id= $row_view['ts_xep']; ?>
							<?php $sql_xl = "select * from `xl` where xl_id={$xl_id}"; ?>
							<?php $row_xl =select_one($sql_xl);  
								  echo $row_xl['xl_ten'];?>
						</td>
					</tr>
					<tr>
						<td>Địa chỉ liên hệ</td>
						<td><?php echo $row_view['ts_add']; ?></td>
					</tr>
					
					<tr>
						<td>Điện thoại</td>
						<td><?php echo $row_view['ts_phone']; ?></td>
					</tr>
					
					<tr>
						<td>Email</td>
						<td><?php echo $row_view['ts_email']; ?></td>
					</tr>
					
					<tr>
						<td>Môn đăng ký xét tuyển</td>
						<td><?php echo $row_view['ts_3m']; ?></td>
					</tr>
					
					<tr>
						<td>Điểm của các môn đăng ký xét tuyển</td>
						<td>
							<?php 
								 if($row_view['diem_toan']!=NULL) 
									{
										echo "Toán : ".$row_view['diem_toan']; 
									}
								if($row_view['diem_van']!=NULL) 
									{
										echo ", Văn : ".$row_view['diem_van'];  
									}
								if($row_view['diem_anh']!=NULL) 
									{
										echo ", Anh : ".$row_view['diem_anh'];  
									}
								if($row_view['diem_ly']!=NULL) 
									{
										echo ", Lý : ".$row_view['diem_ly'];  
									}
								if($row_view['diem_hoa']!=NULL) 
									{
										echo ", Hoá : ".$row_view['diem_hoa'];
									} 
								 ?>
						</td>
					</tr>
					
					<tr>
						<td>Phương thức đăng ký xét tuyển</td>
						<td>
							<?php $dk_id= $row_view['ts_dk']; ?>
							<?php $sql_dk = "select * from `dk` where dk_id={$dk_id}"; ?>
							<?php $row_dk =select_one($sql_dk);  
								  echo $row_dk['dk_ten'];?>
						</td>
					</tr>
					
					<tr>
						<td>Hệ đào tạo đăng ký</td>
						<td>
							<?php $he_id= $row_view['ts_he']; ?>
							<?php $sql_he = "select * from `hedt` where hedt_id={$he_id}"; ?>
							<?php $row_he =select_one($sql_he);  
								  echo $row_he['hedt_ten'];?>
						</td>
					</tr>
			
					<tr>
						<td>Ngành học đăng ký</td>
						<td>
							<?php $nhanh_id= $row_view['ts_nganh']; ?>
							<?php $sql_nganh = "select * from `nganh` where nganh_id={$nhanh_id}"; ?>
							<?php $row_nganh =select_one($sql_nganh);  
								  echo $row_nganh['nganh_ten'];?>
						</td>
					</tr>
					
					<tr>
						<td>Ngày đăng ký</td>
						<td><?php echo $row_view['ts_date']; ?></td>
					</tr>
			
					<tr>
						<td colspan="2" align="center"><a style="text-decoration:none;" href="edit_ts.php?ts_id=<?php echo $row_view['ts_id']; ?>"><input type="button" name="button" id="button" value="Sửa thông tin của thí sinh này" /></a> 
						<a style="text-decoration:none;" href="../admin/danhsach.php"><input type="reset" name="button2" id="button2" value="Trở lại danh sách thí sinh" /></a></td>
					</tr>
			</table>
                </div>
            </div>
        </div>
        <?php include('include/footer.php');?>     