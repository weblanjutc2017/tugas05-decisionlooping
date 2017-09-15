<?php
$nilai="E";
 
if($nilai=="A" || $nilai=="A-" || $nilai=="A/B" || $nilai=="B+" || $nilai=="B" || $nilai=="B-" || $nilai=="B/C"){
	echo "LULUS";
}
else if($nilai=="C+" || $nilai=="C" || $nilai=="C-" || $nilai=="C/D"){
	echo "LULUS SEBAIKNYA DIULANG";
}
else if($nilai=="D+" || $nilai=="D"){
	echo "LULUS DAN WAJIB DIULANG";
}
else if($nilai=="E"){
	echo "TIDAK LULUS";
}

echo "<br>";

switch($nilai){
	case "A" :
		echo "LULUS";
		break;
	case "A-" :
		echo "LULUS";
		break;
	case "A/B" :
 		echo "LULUS";
 		break;
 	case "B+" :
 		echo "LULUS";
 		break;
 	case "B" :
 		echo "LULUS";
 		break;
 	case "B-" :
 		echo "LULUS"; 
 		break;
 	case "B/C" :
 		echo "LULUS"; 
 		break;
 	case "C+" :
 		echo "LULUS SEBAIKNYA DIULANG";
 		break;
 	case "C" :
 		echo "LULUS SEBAIKNYA DIULANG"; 
 		break;
 	case "C-" :
 		echo "LULUS SEBAIKNYA DIULANG"; 
 		break;
 	case "C/D" :
 		echo "LULUS SEBAIKNYA DIULANG"; 
 		break;
 	case "D+" :
 		echo "LULUS DAN WAJIB DIULANG";
 		break;
 	case "D" :
 		echo "LULUS DAN WAJIB DIULANG"; 
 		break;
 	case "E" :
 		echo "TIDAK LULUS";
 		break;
}
?>