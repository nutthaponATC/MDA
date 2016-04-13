<?php 
session_start(); 
echo "<meta charset='utf-8'>";
include('config.php');

$arrayId = $_POST['id_data_mda'];
$arrayId_mda = $_POST['id_mda'];
$arrayDetail = $_POST['detail'];
$user_id = $_SESSION['id'];
$name = $_SESSION['name_user'];

$date = date("Y-m-d");

$year = date("Y")+543;

$count = count($arrayId);
$i = 0;

while ($i < $count) {
	$id_data_mda = $arrayId[$i];
	$id_mda = $arrayId_mda[$i];
	$detail = $arrayDetail[$i];

	$sqlInsert = "INSERT INTO lent_return VALUES(null,$id_data_mda,'$id_mda','$detail',$user_id,'$name','$date','-','$year',0);";
	mysql_query("SET NAMES utf8");
	$query = mysql_query($sqlInsert);

	$sqlUpdate = "UPDATE data_mda SET status = 0 WHERE id = $id_data_mda";
	$query = mysql_query($sqlUpdate);

	$i++;
}

if ($query) {
	echo "<script language='javascript'>";
	echo "alert('บันทึกการยืมเรียบร้อย');";
	echo "location='lent_mda.php';";
	echo "</script>";
} else {
	echo "<script language='javascript'>";
	echo "alert('ไม่สามารถบันทึกข้อมูลการยืมได้ กรุณาลบอีกครั้ง');";
	echo "location='lent_mda.php';";
	echo "</script>";
}

 ?>