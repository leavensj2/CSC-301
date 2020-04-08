<?php

class Process {


function newDog($formData) {
  //Define JSON File Name
  $myFile = "data.json";

  //Create Empty Array
  $arr_data = array();

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
       Return 'Data successfully saved';
   }
Return "error";
}

}

class DB{


  $settings = [
  	'host' => 'localhost',
  	'db' => 'dogadoption_db',
  	'user' => 'root',
  	'password' => ''
  ];

  $opt = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES => false
  ];

  //Establish Connection to DB
  $pdo = new PDO('mysql:host='.$settings['host'].';dbname='.$settings['db'].';charset=utf8mb4',$settings['user'],$settings['password'], $opt);




}


 ?>
