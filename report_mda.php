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

	<!-- datatable -->
	<script src="jquery-1.12.0.min.js"></script>      
	<script type="text/javascript" src="jquery.dataTables.min.js"></script>  
	<link rel="stylesheet" href="jquery.dataTables.min.css" />  

	<title>เว็บไซต์ระบบฐานข้อมูลวัสดุครุภัณฑ์โรงเรียนอรรถวิทย์</title>
</head>
<body id="report">
<!-- <form name="form1" action="report/tcpdf/report/report_mda_pdf.php" method="POST"> -->
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
			<div style="width:166px; heigth:100%; float:left;">
				<a href="main_finance.php">
					<div id="sMenu">หน้าหลัก</div>
				</a>
			</div>
			<div style="width:166px; heigth:100%; float:left;">
				<div class="dropdown">
					<div class="dropbtn">ค้นหา</div>
					<div class="dropdown-content">
						<a href="search_mda.php">ครุภัณฑ์</a>
						<a href="#">ประวัติการยืม</a>
						<a href="#">ประวัติการคืน</a>
					</div>
				</div>
			</div>
			<div style="width:166px; heigth:100%; float:left;">
				<a href="add_mda.php"><div id="sMenu">เพิ่มข้อมูล</div></a>
			</div>
			<div style="width:166px; heigth:100%; float:left;">
				<div class="dropdown">
					<div class="dropbtn">รายงาน</div>
					<div class="dropdown-content">
						<a href="#popup1">รายงานทรัพย์สิน</a>
						<a href="barcode.php">barcode</a>
						<a href="#">รายงานการยืม</a>
						<a href="#">รายงานการคืน</a>
						<a href="#">รายงานค่าเสื่อมราคา</a>
						<a href="#">รายงานประวัติทรัพย์สิน</a>
					</div>
				</div>
			</div>
			<div style="width:166px; heigth:100%; float:left;">
				<a href=""><div id="sMenu">ยืมคืน</div></a>
			</div>
			<div style="width:166px; heigth:100%; float:left;">
				<a href=""><div id="sMenu">จัดการข้อมูล</div></a>
			</div>
		</div>
	</div>

	<div style='width:100%; height:580px; background:#d8b5fc;'>
		<div style='width:980px; height:580px; padding-top:20px; padding-left:10px; padding-right:10px; background:#e1c4ff; margin:auto; box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 6px 20px 0 rgba(0, 0, 0, 0.14);'>
			<div id="reportMenu" style="width:100%; height:50px; margin-top:10px;">
				<div style="float:left;">หมวด</div>
				<div style="float:left;">
					<select id="inSearch" style="width:200px; height:30px; margin-right:20px; margin-top:2px;" name="type">
						<option value="all">ทุกหมวด</option>
						<?php 
							$sql = "SELECT * FROM type";
							mysql_query("SET NAMES utf8");
							$query = mysql_query($sql);
							while ($data = mysql_fetch_array($query)) {
								echo '<option value='.$data['id_type'].'>'.$data['detail'].'</option>';
							}
						 ?>
					</select>
				</div>
				<div style="float:left;">ปีการศึกษา</div>
				<div style="float:left;">
					<select id="inSearch" style="width:200px; height:30px; margin-right:20px; margin-top:2px;" name="year">
						<option value="all">ทุกปีการศึกษา</option>
						<?php 
							$sql = "SELECT * FROM year";
							mysql_query("SET NAMES utf8");
							$query = mysql_query($sql);
							while ($data = mysql_fetch_array($query)) {
								echo '<option value='.$data['year'].'>'.$data['year'].'</option>';
							}
						 ?>
					</select>
				</div>
				<div style="float:left; margin-left:50px;">
					<input id="bt3" type="submit" name="submit" class="textbox" value="พิมพ์รายงาน">
				</div>

				<div style="float:left; margin-left:20px;">
					<input id="bt3" type="button" name="excel" class="textbox" value="ดาวน์โหลด Excel">
				</div>
			</div>
		</div>
	</div>

	<div style="background:#323232; width:100%; height:30px; text-align: center; padding-top: 13px; margin-bottom:0px;">
		<font color="#ffffff">&copy Copyright By Attawit School Credit By Nutthapon.B</font>
	</div>
</form>
</body>
</html>