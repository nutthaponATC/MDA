<?php 
include('config.php');

echo "<meta charset='utf-8'>";

$id = $_GET['id'];

$sql = "DELETE FROM data_mda WHERE id=$id";
$query = mysql_query($sql);

if ($query) {
	echo "<script language='javascript'>";
	echo "alert('ลบข้อมูลเรียบร้อย');";
	echo "location='search_mda.php';";
	echo "</script>";
} else {
	echo "<script language='javascript'>";
	echo "alert('ไม่สามารถลบข้อมูลได้ กรุณาลบอีกครั้ง');";
	echo "location='search_mda.php';";
	echo "</script>";
}

 ?>