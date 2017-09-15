<?php
//Auliakukuhsaputra_C2_11514
//NOMOR 1 LOOPING WITH IF
$nilai = 'A/B';
echo "Nilai anda: $nilai <br>";
echo "Predikat: ";

if($nilai == 'A' || $nilai == 'A-' || $nilai == 'A/B' || $nilai == 'B' || $nilai == 'B-' || $nilai == 'B/C' ){
  echo "LULUS";
}
elseif($nilai == 'C+' || $nilai == 'C' || $nilai == 'C-' || $nilai == 'C/D'){
  echo "LULUS SEBAIKNYA DIULANG";
}
elseif($nilai == 'D+' || $nilai == 'D'){
  echo "LULUS DAN WAJIB DIULANG";
}
else{
  echo "TIDAK LULUS";
}
echo "<br> <br>";

//NOMOR 1 LOOPING WITH SWITCH
$nilai = 'C';
echo "Nilai anda: $nilai <br>";
echo "Predikat: ";

switch($nilai){
  case $nilai == 'A' || $nilai == 'A-' || $nilai == 'A/B' || $nilai == 'B' || $nilai == 'B-' || $nilai == 'B/C';
  echo "LULUS";
  break;

  case $nilai == 'C+' || $nilai == 'C' || $nilai == 'C-' || $nilai == 'C/D';
  echo "LULUS SEBAIKNYA DIULANG";
  break;

  case $nilai == 'D+' || $nilai == 'D';
  echo "LULUS DAN WAJIB DIULANG";
  break;

  default:
  echo "TIDAK LULUS";
}

echo "<br> <br>";
?>
