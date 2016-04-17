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

	<!-- datatable -->
	<script src="jquery-1.12.0.min.js"></script>      
	<script type="text/javascript" src="jquery.dataTables.min.js"></script>
	<link rel="stylesheet" href="jquery.dataTables.min.css" />  

	<title>เว็บไซต์ระบบฐานข้อมูลวัสดุครุภัณฑ์โรงเรียนอรรถวิทย์</title>
</head>
<body id="search">
<form name="form1">
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
			<h2>ประวัติการคืน</h2>
		</div>
	</div>

	<div style='width:100%; height:945px; background:#d8b5fc;'>
		<div style='width:980px; height:925px; padding-top:20px; padding-left:10px; padding-right:10px; background:#e1c4ff; margin:auto; box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 6px 20px 0 rgba(0, 0, 0, 0.14);'>
			<table id="example" class="display" style="font-size: 20px;" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		                <th>เลขทะเบียน</th>
		                <th>รายละเอียด</th>
		                <th>ผู้ยืม</th>
		                <th align='right'>วันที่ยืม</th>
		                <th align='left'>ปี</th>
		                <th>วันที่คืน</th>
		            </tr>
		        </thead>
		        <tbody>
		        	<?php 
		        	$sql = "SELECT * FROM lent_return WHERE status = 1";
		        	mysql_query("SET NAMES utf8");
		        	$query = mysql_query($sql);

		        	while ($data = mysql_fetch_array($query)) {

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

						$date = $explodeDate[0].' '.$month;

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
			                <td align='right'>".$date."</td>
			                <td>".$data['year']."</td>
			                <td><center>".$dateReturn."</center></td>
			            </tr>";
		        	}
		        	 ?>
		            
		        </tbody>
		    </table>
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


// datatable
$(document).ready(function() {
	//Filter Postion
	$('#example').DataTable( {
        "sDom": '<"top"f>rt<"bottom"p><"clear">'
    } );

    //List Filter Year
    var table = $('#example').DataTable();

	table.columns().each( function ( colIdx ) {
	    var select = $('<br><select><option value="">เลือกรายละเอียด</option></select>')
	        .appendTo(
	            table.column([1]).header()
	        )
	        .on( 'change', function () {
	            table
	                .column([1])
	                .search( $(this).val() )
	                .draw();
	        } );
	    table
	        .column([1])
	        .cache( 'search' )
	        .sort()
	        .unique()
	        .each( function ( d ) {	       
	            select.append( $('<option value="'+d+'">'+d+'</option>') );
	        } );
	} );

	table.columns().each( function ( colIdx ) {
	    var select = $('<select><option value="">เลือกผู้ยืม</option></select>')
	        .appendTo(
	            table.column([2]).header()
	        )
	        .on( 'change', function () {
	            table
	                .column([2])
	                .search( $(this).val() )
	                .draw();
	        } );
	    table
	        .column([2])
	        .cache( 'search' )
	        .sort()
	        .unique()
	        .each( function ( d ) {	       
	            select.append( $('<option value="'+d+'">'+d+'</option>') );
	        } );
	} );

	table.columns().each( function ( colIdx ) {
	    var select = $('<br><select><option value="">เลือกเดือน</option><option value="มกราคม">มกราคม</option><option value="กุมภาพันธ์">กุมภาพันธ์</option><option value="มีนาคม">มีนาคม</option><option value="เมษายน">เมษายน</option><option value="พฤษภาคม">พฤษภาคม</option><option value="มิถุนายน">มิถุนายน</option><option value="กรกฎาคม">กรกฎาคม</option><option value="สิงหาคม">สิงหาคม</option><option value="กันยายน">กันยายน</option><option value="ตุลาคม">ตุลาคม</option><option value="พฤศจิกายน">พฤศจิกายน</option><option value="ธันวาคม">ธันวาคม</option></select>')
	        .appendTo(
	            table.column([3]).header()
	        )
	        .on( 'change', function () {
	            table
	                .column([3])
	                .search( $(this).val() )
	                .draw();
	        } );
	} );
	table.columns().each( function ( colIdx ) {
	    var select = $('<select><option value="">เลือกปี</option></select>')
	        .appendTo(
	            table.column([4]).header()
	        )
	        .on( 'change', function () {
	            table
	                .column([4])
	                .search( $(this).val() )
	                .draw();
	        } );
	    table
	        .column([4])
	        .cache( 'search' )
	        .sort()
	        .unique()
	        .each( function ( d ) {	       
	            select.append( $('<option value="'+d+'">'+d+'</option>') );
	        } );
	} );

} );
</script>