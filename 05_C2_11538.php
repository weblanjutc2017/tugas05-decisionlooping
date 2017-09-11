<?php

/*========================================================================== Soal NO 1 ========================================================================*/	
	$a = "C";
	
	if($a=='A' || $a=='A-' || $a=='A/B' || $a=='B+' || $a=='B' || $a=='B-' || $a=='B/C'){
		echo 'LULUS';
	}
	
	else if($a=='C+' || $a=='C' || $a=='C-' || $a=='C/D'){
		echo 'Lulus Sebaiknya diulang';
	}
	
	else if($a=='D+' || $a== 'D' ){
		echo 'Lulus dan Wajib diulang';
	}
	
	else if($a=='E'){
		echo 'Tidak Lulus';
	}

	echo '<br/>';
	
	
	switch($a){
		case $a == 'A' || $a == 'A-' || $a == 'A/B' || $a == 'B+' || $a == 'B' || $a == 'B-' || $a == 'B/C';
			echo "LULUS";
			break;
		case $a == 'C+' || $a == 'C' || $a == 'C-';
			echo "Lulus Sebaiknya diulang";
			break;
		case $a == 'D+' || $a == 'D';
			echo "Lulus dan Wajib diulang";
			break;
		default;
			echo "Tidak Lulus";
			break;
	}
	
	echo "<br>";
	
	
/*========================================================================== Soal NO 2 ========================================================================*/	
	
	$minimal = 0;
	$maksimal = 100;
	
	for($i=1;$i<=$maksimal;$i+=2){
		$minimal++;
	}
	
	echo "Banyaknya Bilangan Ganjil dari 1 - $maksimal adalah : $minimal";
	echo "<br/>";

/*========================================================================== Soal NO 3 ========================================================================*/	
	
	for($i=1;$i<=100;$i++){ 
		if($i%7==0){ 
			echo"$i "; 
		}
	} 
	echo '<br/>';
/*========================================================================== Soal NO 4 ========================================================================*/	
	
	$pajak=0;
	$menikah=false;
	$pendapatan=35000;
	
	if($menikah==false){
		if($pendapatan >=0 && $pendapatan <= 32000){
			$pajak+=$pendapatan/10;
		}
		else if($pendapatan > 32000){
			$pajak+=$pendapatan/4 + 3200;
		}
	}
		
	else if($menikah==true){
		if($pendapatan >=0 && $pendapatan <= 64000){
			$pajak+=$pendapatan/10;
		}
		else if($pendapatan > 64000){
			$pajak+=$pendapatan/4 + 6400;
		}
	}
	
	echo "Pajak yang harus dibayar adalah sebesar <b>$pajak<b/> ";
	echo '<br/>';
?>