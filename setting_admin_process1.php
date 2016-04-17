<?php 
echo "<meta charset='utf-8'>";
include('config.php');

$yearStart = $_POST['yearStart'];
$yearEnd = $_POST['yearEnd'];

$yearLenght = $yearEnd-$yearStart;

$i = 0;
while ($i <= $yearLenght) {
	$dataYear = $yearStart + $i;
	$sqlYear = "INSERT INTO year VALUES($dataYear)";
	$queryYear = mysql_query($sqlYear);

	$i++;
}

if ($queryYear) {
	echo "<script language='javascript'>";
	echo "alert('เพิ่มข้อมูลเรียบร้อย');";
	echo "location='setting_admin.php';";
	echo "</script>";
} else {
	echo "<script language='javascript'>";
	echo "alert('ไม่สามารถเพิ่มข้อมูลได้ กรุณาป้อนข้อมูลให้ถูกต้อง');";
	echo "location='setting_admin.php';";
	echo "</script>";
}

 ?>