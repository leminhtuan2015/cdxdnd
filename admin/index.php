<?php include('../config/config.php');
$sql="select * from user";
$result_user = exec_select($sql);
  session_start();
	if (isset($_GET['logout'])  && $_GET['logout']=='ok'){
	unset($_SESSION['this_user']);
	unset($_SESSION['this_lever']);
	} //end if login
	if(isset($_GET['login']) && $_GET['login']=='login'){	
	$user_username = isset($_REQUEST['user_username']) ? $_REQUEST['user_username'] :"";
	$user_password = isset($_REQUEST['user_password']) ? $_REQUEST['user_password'] :"";
		foreach($result_user as $res){
		if($user_username==$res['user_username'] && $user_password==$res['user_password'] && $res['user_quyenhan'] =='admin'){
			$_SESSION['this_user'] = $res['user_username'];
			$_SESSION['this_lever'] = $res['user_quyenhan'];
			header('Location:control_panel.php');
			}
		}
	
	} //end if login
	if(isset($_SESSION['this_user']) && isset($_SESSION['this_lever']) && ($_SESSION['this_lever'] == 'admin')){
	header('Location:control_panel.php');
	}
	else {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Administrator Control Panel</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link  href="/admin/css/admin.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="main">
        <div id="header">
			<div class="banner">
				<div class="banner_img">
					<img src="images/header.jpg" width="723" height="180" alt="" />
				</div>
				
			</div>
			<div>
				<ul id="top-navigation">
					<li><a href="/">Trang chủ</a></li>
					<li><a href="/admin/">Administrator</a></li>
				</ul>
			</div>
        </div>
        <div id="middle">	
			<div id="log">	
				<form id="formlogin" name="formlogin" method="POST" action="index.php?login=login">
				  <table width="765" border="0" align="center" cellpadding="10" cellspacing="10">
					<tr>
					  <td colspan="2" align="center"><h2>ĐĂNG NHẬP HỆ THỐNG</h2></td>
				    </tr>
					<tr>
					  <td width="251" align="right">Tên đăng nhập :</td>
					  <td><span id="sprytextfield1">
						<label for="user_username"></label>
						<input name="user_username" type="text" id="user_username" size="50" /><br />
					 </span></td>
					</tr>
					<tr>
					  <td align="right">Mật khẩu :</td>
					  <td><span id="sprytextfield2">
						<label for="user_password"></label>
						<input name="user_password" type="password" id="user_password" size="50" /><br />
					  </span></td>
					</tr>
					<tr>
					  <td>&nbsp;</td>
					  <td><input type="submit" name="button" id="button" value="Đăng nhập" />
					  <input type="reset" name="button2" id="button2" value="Nhập lại" /></td>
					</tr>
					<tr>
					  <td>&nbsp;</td>
					  <td><a href="dang_ky.php">Đăng ký thành viên mới</a></td>
					</tr>
				  </table>
				</form>

</div>
        </div>
    </div>
</body>
</html>
<?php }?>