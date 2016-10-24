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
  
  

if(isset($_GET['add']) && $_GET['add']=='ok')
{
	$ts_3m=implode(" ,",$_POST['chkl']);
	$ts_ten = ucwords(isset($_REQUEST['ts_ten']) ? $_REQUEST['ts_ten'] :"");
	$ts_born = isset($_REQUEST['ts_born']) ? $_REQUEST['ts_born'] :0;
	$ts_gt  = isset($_REQUEST['ts_gt']) ? $_REQUEST['ts_gt'] :"";
	$ts_dt = isset($_REQUEST['ts_dt']) ? $_REQUEST['ts_dt'] :"";
	$ts_hocvan = isset($_REQUEST['ts_hocvan']) ? $_REQUEST['ts_hocvan'] :"";
	$ts_namtn = isset($_REQUEST['ts_namtn']) ? $_REQUEST['ts_namtn'] :0;
	$ts_xep = isset($_REQUEST['ts_xep']) ? $_REQUEST['ts_xep'] :0;
	$ts_add = ucwords(isset($_REQUEST['ts_add']) ? $_REQUEST['ts_add'] :0);
	$ts_phone = isset($_REQUEST['ts_phone']) ? $_REQUEST['ts_phone']:0;
	$ts_email = isset($_REQUEST['ts_email']) ? $_REQUEST['ts_email'] :0;
	$ts_phone = isset($_REQUEST['ts_phone']) ? $_REQUEST['ts_phone']:0;
	$ts_dk = isset($_REQUEST['ts_dk']) ? $_REQUEST['ts_dk'] :0;
	$ts_he = isset($_REQUEST['ts_he']) ? $_REQUEST['ts_he'] :0;
	$ts_nganh = isset($_REQUEST['ts_nganh']) ? $_REQUEST['ts_nganh'] :0;
	$diem_toan = isset($_REQUEST['diem_toan']) ? $_REQUEST['diem_toan']:0;
	$diem_van = isset($_REQUEST['diem_van']) ? $_REQUEST['diem_van']:0;
	$diem_anh = isset($_REQUEST['diem_anh']) ? $_REQUEST['diem_anh']:0;
	$diem_ly = isset($_REQUEST['diem_ly']) ? $_REQUEST['diem_ly']:0;
	$diem_hoa = isset($_REQUEST['diem_hoa']) ? $_REQUEST['diem_hoa']:0;
	$ts_date = date('d-m-Y \l\\ú\\c G:i:s', time());
	
	$sql_add = "INSERT INTO ts ( ts_ten, ts_born, ts_gt, ts_dt, ts_hocvan, ts_namtn, ts_xep,ts_add, ts_phone, ts_email, ts_3m, diem_toan, diem_van, diem_anh, diem_ly, diem_hoa, ts_dk, ts_he, ts_nganh, ts_date) 
VALUES (		 
		'".$ts_ten."', 
		'".$ts_born."',  
		'".$ts_gt."', 
		'".$ts_dt."', 
		'".$ts_hocvan."',
		'".$ts_namtn."',
		'".$ts_xep."',
		'".$ts_add."',
		'".$ts_phone."',
		'".$ts_email."',
		'".$ts_3m."',
		'".$diem_toan."',
		'".$diem_van."',
		'".$diem_anh."',
		'".$diem_ly."',
		'".$diem_hoa."',
		'".$ts_dk."',
		'".$ts_he."',
		'".$ts_nganh."',
		'".$ts_date."')"; 
  //echo $sql_add; exit();
  $res = exec_update($sql_add);
  header('Location:dang-ky-thanh-cong.html');
  //echo $checkbox;
} ?>

<html>
<head>
  <title>Trường cao đẳng xây dựng Nam Định</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="shortcut icon" href="/images/icon.gif">
  <script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
  <link rel="stylesheet" type="text/css" href="/css/DateTimePicker.css" />
  <script type="text/javascript" src="/js/DateTimePicker.js"></script>
  <script>
    function validateForm() {
      var x = document.forms["form_add_sv"]["ts_ten"].value;
      if (x == null || x == "") {
        alert("Bạn cần phải điển đầy đủ thông tin để có thể gửi thông tin đi !");
        return false;
      }
    }
  </script>
  
  
  <?php include('includes/he_nganh_out.php');  ?>
</head>
<body>
<div id="wraper">

  <div class="header" style="text-align:center;">
    <img src="images/header.jpg">
  </div>
  
  <div class="content">
    <h1 style="text-align:center">BIỂU ĐĂNG KÝ TUYỂN SINH ONLINE 2016</h1>
    <h4 style="text-align:center">(Chú ý : Thông tin màu đỏ là bắt buộc)</h4>
    <div class="table">
        <form id="form_add_sv" name="form_add_sv" method="POST" action="them-sinh-vien.html">
      <table class="table_ts" width="960" border="0" align="center" cellpadding="10" cellspacing="1">
          <tr>
            <td width="151"><p style="color:red">Họ và tên</p></td>
            <td width="436">
              <label for="ts_ten"></label>
              <input name="ts_ten" type="text" id="ts_ten" size="70" required />
            </td>
          </tr>
          <tr>
			<td><p style="color:red">Ngày tháng năm sinh</p></td>
						<td>
							<label for="ts_born"></label>
							<input name="ts_born" type="text" id="ts_born" data-field="date" size="70" />
							
						</td>
			</tr>
          <tr>
            <td><p style="color:red">Giới tính</p></td>
            <td>
              <label for="ts_gt"></label>
              <select name="ts_gt" id="ts_gt">
                <option value="0">Chọn giới tính</option>
                <option value="1">Nam</option>
                <option value="2">Nữ</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><p style="color:red">Dân tộc</p></td>
            <td>
              <label for="ts_dt"></label>
              <select name="ts_dt" id="ts_dt">
                <option value="0">Chọn dân tộc</option>
                <?php foreach($result_show_dt as $row_dt) {  ?>
                <option value="<?php echo $row_dt['dt_id']?>"><?php echo ($row_dt['dt_ten']);?></option>
                <?php }?>
              </select>
            </td>
          </tr>
      
          <tr>
            <td>Chọn trình độ học vấn</td>
            <td>
              <label for="ts_hocvan"></label>
              <select name="ts_hocvan" id="ts_hocvan">
                <option value="0" selected="selected">Chọn trình độ học vấn</option>
                <?php foreach($result_show_hv as $row_hv) {  ?>
                <option value="<?php echo $row_hv['hv_id']?>"><?php echo $row_hv['hv_name']?></option>
                <?php }?>
              </select>
            </td>
          </tr>
          <tr>
            <td>Năm tốt nghiệp</td>
            <td><label for="ts_namtn"></label>
              <input name="ts_namtn" type="text" id="ts_namtn" size="70" />
            </td>
          </tr>
          <tr>
            <td>Xếp loại tốt nghiệp</td>
            <td><label for="ts_xep"></label>
              <select name="ts_xep" id="ts_xep">
                <option value="0" selected="selected">Chọn xếp loại tốt nghiệp</option>
                <?php foreach($result_show_xl as $row_xl) {  ?>
                <option value="<?php echo $row_xl['xl_id']?>"><?php echo $row_xl['xl_ten']?></option>
                <?php }?>
              </select>
            </td>
          </tr>
          <tr>
            <td><p style="color:red">Địa chỉ liên hệ </br>Ghi đầy đủ số nhà, xã / phường, </br>quận / huyện, tỉnh / TP</p></td>
            <td>
            <label for="ts_add"></label>
            <textarea name="ts_add" id="ts_add" cols="72" rows="2"></textarea>
            </td>
          </tr>
          <tr>
            <td><p style="color:red">Điện thoại liên hệ</p></td>
            <td><label for="ts_phone"></label>
            <input name="ts_phone" type="text" id="ts_phone" size="70" required  /></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><label for="ts_email"></label>
            <input name="ts_email" type="text" id="ts_email" size="70" /></td>
          </tr>
          <!--
          <?php// include('config/js_check_input.php'); ?>
          <tr>
            <td>Môn đăng ký <p style="color:red">(Chỉ chọn 3 trong 5 môn để đăng ký)</p></td>
            <td><label for="ts_3m"></label>
              <input type="checkbox" name="chkl[]" id="check_t" value="Toán"/>Toán
              
              <input type="checkbox" name="chkl[]" id="check_v" value="Văn"/>Văn
              
              <input type="checkbox" name="chkl[]" id="check_a" value="Anh"/>Anh
              
              <input type="checkbox" name="chkl[]" id="check_l" value="Lý"/>Lý
              
              <input type="checkbox" name="chkl[]" id="check_h" value="Hoá"/>Hoá
              
            </td>
          </tr>
          -->
          <tr>
            <td></td>
            <td>
              <div id="show_t" style="display: none">
                <label><input name="diem_toan" type="text" id="diem_toan" size="20" /> - Nhập điểm toán</label>
                <div style="margin-top:5px;"></div>
              </div>
              <div id="show_v" style="display: none">
                <label><input name="diem_van" type="text" id="diem_van" size="20" /> - Nhập điểm văn</label>
                <div style="margin-top:5px;"></div>
              </div>
              <div id="show_a" style="display: none">
                <label><input name="diem_anh" type="text" id="diem_anh" size="20" /> - Nhập điểm anh</label>
                <div style="margin-top:5px;"></div>
              </div>
              <div id="show_l" style="display: none">
                <label><input name="diem_ly" type="text" id="diem_ly" size="20" /> - Nhập điểm lý</label>
                <div style="margin-top:5px;"></div>
              </div>
              <div id="show_h" style="display: none">
                <label><input name="diem_hoa" type="text" id="diem_hoa" size="20" /> - Nhập điểm hoá</label>
                <div style="margin-top:5px;"></div>
              </div>
            </td>
          </tr>
          
          <tr>
            <td>Phương thức đăng ký xét tuyển</td>
            <td><label for="ts_dk"></label>
              <select name="ts_dk" id="ts_dk">
                <option value="0" selected="selected">Chọn phương thức đăng ký xét tuyển</option>
                <?php foreach($result_show_dk as $row_dk) {  ?>
                <option value="<?php echo $row_dk['dk_id']?>"><?php echo $row_dk['dk_ten']?></option>
                <?php }?>
              </select>
            </td>
          </tr>
          
          
          <tr>
            <td>Hệ đào tạo đăng ký</td>
            <td><label for="ts_he"></label>
              <select name="ts_he" id="ts_he" onChange="showNganh(this);">
                <option value="0" selected="selected">Chọn hệ đào tạo đăng ký</option>
                <?php foreach($result_show_hedt as $row_he) {  ?>
                <option value="<?php echo $row_he['hedt_id']?>"><?php echo $row_he['hedt_ten']?></option>
                <?php }?>
              </select>
            </td>
          </tr>
      
          <tr>
            <td>Ngành học đăng ký</td>
            <td>
              <div id="nganh_out"></div> 
            </td>
          </tr>
      
          <tr>
            <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Gửi thông tin đăng ký" /> 
            <input type="reset" name="button2" id="button2" value="Nhập lại" /></td>
          </tr>
      </table>
    </form>
    			<div id="dtBox"></div>
				<script type="text/javascript">
				
					$(document).ready(function()
					{
						$("#dtBox").DateTimePicker();
					});
				
				</script>	
				
			</div>

    
    
  </div>
  
  <div class="footer" style="text-align:center">
    <img src="images/footer.jpg">
  </div>
  
</div>

<div id="fb-root"></div><script>$(document).ready(function() {var raido = $(".wrap").attr("data-toggle");if(raido==1){$(".mnv-tuvan").css("display","none");$(".x").click(function(){$(".wrap").slideToggle();$(".mnv-tuvan").slideToggle();});$(".mnv-tuvan").click(function(){$(".wrap").slideToggle();$(this).slideToggle();}); }else{$(".wrap").css("display","none");$(".x").click(function(){$(".wrap").slideToggle();$(".mnv-tuvan").slideToggle();});$(".mnv-tuvan").click(function(){$(".wrap").slideToggle();$(this).slideToggle();});}}) (function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5&appId=887080981367835";fjs.parentNode.insertBefore(js, fjs);}(document, "script", "facebook-jssdk"));</script><style>.wrap{position:fixed; width:300px; height: 400px; z-index:9999999; right:0px; bottom:0px;}.x{font-family: arial, helvetica;background: rgba(78,86,101,0.8) none repeat scroll 0 0;font-size:14px;font-weight:bold;color: #fff;display: inline-block;height: 25px;line-height: 25px;position: absolute;right: 0;text-align: center;top: -19px;width: 25px;z-index: 99999999;}.x:hover{cursor: pointer;}.pxem{text-align:left;height:20px;margin-bottom: 0;margin-top: 0;background: #0088b5;width:100%;bottom: 0;display: block;left: 0px;position: absolute;z-index: 999999999;border-left: 1px solid #fff;}.pxem a.axem{color: #fff;font-family: arial,helvetica;font-size: 12px;line-height: 23px;padding-left: 5px;text-decoration: none;}.pxem a.axem:hover{text-decoration: underline;}.alogo{position: absolute;bottom: 0;right: 0px;z-index: 999999999999;width: 40px;height: 20px;display: inline-block;background:#0088b5;padding-right: 0px;padding-left: 5px}.mnv-tuvan{position:fixed;width: 300px;background: #0088b5;z-index:99999999;right:0px;bottom:0px;  border-style: solid solid none;border-width: 1px 1px 0; border-color: #fff}.mnv-tuvan p{color: #fff;font-size: 15px;margin: 0;padding: 0 13px; text-align: left;}.mnv-tuvan p a{color: #fff;font-size: 15px;padding: 5px 0px 7px;margin: 0;display:inline-block;font-family: arial, helvetica;text-decoration: none;}.mnv-tuvan p a:hover{text-decoration: underline;cursor: pointer;}.mnv-tuvan p img {float: right;margin-top: 10px;} </style><div data-toggle="1" class="wrap" style="position:fixed; width:250px; height: 351px; "><span class="x" style="">X</span><div class="fb-page" data-adapt-container-width="true" data-height="351" data-hide-cover="false" data-href="https://www.facebook.com/Trường-Cao-đẳng-Xây-dựng-Nam-Định-232658940424072" data-show-facepile="true" data-show-posts="false" data-small-header="false" data-tabs="messages" data-width="250" style="position:relative; z-index:9999999; right:0px; bottom:21px;border-left: 1px solid #fff;border-top: 1px solid #fff;">
</div>
<p class="pxem" style=""><a class="alogo" style=""><img src="http://pront04.web24h.vn/Uploaded/Members/9558/images/2015/11/logo-web.png" width="27px" height="14px" style="margin-top: 3px"></a></p></div><div class="mnv-tuvan" style="width: 248px;" ><p style=" "><a style="">Bạn cần tư vấn ?</a><img src="http://pront04.web24h.vn/Uploaded/Members/9558/images/2015/11/supprt.png"></p></div>
</body>
</html>