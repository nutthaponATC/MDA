<?php 
session_start(); 
echo "<meta charset='utf-8'>";
include('config.php');

$arrayId = $_POST['id_data_lent'];
$arrayId_data_mda = $_POST['id_data_mda'];
$date = date("Y-m-d");

$count = count($arrayId);
$i = 0;

while ($i < $count) {
	$id_data_lent = $arrayId[$i];
	$arrayId_data_mda = $arrayId_data_mda[$i];

	$sqlUpdateReturn = "UPDATE lent_return SET date_return = '$date', status = 1 WHERE id = $id_data_lent";
	mysql_query("SET NAMES utf8");
	$query = mysql_query($sqlUpdateReturn);

	$sqlUpdate = "UPDATE data_mda SET status = 1 WHERE id = $arrayId_data_mda";
	$query = mysql_query($sqlUpdate);

	$i++;
}

if ($query) {
	echo "<script language='javascript'>";
	echo "alert('บันทึกการคืน เรียบร้อย');";
	echo "location='return_mda.php';";
	echo "</script>";
} else {
	echo "<script language='javascript'>";
	echo "alert('ไม่สามารถบันทึกข้อมูลการคืนได้ กรุณาลบอีกครั้ง');";
	echo "location='return_mda.php';";
	echo "</script>";
}

 ?>