<?php
	if($row_edit['diem_toan']!=NULL) { ?>
		<input type="checkbox" name="chkl[]" id="check_t" value="Toán" checked="checked"/>Toán
	 <?php } 
	else { ?>
		<input type="checkbox" name="chkl[]" id="check_t" value="Toán" />Toán
	<?php } 
	
	if($row_edit['diem_van']!=NULL) { ?>
		<input type="checkbox" name="chkl[]" id="check_v" value="Văn" checked="checked"/>Văn
	 <?php } 
	else { ?>
		<input type="checkbox" name="chkl[]" id="check_v" value="Văn" />Văn
	<?php } 

	if($row_edit['diem_anh']!=NULL) { ?>
		<input type="checkbox" name="chkl[]" id="check_a" value="Anh" checked="checked"/>Anh
	 <?php } 
	else { ?>
		<input type="checkbox" name="chkl[]" id="check_a" value="Anh" />Anh
	<?php } 

	if($row_edit['diem_ly']!=NULL) { ?>
		<input type="checkbox" name="chkl[]" id="check_l" value="Lý" checked="checked"/>Lý
	 <?php } 
	else { ?>
		<input type="checkbox" name="chkl[]" id="check_l" value="Lý" />Lý
	<?php } 
	
	if($row_edit['diem_hoa']!=NULL) { ?>
		<input type="checkbox" name="chkl[]" id="check_h" value="Hoá" checked="checked"/>Hoá
	 <?php } 
	else { ?>
		<input type="checkbox" name="chkl[]" id="check_h" value="Hoá" />Hoá
	<?php } 
	
?>
							
							
							