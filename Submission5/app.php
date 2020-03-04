
<?php
require_once('functions.php');
$dogs = jsonToArray('data.json');
//print_r(readCSV('data.php', 1));
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
require 'nav.php'
?>



<div class="container py-5 mb5">
  <h1 class="mb-5">Dogs Avalible for Adoption!</h1>

<?php
echo '<div class="row">';
for($i=0;$i<count($dogs);$i++){
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
echo '</div>';
?>

</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
