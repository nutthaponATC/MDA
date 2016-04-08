<?php 
session_start(); 
include('config.php');

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

	<div style='width:100%; height:60px;background:#293352;'>
		<div style='width:1000px; heigth:100%; margin:auto; margin-top:17px; padding-top:12px;'>
			<div style="width:166px; heigth:100%; float:left;">
				<a href="main_finance.php">
					<font id="subMenu">หน้าหลัก</font>
				</a>
			</div>
			<div style="width:166px; heigth:100%; float:left;">
				<a href="search_mda.php">
					<font id="subMenu">ค้นหา</font>
				</a>
			</div>
			<div style="width:166px; heigth:100%; float:left;">
				<a href="add_mda.php"><font id="subMenu">เพิ่มข้อมูล</font></a>
			</div>
			<div style="width:166px; heigth:100%; float:left;">
				<a href=""><font id="subMenu">รายงาน</font></a>
			</div>
			<div style="width:166px; heigth:100%; float:left;">
				<a href=""><font id="subMenu">ยืมคืน</font></a>
			</div>
			<div style="width:166px; heigth:100%; float:left;">
				<a href=""><font id="subMenu">จัดการข้อมูล</font></a>
			</div>
		</div>
	</div>

	<div style='width:100%; height:720px; background:#d8b5fc;'> 
		<div style="width:1000px; height:100%; background:#e1c4ff; margin:auto; box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 6px 20px 0 rgba(0, 0, 0, 0.14);">
			<div id="inAdd" style="padding-top:20px; height:55px; width:990px; background:#ffffff; box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 6px 20px 0 rgba(0, 0, 0, 0.14);">
				<div style="width:60%; height:100%; float:left;">
					<font id="topic">ข้อมูลวัสดุครุภัณฑ์</font>
				</div>
				<div style="width:30%; height:100%; margin-left:50px; float:left;">
					<div style="width:150px; float:left;">
						<a href="edit_mda.php?id=<?php echo $id; ?>"><input id="bt3" type="button" name="edit" class="textbox" value="แก้ไขข้อมูล"></a>
					</div>
					<div style="width:10%; float:left;">
						<a href="search_mda.php"><input id="bt3" type="button" name="back" class="textbox" value="ย้อนกลับ"></a>
					</div>				
				</div>
			</div>
			
			<div style="margin-top:20px; width:380px; float:left; padding-left: 10px; font-family:TH Sarabun New; font-size: 25px; color:#565656; height:150px; float:left;">
				<div style="width:200; height:150px; float:left;">
				</div>
				<div style="width:130; height:150px; float:left;">
				</div>
			</div>
			<div style="margin-top:20px; width:600px; float:left; padding-left: 10px; font-family:TH Sarabun New; font-size: 25px; color:#565656; height:150px; float:left;">
				<div style="width:100%; height:30%;">
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
	<div style='width:100%; height:50px; background:#d8b5fc; margin-bottom:-20px;'> 	<div style="width:1000px; height:100%; background:#e1c4ff; margin:auto;  box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 6px 20px 0 rgba(0, 0, 0, 0.14);"></div>
	</div>

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