<?php
$status="married";
$income=64000;
$tax=0;
if($status=="single"){
	if($income>=0 && $income<=32000){
		$tax+=$income*0.1;
	}
	else if($income > 32000){
		$tax+=($income*0.25) + 3200;
	}
}
	
else if($status=="married"){
	if($income>=0 && $income <= 64000){
		$tax+=$income*0.1;
	}
	else if($income > 64000){
		$tax+=($income*0.25) + 6400;
	}
}

echo "Jadi Pajaknya adalah $tax";
?>