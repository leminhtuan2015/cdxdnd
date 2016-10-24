<?php 
if (!isset($_SESSION))
{session_start();
}
if(!isset($_SESSION['this_user']) || !isset($_SESSION['this_lever']) || ($_SESSION['this_lever'] != 'admin')){
	header('Location:/admin/index.php');}
	include('../config/config.php');
	
	$ts_id = isset($_REQUEST['ts_id']) ? $_REQUEST['ts_id'] : 0;
	if($ts_id<1){exit;}
	$sql_edit = "select * from ts where ts_id=".$ts_id;
	$row_edit = select_one($sql_edit); 
	//echo $ts_id;
	$sql_dt = "select * from dantoc";
	$result_dt = exec_select($sql_dt); 
	
	$sql_hedt = "select * from hedt";
	$result_hedt = exec_select($sql_hedt); 
	
	$sql_nganh = "select * from nganh";
	$result_nganh = exec_select($sql_nganh); 
	
	$sql_hv = "select * from hv";
	$result_hv = exec_select($sql_hv);
	
	$sql_dk = "select * from dk";
	$result_dk = exec_select($sql_dk);
	
	$sql_xl = "select * from xl";
	$result_xl = exec_select($sql_xl); 

if(isset($_REQUEST['update']) && $_REQUEST['update']=='ok'){
	$ts_3m=implode(" ,",$_POST['chkl']);
	$ts_ten = ucwords(isset($_REQUEST['ts_ten']) ? $_REQUEST['ts_ten'] :"");
	$ts_born = isset($_REQUEST['ts_born']) ? $_REQUEST['ts_born'] :0;
	$ts_gt  = isset($_REQUEST['ts_gt']) ? $_REQUEST['ts_gt'] :"";
	$ts_dt = isset($_REQUEST['ts_dt']) ? $_REQUEST['ts_dt'] :"";
	$ts_hocvan = isset($_REQUEST['ts_hocvan']) ? $_REQUEST['ts_hocvan'] :"";
	$ts_namtn = isset($_REQUEST['ts_namtn']) ? $_REQUEST['ts_namtn'] :0;
	$ts_xep = isset($_REQUEST['ts_xep']) ? $_REQUEST['ts_xep'] :0;
	$ts_add = ucwords(isset($_REQUEST['ts_add']) ? $_REQUEST['ts_add'] :0);
	$ts_phone = isset($_REQUEST['ts_phone']) ? $_REQUEST['ts_phone'] :0;
	$ts_email = isset($_REQUEST['ts_email']) ? $_REQUEST['ts_email'] :0;
	$ts_dk = isset($_REQUEST['ts_dk']) ? $_REQUEST['ts_dk'] :0;
	$ts_he = isset($_REQUEST['ts_he']) ? $_REQUEST['ts_he'] :0;
	$ts_nganh = isset($_REQUEST['ts_nganh']) ? $_REQUEST['ts_nganh'] :0;
	$diem_toan = isset($_REQUEST['diem_toan']) ? $_REQUEST['diem_toan']:0;
	$diem_van = isset($_REQUEST['diem_van']) ? $_REQUEST['diem_van']:0;
	$diem_anh = isset($_REQUEST['diem_anh']) ? $_REQUEST['diem_anh']:0;
	$diem_ly = isset($_REQUEST['diem_ly']) ? $_REQUEST['diem_ly']:0;
	$diem_hoa = isset($_REQUEST['diem_hoa']) ? $_REQUEST['diem_hoa']:0;

	$sql_update = "UPDATE ts SET 
	ts_3m='".$ts_3m."',
	ts_ten='".$ts_ten."',
	ts_born='".$ts_born."',
	ts_gt='".$ts_gt."',
	ts_dt='".$ts_dt."',
	ts_hocvan='".$ts_hocvan."',
	ts_namtn='".$ts_namtn."',
	ts_xep='".$ts_xep."',
	ts_add='".$ts_add."',
	ts_email='".$ts_email."',
	ts_dk='".$ts_dk."',
	ts_he='".$ts_he."',
	ts_nganh='".$ts_nganh."',
	diem_toan='".$diem_toan."',
	diem_van='".$diem_van."',
	diem_anh='".$diem_anh."',
	diem_ly='".$diem_ly."',
	diem_hoa='".$diem_hoa."'
	WHERE ts_id=".$ts_id;
	//echo $sql_update; exit();
	$res = exec_update($sql_update);
	header('Location:./');
} ?>

<html>
<head>
	<title>Trường cao đẳng xây dựng Nam Định</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
</head>
<body>
<div id="wraper">

	<div class="header" style="text-align:center;">
		<img src="images/header.jpg">
	</div>
	
	<div class="content">
		<h1 style="text-align:center">SỬA THÔNG TIN THÍ SINH ĐĂNG KÝ</h1>
		<h4 style="text-align:center">(Chú ý : Thông tin màu đỏ là bắt buộc)</h4>
		
		<div class="table">
        <form id="form_update_sv" name="form_update_sv" method="POST" action="edit_ts.php?update=ok">
			<table class="table_ts" width="960" border="0" align="center" cellpadding="10" cellspacing="1">
					<tr>
						<td width="151"><p style="color:red">Họ và tên</p></td>
						<td width="436">
							<label for="ts_ten"></label>
							<input name="ts_ten" type="text" id="ts_ten" size="70" value="<?php echo $row_edit['ts_ten']; ?>" />
						</td>
					</tr>
					<tr>
						<td><p style="color:red">Ngày tháng năm sinh</p></td>
						<td>
							<label for="ts_born"></label>
							<input name="ts_born" type="text" id="ts_born" value="<?php echo $row_edit['ts_born']; ?>" size="70" />
						</td>
					</tr>
					<tr>
						<td><p style="color:red">Giới tính</p></td>
						<td>
							<label for="ts_gt"></label>
							<select name="ts_gt" id="ts_gt">
								<option value="1" <?php if (!(strcmp("1", $row_edit['ts_gt']))) {echo "selected=\"selected\"";} ?>>Nam</option>
								<option value="2" <?php if (!(strcmp("2", $row_edit['ts_gt']))) {echo "selected=\"selected\"";} ?>>Nữ</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><p style="color:red">Dân tộc</p></td>
						<td>
							<label for="ts_dt"></label>
							<select name="ts_dt" id="ts_dt">
							<?php foreach($result_dt as $row_dt) {  ?>
							<option value="<?php echo $row_dt['dt_id']?>" <?php if(!(strcmp($row_dt['dt_id'], $row_edit['ts_dt']))) {echo "selected=\"selected\"";} ?>><?php echo $row_dt['dt_ten']?></option>
							<?php }?>
							</select>
						</td>
					</tr>
			
					<tr>
						<td>Chọn trình độ học vấn</td>
						<td>
							<label for="ts_hocvan"></label>
							<select name="ts_hocvan" id="ts_hocvan">
							<?php foreach($result_hv as $row_hv) {  ?>
							<option value="<?php echo $row_hv['hv_id']?>" <?php if(!(strcmp($row_hv['hv_id'], $row_edit['ts_hocvan']))) {echo "selected=\"selected\"";} ?>><?php echo $row_hv['hv_name']?></option>
							<?php }?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Năm tốt nghiệp</td>
						<td><label for="ts_namtn"></label>
							<input name="ts_namtn" type="text" id="ts_namtn" value="<?php echo $row_edit['ts_namtn']; ?>" size="70" />
						</td>
					</tr>
					<tr>
						<td>Xếp loại tốt nghiệp</td>
						<td><label for="ts_xep"></label>
							<select name="ts_xep" id="ts_xep">
							<?php foreach($result_xl as $row_xl) {  ?>
							<option value="<?php echo $row_xl['xl_id']?>" <?php if(!(strcmp($row_xl['xl_id'], $row_edit['ts_xep']))) {echo "selected=\"selected\"";} ?>><?php echo $row_xl['xl_ten']?></option>
							<?php }?>
							</select>
						</td>
					</tr>
					<tr>
					  <td><p style="color:red">Địa chỉ liên hệ </br>Ghi đầy đủ số nhà, xã / phường, </br>quận / huyện, tỉnh / TP</p></td>
					  <td>
						<label for="ts_add"></label>
						<textarea name="ts_add" id="ts_add" cols="70" rows="2"><?php echo $row_edit['ts_add']; ?></textarea>
						</td>
					</tr>
					
					<tr>
						<td>Điện thoại</td>
						<td><label for="ts_phone"></label>
						<input name="ts_phone" type="text" id="ts_phone" value="<?php echo $row_edit['ts_phone']; ?>" size="70" /></td>
					</tr>
					
					<tr>
						<td>Email</td>
						<td><label for="ts_email"></label>
						<input name="ts_email" type="text" id="ts_email" value="<?php echo $row_edit['ts_email']; ?>" size="70" /></td>
					</tr>
					<?php include('../config/js_check_input.php'); ?>
					<tr>
						<td>Phương thức đăng ký xét tuyển</td>
						<td><label for="ts_3m"></label>
							<?php include('ijax_3m.php');?>
						</td>
					</tr>
					
					<tr>
						<td></td>
						<td><?php include('ijax_d3m.php');?></td>
					</tr>
					
					<tr>
						<td>Phương thức đăng ký xét tuyển</td>
						<td><label for="ts_dk"></label>
							<select name="ts_dk" id="ts_dk">
								<?php foreach($result_dk as $row_dk) {  ?>
								<option value="<?php echo $row_dk['dk_id']?>" <?php if(!(strcmp($row_dk['dk_id'], $row_edit['ts_dk']))) {echo "selected=\"selected\"";} ?>><?php echo $row_dk['dk_ten']?></option>
								<?php }?>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>Hệ đào tạo đăng ký</td>
						<td><label for="ts_he"></label>
							<select name="ts_he" id="ts_he">
								<?php foreach($result_hedt as $row_hedt) {  ?>
								<option value="<?php echo $row_hedt['hedt_id']?>" <?php if(!(strcmp($row_hedt['hedt_id'], $row_edit['ts_he']))) {echo "selected=\"selected\"";} ?>><?php echo $row_hedt['hedt_ten']?></option>
								<?php }?>
							</select>
						</td>
					</tr>
			
					<tr>
						<td>Ngành học đăng ký</td>
						<td><label for="ts_nganh"></label>
							<select name="ts_nganh" id="ts_nganh">
								<option value="0">Chọn ngành học</option>
								<?php foreach($result_nganh as $row_nganh) {  ?>
								<option value="<?php echo $row_nganh['nganh_id']?>" <?php if(!(strcmp($row_nganh['nganh_id'], $row_edit['ts_nganh']))) {echo "selected=\"selected\"";} ?>><?php echo $row_nganh['nganh_ten']?></option>
								<?php }?>
							</select>
						</td>
					</tr>
			
					<tr>
						<td colspan="2" align="center"><input type="submit" name="button" id="button" value="Lưu lại thông tin" /> 
						<input type="reset" name="button2" id="button2" value="Huỷ" /></td>
						<input name="ts_id" type="hidden" id="ts_id" value="<?php echo $row_edit['ts_id']; ?>" />
					</tr>
			</table>
			<input type="hidden" name="MM_update" value="form_edit_menu" />
		</form>
		
		
		
	</div>
	
	<div class="footer" style="text-align:center">
		<img src="../images/footer.jpg">
	</div>
	
</div>
</body>
</html>