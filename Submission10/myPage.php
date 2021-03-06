<?php
session_start();
require 'nav.php';
require_once('functions.php');
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
<br>

   <?php
   $dogs = jsonToArray('data.json');
   $user = $_SESSION["user"];
   $user = str_replace ('_', '.', $user);

require 'sql.php';
$result=$pdo->query('SELECT Name, Picture, Breed, Gender, Age, Owner, id FROM dog_table');

while($record=$result->fetch()){
	if ($record['Owner'] == $user){
echo '<div class="col-sm-3">';
  echo '<div class="card" style="width: 18rem;">
    <img src="'.$record['Picture'].'" class="card-img-top" height="180">
    <div class="card-body">
    <h5 class="card-title">'.$record['Name'].'</h5>
    <span class="badge badge-light">'.$record['Gender'].'</span>
    <p class="card-text">'.$record['Breed'].'</p>
    <a href="detail.php?id='.$record['id'].'" class="btn btn-primary">More Information</a>
    <a href="processEdit.php?id='.$record['id'].'" class="btn btn-primary"> Edit</a>
    <a href="delete.php?id='.$record['id'].'" class="btn btn-primary"> Delete</a>';

    echo '</div>
  </div>
	</div>';
	}
}


    ?>
<br>
<br>
