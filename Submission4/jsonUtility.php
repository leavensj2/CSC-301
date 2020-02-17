<?php


function writeAlJSON($file, $data){
  $h = fopen($file, 'w');
  fwrite($h, json_encode($data));
  fclose($h);
}

function writeJSON($file, $data){
  $array = json_decode(file_get_contents($file), true);
  $array[]=$data;
  writeAllJSON($file, $array);
}


 ?>
