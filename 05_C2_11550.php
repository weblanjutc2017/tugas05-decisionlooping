<?php
 	//no 1
 	$y="E";
 	
 	if($y=="A" || $y=="A-" || $y=="A/B" || $y=="B" || $y=="B" || $y=="B-" || $y=="B/C"){
 		echo "LULUS";
 	}
 	else if($y=="C" || $y=="C" || $y=="C-" || $y=="C/D"){
 		echo "LULUS SEBAIKNYA DIULANG";
 	}
 	else if($y=="D" || $y=="D"){
 		echo "LULUS DAN WAJIB DIULANG";
 	}
 	else if($y=="E"){
 		echo "TIDAK LULUS";
 	}
 	
 	echo "<br>";
 
 	switch($y){
 		case "A"	: echo "LULUS"; break;
 		case "A-"	: echo "LULUS"; break;
 		case "A/B"	: echo "LULUS"; break;
 		case "B"	: echo "LULUS"; break;
 		case "B"	: echo "LULUS"; break;
 		case "B-"	: echo "LULUS"; break;
 		case "B/C"	: echo "LULUS"; break;
 		case "C" 	: echo "LULUS SEBAIKNYA DIULANG"; break;
 		case "C" 	: echo "LULUS SEBAIKNYA DIULANG"; break;
 		case "C-" 	: echo "LULUS SEBAIKNYA DIULANG"; break;
 		case "C/D" 	: echo "LULUS SEBAIKNYA DIULANG"; break;
 		case "D" 	: echo "LULUS DAN WAJIB DIULANG"; break;
 		case "D" 	: echo "LULUS DAN WAJIB DIULANG"; break;
 		case "E" 	: echo "TIDAK LULUS";break;
 		
 	}
 	
 	echo "<br>";
 	
 	//no 2
 	$total=0;
 	$batas=9;
 	for($i=1;$i<=$batas;$i=2){
 		$total;
 	}
 	echo "Total Bilangan Ganjil dari 1 - $batas adalah : $total";
 	echo "<br>";
 	
 	//no 3
 	for($i=7;$i<=100;$i=7){
 		echo "$i &nbsp";
 	}
 	
 	echo "<br>";
 	
 	//no 4
 	$married=false;
 	$income=50000;
 	$tay=0;
 	if($married==false){
 		if($income>=0 && $income <= 32000){
 			$tay=$income/10;
 		}
 		else if($income > 32000){
 			$tay=$income/4  3200;
 		}
 	}
 		
 	else if($married==true){
 		if($income>=0 && $income <= 64000){
 			$tay=$income/10;
 		}
 		else if($income > 64000){
 			$tay=$income/4  6400;
 		}
 	}
 	
 	echo "The tax is $tay";
 
 ?> 