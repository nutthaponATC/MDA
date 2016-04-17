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
					<a href="history_mda.php">ประวัติทรัพย์สิน</a>
					<a href="show_maintenance.php">ประวัติการส่งซ้อม</a>
					</div>
			</div>			
			<div class="dropdown" style="width:160px; heigth:100%; float:left;">
				<div class="dropbtn">เพิ่มข้อมูล</div>
				<div class="dropdown-content">
					<a href="add_mda.php">เพิ่มข้อมูลครุภัณฑ์</a>
					<a href="select_maintenance.php">เพิ่มข้อมูลการซ้อม</a>
				</div>
			</div>
			<div class="dropdown" style="width:160px; heigth:100%; float:left;">
				<div class="dropbtn">รายงาน</div>
				<div class="dropdown-content">
					<a href="#popupReport">รายงานทรัพย์สิน</a>
					<a href="barcode.php">barcode</a>
					<a href="#popupReportLent">รายงานการยืม</a>
					<a href="#popupReportReturn">รายงานการคืน</a>
					<!-- <a href="#">รายงานค่าเสื่อมราคา</a> -->

				</div>
			</div>
			<div class="dropdown" style="width:160px; heigth:100%; float:left;">
				<div class="dropbtn">การยืมคืน</div>
				<div class="dropdown-content">
					<a href="lent_mda.php">ยืมครุภัณฑ์</a>
					<a href="return_mda.php">คืนครุภัณฑ์</a>
				</div>
			</div>
			<a href="approve_mda.php">
				<div id="sMenu" style="width:160px; heigth:100%; float:left;">
					<div style="width:100px; float:left;">การอนุมัติ</div>
					<?php 
					if ($numberApprove == 0) {
						echo "<div style='width:30px; height:35px; float:left;'></div>";	
					} else {
						echo "<div style='width:30px; height:35px; float:left; border-color: #ff0000; border-style: solid; border-radius: 5px; text-align:center; margin-top:-3px; color: #ff0000;'>".$numberApprove."</div>";	
					}
					 ?>
				</div>
			</a>
			<div class="dropdown" style="width:50px; heigth:105%; float:left;">
				<div class="dropbtn"><img src="image/pass.png" width="36"></div>
				<div class="dropdown-content">
					<a href="setting_finance.php">การตั้งค่า</a>
					<a href="#popupLogout">Logout</a>
				</div>
			</div>
		</div>
	</div>

	<div style='width:100%; height:80px; margin-top:-29px; background:#ffffff;'>
		<div style='width:1000px; height:100%; margin:auto; background:#ffffff;'>
			<h2>การตั้งค่า</h2>
		</div>
	</div>

	<form name="form1" action="setting_finance_process.php" method="POST" enctype="multipart/form-data">
		<div style='width:100%; height:750px; background:#d8b5fc;'> 
			<div style="width:1000px; height:100%; background:#e1c4ff; margin:auto; box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 6px 20px 0 rgba(0, 0, 0, 0.14);">
				<div style='width:1000px; height:50px; margin:auto; background: #862ae3; box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 6px 20px 0 rgba(0, 0, 0, 0.14);'>
					<div style="width:60%; height:100%; float:left;">
						<h2 style="margin-top:-15px; padding-left:10px; color:#ffffff;">ตั้งค่าหมวด</h2>
					</div>
					<div style="width:30%; height:100%; margin-left:50px; float:left;">
					</div>
				</div>

				<?php 
				$sqlType = "SELECT * FROM type";
				$queryType = mysql_query($sqlType);

				while ($dataType = mysql_fetch_array($queryType)) {
					echo "
					<div style='width:350px; height:35px; margin:auto;'>
						<div style='width:50px; height:30px; float:left;'>
							<input id='textbox' style='height:30px; width:50px;' type='text' name='idType[]' value=".$dataType['id_type']." readonly>
						</div>
						<div style='width:300px; height:30px; float:left;'>
							<input id='textbox' style='height:30px; width:300px;' type='text' name='detail[]' value=".$dataType['detail'].">
						</div>
					</div>";
				}
				?>
				
				<div style='width:350px; height:35px; margin:auto;'>
					<input id="bt3" type="submit" name="submit" value="ยืนยัน">
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