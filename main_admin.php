<?php 
session_start(); 
include('popup.php');

if ($_SESSION['type'] != 2) {
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

	<div style='width:100%; height:10%;'></div>

	<div style='width:100%; height:15%;'>
		<div style='width:900px; height:100%; margin:auto;'>
			<div id='menus' style='margin-left:30%;'>
				<a href="show_lent_admin.php">
					<div style="width:25%; float:left; padding-top:4%; padding-left:5%;">
						<img src="image/search.png" width="60">
					</div>
					<div style="width:70%; float:left; padding-top:6%;">
						<font id="inMenu">ค้นหาข้อมูลวัสดุและครุภัณฑ์</font>
					</div>
				</a>
			</div>
		</div>
	</div>

	<div style='width:100%; height:15%;'>
		<div style='width:900px; height:100%; margin:auto;'>
			<div id='menus' style='margin-left:30%;'>
				<a href="lent_mda_admin.php">
					<div style="width:25%; float:left; padding-top:4%; padding-left:5%;">
						<img src="image/rar.png" width="60">
					</div>
					<div style="width:70%; float:left; padding-top:6%;">
						<font id="inMenu">ยืม / คืนวัสดุ ครุภัณฑ์</font>
					</div>
				</a>
			</div>
		</div>
	</div>


	<div style='width:100%; height:15%;'>
		<div style='width:900px; height:100%; margin:auto;'>
			<div id='menus' style='margin-left:30%;'>
				<a href="setting_admin.php">
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

	<div style='width:100%; height:13%;'></div>

	<div style="background-color:#323232; width:100%; height:5%; text-align: center; padding-top: 13px; margin-bottom:0px;">
		<font color="#ffffff">&copy Copyright By Attawit School Credit By Nutthapon.B</font>
	</div>
</body>
</html>