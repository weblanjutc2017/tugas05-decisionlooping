<?php
	$status = 'single';
	$income = 34000;
	if($status == 'single'){
		if($income > 0 & $income <=32000){
			$tax = 10/100* $income;
		}
		elseif($income>32000){
			$tax = 3200+(25/100* $income );
		}
	}
	elseif($status == 'married'){
		if( $income > 0 & $income <=64000){
			$tax = 10/100 *$income;
		}
		elseif ( $income > 64000){
			$tax = 6400+(25/100 * $income );
		}
	}
	echo $tax;
?>