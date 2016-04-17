<?php 
session_start(); 
include('config.php');
include('popup.php');

if ($_SESSION['type'] != 2) {
	echo "<script language='javascript'>";
	echo "location='index.php';";
	echo "</script>";
}
?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="image/icon.ico">
	<link rel="stylesheet" href="style.css">
	<title>เว็บไซต์ระบบฐานข้อมูลวัสดุครุภัณฑ์โรงเรียนอรรถวิทย์</title>
</head>
<body id="add">
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
				<a href="main_teacher.php">
					<div><img src="image/home.png" width="38"></div>
				</a>
			</div>
			<div class="dropdown" style="width:400px; heigth:100%; float:left;">
				<a href="show_lent_admin.php">
					<div class="dropbtn"><center>ค้นหา</center></div>
				</a>
				<div class="dropdown-content" style="width:400px;">
					<a href="show_lent_admin.php">ประวัติการยืม</a>
					<a href="show_return_admin.php">ประวัติการคืน</a>
				</div>
			</div>			
			<div class="dropdown" style="width:400px; heigth:100%; float:left;">
				<div class="dropbtn"><center>การยืมคืน</center></div>
				<div class="dropdown-content" style="width:400px;">
					<a href="lent_mda_admin.php">ยืมครุภัณฑ์</a>
					<a href="return_mda_admin.php">คืนครุภัณฑ์</a>
				</div>
			</div>
			<div class="dropdown" style="width:50px; heigth:105%; float:left;">
				<a href="#popupLogout">
					<div class="dropbtn"><img src="image/pass.png" width="36"></div>
				</a>
				<div class="dropdown-content">
					<a href="setting_admin.php">การตั้งค่า</a>
					<a href="#popupLogout">Logout</a>
				</div>
			</div>
		</div>
	</div>

	<div style='width:100%; height:80px; margin-top:-29px; background:#ffffff;'>
		<div style='width:1000px; height:100%; margin:auto; background:#ffffff;'>
			<h2>การตั้งค่า</h2>
		</div>
	</div>

	
	<div style='width:100%; height:750px; background:#d8b5fc;'> 
		<div style="width:1000px; height:100%; background:#e1c4ff; margin:auto; box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 6px 20px 0 rgba(0, 0, 0, 0.14);">
			<form name="form1" action="setting_admin_process1.php" method="POST" enctype="multipart/form-data">
				<div style='width:1000px; height:50px; margin:auto; background: #862ae3; box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 6px 20px 0 rgba(0, 0, 0, 0.14);'>
					<div style="width:60%; height:100%; float:left;">
						<h2 style="margin-top:-15px; padding-left:10px; color:#ffffff;">ตั้งค่าปีการศึกษา</h2>
					</div>
					<div style="width:30%; height:100%; margin-left:50px; float:left;">
					</div>
				</div>

				<?php 
				$sqlYear = "SELECT * FROM year";
				$queryYear = mysql_query($sqlYear);
				$countYear = mysql_num_rows($queryYear);

				$i = 1;
				while ($i <= $countYear) {
					$dataYear = mysql_fetch_array($queryYear);
					$year[] = $dataYear['year'];
					
					$i++;
				}	
				$countYear = $countYear - 1;
				$year1 = $year[0];
				$year2 = $year[$countYear];
				
				?>
					
				<div style='margin-top:50px;'></div>
				<div style='width:225px; height:35px; margin-top:50px; margin:auto; floaf:left;'>
					<font size='5'><center>ปีการศึกษาที่มีอยู่แล้ว</center></font>
				</div>
				<div style='width:225px; height:35px; margin:auto; floaf:left;'>
					<div style='width:100px; height:30px; float:left;'>
						<input id='textbox' style='height:30px; width:100px;' type='text' name='yearS' value="<?php echo $year1; ?>">
					</div>
					<div style='width:20px; height:30px; float:left; padding-left:5px; margin-top:-18px;'>
					<font size='20px'>-</font>
					</div>
					<div style='width:100px; height:30px; float:left;'>
						<input id='textbox' style='height:30px; width:100px;' type='text' name='yearE' value="<?php echo $year2; ?>">
					</div>
				</div>

				<div style='margin-top:30px;'></div>
				<div style='width:225px; height:35px; margin-top:50px; margin:auto; floaf:left;'>
					<font size='5'><center>ต้องการเพิ่มปีการศึกษา</center></font>
				</div>
				<div style='width:225px; height:35px; margin:auto; floaf:left;'>
					<div style='width:100px; height:30px; float:left;'>
						<input id='textbox' style='height:30px; width:100px;' type='text' name='yearStart'>
					</div>
					<div style='width:20px; height:30px; float:left; padding-left:5px; margin-top:-18px;'>
					<font size='20px'>-</font>
					</div>
					<div style='width:100px; height:30px; float:left;'>
						<input id='textbox' style='height:30px; width:100px;' type='text' name='yearEnd'>
					</div>
				</div>	

				<div style='margin-top:10px;'></div>			
				
				<div style='width:350px; height:35px; margin:auto;'>
					<center><input id="bt3" type="submit" name="submit" value="เพิ่มปี"></center>
				</div>
			</form>

			<div style='margin-top:30px;'></div>

			<form name="form1" action="setting_admin_process2.php" method="POST" enctype="multipart/form-data">
				<div style='width:1000px; height:50px; margin:auto; background: #862ae3; box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 6px 20px 0 rgba(0, 0, 0, 0.14);'>
					<div style="width:60%; height:100%; float:left;">
						<h2 style="margin-top:-15px; padding-left:10px; color:#ffffff;">เพิ่มผู้ใช้งาน</h2>
					</div>
					<div style="width:30%; height:100%; margin-left:50px; float:left;">
					</div>
				</div>

				<div style='margin-top:20px;'></div>

				<div style="width:100%; height:35px; margin-top:20px;">
					<div style="width:300px; height:35px; float:left;"></div>
					<div style="width:150px; height:35px; float:left;">
						<font size='5'>username :</font> 
					</div>
					<div style="width:250px; height:35px; float:left;">
						<input id='textbox' style='height:30px; width:250px;' type='text' name='user'>
					</div>
					<div style="width:300px; height:35px; float:left;"></div>
				</div>

				<div style="width:100%; height:35px;">
					<div style="width:300px; height:35px; float:left;"></div>
					<div style="width:150px; height:35px; float:left;">
						<font size='5'>password :</font> 
					</div>
					<div style="width:250px; height:35px; float:left;">
						<input id='textbox' style='height:30px; width:250px;' type='text' name='pass'>
					</div>
					<div style="width:300px; height:35px; float:left;"></div>
				</div>

				<div style="width:100%; height:35px;">
					<div style="width:300px; height:35px; float:left;"></div>
					<div style="width:150px; height:35px; float:left;">
						<font size='5'>ชื่อผู้ใช้ :</font> 
					</div>
					<div style="width:250px; height:35px; float:left;">
						<input id='textbox' style='height:30px; width:250px;' type='text' name='name'>
					</div>
					<div style="width:300px; height:35px; float:left;"></div>
				</div>

				<div style="width:100%; height:35px;">
					<div style="width:300px; height:35px; float:left;"></div>
					<div style="width:150px; height:35px; float:left;">
						<font size='5'>แผนก :</font> 
					</div>
					<div style="width:250px; height:35px; float:left;">
						<input id='textbox' style='height:30px; width:250px;' type='text' name='dep'>
					</div>
					<div style="width:300px; height:35px; float:left;"></div>
				</div>

				<div style="width:100%; height:35px; margin-top:10px;">
					<div style="width:300px; height:35px; float:left;"></div>
					<div style="width:150px; height:35px; float:left;">
						<font size='5'>ประเภท :</font> 
					</div>
					<div style="width:250px; height:35px; float:left;">
						<select name="type" id="inSearch" style="width:250; margin-left: 0px;">
							<option value="4">ผู้บริหาร</option>
							<option value="3">การเงิน</option>
							<option value="2">IT</option>
							<option value="1" selected>ครู</option>
						</select>	
					</div>
					<div style="width:300px; height:35px; float:left;"></div>
				</div>

				<div style="width:100%; height:35px; margin-top:10px;">
					<div style="width:300px; height:35px; float:left;"></div>
					<div style="width:150px; height:35px; float:left;">
					</div>
					<div style="width:250px; height:35px; float:left;">
						<input id="bt3" type="submit" name="submit" value="เพิ่มผู้ใช้">
					</div>
					<div style="width:300px; height:35px; float:left;"></div>
				</div>

			</form>
		</div>
	</div>
	
	
	<div style="background: #862ae3; margin-top:10px; width:100%;"></div>

	<div style="background:#323232; width:100%; height:30px; text-align: center; padding-top: 13px; margin-bottom:0px;">
		<font color="#ffffff">&copy Copyright By Attawit School Credit By Nutthapon.B</font>
	</div>
</body>
</html>