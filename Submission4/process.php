<?php
//Define JSON File Name
$myFile = "data.json";
//Create Empty Array
$arr_data = array();


//Get Form Data
/*
$formData->dogName = $_POST["dogName"];
$formData->dogBreed = $_POST["dogBreed"];
$formData->dogAge = $_POST["dogAge"];
$formData->dogGender = $_POST["dogGender"];
$formData->dogBio = $_POST["dogBio"];
*/

$formData = array(
  'dogName'=> $_POST['dogName'],
  'dogBreed'=> $_POST['dogBreed'],
  'dogAge'=>$_POST['dogAge'],
  'dogGender'=> $_POST['dogGender'],
  'dogBio'=> $_POST['dogBio']
);


//Get Data from Existing Json FILE
$jsondata = file_get_contents($myFile);

// Convert JSON data into array
$arr_data = json_decode($jsondata, true);

// Push user data to array
array_push($arr_data,$formData);

//Convert updated array to JSON
$jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);

//Write JSON Data into data.json File
if(file_put_contents($myFile, $jsondata)) {
     echo 'Data successfully saved';
 }
else
     echo "error";





  $myJSON = json_encode($formData);
  echo $myJSON;


?>
