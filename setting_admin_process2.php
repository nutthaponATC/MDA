<?php 
echo "<meta charset='utf-8'>";
include('config.php');

$user = $_POST['user'];
$pass = $_POST['pass'];
$name = $_POST['name'];
$dep = $_POST['dep'];
$type = $_POST['type'];

$date = date("Y-m-d");

$sqlUser = "INSERT INTO user_mda VALUES(null, '$user', '$pass', '$name', '$dep', '$date', $type)";
mysql_query("SET NAMES utf8");
$queryUser = mysql_query($sqlUser);

if ($queryUser) {
	echo "<script language='javascript'>";
	echo "alert('เพิ่มผู้ใช้เรียบร้อยแล้ว');";
	echo "location='setting_admin.php';";
	echo "</script>";
} else {
	echo "<script language='javascript'>";
	echo "alert('ไม่สามารเพิ่มผู้ใช้ได้ กรุณาป้อนข้อมูลใหม่');";
	echo "location='setting_admin.php';";
	echo "</script>";
}

 ?>