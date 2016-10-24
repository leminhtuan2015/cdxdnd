<?php 
	if (!isset($_SESSION)) {
		session_start();
	}
	if(!isset($_SESSION['this_user']) || !isset($_SESSION['this_lever']) || ($_SESSION['this_lever'] != 'admin')){
		header('Location:http://localhost/tscdxd/admin/index.php');}

	include('../config/config.php');
?>