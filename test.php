<?php 
echo '<meta charset="utf-8">';
$dateInput = date('j F Y', strtotime('2013-08-14'));
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

 ?>