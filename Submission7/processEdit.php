<?php

require 'sql.php';

session_start();
$user = $_SESSION["user"];
$user = str_replace ('_', '.', $user);


$result=$pdo->query("SELECT Name, Picture, Breed, Gender, Age, Owner, Bio, Location, id FROM dog_table WHERE Owner = '$user' ");
$record=$result->fetch();

$title = $record['Name'].' - '.$record['Owner'];

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

  <div class="bg-dark navbar-dark text-white">
    <div class="container">
      <nav class="navbar px-0 navbar-expand-lg navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a href="index.php" class="pl-md-0 p-3 text-light">Home</a>
            <!-- <a href="app.php" class="p-3 text-decoration-none text-light">Pets</a>
            <a href="detail.php" class="p-3 text-decoration-none text-light">Form example</a> -->
          </div>
        </div>
      </nav>

    </div>
  </div>

  <div class="container py-5 mb5">
    <h1 class="mb-5">Detail Page</h1>


    <form action="process.php" method="POST">
        <div class="form-group">
          <label for="dogName">Name</label>
          <input type="$json_string" class="form-control" id="dogName" placeholder="Doggo" name="dogName" value="<?= $record['Name'] ?>">
        </div>
        <div class="form-group">
          <label for="dogBreed">Breed</label>
          <input type="$json_string" class="form-control" id="dogBreed" placeholder="German Shepard" name="dogBreed" value="<?= $record['Breed'] ?>">
        </div>
        <div class="form-group">
          <label for="dogAge">Age</label>
          <select class="form-control" id="dogAge" name="dogAge" value="<?= $record['Age'] ?>">
            <?php
            for ($i = 1; $i < 18; $i++){
              echo '<option>'.$i.'</option>';
            } ?>
          </select>
        </div>
        <div class="form-group">
          <label for="dogGender">Gender</label>
          <select class="form-control" id="dogGender" name="dogGender" value="<?= $record['Gender'] ?>">
    <option>Male</option>
    <option>Female</option>
          </select>
        </div>
        <div class="form-group">
          <label for="dogBio">Biography</label>
          <textarea class="form-control" id="dogBio" rows="3" name="dogBio" value="<?= $record['Bio'] ?>"></textarea>
        </div>
      <div class="form-group">
          <label for="dogPicture">Image Link</label>
          <input type="$json_string" class="form-control" id="dogPicture" placeholder="https://www.humanesociety.org/sites/default/files/styles/1240x698/public/2019/02/dog-451643.jpg?h=bf654dbc&itok=MQGvBmuo" name="dogPicture" value="<?= $record['Picture'] ?>">
        </div>
        <div class="form-group">
          <label for="location">Location</label>
          <input type="$json_string" class="form-control" id="location" placeholder="Doggo" name="location" value="<?= $record['Location'] ?>">
        </div>
        <input type="submit" value="Submit">

    </form>


    <?php


// / / / / / / / / / / / / / SECTION FOR SQL MIGRATION / / / / / / / / / / / / /


$result=$pdo->query('DELETE FROM dog_table WHERE id ='.$_GET['id']);
$record=$result->fetch();




    ?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
