<?php
	if($row_edit['diem_toan']!=NULL) { ?>
		<div id="show_t" >
			<input name="diem_toan" type="text" id="diem_toan" size="70" value="<?php echo $row_edit['diem_toan']; ?>" /></div>
			<div style="margin-top:5px;"></div>
		</div>
	 <?php } 
	else { ?>
		<div id="show_t"  style="display:none;>
			<input name="diem_toan" type="text" id="diem_toan" size="70"/></div>
			<div style="margin-top:5px;"></div>
		</div>
	<?php } 
	
	if($row_edit['diem_van']!=NULL) { ?>
		<div id="show_v" >
			<input name="diem_van" type="text" id="diem_van" size="70" value="<?php echo $row_edit['diem_van']; ?>" /></div>
			<div style="margin-top:5px;"></div>
		</div>
	 <?php } 
	else { ?>
		<div id="show_v"  style="display:none; >
			<input name="diem_van" type="text" id="diem_van" size="70"/></div>
			<div style="margin-top:5px;"></div>
		</div>
	<?php } 

	if($row_edit['diem_anh']!=NULL) { ?>
		<div id="show_a">
			<input name="diem_anh" type="text" id="diem_anh" size="70" value="<?php echo $row_edit['diem_anh']; ?>" /></div>
			<div style="margin-top:5px;"></div>
		</div>
	 <?php } 
	else { ?>
		<div id="show_a"  style="display:none;>
			<input name="diem_anh" type="text" id="diem_anh" size="70"/></div>
			<div style="margin-top:5px;"></div>
		</div>
	<?php } 

	if($row_edit['diem_ly']!=NULL) { ?>
		<div id="show_l">
			<input name="diem_ly" type="text" id="diem_ly" size="70" value="<?php echo $row_edit['diem_ly']; ?>" /></div>
			<div style="margin-top:5px;"></div>
		</div>
	 <?php } 
	else { ?>
		<div id="show_l"  style="display:none;>
			<input name="diem_ly" type="text" id="diem_ly" size="70"/></div>
			<div style="margin-top:5px;"></div>
		</div>
	<?php } 
	
	if($row_edit['diem_hoa']!=NULL) { ?>
		<div id="show_h">
			<input name="diem_hoa" type="text" id="diem_hoa" size="70" value="<?php echo $row_edit['diem_hoa']; ?>" /></div>
			<div style="margin-top:5px;"></div>
		</div>
	 <?php } 
	else { ?>
		<div id="show_h" style="display:none;">
			<input name="diem_hoa" type="text" id="diem_hoa" size="70"/></div>
			<div style="margin-top:5px;"></div>
		</div>
	<?php } 
	
?>
							
							
							
					