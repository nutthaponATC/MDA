<?php 
echo "<meta charset='utf-8'>";
include('config.php');

$id_maintenance = $_POST['id_maintenance'];
$number = $_POST['number'];
$type = $_POST['type'];
$year = $_POST['year'];
$supervisor = $_POST['supervisor'];
$date_send = $_POST['date_send'];
$date_return = $_POST['date_return'];
$detail = $_POST['detail'];
$company = $_POST['company'];
$outgoings = $_POST['outgoings'];
$id_data_mda = $_POST['id_data_mda'];
$status = $_POST['status'];

if ($status == 2 && $date_return == '') {
	echo "<script language='javascript'>";
	echo "alert('กรุณาป้อนวันที่ซ่อมเสร็จ');";
	echo "location='select_maintenance.php';";
	echo "</script>";
}

if ($status == 2) {
	$sqlMaintenance = "UPDATE maintenance SET date_send = '$date_send', date_return = '$date_return', status = 1, detail = '$detail', outgoings = '$outgoings', company = '$company', supervisor = '$supervisor' WHERE id = $id_maintenance;";
	mysql_query("SET NAMES utf8");
	$query = mysql_query($sqlMaintenance);
	$sqlUpdatStatus = "UPDATE data_mda SET status = 1 WHERE id = $id_data_mda;";
	mysql_query("SET NAMES utf8");
	$query = mysql_query($sqlUpdatStatus);
} else {
	$sqlMaintenance = "INSERT INTO maintenance VALUES(NULL, $id_data_mda, '$number', $type, $year, '$supervisor', '$detail', '$date_send', '$date_return', '$company', $outgoings,0);";
	mysql_query("SET NAMES utf8");
	$query = mysql_query($sqlMaintenance);
	$sqlUpdatStatus = "UPDATE data_mda SET status = 2 WHERE id = $id_data_mda;";
	mysql_query("SET NAMES utf8");
	$query = mysql_query($sqlUpdatStatus);
}

if ($query) {
	echo "<script language='javascript'>";
	echo "alert('บันทึกข้อมูลการซ่อมเรียบร้อย');";
	echo "location='select_maintenance.php';";
	echo "</script>";
} else {
	echo "<script language='javascript'>";
	echo "alert('ไม่สามารถบันทึกข้อมูลการซ่อมได้ กรุณาป้อนข้อมูลใหม่');";
	echo "location='select_maintenance.php';";
	echo "</script>";
}
 ?>