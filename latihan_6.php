<?php 

$nilai = 87;

switch ($nilai){
  case ($nilai >= 91 && $nilai <= 100):
    echo "nilai" . $nilai . "<br>";
    echo "Predikat : lulus" . "<br>";
    echo "Grade : A";
    break;

  case ($nilai >= 81 && $nilai <= 90):
    echo "nilai" . $nilai . "<br>";
    echo "Predikat : lulus" . "<br>";
    echo "Grade : B";
    break;

  case ($nilai >= 70 && $nilai <= 80):
   echo "nilai" . $nilai . "<br>";
   echo "Predikat : lulus" . "<br>";
   echo "Grade : C";
   break;

  default:
      echo "nilai" . $nilai . "<br>";
      echo "jangann pantang menyerah!";
      break;
}

