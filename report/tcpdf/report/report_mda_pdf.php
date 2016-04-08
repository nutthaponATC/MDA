<?php
ini_set("memory_limit","32M");
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
$pdf->SetMargins(7, 10, 5);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

$pdf->SetFont('thsarabun', '', 14);

//gen pdf
$pdf->AddPage('L', 'A4');

$year = $_POST['year'];
$type = $_POST['type'];
$record = $_POST['record'];

if ($year == 'all' && $type == 'all') {
	$sqlGetData = 'SELECT * FROM data_mda';
	$type = 'ทุกหมวด';
	$typeName = '';
	$year = 'ทุกปีการศึกษา';

} elseif ($year == 'all') {
	$sqlGetData = 'SELECT * FROM data_mda WHERE id_type = '.$type.'';
	$sqlNameType = 'SELECT * FROM type WHERE id_type = '.$type.'';
	mysql_query("SET NAMES utf8");
	$query = mysql_query($sqlNameType) or die(mysql_error());
	$fetchType = mysql_fetch_array($query);

	$typeName = $fetchType['detail'];
	$year = 'ทุกปีการศึกษา';

} elseif ($type == 'all') {
	$sqlGetData = 'SELECT * FROM data_mda WHERE year = '.$year.'';
	$type = 'ทุกหมวด';
	$typeName = '';

} else {
	$sqlGetData = 'SELECT * FROM data_mda WHERE year = '.$year.' AND id_type = '.$type.'';
	$sqlNameType = 'SELECT * FROM type WHERE id_type = '.$type.'';
	mysql_query("SET NAMES utf8");
	$query = mysql_query($sqlNameType) or die(mysql_error());
	$fetchType = mysql_fetch_array($query);

	$typeName = $fetchType['detail'];

}

mysql_query("SET NAMES utf8");
$query = mysql_query($sqlGetData) or die(mysql_error());

$i = 1;
$j = 1;

while ($fetchArray = mysql_fetch_array($query)) {
	$id_mda = $fetchArray['id_mda'];
	$detail = $fetchArray['detail'];
	$brand = $fetchArray['brand'];
	$amount = $fetchArray['amount'];
	$price = $fetchArray['price'];
	$total_price = $fetchArray['total_price'];
	$applications = $fetchArray['applications'];
	$note = $fetchArray['note'];
	$date_in = $fetchArray['date_in'];

	if ($i == $record) {
		$i = 1;
		$html .= '</table><br pagebreak="true"/>';
	}
 
	if ($i == 1) {
		$html .= '<table align="center"><tr><td><font size="18">ทะเบียนทรัพย์สิน</font></td></tr>
		<tr><td><font size="18">หมวดที่  '.$type.'  '.$typeName.'</font></td></tr>
		<tr><td><font size="18">ประจำปีการศึกษา '.$year.'</font></td></tr></table>
		<table border="1"><tr>
			<td width="30px"> ที่</td>
			<td width="70px"> วันที่รับ</td>
			<td width="130px"> เลขทะเบียน</td>
			<td width="200px"> ประเภท</td>
			<td width="150px"> ยี่ห้อ/รุ่น</td>
			<td width="50px"> จำนวน</td>
			<td width="70px"> ราคา/หน่วย</td>
			<td width="80px"> จำนวนเงิน</td>
			<td width="120px"> สถานที่ใช้งาน</td>
			<td width="100px"> หมายเหตุ</td>
		</tr></table>
		<table border="1"><tr>
			<td width="30px"> '.$j.'</td>
			<td width="70px"> '.$date_in.'</td>
			<td width="130px"> '.$id_mda.'</td>
			<td width="200px"> '.$detail.'</td>
			<td width="150px"> '.$brand.'</td>
			<td width="50px"> '.$amount.'</td>
			<td width="70px"> '.$price.'</td>
			<td width="80px"> '.$total_price.'</td>
			<td width="120px"> '.$applications.'</td>
			<td width="100px"> '.$note.'</td>
		</tr>';
	} else {
		$html .= '<tr>
			<td> '.$j.'</td>
			<td> '.$date_in.'</td>
			<td> '.$id_mda.'</td>
			<td> '.$detail.'</td>
			<td> '.$brand.'</td>
			<td> '.$amount.'</td>
			<td> '.$price.'</td>
			<td> '.$total_price.'</td>
			<td> '.$applications.'</td>
			<td> '.$note.'</td>
		</tr>';
	}
	$i++;
	$j++;
}
$html .= '</table>';

//create pdf
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->lastPage();
$pdf->Output('report_mda.pdf', 'I');

?>