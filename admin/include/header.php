<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Administrator Control Panel</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="/images/icon.gif">
    <link  href="/admin/css/admin.css" rel="stylesheet" type="text/css" />
	<link  href="/admin/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="main">
        <div id="header">
			<div class="banner">
				<div class="banner_img">
					<img src="images/header.jpg" width="723" height="180" alt="" />
				</div>
				<div id="user_column">
                <strong class="h">USER</strong>
                <div class="box"><p style="text-align:left; lign-heigt:100%">
				<p>Xin chào : <strong><?php echo $_SESSION['this_user']?></strong></br>
				Quyền hạn là : <strong><?php echo $_SESSION['this_lever']?></strong></p><!--quy?n h?n member -->
				<a href="index.php?logout=ok"><strong><em>Ðăng xuất</em></strong></a></p></div>
			</div>	
			</div>
			
			
			
			<div>
				<ul id="top-navigation">
					<li><a href="../">Trang chủ</a></li>
					<li><a href="../admin/">Administrator</a></li>
				</ul>
			</div>
        </div>
        <div id="middle">
            <div id="left-column">
                <h3>MAIN</h3>
                <ul class="nav">
                    <li><a href="/admin/danhsach.php">Danh sách đăng ký</a></li>
                    <li><a href="/">Thêm sinh viên mới</a></li>
                    <li><a href="/admin/list_dt.php">Dân tộc</a></li>
					<li><a href="/admin/add_hv.php">Học vấn</a></li>
					<li><a href="/admin/list_hedt.php">Hệ đào tạo</a></li>
					<li><a href="/admin/list_nganh.php">Ngành đào tạo</a></li>
					<li><a href="/admin/add_xl.php">Xếp loại tốt nghiệp</a></li>
                </ul>
			
            </div>