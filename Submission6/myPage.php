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

   <?php
   $dogs = jsonToArray('data.json');
   $user = $_SESSION["user"];
   $user = str_replace ('_', '.', $user);
   for($i=0;$i<count($dogs);$i++){
     if (($dogs[$i]['owner']) == $user)
     {
       echo '<div class="col-sm-3">';
       echo '<div class="card" style="width: 18rem;">
         <img src="'.$dogs[$i]['picture'].'" class="card-img-top" height="180">
         <div class="card-body">
         <h5 class="card-title">'.$dogs[$i]['name'].'</h5>
         <span class="badge badge-light">'.$dogs[$i]['gender'].'</span>
         <p class="card-text">'.$dogs[$i]['breed'].'</p>
         <a href="detail.php?id='.$i.'" class="btn btn-primary">More Information</a>
         <a href="processEdit.php?id='.$i.'" class="btn btn-primary">Edit</a>
         <a href="delete.php?id='.$i.'" class="btn btn-primary">Delete</a>
         </div>
       </div>
       </div>';
     }
   }





    ?>
