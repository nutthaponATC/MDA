<?php 
session_start(); 
include('config.php');

//approve
$sqlApprove = "SELECT * FROM lent_return WHERE status = 0";
$queryApprove = mysql_query($sqlApprove);
$numberApprove = mysql_num_rows($queryApprove);

 ?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="image/icon.ico">
	<link rel="stylesheet" href="style.css">
	<title>เว็บไซต์ระบบฐานข้อมูลวัสดุครุภัณฑ์โรงเรียนอรรถวิทย์</title>
</head>
<body>

	<div id="popupReport" class="overlay">
		<form name="formReport" action="report/tcpdf/report/report_mda_pdf.php" method="POST">
			<div class="popup">
				<div style="font-size:30px;">ออกรายงานทรัพย์สิน</div>
				<a class="close" href="#">&times;</a>
				<div class="content">
					<div style="float:left; width:100px; font-size:20px;">หมวด</div>
					<div style="float:left;">
						<select id="inSearch" style="width:200px; height:30px; margin-right:20px; margin-top:2px;" name="type">
							<option value="all">ทุกหมวด</option>
							<?php 
								$sql = "SELECT * FROM type";
								mysql_query("SET NAMES utf8");
								$query = mysql_query($sql);
								while ($data = mysql_fetch_array($query)) {
									echo '<option value='.$data['id_type'].'>'.$data['detail'].'</option>';
								}
							 ?>
						</select>
					</div>
					<br>
					<div style="float:left; width:100px;font-size:20px ;">ปีการศึกษา</div>
					<div style="float:left;">
						<select id="inSearch" style="width:200px; height:30px; margin-right:20px; margin-top:2px;" name="year">
							<option value="all">ทุกปีการศึกษา</option>
							<?php 
								$sql = "SELECT * FROM year";
								mysql_query("SET NAMES utf8");
								$query = mysql_query($sql);
								while ($data = mysql_fetch_array($query)) {
									echo '<option value='.$data['year'].'>'.$data['year'].'</option>';
								}
							 ?>
						</select>
					</div>
					<br>
					<div style="float:left; width:100px;font-size:20px ;">จำนวนข้อมูล:หน้า</div>
					<div style="float:left;">
						<select id="inSearch" style="width:50px; height:30px; margin-right:20px; margin-top:2px;" name="record">
							<option value="10">9</option>
							<option value="11">10</option>
							<option value="12">11</option>
							<option value="13" selected>12</option>
							<option value="14">13</option>
							<option value="15">14</option>
							<option value="16">15</option>
							<option value="17">16</option>
							<option value="18">17</option>
							<option value="19">18</option>
							<option value="20">19</option>
						</select>
					</div>
					<br>
					<div style="float:left; margin:auto; margin-top:30px;">
						<input id="bt3" type="submit" name="submit" class="textbox" value="พิมพ์รายงาน">
					</div>
				</div>
			</div>
		</form>
	</div>

	<div id="popupLent" class="overlay">
		<form name="formLent" action="lent_mda_process.php" method="POST">
			<div class="popup">
				<div style="font-size:30px;">รายการที่ต้องการยืม</div>
				<a class="close" href="#">&times;</a>
				<div class="content">
					<?php 
					$arrayId = $_POST['check'];
					$count = count($arrayId);
					$i = 0;

					while ($i < $count) {
						$id_data_mda = $arrayId[$i];
						$sql = "SELECT `id_mda`,`detail` FROM data_mda WHERE id = $id_data_mda";
						$query = mysql_query($sql);
						$data = mysql_fetch_array($query);
						$id_mda = $data['id_mda'];
						$detail = $data['detail'];

					echo '<input type="text" style="width:50px;" name="id_data_mda[]" value='.$id_data_mda.' readonly><input type="text" style="width:150px;" name="id_mda[]" value='.$id_mda.' readonly><input type="text" style="width:200px;" name="detail[]" value='.$detail.' readonly>';
						$i++;
					}

					 ?>
					<div style="float:left; margin:auto; margin-top:30px;">
						<input id="bt3" type="submit" name="submit" class="textbox" value="ยืนยัน การยืม">
					</div>
				</div>
			</div>
		</form>
	</div>

	<div id="popupReturn" class="overlay">
		<form name="form3" action="return_mda_process.php" method="POST">
			<div class="popup">
				<div style="font-size:30px;">รายการที่ต้องการคืน</div>
				<a class="close" href="#">&times;</a>
				<div class="content">
					<?php 
					$arrayId = $_POST['check'];
					$count = count($arrayId);
					$i = 0;

					while ($i < $count) {
						$id_data_lent = $arrayId[$i];
						$sql = "SELECT `id_mda`,`name_mda`,`id_data_mda` FROM lent_return WHERE id = $id_data_lent";
						$query = mysql_query($sql);
						$data = mysql_fetch_array($query);
						$id_data_mda = $data['id_data_mda'];
						$id_mda = $data['id_mda'];
						$detail = $data['name_mda'];

					echo '<input type="text" style="width:50px;" name="id_data_lent[]" value='.$id_data_lent.' readonly><input type="text" style="width:150px;" name="id_mda[]" value='.$id_mda.' readonly><input type="text" style="width:200px;" name="detail[]" value='.$detail.' readonly><input type="hidden" name="id_data_mda[]" value='.$id_data_mda.'>';
						$i++;
					}

					 ?>
					<div style="float:left; margin:auto; margin-top:30px;">
						<input id="bt3" type="submit" name="submit" class="textbox" value="ยืนยัน การคืน">
					</div>
				</div>
			</div>
		</form>
	</div>

	<div id="popupReportLent" class="overlay">
		<form name="formReportLent" action="report/tcpdf/report/report_lent_pdf.php" method="POST">
			<div class="popup">
				<div style="font-size:30px;">ออกรายงานการยืม</div>
				<a class="close" href="#">&times;</a>
				<div class="content">
					<div style="float:left; width:100px; font-size:20px;">เดือน</div>
					<div style="float:left;">
						<select id="inSearch" style="width:200px; height:30px; margin-right:20px; margin-top:2px;" name="month">
							<option value="all">ทุกเดือน</option>
							<option value="01">มกราคม</option>
							<option value="02">กุมภาพันธ์</option>
							<option value="03">มีนาคม</option>
							<option value="04">เมษายน</option>
							<option value="05">พฤษภาคม</option>
							<option value="06">มิถุนายน</option>
							<option value="07">กรกฎาคม</option>
							<option value="08">สิงหาคม</option>
							<option value="09">กันยายน</option>
							<option value="10">ตุลาคม</option>
							<option value="11">พฤศจิกายน</option>
							<option value="12">ธันวาคม</option>
						</select>
					</div>
					<br>
					<div style="float:left; width:100px;font-size:20px ;">ปี</div>
					<div style="float:left;">
						<select id="inSearch" style="width:200px; height:30px; margin-right:20px; margin-top:2px;" name="year">
							<option value="all">ทุกปีการศึกษา</option>
							<?php 
								$sql = "SELECT * FROM year";
								mysql_query("SET NAMES utf8");
								$query = mysql_query($sql);
								while ($data = mysql_fetch_array($query)) {
									echo '<option value='.$data['year'].'>'.$data['year'].'</option>';
								}
							 ?>
						</select>
					</div>
					
					<div style="float:left; margin:auto; margin-top:30px;">
						<input id="bt3" type="submit" name="submit" class="textbox" value="พิมพ์รายงาน">
					</div>
				</div>
			</div>
		</form>
	</div>

	<div id="popupReportReturn" class="overlay">
		<form name="formReportReturn" action="report/tcpdf/report/report_return_pdf.php" method="POST">
			<div class="popup">
				<div style="font-size:30px;">ออกรายงานการคืน</div>
				<a class="close" href="#">&times;</a>
				<div class="content">
					<div style="float:left; width:100px; font-size:20px;">เดือน</div>
					<div style="float:left;">
						<select id="inSearch" style="width:200px; height:30px; margin-right:20px; margin-top:2px;" name="month">
							<option value="all">ทุกเดือน</option>
							<option value="01">มกราคม</option>
							<option value="02">กุมภาพันธ์</option>
							<option value="03">มีนาคม</option>
							<option value="04">เมษายน</option>
							<option value="05">พฤษภาคม</option>
							<option value="06">มิถุนายน</option>
							<option value="07">กรกฎาคม</option>
							<option value="08">สิงหาคม</option>
							<option value="09">กันยายน</option>
							<option value="10">ตุลาคม</option>
							<option value="11">พฤศจิกายน</option>
							<option value="12">ธันวาคม</option>
						</select>
					</div>
					<br>
					<div style="float:left; width:100px;font-size:20px ;">ปี</div>
					<div style="float:left;">
						<select id="inSearch" style="width:200px; height:30px; margin-right:20px; margin-top:2px;" name="year">
							<option value="all">ทุกปีการศึกษา</option>
							<?php 
								$sql = "SELECT * FROM year";
								mysql_query("SET NAMES utf8");
								$query = mysql_query($sql);
								while ($data = mysql_fetch_array($query)) {
									echo '<option value='.$data['year'].'>'.$data['year'].'</option>';
								}
							 ?>
						</select>
					</div>
					
					<div style="float:left; margin:auto; margin-top:30px;">
						<input id="bt3" type="submit" name="submit" class="textbox" value="พิมพ์รายงาน">
					</div>
				</div>
			</div>
		</form>
	</div>

	<div id="popupLogout" class="overlay">
		<form action="logout.php" method="POST" name="formLogout">
			<div class="popup">
				<div style="font-size:30px;">ยืนยันการ Logout</div>
				<a class="close" href="#">&times;</a>
				<div class="content">
					<div style="float:left; margin:auto; margin-top:30px;">
						<input id="bt3" type="submit" name="submit" class="textbox" value="Logout">
					</div>
				</div>
			</div>
		</form>
	</div>

</body>
</html>