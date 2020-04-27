<?php
session_start();


$user = $_SESSION["user"];
$user = str_replace ('_', '.', $user);


$formData = array(
  'name'=> $_POST['dogName'],
  'breed'=> $_POST['dogBreed'],
  'age'=>$_POST['dogAge'],
  'gender'=> $_POST['dogGender'],
  'bio'=> $_POST['dogBio'],
  'picture'=> $_POST['dogPicture'],
  'location' => $_POST['location'],
  'owner' => $user
);

require_once('class.php');
require 'sql.php';
$pCreate = new Process();
$pCreate->newDog($formData);

//$result=$pdo->query('INSERT INTO dog_table(Name, Breed, Age, Gender, Bio, Picture, Location) VALUES('.$_POST["dogName"].','.$_POST["dogBreed"].','.$_POST["dogAge"].','.$_POST["dogGender"].','.$_POST["dogBio"].','.$_POST["dogPicture"].','.$_POST["location"]);
//$result=$pdo->query('INSERT INTO dog_table(Name) VALUES('.$_POST["dogName"].')');
$pdo->query('INSERT INTO dog_table(Name, Breed, Picture, Bio, Age, Location, Gender, Owner) VALUES ("'.$_POST["dogName"].'", "'.$_POST["dogBreed"].'", "'.$_POST["dogPicture"].'", "'.$_POST["dogBio"].'", "'.$_POST["dogAge"].'", "'.$_POST["location"].'", "'.$_POST["dogGender"].'", "'.$user.'")');
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

  <div class="bg-dark navbar-dark text-white">
    <div class="container">
      <nav class="navbar px-0 navbar-expand-lg navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a href="index.php" class="pl-md-0 p-3 text-light">Home</a>
            <a href="app.php" class="p-3 text-decoration-none text-light">Find Pet</a>
            <a href="create.php" class="p-3 text-decoration-none text-light">Find Home</a>
          </div>
        </div>
      </nav>

    </div>
  </div>

  <div class="container py-5 mb5">
    <h1 class="mb-5">Submission Successfully Received</h1>
  <div class="container">






</div>
