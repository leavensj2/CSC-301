<?php

$dogs=[
	[
		'name'=>'Gunner',
		'breed'=>'Vizsla',
		'picture'=>'https://cf.ltkcdn.net/dogs/images/orig/252973-1600x1030-vizsla-dog-breed-traits.jpg',
		'gender'=>'Male',
		'location'=>'Covington, KY'
	],
	[
    'name'=>'Max',
		'breed'=>'Labrador',
		'picture'=>'https://cdn.orvis.com/images/DBS_Lab_1280.jpg',
		'gender'=>'Male',
		'location'=>'Montgomery OH'
	],
	[
    'name'=>'Cassie',
		'breed'=>'Western Terrier',
		'picture'=>'https://cdn.britannica.com/s:700x500/02/198002-050-452BDBD2/West-Highland-White-Terrier.jpg',
		'gender'=>'Female',
		'location'=>'Bellvue KY'
	]
];

 ?>

 <!DOCTYPE html>
<html lang="en">
  <head>
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

    <div class="container">
      <h1><?= $dogs[$_GET['id']]['name'] ?></h1>
      <img src="<?= $dogs[$_GET['id']]['picture'] ?>" style="max-width:500px" />
      <p>Breed: <?= $dogs[$_GET['id']]['breed'] ?></p>
      <p>Gender: <?= $dogs[$_GET['id']]['gender'] ?></p>
      <p>Location: <span class="badge badge-secondary"><?= $dogs[$_GET['id']]['location'] ?></span></p>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
