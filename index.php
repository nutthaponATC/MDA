<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="image/icon.ico">
	<link rel="stylesheet" href="style.css">
	<title>เว็บไซต์ระบบฐานข้อมูลวัสดุครุภัณฑ์โรงเรียนอรรถวิทย์</title>
</head>
<body id="login">
	<div style="height:30%;">
		<div style="width:1000px; heigth:100%; margin:auto; padding-top:2%;">
			<div style="width:100%; heigth:100%; float:left; padding-left:2%;text-align:center;">
				<h1>เว็บไซต์ระบบฐานข้อมูลวัสดุครุภัณฑ์โรงเรียนอรรถวิทย์</h1>
			</div>
		</div>
	</div>

	<div style="height:40%;">
		<div style="width:30%; height:100%; margin:auto; background:#ffffff; border-radius:10px ;">
			<div style="width:361px; height:130px; background:#ffffff; margin:auto; padding-top:5px;">
			<img src="image/logo_ats.png" width="20%">
			<form action="login.php" method="POST" name="form1">
				<table>
					<tr>
						<td width="50px;">
							<p>ชื่อผู้ใช้</p>
						</td>
						<td>
							<input id="textbox" type="text" name="user">
						</td>
					</tr>
					<tr>
						<td>
							<p>รหัสผ่าน</p>
						</td>
						<td>
							<input id="textbox" type="password" name="pass">
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input id="bt" type="submit" name="login" value="เข้าสู่ระบบ">&nbsp
							<a href="http://www.attawit.ac.th">
								<input id="bt2" type="button" name="exit" value="กลับสู่เว็บไซต์">
							</a>
						</td>
					</tr>
				</table>
			</form>
			</div>
		</div>
	</div>

	<div style="height:23%;"></div>

	<div style="background-color:#323232; width:100%; height:5%; text-align: center; padding-top: 13px;">
		<font color="#ffffff">&copy Copyright By Attawit School Credit By Nutthapon.B</font>
	</div>
</body>
</html>