<?php


require("config/config.php");
$he_id = ($_REQUEST["he_id"] <> "") ? trim($_REQUEST["he_id"]) : "";
if ($he_id <> "") {
    $sql_ng = "SELECT * FROM nganh WHERE he_id = '$he_id' ORDER BY nganh_ten";
    $results_ng = exec_select($sql_ng);
    if (count($results_ng) > 0) {
        ?>
            <select name="ts_nganh">
                <option value="0">Chọn ngành đào tạo tương ứng</option>
                <?php foreach ($results_ng as $rs_ng) { ?>
                    <option value="<?php echo $rs_ng["nganh_id"]; ?>"><?php echo $rs_ng["nganh_ten"]; ?></option>
                <?php } ?>
            </select>
        <?php
    }
	else {
	?>
            <select name="ts_nganh">
                <option value="0">Khong co nganh nao trong hedt nay</option>
				</select>
	<?php
	}
}
?>