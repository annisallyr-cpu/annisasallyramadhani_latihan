<?php

$angka = -70;

if ($angka < 1 || $angka > 100){
  echo "angka hanya boleh dari rentang 1 - 100.";
} else {
  if ($angka >= 91 && $angka <= 100){
      $predikat = "lulus";
      $grade = "A";
  } else if ($angka >= 81 && $angka <= 90){
     $predikat = "lulus";
     $grade = "B";
  } else if ($angka >= 70 && $angka <= 80){
     $predikat = "lulus";
     $grade = "C";
  } else {
    $predikat = "lulus";
    $grade = "D";
  }

  echo "Nilai: " . $angka . "<br>";
  echo "Predikat: " . $predikat . "<br>";
  echo "Grade: " . $grade . "<br>";
}

?>