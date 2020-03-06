<?php
session_start();
?>

<?php
$title = 'Logout';
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

<?php
    session_destroy();
    echo 'Logged Out Successfully!';
 ?>

<h2 class="h3 mb-3 font-weight-normal"><a href="login.php">Log Back In Here!</a></h2>
