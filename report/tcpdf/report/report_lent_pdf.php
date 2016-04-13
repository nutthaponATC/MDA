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
$pdf->SetMargins(10, 10, 10);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

$pdf->SetFont('thsarabun', '', 14);

//gen pdf
$pdf->AddPage();

$year = $_POST['year'];
$dataMonth = $_POST['month'];

switch($dataMonth) {
	case "01": $months = "เดือนมกราคม"; break;
	case "02": $months = "เดือนกุมภาพันธ์"; break;
	case "03": $months = "เดือนมีนาคม"; break;
	case "04": $months = "เดือนเมษายน"; break;
	case "05": $months = "เดือนพฤษภาคม"; break;
	case "06": $months = "เดือนมิถุนายน"; break;
	case "07": $months = "เดือนกรกฎาคม"; break;
	case "08": $months = "เดือนสิงหาคม"; break;
	case "09": $months = "เดือนกันยายน"; break;
	case "10": $months = "เดือนตุลาคม"; break;
	case "11": $months = "เดือนพฤศจิกายน"; break;
	case "12": $months = "เดือนธันวาคม"; break;
}

if ($year == 'all' && $dataMonth == 'all') {
	$sqlGetData = 'SELECT * FROM lent_return';
	$months = 'ทุกเดือน';
	$year = 'ทุกปีการศึกษา';

} elseif ($year == 'all') {
	$sqlGetData = 'SELECT * FROM lent_return WHERE date_lent LIKE "%-'.$dataMonth.'-%"';
	$year = 'ทุกปีการศึกษา';

} elseif ($dataMonth == 'all') {
	$sqlGetData = 'SELECT * FROM lent_return WHERE year = '.$year.'';
	$months = 'ทุกเดือน';

} else {
	$sqlGetData = 'SELECT * FROM lent_return WHERE date_lent LIKE "%-'.$dataMonth.'-%" AND year LIKE "%'.$year.'%"';

}

mysql_query("SET NAMES utf8");
$query = mysql_query($sqlGetData) or die(mysql_error('ไม่พบข้อมูล'));

$i = 1;
$j = 1;
$record = 35;

while ($fetchArray = mysql_fetch_array($query)) {
	$id_mda = $fetchArray['id_mda'];
	$name_mda = $fetchArray['name_mda'];
	$name_user = $fetchArray['name_user'];
	$date_lent = $fetchArray['date_lent'];
	$status = $fetchArray['status'];

	if ($data['status'] == 0) {
		$statusLent = 'รอการอนุมัติ';
	} elseif ($data['status'] == 1) {
		$statusLent = 'คืนแล้ว';
	} else {
		$statusLent = 'ยังไม่ได้คืน';
	}

	$dateInput = date('j F Y', strtotime($fetchArray['date_lent']));
	$explodeDate = explode(" ", $dateInput);
	$dataYear = $explodeDate[2]+543;

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

	$date = $explodeDate[0].' '.$month.' '.$dataYear;

	if ($i == $record) {
		$i = 1;
		$html .= '</table><br pagebreak="true"/>';
	}
 
	if ($i == 1) {
		$html .= '<table align="center"><tr><td><font size="18">รายงานการยืมวัสดุครุภัณฑ์</font></td></tr>
		<tr><td><font size="18"> '.$months.' ประจำปีการศึกษา '.$year.'</font></td></tr></table>
		<table border="1"><tr>
			<td width="30px"> ที่</td>
			<td width="130px"> เลขทะเบียน</td>
			<td width="200px"> ประเภท</td>
			<td width="120px"> ผู้ยืม</td>
			<td width="100px"> วันที่ยืม</td>
			<td width="100px"> สถานะ</td>
		</tr></table>
		<table border="1"><tr>
			<td width="30px"> '.$j.'</td>
			<td width="130px"> '.$id_mda.'</td>
			<td width="200px"> '.$name_mda.'</td>
			<td width="120px"> '.$name_user.'</td>
			<td width="100px"> '.$date.'</td>
			<td width="100px"> '.$statusLent.'</td>
		</tr>';
	} else {
		$html .= '<tr>
			<td width="30px"> '.$j.'</td>
			<td width="130px"> '.$id_mda.'</td>
			<td width="200px"> '.$name_mda.'</td>
			<td width="120px"> '.$name_user.'</td>
			<td width="100px"> '.$date.'</td>
			<td width="100px"> '.$statusLent.'</td>
		</tr>';
	}
	$i++;
	$j++;
}
$html .= '</table>';

//create pdf
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->lastPage();
$pdf->Output('report_lent.pdf', 'I');

?>