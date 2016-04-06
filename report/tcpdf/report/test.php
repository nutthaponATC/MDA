<?php
ob_start();
/////////////////////////////copy file excal/////////////////////////////////////////
$realname = $_FILES["fileupload"]["name"];
if(($_FILES["fileupload"]["tmp_name"]) != "") {
    copy($_FILES["fileupload"]["tmp_name"],'myData.xls');
    $Url="$realname";
} else {
    echo " Upload not complete";
} ;
/////////////////////////////end copy file excal/////////////////////////////////////////


/////////////////////////////include pdf/////////////////////////////////////////
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// set font
$pdf->SetFont('thsarabun', '', 14);
/////////////////////////////end include pdf/////////////////////////////////////////

/////////////////////////////import excal to array/////////////////////////////////////////
/** PHPExcel */
require_once '../../Classes/PHPExcel.php';

/** PHPExcel_IOFactory - Reader */
include '../../Classes/PHPExcel/IOFactory.php';


$inputFileName = "myData.xls";  
$inputFileType = PHPExcel_IOFactory::identify($inputFileName);  
$objReader = PHPExcel_IOFactory::createReader($inputFileType);  
$objReader->setReadDataOnly(true);  
$objPHPExcel = $objReader->load($inputFileName);  

$objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
$highestRow = $objWorksheet->getHighestRow();
$highestColumn = $objWorksheet->getHighestColumn();

$headingsArray = $objWorksheet->rangeToArray('A2:'.$highestColumn.'2',null, true, true, true);
$headingsArray = $headingsArray[2];

$r = -1;
$namedDataArray = array();
for ($row = 3; $row <= $highestRow; ++$row) {
    $dataRow = $objWorksheet->rangeToArray('A'.$row.':'.$highestColumn.$row,null, true, true, true);
    if ((isset($dataRow[$row]['A'])) && ($dataRow[$row]['A'] > '')) {
        ++$r;
        foreach($headingsArray as $columnKey => $columnHeading) {
            $namedDataArray[$r][$columnHeading] = $dataRow[$row][$columnKey];
        }
    }
}
/////////////////////////////end import excal to array/////////////////////////////////////////

/////////////////////////////gen pdf/////////////////////////////////////////

$pdf->AddPage();

$i = 0;
$j = 0;
foreach ($namedDataArray as $result) {
    if ($i == 0) {
        $date = $result["Date"];
        $year = (substr($date, -4)+543);
        $m = substr($date, -7, 2);
        $d = substr($date, -10, 2);
        if (substr($d, -2, 1) == 0) {
            $day = substr($d, -1, 1);
        } else {
            $day = $d;
        }

        if ($m == 01) {
            $month = "มกราคม";
        } elseif ($m == 02) {
            $month = "กุมภาพันธ์";
        } elseif ($m == 03) {
            $month = "มีนาคม";
        } elseif ($m == 04) {
            $month = "เมษายน";
        } elseif ($m == 05) {
            $month = "พฤษภาคม";
        } elseif ($m == 06) {
            $month = "มิถุนายน";
        } elseif ($m == 07) {
            $month = "กรกฎาคม";
        } elseif ($m == 08) {
            $month = "สิงหาคม";
        } elseif ($m == 09) {
            $month = "กันยายน";
        } elseif ($m == 10) {
            $month = "ตุลาคม";
        } elseif ($m == 11) {
            $month = "พฤศจิกายน";
        } else {
            $month = "ธันวาคม";
        }

        $dateTitle = $day." ".$month." ".$year;

        $i = "ลำดับที่";
        $subClockIn = "Clock In";
        $subClockOut = "Clock Out";

        $html = '<table width="657px" border="0.5" align="center">
            <tr>
                <td>
                    <center>รายงานเวลาเข้าออกงานประจำวัน โรงเรียนอรรถวิทย์ วันที่ '.$dateTitle.'</center>
                </td>
            </tr>
        </table>';

        $html .= '<table width="700" border="0.5" align="center">
            <tr>
                <td width="37px">'.$i.'</td>
                <td align="left" width="160px"> Name</td>
                <td>Date</td>
                <td width="50px">'.$subClockIn.'</td>
                <td width="70px">'.$subClockOut.'</td>
                <td width="50px">Late</td>
                <td width="50px">Early</td>
                <td width="50px">Absent</td>
                <td width="50px">OT Time</td>
                <td>Department</td>
            </tr>';

        $i = 1;
        $subClockIn = substr($result["Clock In"], -5);
        $subClockOut = substr($result["Clock Out"], -5);

        $html .= '<tr>
                <td width="37px">'.$i.'</td>
                <td align="left" width="160px"> '.$result["Name"].'</td>
                <td>'.$result["Date"].'</td>
                <td width="50px">'.$subClockIn.'</td>
                <td width="70px">'.$subClockOut.'</td>
                <td width="50px">'.$result["Late"].'</td>
                <td width="50px">'.$result["Early"].'</td>
                <td width="50px">'.$result["Absent"].'</td>
                <td width="50px">'.$result["OT Time"].'</td>
                <td>'.$result["Department"].'</td>
            </tr>
        ';

    } elseif ($j == 37) {
        $j = 0;
        $html .= '</table>';

        $html .= '<table width="657px" border="0.5" align="center">
            <tr>
                <td>
                    <center>รายงานเวลาเข้าออกงานประจำวัน โรงเรียนอรรถวิทย์ วันที่ '.$dateTitle.'</center>
                </td>
            </tr>
        </table>';

        $html .= '<table width="700" border="0.5" align="center">
            <tr>
                <td width="37px">ลำดับที่</td>
                <td align="left" width="160px"> Name</td>
                <td>Date</td>
                <td width="50px">'.$subClockIn.'</td>
                <td width="70px">'.$subClockOut.'</td>
                <td width="50px">Late</td>
                <td width="50px">Early</td>
                <td width="50px">Absent</td>
                <td width="50px">OT Time</td>
                <td>Department</td>
            </tr>';

        $subClockIn = substr($result["Clock In"], -5);
        $subClockOut = substr($result["Clock Out"], -5);

        $html .= '<tr>
                <td width="37px">'.$i.'</td>
                <td align="left" width="160px"> '.$result["Name"].'</td>
                <td>'.$result["Date"].'</td>
                <td width="50px">'.$subClockIn.'</td>
                <td width="70px">'.$subClockOut.'</td>
                <td width="50px">'.$result["Late"].'</td>
                <td width="50px">'.$result["Early"].'</td>
                <td width="50px">'.$result["Absent"].'</td>
                <td width="50px">'.$result["OT Time"].'</td>
                <td>'.$result["Department"].'</td>
            </tr>
        ';

    } else {
        $subClockIn = substr($result["Clock In"], -5);
        $subClockOut = substr($result["Clock Out"], -5);

        $html .= '<tr>
            <td width="37px">'.$i.'</td>
            <td align="left" width="160px"> '.$result["Name"].'</td>
            <td>'.$result["Date"].'</td>
            <td width="50px">'.$subClockIn.'</td>
            <td width="70px">'.$subClockOut.'</td>
            <td width="50px">'.$result["Late"].'</td>
            <td width="50px">'.$result["Early"].'</td>
            <td width="50px">'.$result["Absent"].'</td>
            <td width="50px">'.$result["OT Time"].'</td>
            <td>'.$result["Department"].'</td>
        </tr>';
    }
    $i++;
    $j++;
}
$html .= '</table>';

$pdf->writeHTML($html, true, false, true, false, '');

// reset pointer to the last page
$pdf->lastPage();

//Close and output PDF document
$pdf->Output('example_006.pdf', 'I');

?>