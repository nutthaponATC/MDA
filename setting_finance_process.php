<?php 
echo "<meta charset='utf-8'>";
include('config.php');

$idType = $_POST['idType'];
$detail = $_POST['detail'];
$count = count($detail);

$i = 0;
while ($i < $count) {
	$idTypeValue = $idType[$i];
	$value = $detail[$i];
	$sqlUpdate = "UPDATE type SET detail = '$value' WHERE id_type = '$idTypeValue'";
	mysql_query("SET NAMES utf8");
	$queryUpdate = mysql_query($sqlUpdate);

	$i++;
}

if ($queryUpdate) {
	echo "<script language='javascript'>";
	echo "alert('บันทึกเรียบร้อย');";
	echo "location='setting_finance.php';";
	echo "</script>";
} else {
	echo "<script language='javascript'>";
	echo "alert('ไม่สามารถบันทึกได้ กรุณาลองใหม่');";
	echo "location='setting_finance.php';";
	echo "</script>";
}
 ?>