<?php 
include('config.php');
 ?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<div id="popup1" class="overlay">
		<form name="form1" action="report/tcpdf/report/report_mda_pdf.php" method="POST">
			<div class="popup">
				<h3>ออกรายงานทรัพย์สิน</h3>
				<a class="close" href="#">&times;</a>
				<div class="content">
					<div style="float:left; width:100px;">หมวด</div>
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
					<div style="float:left; width:100px;">ปีการศึกษา</div>
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

</body>
</html>
