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


function readCSV($filename, $target = null)
{
  $handle = fopen($filename,'r');
  $temp=[];
  $counter = 0;
  while(!feof($handle)) {
    if($target==null || $counter<$target)
    {
      fgets($handle);
      $counter++;
      continue;
    }
    else {
    $temp[] = explode(';', fgets($handle));
    fclose($handle);
    return $temp;

    }



  }
fclose($handle);
return $temp;
}




?>
