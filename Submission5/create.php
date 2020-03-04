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

<?php
$title = 'Home Finder';
 ?>


<html lang="en">
  <head>
    <title> <?php echo $title ?> </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap4-hello-world.min.css">


    <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Roboto:300,400" rel="stylesheet">


  </head>
  <body>

    <?php
    require 'nav.php'
    ?>

  <div class="container py-5 mb5">
    <h1 class="mb-5">Pet Adoption Form</h1>
  <div class="container">


<form action="process.php" method="POST">
    <div class="form-group">
      <label for="dogName">Name</label>
      <input type="$json_string" class="form-control" id="dogName" placeholder="Doggo" name="dogName">
    </div>
    <div class="form-group">
      <label for="dogBreed">Breed</label>
      <input type="$json_string" class="form-control" id="dogBreed" placeholder="German Shepard" name="dogBreed">
    </div>
    <div class="form-group">
      <label for="dogAge">Age</label>
      <select class="form-control" id="dogAge" name="dogAge">
        <?php
        for ($i = 1; $i < 18; $i++){
          echo '<option>'.$i.'</option>';
        } ?>
      </select>
    </div>
    <div class="form-group">
      <label for="dogGender">Gender</label>
      <select class="form-control" id="dogGender" name="dogGender">
<option>Male</option>
<option>Female</option>
      </select>
    </div>
    <div class="form-group">
      <label for="dogBio">Biography</label>
      <textarea class="form-control" id="dogBio" rows="3" name="dogBio"></textarea>
    </div>
  <div class="form-group">
      <label for="dogPicture">Image Link</label>
      <input type="$json_string" class="form-control" id="dogPicture" placeholder="https://www.humanesociety.org/sites/default/files/styles/1240x698/public/2019/02/dog-451643.jpg?h=bf654dbc&itok=MQGvBmuo" name="dogPicture">
    </div>
    <div class="form-group">
      <label for="location">Location</label>
      <input type="$json_string" class="form-control" id="location" name="location">
    </div>
    <input type="submit" value="Submit">

</form>
</div>
