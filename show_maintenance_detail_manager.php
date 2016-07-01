<?php 
session_start(); 
include('config.php');
include('popup.php');

if ($_SESSION['type'] != 4) {
	echo "<script language='javascript'>";
	echo "location='index.php';";
	echo "</script>";
}

$id = $_GET['id'];

$sql = "SELECT * FROM data_mda WHERE id='$id';";
mysql_query("SET NAMES utf8");
$query = mysql_query($sql);
$data = mysql_fetch_array($query);

$id_mda = $data['id_mda'];
$id_type = $data['id_type'];
$year = $data['year'];
$detail = $data['detail'];
$brand = $data['brand'];
$picture = $data['picture'];
$status = $data['status'];

?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="image/icon.ico">
	<link rel="stylesheet" href="style.css">
	<title>เว็บไซต์ระบบฐานข้อมูลวัสดุครุภัณฑ์โรงเรียนอรรถวิทย์</title>

	<!-- datatable -->
	<script src="jquery-1.12.0.min.js"></script>      
	<script type="text/javascript" src="jquery-5.dataTables.min.js"></script>
	<link rel="stylesheet" href="jquery.dataTables.min.css" />  
</head>
<body id="add">
	<form action="add_maintenance_process.php" method="POST">
	<div style='width:100%; height:180px;'>
		<div style='width:1000px; heigth:100%; margin:auto; padding-top:1%;'>
			<div style='width:15%; heigth:100%; float:left;'>
				<img src='image/logo_ats.png' style="margin-top:20px;" width='90%'>
			</div>
			<div style='width:83%; heigth:100%; float:left; padding-left:2%;'>
				<h1 style="margin-top:55px;">เว็บไซต์ระบบฐานข้อมูลวัสดุครุภัณฑ์โรงเรียนอรรถวิทย์
				</h1>
			</div>
		</div>
	</div>

	<div style='width:100%; height:60px; background:#293352;'>
		<div style='width:1000px; heigth:100%; margin:auto; margin-top:17px; padding-top:12px;'>
			<div id="sMenu" style="width:90px; heigth:100%; float:left;">
				<a href="main_finance.php">
					<div><img src="image/home.png" width="38"></div>
				</a>
			</div>
			<div class="dropdown" style="width:280px; heigth:100%; float:left;">
				<a href="search_mda_manager.php">
					<div class="dropbtn">ค้นหา</div>
				</a>
				<div class="dropdown-content" style="width:280px;">
					<a href="search_mda_manager.php">ครุภัณฑ์</a>
					<a href="show_lent_manager.php">ประวัติการยืม</a>
					<a href="show_return_manager.php">ประวัติการคืน</a>
					<a href="history_mda_manager.php">ประวัติทรัพย์สิน</a>
					<a href="show_maintenance_manager.php">ประวัติการส่งซ่อม</a>
					</div>
			</div>			
			<div class="dropdown" style="width:280px; heigth:100%; float:left;">
				<div class="dropbtn">รายงาน</div>
				<div class="dropdown-content" style="width:280px;">
					<a href="#popupReport">รายงานทรัพย์สิน</a>
					<a href="#popupReportLent">รายงานการยืม</a>
					<a href="#popupReportReturn">รายงานการคืน</a>
					<!-- <a href="#">รายงานค่าเสื่อมราคา</a> -->
				</div>
			</div>
			<div class="dropdown" style="width:280px; heigth:100%; float:left;">
				<div class="dropbtn">การยืมคืน</div>
				<div class="dropdown-content" style="width:280px;">
					<a href="lent_mda_manager.php">ยืมครุภัณฑ์</a>
					<a href="return_mda_manager.php">คืนครุภัณฑ์</a>
				</div>
			</div>
			<div class="dropdown" style="width:50px; heigth:105%; float:left;">
				<div class="dropbtn"><img src="image/pass.png" width="36"></div>
				<div class="dropdown-content">
					<a href="#popupLogout">Logout</a>
				</div>
			</div>
		</div>
	</div>

	<div style="width:100%; height:5px; background:#ffffff;"></div>

	<div style='width:100%; height:80px; margin-top:-29px; background:#ffffff;'>
		<div style='width:1000px; height:100%; margin:auto; background:#ffffff;'>
			<h2>รายละเอียดการส่งซ่อม</h2>
		</div>
	</div>

	<div style='width:100%; height:650px; background:#d8b5fc;'> 
		<div style="width:1000px; height:100%; padding-left:20px; background:#e1c4ff; margin:auto; box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 6px 20px 0 rgba(0, 0, 0, 0.14);">
			<div id="inAdd"></div>
			<div style="width:380px; float:left; padding-left: 10px; font-family:TH Sarabun New; font-size: 25px; color:#565656; height:150px; float:left;">
			</div>
			<div style="margin-top:20px; width:600px; float:left; padding-left: 10px; font-family:TH Sarabun New; font-size: 25px; color:#565656; height:150px; float:left;">
				<div style="width:100%; height:30%; margin-top:-20px;">
					<img src="image/<?php echo $picture; ?>" id="image" style="margin-left:20px;" height="150" width="130"/>
				</div>
				<div style="width:100%; height:70%; margin-left:50px;">		
				</div>
			</div>

			<div id="inAdd" style="padding-top:200px;">
				เลขทะเบียน 
				<input id="textbox" style="height:30px; width:350px; margin-right:20px;" type="text" name="number" value="<?php echo $id_mda; ?>" readonly>
				หมวด 
				<input id="textbox" style="height:30px; width:200px; margin-right:20px;" type="text" name="type" value="<?php echo $id_type; ?>" readonly>
				ปีการศึกษา
				<input id="textbox" style="height:30px; width:120px;" type="text" name="year" value="<?php echo $year; ?>" readonly>
			</div>

			<?php 
				$sqlMaintenance = "SELECT * FROM maintenance WHERE id = $id";
				$query = mysql_query($sqlMaintenance);
				$dataMaintenance = mysql_fetch_array($query);

				echo "<div id='inAdd'>
					ผู้ดูแล
					<input id='textbox' style='height:30px; width:300px; margin-right:20px;' type='text' name='supervisor' value=".$dataMaintenance['supervisor']." readonly>
					วันที่ส่งซ่อม
					<input id='textbox' style='height:30px; width:200px;' type='date' name='date_send'  value=".$dataMaintenance['date_send']." readonly>
					วันที่ซ่อมเสร็จ
					<input id='textbox' style='height:30px; width:200px;' type='date' name='date_return' readonly>
				</div>

				<div style='width:100%; height:200px; margin-top:20px;'>
					<div style='width:45%; height:100%; float:left;'>
						<div style='width:150px; height:100%; float:left;'>
							<font style='font-family:TH Sarabun New; font-size: 25px; color:#565656; padding-left:10px;'>
								รายละเอียดการซ่อม
							</font>
						</div>
						<div style='width:270px; height:100%; float:left;'>
							<textarea class='textbox' name='detail' style='width:300px; height:100%;' rows='4' cols='50'>".$dataMaintenance['detail']."</textarea readonly>	
						</div>
					</div>

					<div style='width:53%; height:100%; float:left; padding-left:20px;'>
						<div style='width:100%; height:30%;'>
							<div style='width:100px; height:100%; float:left;'>
								<font style='font-family:TH Sarabun New; font-size: 25px; color:#565656; padding-left:10px;'>
									ชื่อบริษัท
								</font>
							</div>
							<div style='width:100%-100px; height:100%; float:left;'>
								<input id='textbox' style='height:30px; width:370px;' type='text' name='company' value=".$dataMaintenance['company']." readonly>
							</div>
						</div>	
						<div style='width:100%; height:50%;'>
							<div style='width:100px; height:100%; float:left;'>
								<font style='font-family:TH Sarabun New; font-size: 25px; color:#565656; padding-left:10px;' readonly>
									ค่าใช้จ่าย
								</font>
							</div>
							<div style='width:100%-100px; height:100%; float:left;'>
								<input id='textbox' style='height:30px; width:370px;' type='text' name='outgoings' value=".$dataMaintenance['outgoings']." readonly>
								<input type='hidden' name='id_data_mda' value=".$id.">
								<input type='hidden' name='status' value=".$status.">
								<input type='hidden' name='id_maintenance' value=".$dataMaintenance['id'].">
							</div>
						</div>	
					</div>					
				</div>";
			 ?>

		</div>

	</div>
	</form>

	<div style="background: #862ae3; margin-top:10px; width:100%;"></div>

	<div style="background:#323232; width:100%; height:30px; text-align: center; padding-top: 13px; margin-bottom:0px;">
		<font color="#ffffff">&copy Copyright By Attawit School Credit By Nutthapon.B</font>
	</div>
</body>
</html>

<script language='javascript'>
	
</script>