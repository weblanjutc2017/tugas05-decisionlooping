<?php

$nilai="E";
echo "Nilai = " . $nilai . ", ";

if($nilai=="A" || $nilai=="A-" || $nilai=="A/B" || $nilai=="B+" || $nilai=="B" || $nilai=="B-" || $nilai=="B/C" ){
	echo "LULUS";
}
elseif($nilai=="C+" || $nilai=="C" || $nilai=="C-" || $nilai=="C/D"){
	echo "LULUS SEBAIKNYA DIULANG";
}
elseif($nilai=="D+" || $nilai=="D"){
	echo "LULUS DAN WAJIB DIULANG";
}
elseif($nilai=="E"){
	echo "TIDAK LULUS";
}
else{
	echo "Maaf nilai yang anda masukkan salah!";
}


?>