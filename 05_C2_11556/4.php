<?php

$status;
$income;
$tax;
$income = 75000;
$status = "married";

if ($status=="single" && $income>=0){
	if ($income <= 32000){
		$tax = $income * 0.1;
	}
	else{
		$tax = 3200+(0.25 * $income);
	}
	echo "Status: ". $status ."<br/>Income: $" . $income . "<br/>Tax: $" . $tax;
}

else if ($status=="married" && $income>=0){
	if ($income <= 64000){
		$tax = $income * 0.1;
	}
	else{
		$tax = 6400+(0.25 * $income);
	}
	echo "Status: ". $status ."<br/>Income: $" . $income . "<br/>Tax: $" . $tax;
}

else {
	echo "Maaf data yang anda masukkan salah.";
}




?>