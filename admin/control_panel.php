<?php 
if (!isset($_SESSION))
{session_start();
}
if(!isset($_SESSION['this_user']) || !isset($_SESSION['this_lever']) || ($_SESSION['this_lever'] != 'admin')){
	header('Location:/admin/index.php');}
	include('../config/config.php');
	/* $sql="select * from menu";
	$result = exec_select($sql); */
?>

<?php include('include/header.php');?>

            <div id="center-column">
                <div class="table">
					<form id="form_about" name="form_about" method="post" action="">
					  <table width="765" border="0" align="center" cellpadding="0" cellspacing="10">
						<tr>
						  <td colspan="2" align="center"><h2>TRƯỜNG CAO ĐẲNG XÂY DỰNG NAM ĐỊNH</h2>
						  <h3>TRANG QUẢN TRỊ NỘI DUNG ĐĂNG KÝ TUYỂN SINH ONLINE 2016</h3></td>
						</tr>
						<tr>
						  <td width="185">&nbsp;</td>
						  <td><p>Chịu trách nhiệm : Phạm Thị Vui</p>
						  <p>Bộ môn : Tin học - khoa cơ bản</p>
						  <p>Email : vuicdxd@gmail.com</p>
						  <p>Điện thoại : 0916893266</p></td>
						</tr>
					  </table>
					</form>
                </div>
            </div>
        </div>
        <?php include('include/footer.php');?>     