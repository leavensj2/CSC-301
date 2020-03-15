<?php
session_start();
require 'nav.php';
$title = 'Pet Finder';
 ?>
<!DOCTYPE html>
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
<div class="jumbotron jumbotron-fullheight jumbo-vertical-center text-light text-center bg-dark mb-0 radius-0">
  <div class="container">
      <h1 class="display-2 text-light text-uppercase">Pet Finder</h1>
      <span class="lead lead-lg">A Web App to Help you Find your next Pet! (or to Find a Home for one in Need!)</span>
      <div class="mt-4">
        <a href="app.php"
           class="btn btn-danger btn-lg m-2 btn-wide">
          <span>Find Pet</span>
        </a>
        <a href="create.php"
           class="btn btn-outline-light btn-hover-text-dark btn-wide btn-lg m-2">
          <span>Find Home</span>
        </a>
      </div>
  </div>
</div>
<div class="container py-5">
  <h1>Thanks</h1>
  <p>Thank you for visiting the site.<br>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
