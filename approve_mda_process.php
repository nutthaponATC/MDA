<?php 
	include('config.php');
	echo "<meta charset='utf-8'>";
	$arrayId = $_POST['check'];
	$count = count($arrayId);
	$i = 0;

	while ($i < $count) {
		$id_data_lent = $arrayId[$i];
		$sql = "UPDATE lent_return SET status = 2 WHERE id = $id_data_lent;";
		$query = mysql_query($sql);
		$i++;
	}

	if ($query) {
		echo "<script language='javascript'>";
		echo "alert('อนุมัติเรียบร้อย');";
		echo "location='approve_mda.php';";
		echo "</script>";
	} else {
		echo "<script language='javascript'>";
		echo "alert('ไม่สามารถอนุมัติได้ กรุณาลองใหม่');";
		echo "location='approve_mda.php';";
		echo "</script>";
	}
?>