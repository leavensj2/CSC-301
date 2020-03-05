<!doctype html>

<?php
//Area to Handle Authentication!

if (isset ($_POST["email"])){
//Set Variables for Username and Password
$username = ($_POST["email"]);
$password = $_POST["password"];
//Hash Password
$passwordHashed = password_hash($password, PASSWORD_DEFAULT);

// ------ Write info to file ------

//Define JSON File Name
$myFile = "users.json";
//Create Empty Array
$user_data = array();

//Populate Array with Form Information
$userData = array(
  'username'=> $username,
  'password'=> $passwordHashed
);

//Get Data from Existing Json User FILE
$jsondata = file_get_contents($myFile);

// Convert JSON data into array
$arr_data = json_decode($jsondata, true);
print_r($arr_data);
//VERIFY THAT EMAIL DOES NOT ALREADY EXIST IN DATABASE
if (in_array($username, $arr_data)) {
    echo "User already exists";
    exit;
}


// Push user data to array
array_push($arr_data,$userData);

//Convert updated array to JSON
$jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);

//Write JSON Data into data.json File
if(file_put_contents($myFile, $jsondata)) {
     echo 'Data successfully saved';
 }
else
     echo "error";

}

 ?>

<?php
require 'nav.php';
$title = 'Signup'

 ?>

<head>
  <title> <?php echo $title ?> </title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Hello World - Bootstrap Theme</title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  <link rel="stylesheet" href="css/bootstrap4-hello-world.min.css">


  <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Roboto:300,400" rel="stylesheet">




</head>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>


  <form action='' method="POST">
    <fieldset>
      <div id="legend">
        <legend class="">Register</legend>
      </div>

      <div class="form-group">
        <!-- E-mail -->
        <label class="control-label" for="email">E-mail</label>
        <div class="controls">
          <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
          <p class="help-block">Please provide your E-mail</p>
        </div>
      </div>

      <div class="form-group">
        <!-- Password-->
        <label class="control-label" for="password">Password</label>
        <div class="controls">
          <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
          <p class="help-block">Password should be at least 4 characters</p>
        </div>
      </div>

      <div class="form-group">
        <!-- Password -->
        <label class="control-label"  for="password_confirm">Password (Confirm)</label>
        <div class="controls">
          <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge">
          <p class="help-block">Please confirm password</p>
        </div>
      </div>

      <div class="form-group">
        <!-- Button -->
        <div class="controls">
          <button class="btn btn-success">Register</button>
        </div>
      </div>
    </fieldset>
  </form>
