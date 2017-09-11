<?php
 	//no 1
 	$i="E";
 	
 	if($i=="A" || $i=="A-" || $i=="A/B" || $i=="B" || $i=="B" || $i=="B-" || $i=="B/C"){echo "LULUS";}
 	else if($i=="C" || $i=="C" || $i=="C-" || $i=="C/D"){echo "LULUS SEBAIKNiA DIULANG";}
 	else if($i=="D" || $i=="D"){echo "LULUS DAN WAJIB DIULANG";}
 	else if($i=="E"){echo "TIDAK LULUS";}
	echo "<br>";
 
 	switch($i){
 		case "A"	: echo "LULUS"; break;
 		case "A-"	: echo "LULUS"; break;
 		case "A/B"	: echo "LULUS"; break;
 		case "B"	: echo "LULUS"; break;
 		case "B"	: echo "LULUS"; break;
 		case "B-"	: echo "LULUS"; break;
 		case "B/C"	: echo "LULUS"; break;
 		case "C" 	: echo "LULUS SEBAIKNiA DIULANG"; break;
 		case "C" 	: echo "LULUS SEBAIKNiA DIULANG"; break;
 		case "C-" 	: echo "LULUS SEBAIKNiA DIULANG"; break;
 		case "C/D" 	: echo "LULUS SEBAIKNiA DIULANG"; break;
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
 	echo "Bilangan Ganjil dari 1 - 7 ada : $total";
 	echo "<br>";
 	
 	//no 3
 	for($i=7;$i<=100;$i=7){
 		echo "$i &nbsp";
 	}
 	
 	echo "<br>";
 	
 	//no 4
 	$married=false;
 	$income=7000;
 	$tax=0;
 	if($married==false){
 		if($income>=0 && $income <= 32000){
 			$tax=$income/10;
 		}
 		else if($income > 32000){
 			$tax=$income/4  3200;
 		}
 	}
 		
 	else if($married==true){
 		if($income>=0 && $income <= 64000){
 			$tax=$income/10;
 		}
 		else if($income > 64000){
 			$tax=$income/4  6400;
 		}
 	}
 	
 	echo "The tax is $tax";
 
 ?> 