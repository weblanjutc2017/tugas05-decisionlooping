<?php
$nilai="D+";
echo "Nilai = " . $nilai . ", ";

switch($nilai){
	case $nilai=="A" || $nilai=="A-" || $nilai=="A/B" || $nilai=="B+" || $nilai=="B" || $nilai=="B-" || $nilai=="B/C" :
		echo "LULUS";
		break;
	
	case $nilai=="C+" || $nilai=="C" || $nilai=="C-" || $nilai=="C/D":
		echo "LULUS SEBAIKNYA MENGULANG";
		break;
	
	case $nilai=="D+" || $nilai=="D":
		echo "LULUS WAJIB MENGULANG";
		break;
	
	case $nilai=="E":
	echo "TIDAK LULUS";
	break;
	
	default:
		echo "Maaf nilai yang anda masukkan salah!";
		break;
}

?>