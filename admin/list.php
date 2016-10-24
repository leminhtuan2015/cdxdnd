<?php 
if (!isset($_SESSION))
{session_start();
}
if(!isset($_SESSION['this_user']) || !isset($_SESSION['this_lever']) || ($_SESSION['this_lever'] != 'admin')){
	header('Location:/admin/index.php');}
	include('../config/config.php');
 $sql="select * from ts ORDER BY ts_id ASC";
$result=exec_select($sql);
 
//$sql_cate = "select * from category";
//$result_cate = exec_select($sql_cate);

?>

<html>
<head>
	<title>Trường cao đẳng xây dựng Nam Định</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link  href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wraper">

	<div class="header" style="text-align:center;">
		<img src="../images/header.jpg">
	</div>
	
	<div class="content">
		<h1 style="text-align:center">DANH SÁCH THÍ SINH ĐĂNG KÝ</h1>
	
		 <div class="table">
                    <table class="listing" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                            <th>Họ tên</th>
                            <th>Ngày sinh</th>
                            <th>Giới tính</th>
                            <th>Dân tộc</th>
                            <th>Trình độ học vấn</th>
                            <th>Trình độ chuyên môn</th>
                            <th>Nơi tốt nghiệp</th>
							<th>Năm tốt nghiệp</th>
							<th>Xếp loại tốt nghiệp</th>
							<th>Địa chỉ</th>
							<th>Điện thoại</th>
							<th>Email</th>
							<th>Hệ đào tạo đăng ký</th>
							<th>Ngành học đăng ký</th>
							<th>Sửa</th>
                        </tr>
						<?php
						foreach($result as $row)
						{
						?>
                        <tr>
                            <td><?php echo $row['ts_ten']; ?></td>
                            <td><?php echo $row['ts_born']; ?></td>
                            <td>
								<?php if( $row['ts_gt']==0) {?><p>Chưa chọn giới tính</p>
								<?php } else if( $row['ts_gt']==1) {?> <p>Nam</p>
								<?php } else {?><p>Nữ</p>
								<?php }?>
							</td>
                            <td>
								<?php $dtc_id= $row['ts_dt']; ?>
								<?php $dtc_sql = "select * from `dantoc` where dt_id={$dtc_id}"; ?>
								<?php $row_dtc =select_one($dtc_sql);  
									  echo $row_dtc['dt_ten'];?>
							</td>
                            <td>
								<?php $nhv_id= $row['ts_hocvan']; ?>
								<?php $hv_sql = "select * from `hv` where hv_id={$nhv_id}"; ?>
								<?php $row_hv =select_one($hv_sql);  
									  echo $row_hv['hv_name'];?>
							</td>
                            <td><?php echo $row['ts_trinhdo']; ?></td>
                            <td><?php echo $row['ts_noitn']; ?></td>
							<td><?php echo $row['ts_namtn']; ?></td>
							<td>
								<?php $nxl_id= $row['ts_xep']; ?>
								<?php $xl_sql = "select * from `xl` where xl_id={$nxl_id}"; ?>
								<?php $row_xl =select_one($xl_sql);  
									  echo $row_xl['xl_ten'];?>
							</td>
							<td><?php echo $row['ts_add']; ?></td>
							<td><?php echo $row['ts_phone']; ?></td>
							<td><?php echo $row['ts_email']; ?></td>
							<td>
								<?php $id= $row['ts_he']; ?>
								<?php $sql = "select * from `hedt` where hedt_id={$id}"; ?>
								<?php $row1 =select_one($sql);  
									  echo $row1['hedt_ten'];?>
							</td>
							<td>
								<?php $nid= $row['ts_nganh']; ?>
								<?php $nsql = "select * from `nganh` where nganh_id={$nid}"; ?>
								<?php $nrow =select_one($nsql);  
									  echo $nrow['nganh_ten'];?>
							</td>
							<td><a href="edit_ts.php?ts_id=<?php echo $row['ts_id']; ?>"><img src="../images/edit.png" width="32" height="32" alt="Sửa bài" /></a></td>
						</tr>
						<?php } ?>
						
                        </table>
						
						
                </div>
			
	<div class="footer" style="text-align:center">
		<img src="../images/footer.jpg">
	</div>
	
</div>
</body>
</html>