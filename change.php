<?php 
include('config/config.php');
$sql_dt = "select * from dantoc";
$result_show_dt = exec_select($sql_dt);

$sql_hedt = "select * from hedt";
$result_show_hedt = exec_select($sql_hedt);

$sql_dk = "select * from dk";
$result_show_dk = exec_select($sql_dk);

$sql_nganh = "select * from nganh";
$result_show_nganh = exec_select($sql_nganh);

$sql_hv = "select * from hv ORDER BY hv_order ASC";
$result_show_hv = exec_select($sql_hv);

$sql_xl = "select * from xl ORDER BY xl_order ASC";
$result_show_xl = exec_select($sql_xl);

function updateDb($datas, $table, $id){
	if(!$datas) return;
	foreach($datas as $item){
		$sql = "";
		$i=0;
		foreach($item as $key=>$value){
			if(is_string($value)){
				if($i==0){
					$sql .= "`$key`='".utf8_decode($value)."'";
				}else{
					$sql .= ",`$key`='".utf8_decode($value)."'";
				}
				$i++;
			}
		}
		$sql = "update `$table` set " . $sql . " where `$id`={$item[$id]};";
		exec_update($sql);
	}
}
updateDb($result_show_dt, 'dantoc', 'dt_id');
updateDb($result_show_hedt, 'dk', 'dk_id');
updateDb($result_show_hedt, 'hedt', 'hedt_id');
updateDb($result_show_hedt, 'hv', 'hv_id');
updateDb($result_show_hedt, 'nganh', 'nganh_id');
updateDb($result_show_hedt, 'ts', 'ts_id');
updateDb($result_show_hedt, 'user', 'user_id');
updateDb($result_show_hedt, 'xl', 'xl_id');
