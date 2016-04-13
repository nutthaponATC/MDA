<?php 
session_start(); 
include('config.php');
include('popup.php');

if ($_SESSION['type'] != 3) {
	echo "<script language='javascript'>";
	echo "location='index.php';";
	echo "</script>";
}
?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="image/icon.ico">
	<link rel="stylesheet" href="style.css">
	<title>เว็บไซต์ระบบฐานข้อมูลวัสดุครุภัณฑ์โรงเรียนอรรถวิทย์</title>
</head>
<body id="add">
	<div style='width:100%; height:180px;'>
		<div style='width:1000px; heigth:100%; margin:auto; padding-top:1%;'>
			<div style='width:15%; heigth:100%; float:left;'>
				<img src='image/logo_ats.png' style="margin-top:20px;" width='90%'>
			</div>
			<div style='width:83%; heigth:100%; float:left; padding-left:2%;'>
				<h1 style="margin-top:55px;">เว็บไซต์ระบบฐานข้อมูลวัสดุครุภัณฑ์โรงเรียนอรรถวิทย์
				</h1>
			</div>
		</div>
	</div>

	<div style='width:100%; height:60px; background:#293352;'>
		<div style='width:1000px; heigth:100%; margin:auto; margin-top:17px; padding-top:12px;'>
			<div id="sMenu" style="width:90px; heigth:100%; float:left;">
				<a href="main_finance.php">
					<div><img src="image/home.png" width="38"></div>
				</a>
			</div>
			<div class="dropdown" style="width:160px; heigth:100%; float:left;">
				<a href="search_mda.php">
					<div class="dropbtn">ค้นหา</div>
				</a>
				<div class="dropdown-content">
					<a href="search_mda.php">ครุภัณฑ์</a>
					<a href="show_lent.php">ประวัติการยืม</a>
					<a href="show_return.php">ประวัติการคืน</a>
					<a href="#">การส่งซ้อม</a>
				</div>
			</div>			
			<a href="add_mda.php">
				<div id="sMenu" style="width:160px; heigth:100%; float:left;">
					<div>เพิ่มข้อมูล</div>
				</div>
			</a>
			<div class="dropdown" style="width:160px; heigth:100%; float:left;">
				<div class="dropbtn">รายงาน</div>
				<div class="dropdown-content">
					<a href="#popupReport">รายงานทรัพย์สิน</a>
					<a href="barcode.php">barcode</a>
					<a href="#popupReportLent">รายงานการยืม</a>
					<a href="#popupReportReturn">รายงานการคืน</a>
					<a href="#">รายงานค่าเสื่อมราคา</a>
					<a href="#">รายงานประวัติทรัพย์สิน</a>
					<a href="#">ประวัติการส่งซ้อม</a>
				</div>
			</div>
			<div class="dropdown" style="width:160px; heigth:100%; float:left;">
				<div class="dropbtn">การยืมคืน</div>
				<div class="dropdown-content">
					<a href="lent_mda.php">ยืมครุภัณฑ์</a>
					<a href="return_mda.php">คืนครุภัณฑ์</a>
				</div>
			</div>
			<a href="">
				<div id="sMenu" style="width:140px; heigth:100%; float:left;">
					<div>การอนุมัติ</div>
				</div>
			</a>
			<a href="">
				<div id="sMenu" style="width:50px; heigth:105%; float:left;">
					<div><img src="image/pass.png" width="36"></div>
				</div>
			</a>
		</div>
	</div>

	<div style='width:100%; height:80px; margin-top:-29px; background:#ffffff;'>
		<div style='width:1000px; height:100%; margin:auto; background:#ffffff;'>
			<h2>เพิ่มข้อมูลวัสดุครุภัณฑ์</h2>
		</div>
	</div>

	<form name="form1" action="add_mda_process.php" method="POST" enctype="multipart/form-data">
	<div style='width:100%; height:750px; background:#d8b5fc;'> 
		<div style="width:1000px; height:100%; background:#e1c4ff; margin:auto; box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 6px 20px 0 rgba(0, 0, 0, 0.14);">
			<div id="inAdd">
			</div>
			<div id="inAdd">
				เลขทะเบียน 
				<input id="textbox" style="height:30px; width:60px;" type="text" name="number1" maxlength="3">
				-
				<input id="textbox" style="height:30px; width:50px;" type="text" name="number2" maxlength="2">
				-
				<input id="textbox" style="height:30px; width:50px;" type="text" name="number3" maxlength="2">
				-
				<input id="textbox" style="height:30px; width:60px;" type="text" name="number4" maxlength="3">
				-
				<input id="textbox" style="height:30px; width:50px;" type="text" name="number5" maxlength="2">
				/
				<input id="textbox" style="height:30px; width:50px; margin-right:20px;" type="text" name="number6" maxlength="2">
				หมวด 
				<select id="inSearch" style="width:200px; height:30px; margin-right:20px;" name="type">
					<?php 
						$sql = "SELECT * FROM type";
						mysql_query("SET NAMES utf8");
						$query = mysql_query($sql);
						while ($data = mysql_fetch_array($query)) {
							echo '<option value='.$data['id_type'].'>'.$data['detail'].'</option>';
						}
					 ?>
					
				</select>
				ปีการศึกษา
				<input id="textbox" style="height:30px; width:100px;" type="text" name="year">
			</div>

			<div id="inAdd">
				ประเภท
				<input id="textbox" style="height:30px; width:260px;" type="text" name="detail">
				จำนวน 
				<input id="textbox" style="height:30px; width:60px;" type="text" name="count" onFocus="startCalc();" onBlur="stopCalc();">
				ราคา/หน่วย
				<input id="textbox" style="height:30px; width:150px;" type="text" name="price" onFocus="startCalc();" onBlur="stopCalc();">
				จำนวนเงิน 
				<input id="textbox" style="height:30px; width:200px;" type="text" name="summaryB" readonly>
			</div>

			<div style="width:100%; height:200px;">
				<div style="width:42%; height:100%; float:left;">
					<div style="width:100px; height:100%; float:left;">
						<font style="font-family:TH Sarabun New; font-size: 25px; color:#565656; padding-left:10px;">
							ยี่ห้อ/รุ่น
						</font>
					</div>
					<div style="width:320px; height:100%; float:left;">
						<textarea class="textbox" name="brand" style="width:300px; height:100%;" rows="4" cols="50"></textarea>	
					</div>
				</div>

				<div style="width:56%; height:100%; float:left;">
					<div style="width:100%; height:50%;">
						<div style="width:100px; height:100%; float:left;">
							<font style="font-family:TH Sarabun New; font-size: 25px; color:#565656; padding-left:10px;">
								สถานที่ใช้งาน
							</font>
						</div>
						<div style="width:100%-100px; height:100%; float:left;">
							<textarea class="textbox" name="where" style="width:100%; height:90%;" rows="3" cols="60"></textarea>
						</div>
					</div>	
					<div style="width:100%; height:50%;">
						<div style="width:100px; height:100%; float:left;">
							<font style="font-family:TH Sarabun New; font-size: 25px; color:#565656; padding-left:10px;">
								หมายเหตุ
							</font>
						</div>
						<div style="width:100%-100px; height:100%; float:left;">
							<textarea class="textbox" name="note" style="width:100%; height:90%;" rows="3" cols="60"></textarea>
						</div>
					</div>	
				</div>					
			</div>
			
			<div style="margin-top:20px; width:600px; float:left; padding-left: 10px; font-family:TH Sarabun New; font-size: 25px; color:#565656; height:150px; float:left;">
				<div id="inAdd" style="width:600px; float:left; margin-top:10px;">
					วันที่รับ
					<input id="textbox" style="height:30px; width:200px;" type="date" name="date">
					ชื่อบริษัท
					<input id="textbox" style="height:30px; width:270px;" type="text" name="ncompany">
				</div>
				<div id="inAdd" style="width:600px; float:left;">
					เบอร์โทรศัพท์
					<input id="textbox" style="height:30px; width:200px; margin-right:10px;" type="text" name="tel">
					เบอร์โทรสาร
					<input id="textbox" style="height:30px; width:195px;" type="text" name="fax">
				</div>
				<div id="inAdd" style="width:600px; float:left;">
					Website
					<input id="textbox" style="height:30px; width:530px;" type="text" name="web">
				</div>
			</div>
			<div style="margin-top:20px; width:380px; float:left; padding-left: 10px; font-family:TH Sarabun New; font-size: 25px; color:#565656; height:150px; float:left;">
				<div style="width:50px; height:50px; float:left;">
					ที่อยู่
				</div>
				<div style="width:300px; height:150px; float:left;">
					<textarea class="textbox" name="address" style="width:300px; height:150px;" rows="3" cols="60"></textarea>	
				</div>
			</div>

			<div style="margin-top:20px; width:380px; float:left; padding-left: 10px; font-family:TH Sarabun New; font-size: 25px; color:#565656; height:150px; float:left;">
				<div style="width:200; height:150px; float:left;">
					<img id="image" style="margin-left:20px;" height="150" width="130"/>
				</div>
				<div style="width:130; height:150px; float:left;">
					เพิ่มรูปวัสดุครุภัณฑ์
					<input type="file" id="files" name="image">
				</div>
			</div>
			<div style="margin-top:20px; width:600px; float:left; padding-left: 10px; font-family:TH Sarabun New; font-size: 25px; color:#565656; height:150px; float:left;">
				<div style="width:100%; height:30%;"></div>
				<div style="width:100%; height:70%; margin-left:50px;">
					<div style="width:150px; float:left;">
						<input id="bt3" type="submit" name="submit" class="textbox" value="บันทึกข้อมูล">
					</div>
					<div style="width:450px; float:left;">
						<input id="bt3" type="reset" name="reset" class="textbox" value="ล้างข้อมูล">
					</div>				
				</div>
				
			</div>

		</div>
	</div>
	</form>
	
	<div style="background: #862ae3; margin-top:10px; width:100%;"></div>

	<div style="background:#323232; width:100%; height:30px; text-align: center; padding-top: 13px; margin-bottom:0px;">
		<font color="#ffffff">&copy Copyright By Attawit School Credit By Nutthapon.B</font>
	</div>
</body>
</html>

<script language='javascript'>
	document.getElementById("files").onchange = function () {
	    var reader = new FileReader();
	    reader.onload = function (e) {
	        document.getElementById("image").src = e.target.result;
	    };
	    reader.readAsDataURL(this.files[0]);
	};

	function startCalc(){ 
		interval = setInterval("calc()"); 
	} 
	function calc(){ 
		var count = document.form1.count.value;
		var price = document.form1.price.value;
		document.form1.summaryB.value = count * price;
	}
	function stopCalc(){ 
		clearInterval(interval); 
	} 
</script>