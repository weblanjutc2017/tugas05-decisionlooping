<?php
	//nomor 1
	$x="E";
	
	if($x=="A" || $x=="A-" || $x=="A/B" || $x=="B+" || $x=="B" || $x=="B-" || $x=="B/C"){
		echo "LULUS";
	}
	else if($x=="C+" || $x=="C" || $x=="C-" || $x=="C/D"){
		echo "LULUS SEBAIKNYA DIULANG";
	}
	else if($x=="D+" || $x=="D"){
		echo "LULUS DAN WAJIB DIULANG";
	}
	else if($x=="E"){
		echo "TIDAK LULUS";
	}
	
	echo "<br>";

	switch($x){
		case "A"	: echo "LULUS"; break;
		case "A-"	: echo "LULUS"; break;
		case "A/B"	: echo "LULUS"; break;
		case "B+"	: echo "LULUS"; break;
		case "B"	: echo "LULUS"; break;
		case "B-"	: echo "LULUS"; break;
		case "B/C"	: echo "LULUS"; break;
		case "C+" 	: echo "LULUS SEBAIKNYA DIULANG"; break;
		case "C" 	: echo "LULUS SEBAIKNYA DIULANG"; break;
		case "C-" 	: echo "LULUS SEBAIKNYA DIULANG"; break;
		case "C/D" 	: echo "LULUS SEBAIKNYA DIULANG"; break;
		case "D+" 	: echo "LULUS DAN WAJIB DIULANG"; break;
		case "D" 	: echo "LULUS DAN WAJIB DIULANG"; break;
		case "E" 	: echo "TIDAK LULUS";break;
		
	}
	
	echo "<br>";
	
	//nomor 2
	$total=0;
	$batas=9;
	for($i=1;$i<=$batas;$i+=2){
		$total++;
	}
	echo "Total Bilangan Ganjil dari 1 - $batas adalah : $total";
	echo "<br>";
	
	//nomor 3
	for($i=7;$i<=100;$i+=7){
		echo "$i &nbsp";
	}
	
	echo "<br>";
	
	//nomor 4
	$married=true;
	$income=65000;
	$tax=0;
	if($married==false){
		if($income>=0 && $income <= 32000){
			$tax+=$income/10;
		}
		else if($income > 32000){
			$tax+=$income/4 + 3200;
		}
	}
		
	else if($married==true){
		if($income>=0 && $income <= 64000){
			$tax+=$income/10;
		}
		else if($income > 64000){
			$tax+=$income/4 + 6400;
		}
	}
	
	echo "Jadi Pajaknya adalah $tax";

?>