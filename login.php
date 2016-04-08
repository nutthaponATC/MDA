<?php 
session_start();
include('config.php');

echo "<meta charset='utf-8'>";

$user = $_POST['user'];
$pass = $_POST['pass'];

if (isset($user) && $user != "" && isset($pass) && $pass != "") {
	$sql = "SELECT * FROM user_mda WHERE username = '$user' and password = '$pass';";
	$query = mysql_query($sql);
	$countCheck = mysql_num_rows($query);
	$fetchData = mysql_fetch_array($query);
	$type = $fetchData['type'];
	$user_id = $fetchData['user_id'];
	$name = $fetchData['name'];

	if ($countCheck == 1) {
		$_SESSION['type'] = $type;
		$_SESSION['id'] = $user_id;
		$_SESSION['name_user'] = $name;

		if ($type == 1) {
			echo "<script language='javascript'>";
			echo "location='main_teacher.php';";
			echo "</script>";
		} elseif ($type == 2) {
			echo "<script language='javascript'>";
			echo "location='main_admin.php';";
			echo "</script>";
		} elseif ($type == 3) {
			echo "<script language='javascript'>";
			echo "location='main_finance.php';";
			echo "</script>";
		} else {
			echo "<script language='javascript'>";
			echo "location='main_manager.php';";
			echo "</script>";
		}

	} else {
		echo "<script language='javascript'>";
		echo "alert('ชื้อผู้ใช้หรือรหัสผ่านผิด กรุณาลองใหม่อีกครั้ง');";
		echo "location='index.php';";
		echo "</script>";
	}

} else {
	echo "<script language='javascript'>";
	echo "alert('กรุณาป้อนชื่อผู้ใช้และรหัสผ่าน');";
	echo "location='index.php';";
	echo "</script>";
	
}

 ?>