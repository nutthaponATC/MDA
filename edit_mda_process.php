<?php 
echo "<meta charset='utf-8'>";
include('config.php');

$id = $_POST['id'];
$number = $_POST['number'];
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

if (isset($number) && $number != "" && isset($type) && $type != "" && isset($year) && $year != "") {
	if(($_FILES["image"]["tmp_name"]) != "") {
		$realname = $_FILES["image"]["name"];
	} else {
		$realname = NULL;
	} ;
	$sql = "UPDATE `mda`.`data_mda` SET `id_mda` = '$number', `id_type` = '$type', `year` = '$year', `detail` = '$detail', `brand` = '$brand', `amount` = '$count', `price` = '$price', `total_price` = '$summary', `applications` = '$where', `note` = '$note', `date_in` = '$date', `company` = '$ncompany', `address` = '$address', `tel` = '$tel', `fax` = '$fax', `web` = '$web', `picture` = '$realname' WHERE `data_mda`.`id` = '$id';";

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
		echo "location='edit_mda.php?id=".$data['id']."';";
		echo "</script>";
	}

} else {
	echo "<script language='javascript'>";
	echo "alert('กรุณาป้อนข้อมูลอีกครั้ง');";
	echo "location='edit_mda.php?id=".$data['id']."';";
	echo "</script>";
	
}
 ?>