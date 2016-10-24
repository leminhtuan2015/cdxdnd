<?php 
include('include/session_config.php');

	$sql="select * from ts ORDER BY ts_id ASC";
	$result=exec_select($sql);
 

?>

<html>
<head>
	<title>Trường cao đẳng xây dựng Nam Định</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="../images/icon.gif">
	<link  href="css/style.css" rel="stylesheet" type="text/css" />
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        var tableToExcel = (function () {
            var uri = 'data:application/vnd.ms-excel;base64,'
                , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
                , base64 = function (s) { return window.btoa(unescape(encodeURIComponent(s))) }
                , format = function (s, c) { return s.replace(/{(\w+)}/g, function (m, p) { return c[p]; }) }
            return function (table, name) {
                if (!table.nodeType) table = document.getElementById(table)
                var ctx = { worksheet: name || 'Worksheet', table: table.innerHTML }
                window.location.href = uri + base64(format(template, ctx))
            }
        })()
    </script>
</head>
<body>
<div id="wraper">

	<div class="header" style="text-align:center;">
		<img src="../images/header.jpg">
	</div>
	
	<div class="content">
		<h1 style="text-align:center">DANH SÁCH THÍ SINH ĐĂNG KÝ</h1>
	
		 <div class="table">
                    <table id="tbl_excel" class="listing" align="center" cellpadding="0" cellspacing="0">
                        <tr>
							<th><p class="ds">stt</p></th>
                            <th><p class="ds">Họ tên</p></th>
                            <th><p class="ds">Ngày sinh</p></th>
							<th><p class="ds">Địa chỉ</p></th>
							<th><p class="ds">Điện thoại</p></th>
							<th><p class="ds">Hệ đào tạo đăng ký</p></th>
							<th><p class="ds">Ngành đào tạo đăng ký</p></th>
							<th><p class="ds">Phương thức đăng ký xét tuyển</p></th>
							<th><p class="ds">3 môn đk xét tuyển</p></th>
							<th><p class="ds">Điểm 3 môn xét tuyển</p></th>
							<th><p class="ds">Chi tiết</p></th>
							<th><p class="ds">Sửa</p></th>
                        </tr>
						<?php
						foreach($result as $row)
						{
						?>
                        <tr>
                            <td><p class="ds"><?php echo $row['ts_id']; ?></p></td>
                            <td><p class="ds"><?php echo $row['ts_ten']; ?></p></td>
                            <td><p class="ds"><?php echo $row['ts_born']; ?></p></td>
                            <td><p class="ds"><?php echo $row['ts_add']; ?></p></td>
							<td><p class="ds"><?php echo $row['ts_phone']; ?></p></td>
							
							
                            <td>
								<p class="ds">
								<?php 	$id= $row['ts_he'];
										$sql = "select * from `hedt` where hedt_id={$id}";
										$row_he =select_one($sql);  
										echo $row_he['hedt_ten'];?>
								</p>
							</td>
							<td>
								<p class="ds">
								<?php 	$ng_id= $row['ts_nganh']; 
										$sql_ng = "select * from `nganh` where nganh_id={$ng_id}"; 
										$row_ng =select_one($sql_ng);  
										echo $row_ng['nganh_ten'];?>
								</p>
							</td>
							<td>
								<p class="ds">
								<?php 	$dk_id= $row['ts_dk'];
										$sql_dk = "select * from `dk` where dk_id={$dk_id}";
										$row_dk =select_one($sql_dk);  
										echo $row_dk['dk_ten'];?>
								</p>
							</td>
							<td><p class="ds"><?php echo $row['ts_3m']; ?></p></td>
							<td><p class="ds">
							
							<?php 
								 if(($row['diem_toan']!=NULL)&&($row['diem_toan']!=0)) 
									{
										echo "Toán : ".$row['diem_toan']; 
									}
								if(($row['diem_van']!=NULL)&&($row['diem_van']!=0)) 
									{	
										if($row['diem_toan']!=NULL){
											echo ", Văn : ".$row['diem_van']; 
										} 
										else {
											echo "Văn : ".$row['diem_van']; 
										}
									}
								if(($row['diem_anh']!=NULL)&&($row['diem_anh']!=0)) 
									{
										if(($row['diem_toan']!=NULL) || ($row['diem_van']!=NULL)){
											echo ", Anh : ".$row['diem_anh']; 
										} 
										else {
											echo "Anh : ".$row['diem_anh']; 
										}
										  
									}
								if(($row['diem_ly']!=NULL)&&($row['diem_ly']!=0)) 
									{	
										if(($row['diem_toan']!=NULL) || ($row['diem_van']!=NULL) || ($row['diem_anh']!=NULL)){
											echo ", Lý : ".$row['diem_ly'];  
										}
										else {
											echo "Lý : ".$row['diem_ly']; 
										}
									}
								if(($row['diem_hoa']!=NULL)&&($row['diem_hoa']!=0)) 
									{
										if(($row['diem_toan']!=NULL) || ($row['diem_van']!=NULL) || ($row['diem_anh']!=NULL) || ($row['diem_ly']!=NULL)){
											echo ", Hoá : ".$row['diem_hoa'];
										}
										else {
											echo "Hoá : ".$row['diem_hoa'];
										}
									} 
								 ?>
							
							</p></td>
							<td><a href="view.php?ts_id=<?php echo $row['ts_id'];?>"><img src="images/view.png" width="16" height="16" alt="Chi tiết" /></a></td>
							<td><a href="edit_ts.php?ts_id=<?php echo $row['ts_id'];?>"><img src="../images/edit.png" width="16" height="16" alt="Sửa thí sinh" /></a></td>
						</tr>
						<?php }?>
                        </table>
				<input type="button" onclick="tableToExcel('tbl_excel')" value="Xuất sang Excel">		
				<a href="../admin/"><p style="text-align:right;">Trở về trang chủ</p></a>	
                </div>
			
	<div class="footer" style="text-align:center">
		<img src="../images/footer.jpg">
	</div>
	
</div>
</body>
</html>