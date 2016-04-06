<?php 
echo "<meta charset='utf-8'>";
include('config.php');

$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$number3 = $_POST['number3'];
$number4 = $_POST['number4'];
$number5 = $_POST['number5'];
$number6 = $_POST['number6'];

$number = $number1."-".$number2."-".$number3."-".$number4."-".$number5."/".$number6;

$type = $_POST['type'];
$year = $_POST['year'];
$brand = $_POST['brand'];
$count = $_POST['count'];
$price = $_POST['price'];
$summary = $_POST['summaryB'];
$detail = $_POST['detail'];
$where = $_POST['where'];
$note = $_POST['note'];
$date = $_POST['date'];
$ncompany = $_POST['ncompany'];
$tel = $_POST['tel'];
$fax = $_POST['fax'];
$web = $_POST['web'];
$address = $_POST['address'];

if (isset($number1) && $number1 != "" && isset($type) && $type != "" && isset($year) && $year != "") {
	if(($_FILES["image"]["tmp_name"]) != "") {
		$realname = $_FILES["image"]["name"];
	} else {
		$realname = NULL;
	} ;
	$sql = "INSERT INTO `mda`.`data_mda` (`id`, `id_mda`, `id_type`, `year`, `detail`, `brand`, `amount`, `price`, `total_price`, `applications`, `note`, `date_in`, `company`, `address`, `tel`, `fax`, `web`, `picture`, `status`) VALUES (NULL,'$number','$type','$year','$detail','$brand','$count','$price','$summary','$where','$note','$date','$ncompany','$address','$tel','$fax','$web','$realname', '1');";

	mysql_query("SET NAMES utf8");
	$query = mysql_query($sql);

	if ($query) {
		if(($_FILES["image"]["tmp_name"]) != "") {
			copy($_FILES["image"]["tmp_name"],"image/".$_FILES["image"]["name"]);
		}

		echo "<script language='javascript'>";
		echo "alert('เพิ่มข้อมูลเรียบร้อย');";
		echo "location='search_mda.php';";
		echo "</script>";
	} else {
		echo "<script language='javascript'>";
		echo "alert('ไม่สามารถเพิ่มข้อมูลวัสดุครุภัณฑ์ได้ กรุณาป้อนใหม่อีกครั้ง');";
		echo "location='add_mda.php';";
		echo "</script>";
	}

} else {
	echo "<script language='javascript'>";
	echo "alert('กรุณาป้อนข้อมูลอีกครั้ง');";
	echo "location='add_mda.php';";
	echo "</script>";
	
}
 ?>