<?php

$ganjil=0;

echo "Jumlah bilangan ganjil dari 1-100 adalah ";
for($x=1; $x<=100; $x++){
	if ($x % 2 ==1){
		$ganjil++;
	}
}
echo $ganjil;

?>