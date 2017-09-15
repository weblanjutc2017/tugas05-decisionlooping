<?php
//Auliakukuhsaputra_C2_11514
$status="Single";
$income=30000;
$tax = 0;
if ($status == "Single") {
  if($income < 32000 && $income > 0){
    $tax = $income * 0.1;
  }
  else if($income > 32000 ){
    $tax = 3200 + ($income*0.25);
  }
}
else if($status=="Married"){
  if($income < 64000 && $income > 0){
    $tax = $income * 0.1;
  }
  else if($income > 64000){
      $tax = 6400 + ($income*0.25);
  }
}

echo "The tax is : $tax";
?>
