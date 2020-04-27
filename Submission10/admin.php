
<?php
session_start();
require_once('functions.php');
$dogs = jsonToArray('data.json');
//print_r(readCSV('data.php', 1));
$user = $_SESSION["user"];
?>



 <?php
$title = 'Pet Finder';
  ?>

<!DOCTYPE html>
<style>
.row {
   display: flex;
   flex-wrap: wrap;
}

.row > div[class*='col-'] {
  display: flex;
}

</style>


<html lang="en">
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
  <body>

<?php
require 'nav.php';
require 'sql.php';
?>
<h1> All Non-Admin Users </h1>
<?php

$result=$pdo->query('SELECT username, id FROM user_table WHERE admin != 1');

while($record=$result->fetch()){
echo '<div class="col-sm-3">';
  echo '<div class="card" style="width: 18rem;">
    <div class="card-body">
    <h5 class="card-title">'.$record['username'].'</h5>
    <a href="deleteUser.php?id='.$record['id'].'" class="btn btn-primary"> Delete</a>';

    echo '</div>
  </div>
	</div>';
	}


?>
