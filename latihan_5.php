<?php

$hari = "selasa";

switch ($hari){
  case 'senin':
    echo "hari" . $hari . "<br>";
    echo "Seragam : Putih Abu";
    break;

  case ($hari == 'selasa' || $hari == 'kamis'):
    echo "hari" . $hari . "<br>";
    echo "seragam : jurusan";
    break;

  case 'rabu':
    echo "hari" . $hari . "<br>";
    echo "seragam : almet";
    break;

  case 'jumat':
    echo "hari" . $hari . "<br>";
    echo "seragam pramuka";
    break;

  default:
      echo "hari" . $hari . "<br>";
      echo "hari libur, silahkan pake baju yang kamu suka";
      break;
}