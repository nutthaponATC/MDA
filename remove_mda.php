<?php 
session_start(); 
include('config.php');
include('popup.php');

if ($_SESSION['type'] != 3) {
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
$amount = $data['amount'];
$price = $data['price'];
$total_price = $data['total_price'];
$applications = $data['applications'];
$note = $data['note'];
$date_in = $data['date_in'];
$company = $data['company'];
$address = $data['address'];
$tel = $data['tel'];
$fax = $data['fax'];
$web = $data['web'];
$picture = $data['picture'];

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
				<a href="main_finance.php">
					<div><img src="image/home.png" width="38"></div>
				</a>
			</div>
			<div class="dropdown" style="width:160px; heigth:100%; float:left;">
				<a href="search_mda.php">
					<div class="dropbtn">ค้นหา</div>
				</a>
				<div class="dropdown-content">
					<a href="search_mda.php">ครุภัณฑ์</a>
					<a href="show_lent.php">ประวัติการยืม</a>
					<a href="show_return.php">ประวัติการคืน</a>
					<a href="#">การส่งซ้อม</a>
				</div>
			</div>			
			<a href="add_mda.php">
				<div id="sMenu" style="width:160px; heigth:100%; float:left;">
					<div>เพิ่มข้อมูล</div>
				</div>
			</a>
			<div class="dropdown" style="width:160px; heigth:100%; float:left;">
				<div class="dropbtn">รายงาน</div>
				<div class="dropdown-content">
					<a href="#popupReport">รายงานทรัพย์สิน</a>
					<a href="barcode.php">barcode</a>
					<a href="#popupReportLent">รายงานการยืม</a>
					<a href="#popupReportReturn">รายงานการคืน</a>
					<a href="#">รายงานค่าเสื่อมราคา</a>
					<a href="#">รายงานประวัติทรัพย์สิน</a>
					<a href="#">ประวัติการส่งซ้อม</a>
				</div>
			</div>
			<div class="dropdown" style="width:160px; heigth:100%; float:left;">
				<div class="dropbtn">การยืมคืน</div>
				<div class="dropdown-content">
					<a href="lent_mda.php">ยืมครุภัณฑ์</a>
					<a href="return_mda.php">คืนครุภัณฑ์</a>
				</div>
			</div>
			<a href="">
				<div id="sMenu" style="width:140px; heigth:100%; float:left;">
					<div>การอนุมัติ</div>
				</div>
			</a>
			<a href="">
				<div id="sMenu" style="width:50px; heigth:105%; float:left;">
					<div><img src="image/pass.png" width="36"></div>
				</div>
			</a>
		</div>
	</div>

	<div style="width:100%; height:5px; background:#ffffff;"></div>

	<div style='width:100%; height:80px; background:#ffffff;'>
		<div style='width:1000px; height:100%; margin:auto; background:#ffffff;'>
			<div style="width:60%; height:100%; float:left;">
				<h2 style="margin-top:-5px;">ยืนยันการลบข้อมูล</h2>
			</div>
			<div style="width:30%; height:100%; margin-left:50px; float:left;">
				<div style="width:150px; float:left; margin-top:20px;">
					<a href="remove_mda_process.php?id=<?php echo $id; ?>"><input id="bt3" type="button" name="edit" class="textbox" value="ลบข้อมูล"></a>
				</div>
				<div style="width:10%; float:left; margin-top:20px;">
					<a href="search_mda.php"><input id="bt3" type="button" name="back" class="textbox" value="ย้อนกลับ"></a>
				</div>				
			</div>
		</div>
	</div>

	<div style='width:100%; height:780px; background:#d8b5fc;'> 
		<div style="width:1000px; height:100%; background:#e1c4ff; margin:auto; box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 6px 20px 0 rgba(0, 0, 0, 0.14);">
			<div id="inAdd"></div>
			
			<div style="margin-top:20px; width:380px; float:left; padding-left: 10px; font-family:TH Sarabun New; font-size: 25px; color:#565656; height:150px; float:left;">
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
				<input id="textbox" style="height:30px; width:320px;" type="text" name="number" value="<?php echo $id_mda; ?>" readonly>
				หมวด 
				<input id="textbox" style="height:30px; width:200px;" type="text" name="type" value="<?php echo $id_type; ?>" readonly>
				ปีการศึกษา
				<input id="textbox" style="height:30px; width:100px;" type="text" name="year" value="<?php echo $year; ?>" readonly>
			</div>

			<div id="inAdd">
				ประเภท
				<input id="textbox" style="height:30px; width:260px;" type="text" name="detail" value="<?php echo $detail; ?>" readonly>
				จำนวน 
				<input id="textbox" style="height:30px; width:60px;" type="text" name="count" onFocus="startCalc();" onBlur="stopCalc();" value="<?php echo $amount; ?>" readonly>
				ราคา/หน่วย
				<input id="textbox" style="height:30px; width:150px;" type="text" name="price" onFocus="startCalc();" onBlur="stopCalc();" value="<?php echo $price; ?>" readonly>
				จำนวนเงิน 
				<input id="textbox" style="height:30px; width:200px;" type="text" name="summaryB" value="<?php echo $total_price; ?>" readonly>
			</div>

			<div style="width:100%; height:200px;">
				<div style="width:42%; height:100%; float:left;">
					<div style="width:100px; height:100%; float:left;">
						<font style="font-family:TH Sarabun New; font-size: 25px; color:#565656; padding-left:10px;">
							ยี่ห้อ/รุ่น
						</font>
					</div>
					<div style="width:320px; height:100%; float:left;">
						<textarea class="textbox" name="brand" style="width:300px; height:100%;" rows="4" cols="50" readonly><?php echo $brand; ?></textarea>	
					</div>
				</div>

				<div style="width:56%; height:100%; float:left;">
					<div style="width:100%; height:50%;">
						<div style="width:100px; height:100%; float:left;">
							<font style="font-family:TH Sarabun New; font-size: 25px; color:#565656; padding-left:10px;">
								สถานที่ใช้งาน
							</font>
						</div>
						<div style="width:100%-100px; height:100%; float:left;">
							<textarea class="textbox" name="where" style="width:100%; height:90%;" rows="3" cols="60" readonly><?php echo $applications; ?></textarea>	
						</div>
					</div>	
					<div style="width:100%; height:50%;">
						<div style="width:100px; height:100%; float:left;">
							<font style="font-family:TH Sarabun New; font-size: 25px; color:#565656; padding-left:10px;">
								หมายเหตุ
							</font>
						</div>
						<div style="width:100%-100px; height:100%; float:left;">
							<textarea class="textbox" name="note" style="width:100%; height:90%;" rows="3" cols="60" readonly><?php echo $note; ?></textarea>	
						</div>
					</div>	
				</div>					
			</div>
			
			<div style="margin-top:20px; width:600px; float:left; padding-left: 10px; font-family:TH Sarabun New; font-size: 25px; color:#565656; height:150px; float:left;">
				<div id="inAdd" style="width:600px; float:left; margin-top:10px;">
					วันที่รับ
					<input id="textbox" style="height:30px; width:200px;" type="text" name="date" value="<?php echo $date_in; ?>" readonly>
					ชื่อบริษัท
					<input id="textbox" style="height:30px; width:270px;" type="text" name="ncompany" value="<?php echo $company; ?>" readonly>
				</div>
				<div id="inAdd" style="width:600px; float:left;">
					เบอร์โทรศัพท์
					<input id="textbox" style="height:30px; width:200px; margin-right:10px;" type="text" name="tel" value="<?php echo $tel ?>" readonly>
					เบอร์โทรสาร
					<input id="textbox" style="height:30px; width:195px;" type="text" name="fax" value="<?php echo $fax ?>" readonly>
				</div>
				<div id="inAdd" style="width:600px; float:left;">
					Website
					<input id="textbox" style="height:30px; width:530px;" type="text" name="web" value="<?php echo $web ?>" readonly>
				</div>
			</div>
			<div style="margin-top:20px; width:380px; float:left; padding-left: 10px; font-family:TH Sarabun New; font-size: 25px; color:#565656; height:150px; float:left;">
				<div style="width:50px; height:50px; float:left;">
					ที่อยู่
				</div>
				<div style="width:300px; height:150px; float:left;">
					<textarea class="textbox" name="address" style="width:300px; height:150px;" rows="3" cols="60" readonly><?php echo $address; ?></textarea>	
				</div>
			</div>
		</div>
	</div>

	<div style="background: #862ae3; margin-top:10px; width:100%;"></div>

	<div style="background:#323232; width:100%; height:30px; text-align: center; padding-top: 13px; margin-bottom:0px;">
		<font color="#ffffff">&copy Copyright By Attawit School Credit By Nutthapon.B</font>
	</div>
</body>
</html>

<script language='javascript'>
	document.getElementById("files").onchange = function () {
	    var reader = new FileReader();
	    reader.onload = function (e) {
	        document.getElementById("image").src = e.target.result;
	    };
	    reader.readAsDataURL(this.files[0]);
	};

	function startCalc(){ 
		interval = setInterval("calc()"); 
	} 
	function calc(){ 
		var count = document.form1.count.value;
		var price = document.form1.price.value;
		document.form1.summaryB.value = count * price;
	}
	function stopCalc(){ 
		clearInterval(interval); 
	} 
</script>