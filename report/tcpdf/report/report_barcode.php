<?php
ob_start();
//include pdf
include('../../../config.php');
require_once('tcpdf_include.php');

//create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetCreator(PDF_CREATOR);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
$pdf->SetMargins(5, 10, 5);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

$pdf->SetFont('thsarabun', '', 10);

//gen pdf
$pdf->AddPage();

//Input check from html
// $check = $_POST['check'];

//Input
$arrayName = $_POST['check'];

$count = count($arrayName);
$i = 0;	//number array
$j = 1; //number object for table

while ($i < $count) {
	$id = $arrayName[$i];

	$sql = 'SELECT * FROM data_mda INNER JOIN type On data_mda.id_type = type.id_type WHERE id = '.$id.'';
	mysql_query("SET NAMES utf8");
	$query = mysql_query($sql) or die(mysql_error());
	$fetchArray = mysql_fetch_array($query);

	$id_type = $fetchArray['id_type'];
	$detail = $fetchArray['detail'];
	$brand = $fetchArray['brand'];
	$date_in = $fetchArray['date_in'];
	$applications = $fetchArray['applications'];
	$company = $fetchArray['company'];
	$tel = $fetchArray['tel'];
	$id_mda = $fetchArray['id_mda'];
 
	if ($query) {
		if ($j == 1) {
			$html .= '
				<table>
					<tr>
						<td width="180px">
							<table border="1">
								<tr><td width="175px" align="center">โรงเรียนอรรถวิทย์</td></tr>
							</table>
							<table border="1">
								<tr>
									<td width="60px"> หมวดทรัพย์สิน</td>
									<td width="115px"> '.$id_type.'</td>
								</tr>
								<tr>
									<td> ชื่อทรัพย์สิน</td>
									<td> '.$detail.'</td>
								</tr>
								<tr>
									<td> ยี่ห้อ / รุ่น</td>
									<td> '.$brand.'</td>
								</tr>
								<tr>
									<td> วันที่จัดซื้อ</td>
									<td> '.$date_in.'</td>
								</tr>
								<tr>
									<td> สถานที่ตั้ง</td>
									<td> '.$applications.'</td>
								</tr>
								<tr>
									<td> ผู้จำหน่าย</td>
									<td> '.$company.'</td>
								</tr>
								<tr>
									<td> เบอร์ติดต่อ</td>
									<td> '.$tel.'</td>
								</tr>
							</table>
							<table border="1">
								<tr>
									<td width="175px"><font size="20"> '.$id_mda.'</font></td>
								</tr>
							</table>
						</td>';

		} elseif ($j == 2 || $j == 3) {
			$html .= '
				<td width="180px">
					<table border="1">
						<tr><td width="175px" align="center">โรงเรียนอรรถวิทย์</td></tr>
					</table>
					<table border="1">
						<tr>
							<td width="60px"> หมวดทรัพย์สิน</td>
							<td width="115px"> '.$id_type.'</td>
						</tr>
						<tr>
							<td> ชื่อทรัพย์สิน</td>
							<td> '.$detail.'</td>
						</tr>
						<tr>
							<td> ยี่ห้อ / รุ่น</td>
							<td> '.$brand.'</td>
						</tr>
						<tr>
							<td> วันที่จัดซื้อ</td>
							<td> '.$date_in.'</td>
						</tr>
						<tr>
							<td> สถานที่ตั้ง</td>
							<td> '.$applications.'</td>
						</tr>
						<tr>
							<td> ผู้จำหน่าย</td>
							<td> '.$company.'</td>
						</tr>
						<tr>
							<td> เบอร์ติดต่อ</td>
							<td> '.$tel.'</td>
						</tr>
					</table>
					<table border="1">
						<tr>
							<td width="175px"><font size="20"> '.$id_mda.'</font></td>
						</tr>
					</table>
				</td>';

		} else {
			$html .= '
						<td width="180px">
							<table border="1">
								<tr><td width="175px" align="center">โรงเรียนอรรถวิทย์</td></tr>
							</table>
							<table border="1">
								<tr>
									<td width="60px"> หมวดทรัพย์สิน</td>
									<td width="115px"> '.$id_type.'</td>
								</tr>
								<tr>
									<td> ชื่อทรัพย์สิน</td>
									<td> '.$detail.'</td>
								</tr>
								<tr>
									<td> ยี่ห้อ / รุ่น</td>
									<td> '.$brand.'</td>
								</tr>
								<tr>
									<td> วันที่จัดซื้อ</td>
									<td> '.$date_in.'</td>
								</tr>
								<tr>
									<td> สถานที่ตั้ง</td>
									<td> '.$applications.'</td>
								</tr>
								<tr>
									<td> ผู้จำหน่าย</td>
									<td> '.$company.'</td>
								</tr>
								<tr>
									<td> เบอร์ติดต่อ</td>
									<td> '.$tel.'</td>
								</tr>
							</table>
							<table border="1">
								<tr>
									<td width="175px"><font size="20"> '.$id_mda.'</font></td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
				<table><tr><td></td></tr></table>';
			$j = 0;

		}
	}

	$i++;
	$j++;
}

//create pdf
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->lastPage();
$pdf->Output('barcode.pdf', 'I');

?>