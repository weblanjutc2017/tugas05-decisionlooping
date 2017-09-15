<?php
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

echo "Jadi jumlah pajak yang harus dibayarkan sebesar Rp.$tax";
?>