<?php 
session_start(); 
include('config.php');
include('popup.php');

if ($_SESSION['type'] != 3) {
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
<body id="barcode">
<form name="form1" action="report/tcpdf/report/report_barcode.php" method="POST">
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
			<div style="width:166px; heigth:100%; float:left;">
				<a href="main_finance.php">
					<div id="sMenu">หน้าหลัก</div>
				</a>
			</div>
			<div style="width:166px; heigth:100%; float:left;">
				<div class="dropdown">
					<div class="dropbtn">ค้นหา</div>
					<div class="dropdown-content">
						<a href="search_mda.php">ครุภัณฑ์</a>
						<a href="#">ประวัติการยืม</a>
						<a href="#">ประวัติการคืน</a>
					</div>
				</div>
			</div>
			<div style="width:166px; heigth:100%; float:left;">
				<a href="add_mda.php"><div id="sMenu">เพิ่มข้อมูล</div></a>
			</div>
			<div style="width:166px; heigth:100%; float:left;">
				<div class="dropdown">
					<div class="dropbtn">รายงาน</div>
					<div class="dropdown-content">
						<a href="#popup1">รายงานทรัพย์สิน</a>
						<a href="barcode.php">barcode</a>
						<a href="#">รายงานการยืม</a>
						<a href="#">รายงานการคืน</a>
						<a href="#">รายงานค่าเสื่อมราคา</a>
						<a href="#">รายงานประวัติทรัพย์สิน</a>
					</div>
				</div>
			</div>
			<div style="width:166px; heigth:100%; float:left;">
				<a href=""><div id="sMenu">ยืมคืน</div></a>
			</div>
			<div style="width:166px; heigth:100%; float:left;">
				<a href=""><div id="sMenu">จัดการข้อมูล</div></a>
			</div>
		</div>
	</div>

	<div style='width:100%; height:700px; background:#d8b5fc;'>
		<div style='width:980px; height:700px; padding-top:20px; padding-left:10px; padding-right:10px; background:#e1c4ff; margin:auto; box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 6px 20px 0 rgba(0, 0, 0, 0.14);'>
			<table id="example" class="display" style="font-size: 20px;" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		                <th>เลขทะเบียน</th>
		                <th>รายละเอียด</th>
		                <th>หมวด</th>
		                <th>ปีการศึกษา</th>
		                <th>เลือก</th>
		            </tr>
		        </thead>
		        <tfoot>
		            <tr>
		                <th></th>
		                <th></th>
		                <th></th>
		                <th></th>
		                <th></th>
		            </tr>
		        </tfoot>
		        <tbody>
		        	<?php 


		        	$sql = "SELECT * FROM data_mda";
		        	mysql_query("SET NAMES utf8");
		        	$query = mysql_query($sql);

		        	while ($data = mysql_fetch_array($query)) {
		        		echo "
		        		<tr>
			                <td>".$data['id_mda']."</td>
			                <td>".$data['detail']."</td>
			                <td>".$data['id_type']."</td>
			                <td>".$data['year']."</td>
			                <td><input type='checkbox' name='check[]' value=".$data['id']."></td>
			            </tr>";
		        	}
		        	 ?>
		            
		        </tbody>
		    </table>

			<div style="width:100%; height:50px; margin-right:50px; margin-top:20px; text-align: right;">
				<!-- <div style="width:500px; float:left;"></div>
				<div style="float:left;"> -->
					<input id="bt3" type="submit" name="submit" class="textbox" value="พิมพ์ barcode">
					<input id="bt3" type="reset" name="reset" class="textbox" value="ล้างข้อมูล">
				<!-- </div> -->
			</div>

		</div>
	</div>

	<div style="background:#323232; width:100%; height:30px; text-align: center; padding-top: 13px;">
		<font color="#ffffff">&copy Copyright By Attawit School Credit By Nutthapon.B</font>
	</div>
</form>
</body>
</html>

<script language='javascript'>

// datatable
$(document).ready(function() {
    // $('#example').DataTable();  //old

    var table = $('#example').DataTable();
	//Key search
	// table.search( '2556' ).draw();
 
 	// table.columns().flatten().each( function ( colIdx ) {	//flatten = all column
	table.columns().each( function ( colIdx ) {
	    // Create the select list and search operation
	    var select = $('<select />')
	        .appendTo(
	            table.column([3]).header()
	        )
	        .on( 'change', function () {
	            table
	                .column([3])
	                .search( $(this).val() )
	                .draw();
	        } );
	 
	    // Get the search data for the first column and add to the select list
	    table
	        .column([3])
	        .cache( 'search' )
	        .sort()
	        .unique()
	        .each( function ( d ) {
	            select.append( $('<option value="'+d+'">'+d+'</option>') );
	        } );
	} );


} );

//Gen data in table
jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.document.location = $(this).data("href");
    });
});
</script>