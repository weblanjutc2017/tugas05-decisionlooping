<?php
	$x = 'D';
	echo "menggunakan if</br>";
	if($x =='A'|| $x=='A-'||$x=='A/B'||$x=='B+'||$x=='B'||$x=='B-'||$x=='B/C'){
		echo "LULUS";
	} elseif( $x =='C+'||$x=='C'||$x=='C-'||$x=='C/D'){
		echo "LULUS SEBAIKNYA DIULANG";
	} elseif ($x =='D+'||$x=='D'){
		echo "LULUS & WAJIB DIULANG";
	} elseif($x=='E'){
		echo "TIDAK LULUS";
	} else{}
	echo"</br>menggunakan switch</br>";
	switch($x){
		case $x=='A':
			echo "LULUS";
			break;
		case $x=='A-':
			echo "LULUS";
			break;
		case $x=='A/B':
			echo "LULUS";
			break;
		case $x=='B+':
			echo "LULUS";
			break;
		case $x=='B':
			echo "LULUS";
			break;
		case $x=='B-':
			echo "LULUS";
			break;
		case $x=='B/C':
			echo "LULUS";
			break;
		case $x =='C+':
			echo "LULUS SEBAIKNYA DIULANG";
			break;
		case $x =='C':
			echo "LULUS SEBAIKNYA DIULANG";
			break;
		case $x =='C-':
			echo "LULUS SEBAIKNYA DIULANG";
			break;
		case $x =='C/D':
			echo "LULUS SEBAIKNYA DIULANG";
			break;
		case $x=='D+';
			echo "LULUS & WAJIB DIULANG";
			break;
		case $x=='D';
			echo "LULUS & WAJIB DIULANG";
			break;
		case $x=='E';
			echo "TIDAK LULUS";
			break;
		default:
		break;
	}
?>