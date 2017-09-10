<?php

$status;
$income;
$tax;
$income = 75000;
$status = "menikah";

if ($status=="single"){
	if ($income <= 32000){
		$tax = $income * 0.1;
	}
	else{
		$tax = 3200+(0.25 * $income);
	}
	echo "John yang berstatus ". $status ." dan memiliki penghasilan sebesar $" . $income . ", maka pajak yang harus dibayarkan adalah sebesar $" . $tax . ".";
}

else if ($status=="menikah"){
	if ($income <= 64000){
		$tax = $income * 0.1;
	}
	else{
		$tax = 6400+(0.25 * $income);
	}
	echo "John yang berstatus ". $status ." dan memiliki penghasilan sebesar $" . $income . ", maka pajak yang harus dibayarkan adalah sebesar $" . $tax . ".";
}

else {
	echo "Maaf data yang anda masukkan salah.";
}




?>