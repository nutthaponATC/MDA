<?php 
session_start(); 
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
<body id="main">
	<div style='width:100%; height:25%;'>
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

	<div style='width:100%; height:15%;'>
		<div style='width:900px; height:100%; margin:auto;'>
			<div id='menus'>
				<a href="search_mda.php">
					<div style="width:25%; float:left; padding-top:4%; padding-left:5%;">
						<img src="image/search.png" width="60">
					</div>
					<div style="width:70%; float:left; padding-top:6%;">
						<font id="inMenu">ค้นหาข้อมูลวัสดุและครุภัณฑ์</font>
					</div>
				</a>
			</div>
			<div id='menus'>
				<a href="add_mda.php">
					<div style="width:25%; float:left; padding-top:5%; padding-left:5%;">
						<img src="image/add.png" width="60">
					</div>
					<div style="width:70%; float:left; padding-top:6%;">
						<font id="inMenu">เพิ่มข้อมูลวัสดุและครุภัณฑ์</font>
					</div>
				</a>
			</div>
		</div>
	</div>

	<div style='width:100%; height:15%;'>
		<div style='width:900px; height:100%; margin:auto;'>
			<div id='menus'>
				<a href="#popupReport">
					<div style="width:25%; float:left; padding-top:5%; padding-left:5%;">
						<img src="image/report.png" width="70">
					</div>
					<div style="width:70%; float:left; padding-top:6%;">
						<font id="inMenu">รายงานข้อมูล</font>
					</div>
				</a>
			</div>
			<div id='menus'>
				<a href="approve_mda.php">
					<div style="width:23%; float:left; padding-top:4%; padding-left:7%;">
						<img src="image/book.png" width="40">
					</div>
					<div style="width:70%; float:left; padding-top:6%;">
						<font id="inMenu">การอนุมัติ</font>
					</div>
				</a>
			</div>
		</div>
	</div>

	<div style='width:100%; height:15%;'>
		<div style='width:900px; height:100%; margin:auto;'>
			<div id='menus'>
				<a href="lent_mda.php">
					<div style="width:25%; float:left; padding-top:4%; padding-left:5%;">
						<img src="image/rar.png" width="60">
					</div>
					<div style="width:70%; float:left; padding-top:6%;">
						<font id="inMenu">ยืม / คืนวัสดุ ครุภัณฑ์</font>
					</div>
				</a>
			</div>
			<div id='menus'>
				<a href="setting_finance.php">
					<div style="width:25%; float:left; padding-top:4%; padding-left:5%;">
						<img src="image/manage.png" width="60">
					</div>
					<div style="width:70%; float:left; padding-top:6%;">
						<font id="inMenu">จัดการข้อมูล</font>
					</div>
				</a>
			</div>
		</div>
	</div>

	<div style='width:100%; height:23%;'>
	</div>

	<div style="background-color:#323232; width:100%; height:5%; text-align: center; padding-top: 13px; margin-bottom:0px;">
		<font color="#ffffff">&copy Copyright By Attawit School Credit By Nutthapon.B</font>
	</div>
</body>
</html>