<!doctype html>

<?
//Area to Handle Authentication
if (isset ($_POST["inputEmail"])){

//Define Username to Compare Against Database
$user = ($_POST["inputEmail"]);
$pass = ($_POST["inputPassword"]);

//Define JSON File Name For Users
$myFile = "users.json";

//Get Data from Existing Json User FILE
$jsondata = file_get_contents($myFile);

// Convert JSON data into array
$arr_data = json_decode($jsondata, true);

//Validates Credentials
foreach ($arr_data as $element)
{
$passCheck = current($arr_data);
$userDataString = (implode("=", $passCheck));
$userDataString = rtrim($userDataString, ":");
$user = str_replace(".", "_", $user);
parse_str($userDataString, $result);
if (isset($result[$user]))
{
  if (password_verify($pass, $result[$user])){
    //Valid Email and Pass
    echo 'Validated Successfully';
  }
  else {
    //Valid Email, Invalid Pass
    echo "Password Incorrect";
  }
}
else {
  //Wrong Email Input
  echo "Email not Recognized";
}

}

}











?>

<?php
require 'nav.php';
$title = 'Login';
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


  <body class="text-center">
    <br>
    <form class="form-signin" action="" method="POST">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="inputEmail">
      <label for="inputPassword" class="sr-only" name="inputPassword">Password</label>
      <input type="password" id="inputPassword" name = "inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
    <br>
    <br>
    <h2 class="h3 mb-3 font-weight-normal">Need an Account? <a href="signup.php"> Sign Up Here </a></h2>
  </body>
</html>
