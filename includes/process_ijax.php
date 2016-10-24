
<?php
	extract($_REQUEST);

	include('./config/config.php');

	$ng=mysql_query("select * from nganh where he_id='$ts_he'");
	$row=mysql_num_rows($ng);

	if($row<=0){
?>
	<option>Khong co nganh nao trong HDT nay</option>
<?php	
	}else{ ?>
	<option value="">Chon nganh tuong ung</option>
<?php	
	while($full=mysql_fetch_array($ng)){
?>
	<option value="<?php echo $full['nganh_id']?>"><?php echo $full['nganh_ten']?></option>
<?php }}?>