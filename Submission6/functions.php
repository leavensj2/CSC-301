<?php


function jsonToArray($filename)
{
  global $filename;
  $json_string = file_get_contents('data.json');
  $array=json_decode($json_string, true);
  return $array;
}



function read($filename){
  $handle = fopen($filename,'r');
  $temp='';
  while(!feof($handle)) $temp.=fgets($handle);
  return $temp;
}


function readCSV($file){
  $handle=fopen($file, 'r');
  $output=[];
  while(!feof($handle)){
    $line=fgets($handle);
    if(!isset($line{0})) continue;
    $output[]=fgets($handle);
  }
  fclose($handle);
  return $output;
}



function deleteCSV($file, $index){
  $data = readCSV($file);
  unset ($data[$index]);
  $h=fopen($file, 'w');
  foreach($data as $row){
    fwrite($h, implode(';', $row));
  }
  fclose($h);
}

function modifyCSV($file,$index,$info){
  $data = readCSV($file);
  $data[$index]=$info;
  $h=fopen($file, 'w');
  foreach($data as $row){
    fwrite($h, implode(';', $row));
  }
  fclose($h);
}


function writeCSV($file, $data, $mode = 'w'){
  $h = fopen($file, $mode);
  fwrite($h, impolde(';', $data).PHP_EOL);
  fclose($h);

}




?>
