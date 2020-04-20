
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



<div class="container py-5 mb5">
  <h1 class="mb-5"> Welcome, <?php echo $user ?>!</h1>
  <h2 class="mb-5">All Dogs</h2>

<?php
require 'sql.php';
$result=$pdo->query('SELECT Name, Picture, Breed, Gender, Age, id FROM dog_table');

echo '<div class="container">';
$counter = 0;

while($record=$result->fetch()){
if ($counter % 3 == 0) echo '<div class="row">';

  echo '<div class="col-sm" style="width: 18rem;">

    <div class="card-body">
    <h5 class="card-title">'.$record['Name'].'</h5>
    <span class="badge badge-light">'.$record['Gender'].'</span>
    <p class="card-text">'.$record['Breed'].'</p>
    <a href="detail.php?id='.$record['id'].'" class="btn btn-primary">More Information</a>
    <a href="processEdit.php?id='.$record['id'].'" class="btn btn-secondary btn-sm"> Edit</a>
    <a href="delete.php?id='.$record['id'].'" class="btn btn-secondary btn-sm"> Delete</a>';

if ($counter % 3 == 0) echo '</div>';
echo '</div>';
echo '</div;';
  $counter++;
}


?>
</div>
</div>
<br>
<br>

<?php

$res = $pdo -> prepare('SELECT admin FROM user_table WHERE username = :usrVar');
$res -> execute([':usrVar' => $usrVar]);
$result = $res -> fetchAll();
//print_r($result);
$numVal = $result[0]['admin'];
//print_r($numVal);

if ($numVal > 0)
{
echo '<h2 class="mb-5">All Users</h2>';

$userResult=$pdo->query('SELECT username FROM user_table WHERE admin != 1');

echo '<div class="container">';
$counter = 0;

while($userRecord = $userResult->fetch())
{
  if ($counter % 3 == 0) echo '<div class="row">';

    echo '<div class="col-sm" style="width: 18rem;">
    <div class="card-body">
    <h5 class="card-title">'.$userRecord['username'].'</h5>
    <a href="processUserEdit.php?id='.$record['id'].'" class="btn btn-secondary btn-sm"> Edit</a>
    <a href="deleteUser.php?id='.$userRecord['username'].'" class="btn btn-secondary btn-sm"> Delete</a>';

if ($counter % 3 == 0) echo '</div>';
echo '</div>';
echo '</div;';
  $counter++;
}
}

?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
