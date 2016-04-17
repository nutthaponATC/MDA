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

	<!-- datatable -->
	<script src="jquery-1.12.0.min.js"></script>      
	<script type="text/javascript" src="jquery-5.dataTables.min.js"></script>
	<link rel="stylesheet" href="jquery.dataTables.min.css" />  
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
					<a href="history_mda.php">ประวัติทรัพย์สิน</a>
					<a href="show_maintenance.php">ประวัติการส่งซ้อม</a>
					</div>
			</div>			
			<div class="dropdown" style="width:160px; heigth:100%; float:left;">
				<div class="dropbtn">เพิ่มข้อมูล</div>
				<div class="dropdown-content">
					<a href="add_mda.php">เพิ่มข้อมูลครุภัณฑ์</a>
					<a href="select_maintenance.php">เพิ่มข้อมูลการซ้อม</a>
				</div>
			</div>
			<div class="dropdown" style="width:160px; heigth:100%; float:left;">
				<div class="dropbtn">รายงาน</div>
				<div class="dropdown-content">
					<a href="#popupReport">รายงานทรัพย์สิน</a>
					<a href="barcode.php">barcode</a>
					<a href="#popupReportLent">รายงานการยืม</a>
					<a href="#popupReportReturn">รายงานการคืน</a>
					<!-- <a href="#">รายงานค่าเสื่อมราคา</a> -->

				</div>
			</div>
			<div class="dropdown" style="width:160px; heigth:100%; float:left;">
				<div class="dropbtn">การยืมคืน</div>
				<div class="dropdown-content">
					<a href="lent_mda.php">ยืมครุภัณฑ์</a>
					<a href="return_mda.php">คืนครุภัณฑ์</a>
				</div>
			</div>
			<a href="approve_mda.php">
				<div id="sMenu" style="width:160px; heigth:100%; float:left;">
					<div style="width:100px; float:left;">การอนุมัติ</div>
					<?php 
					if ($numberApprove == 0) {
						echo "<div style='width:30px; height:35px; float:left;'></div>";	
					} else {
						echo "<div style='width:30px; height:35px; float:left; border-color: #ff0000; border-style: solid; border-radius: 5px; text-align:center; margin-top:-3px; color: #ff0000;'>".$numberApprove."</div>";	
					}
					 ?>
				</div>
			</a>
			<div class="dropdown" style="width:50px; heigth:105%; float:left;">
				<div class="dropbtn"><img src="image/pass.png" width="36"></div>
				<div class="dropdown-content">
					<a href="setting_finance.php">การตั้งค่า</a>
					<a href="#popupLogout">Logout</a>
				</div>
			</div>
		</div>
	</div>

	<div style="width:100%; height:5px; background:#ffffff;"></div>

	<div style='width:100%; height:80px; background:#ffffff;'>
		<div style='width:1000px; height:100%; margin:auto; background:#ffffff;'>
			<div style="width:60%; height:100%; float:left;">
				<h2 style="margin-top:-5px;">ข้อมูลวัสดุครุภัณฑ์</h2>
			</div>
			<div style="width:30%; height:100%; margin-left:50px; float:left;">
				<div style="width:150px; float:left; margin-top:20px;">
					<a href="edit_mda.php?id=<?php echo $id; ?>"><input id="bt3" type="button" name="edit" class="textbox" value="แก้ไขข้อมูล"></a>
				</div>
				<div style="width:10%; float:left; margin-top:20px;">
					<a href="search_mda.php"><input id="bt3" type="button" name="back" class="textbox" value="ย้อนกลับ"></a>
				</div>				
			</div>
		</div>
	</div>

	<div style='width:100%; height:1600px; background:#d8b5fc;'> 
		<div style="width:1000px; height:100%; background:#e1c4ff; margin:auto; box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 6px 20px 0 rgba(0, 0, 0, 0.14);">
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

			<div style='margin-top:230px;'></div>

			<div style='width:1000px; height:50px; margin:auto; background: #862ae3; box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 6px 20px 0 rgba(0, 0, 0, 0.14);'>
				<div style="width:60%; height:100%; float:left;">
					<h2 style="margin-top:-15px; padding-left:10px; color:#ffffff;">ประวัติทรัพย์สิน</h2>
				</div>
				<div style="width:30%; height:100%; margin-left:50px; float:left;">
				</div>
			</div>

			<div style='width:980px; height:350px; padding-top:20px;'>
				<table id="example" class="display" style="font-size: 20px; margin-left:10px; margin-right:10px; " cellspacing="0" width="100%">
			        <thead>
			            <tr>
			                <th>เลขทะเบียน</th>
			                <th>รายละเอียด</th>
			                <th>ผู้ยืม</th>
			                <th>วันที่ยืม</th>
			                <th>วันที่คืน</th>
			                <th>สถานะ</th>
			            </tr>
			        </thead>
			        <tbody>
			        	<?php 
			        	$sql = "SELECT * FROM lent_return WHERE id_data_mda = '$id'";
			        	mysql_query("SET NAMES utf8");
			        	$query = mysql_query($sql);

			        	while ($data = mysql_fetch_array($query)) {

			        		if ($data['status'] == 0) {
			        			$statusLent = 'รอการอนุมัติ';
			        		} elseif ($data['status'] == 1) {
			        			$statusLent = 'คืนแล้ว';
			        		} else {
			        			$statusLent = 'ยังไม่ได้คืน';
			        		}

			        		$dateInput = date('j F Y', strtotime($data['date_lent']));
							$explodeDate = explode(" ", $dateInput);

							switch($explodeDate[1]) {
							    case "January": $month = "มกราคม"; break;
							    case "February": $month = "กุมภาพันธ์"; break;
							    case "March": $month = "มีนาคม"; break;
							    case "April": $month = "เมษายน"; break;
							    case "May": $month = "พฤษภาคม"; break;
							    case "June": $month = "มิถุนายน"; break;
							    case "July": $month = "กรกฎาคม"; break;
							    case "August": $month = "สิงหาคม"; break;
							    case "September": $month = "กันยายน"; break;
							    case "October": $month = "ตุลาคม"; break;
							    case "November": $month = "พฤศจิกายน"; break;
							    case "December": $month = "ธันวาคม"; break;
							}

							$date = $explodeDate[0].' '.$month.' '.$explodeDate[2];

							$dateInputReturn = date('j F Y', strtotime($data['date_lent']));
							$explodeDateReturn = explode(" ", $dateInputReturn);

							switch($explodeDateReturn[1]) {
							    case "January": $month = "มกราคม"; break;
							    case "February": $month = "กุมภาพันธ์"; break;
							    case "March": $month = "มีนาคม"; break;
							    case "April": $month = "เมษายน"; break;
							    case "May": $month = "พฤษภาคม"; break;
							    case "June": $month = "มิถุนายน"; break;
							    case "July": $month = "กรกฎาคม"; break;
							    case "August": $month = "สิงหาคม"; break;
							    case "September": $month = "กันยายน"; break;
							    case "October": $month = "ตุลาคม"; break;
							    case "November": $month = "พฤศจิกายน"; break;
							    case "December": $month = "ธันวาคม"; break;
							}

							$dateReturn = $explodeDateReturn[0].' '.$month.' '.$explodeDateReturn[2];

			        		echo "
			        		<tr>
				                <td>".$data['id_mda']."</td>
				                <td>".$data['name_mda']."</td>
				                <td>".$data['name_user']."</td>
				                <td><center>".$date."</center></td>
				                <td><center>".$dateReturn."</center></td>
				                <td><center>".$statusLent."</center></td>
				            </tr>";
			        	}
			        	 ?>
			            
			        </tbody>
			    </table>

			    <div style='margin-top:80px;'></div>

			    <div style='width:1000px; height:50px; margin-right:0px; margin:auto; background: #862ae3; box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 6px 20px 0 rgba(0, 0, 0, 0.14);'>
					<div style="width:60%; height:100%; float:left;">
						<h2 style="margin-top:-15px; padding-left:10px; color:#ffffff;">ประวัติการซ้อม</h2>
					</div>
					<div style="width:30%; height:100%; margin-left:50px; float:left;">
					</div>
				</div>
			</div>
		
			<div style='width:980px; height:300px; padding-top:20px; margin-left:10px;'>
				<table id="example2" class="display" style="font-size: 20px;" cellspacing="0" width="100%">
			        <thead>
			            <tr>
			                <th>เลขทะเบียน</th>
			                <th>รายละเอียด</th>
			                <th>รายละเอียดการซ้อม</th>
			                <th>ปีการศึกษา</th>
			                <th>สถานะ</th>
			            </tr>
			        </thead>
			        <tbody>
			        	<?php 
			        	$sql = "SELECT * FROM maintenance WHERE id_data_mda = $id";
			        	mysql_query("SET NAMES utf8");
			        	$query = mysql_query($sql);

			        	while ($data = mysql_fetch_array($query)) {
			        		$id_data_mda = $data['id_data_mda'];
			        		$sqlDataMda = "SELECT * FROM data_mda WHERE id = $id_data_mda";
			        		$queryDataMda = mysql_query($sqlDataMda);
			        		$dataMda = mysql_fetch_array($queryDataMda);

			        		if ($data['status'] == 0) {
			        			$statusMaintenance = 'ส่งซ้อม';
			        		} else {
			        			$statusMaintenance = 'ซ้อมเรียบร้อย';
			        		}

			        		$dateInput = date('j F Y', strtotime($data['date_send']));
							$explodeDate = explode(" ", $dateInput);

							switch($explodeDate[1]) {
							    case "January": $month = "มกราคม"; break;
							    case "February": $month = "กุมภาพันธ์"; break;
							    case "March": $month = "มีนาคม"; break;
							    case "April": $month = "เมษายน"; break;
							    case "May": $month = "พฤษภาคม"; break;
							    case "June": $month = "มิถุนายน"; break;
							    case "July": $month = "กรกฎาคม"; break;
							    case "August": $month = "สิงหาคม"; break;
							    case "September": $month = "กันยายน"; break;
							    case "October": $month = "ตุลาคม"; break;
							    case "November": $month = "พฤศจิกายน"; break;
							    case "December": $month = "ธันวาคม"; break;
							}

							$year = $explodeDate[2]+543;

							$date = $explodeDate[0].' '.$month.' '.$year;

			        		echo "
			        		<tr>
				                <td>".$data['id_mda']."</td>
				                <td>".$dataMda['detail']."</td>
				                <td>".$data['detail']."</td>
				                <td><center>".$data['year']."</center></td>
				                <td><center>".$statusMaintenance."</center></td>
				            </tr>";
			        	}
			        	 ?>
			            
			        </tbody>
			    </table>
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
	$(document).ready(function() {
		//Filter Postion
		$('#example').DataTable( {
	        "sDom": '<"top">rt<"bottom"><"clear">'
	    } );

		//List Filter Year
	    var table = $('#example').DataTable();
    } );

    $(document).ready(function() {
		//Filter Postion
		$('#example2').DataTable( {
	        "sDom": '<"top">rt<"bottom"><"clear">'
	    } );

	    //List Filter Year
	    var table = $('#example2').DataTable();
	} );

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