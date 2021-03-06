
<?php
session_start();
//Allows for the storage of the Array in JSON Files
$json_string = file_get_contents('data.json');
$dogs=json_decode($json_string, true);
?>

<?php
$title = $dogs[$_GET['id']]['name'].' - '.$dogs[$_GET['id']]['breed']

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

    <?php
    require 'nav.php';
	require 'sql.php';
	
	$result=$pdo->query('SELECT Name, Picture, Breed, Gender, Location, Age, id FROM dog_table WHERE id ='.$_GET['id']);
	$record=$result->fetch()

    ?>

  <div class="container py-5 mb5">
    <h1 class="mb-5">Detail Page</h1>

    <div class="container">
      <h1><?= $record['Name'] ?></h1>
      <img src="<?= $record['Picture'] ?>" style="max-width:500px" />
      <p>Breed: <?= $record['Breed'] ?></p>
      <p>Gender: <?= $record['Gender'] ?></p>
      <p>Location: <span class="badge badge-secondary"><?= $record['Location'] ?></span></p>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
