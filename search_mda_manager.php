<?php 
session_start(); 
include('config.php');
include('popup.php');

if ($_SESSION['type'] != 4) {
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

	<div style='width:100%; height:80px; margin-top:-29px; background:#ffffff;'>
		<div style='width:1000px; height:100%; margin:auto; background:#ffffff;'>
			<h2>ค้นหาข้อมูลวัสดุ ครุภัณฑ์</h2>
		</div>
	</div>

	<div style='width:100%; height:945px; background:#d8b5fc;'>
		<div style='width:980px; height:925px; padding-top:20px; padding-left:10px; padding-right:10px; background:#e1c4ff; margin:auto; box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 6px 20px 0 rgba(0, 0, 0, 0.14);'>
			<table id="example" class="display" style="font-size: 20px;" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		                <th>เลขทะเบียน</th>
		                <th>รายละเอียด</th>
		                <th>หมวด</th>
		                <th>ปีการศึกษา</th>
		            </tr>
		        </thead>
		        <tbody>
		        	<?php 
		        	$sql = "SELECT * FROM data_mda";
		        	mysql_query("SET NAMES utf8");
		        	$query = mysql_query($sql);

		        	while ($data = mysql_fetch_array($query)) {
		        		echo "
		        		<tr style='cursor: hand;' data-href='show_mda_manager.php?id=".$data['id']."'>
			                <td>".$data['id_mda']."</td>
			                <td>".$data['detail']."</td>
			                <td><center>".$data['id_type']."</center></td>
			                <td><center>".$data['year']."</center></td>
			            </tr>";
		        	}
		        	 ?>
		            
		        </tbody>
		    </table>
		</div>

	</div>

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
	    var select = $('<select><option value="">เลือกปี</option></select>')
	        .appendTo(
	            table.column([3]).header()
	        )
	        .on( 'change', function () {
	            table
	                .column([3])
	                .search( $(this).val() )
	                .draw();
	        } );
	    table
	        .column([3])
	        .cache( 'search' )
	        .sort()
	        .unique()
	        .each( function ( d ) {	       
	            select.append( $('<option value="'+d+'">'+d+'</option>') );
	        } );
	} );

	//List Filter Type
	table.columns().each( function ( colIdx ) {
	    var select = $('<select><option value="">เลือกหมวด</option></select>')
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

} );

//tr link
jQuery(document).ready(function($) {
    $('#example').on( 'click', 'tbody tr', function () {
        window.document.location = $(this).data("href");
    });
});
</script>