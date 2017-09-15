<?php

echo "Berikut merupakan bilangan kelipatan 7 yang kurang dari 100: <br/>";

for($x=1; $x<=100; $x++){
	if ($x % 7 == 0){
		echo $x;
		echo " ";
	}
	
}

?>