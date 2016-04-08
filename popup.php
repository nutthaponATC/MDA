<?php 
include('config.php');
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
		<form name="form1" action="report/tcpdf/report/report_mda_pdf.php" method="POST">
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


</body>
</html>
