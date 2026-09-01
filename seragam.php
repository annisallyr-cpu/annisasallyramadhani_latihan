<?php

$hari = "kamis" ;
if ($hari === "senin"){
  echo "putih abu";
}else if($hari === "selasa" || $hari === "kamis"){
  echo "jurusan";
}else if($hari === "rabu"){
  echo "almamater";
}else if($hari === "jumat"){
  echo "pramuka";
}else {
  echo "hari libur";
}