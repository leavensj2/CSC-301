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
      </div>
  </div>
</div>
<div class="container py-5">
  <h1>Community Forum for Helpful Dog-Related Information!</h1>

  <form action="forumPost.php" method="post">
  <div class="form-group">
    <label for="title">Title</label>
    <textarea class="form-control" id="title" name="title" required></textarea>
  </div>
  <div class="form-group">
    <label for="subtitle">Subtitle</label>
    <textarea class="form-control" id="subtitle" rows="1" name="subtitle" required></textarea>
  </div>
  <div class="form-group">
    <label for="text">Text</label>
    <textarea class="form-control" id="text" rows="3" name="text" required></textarea>
  </div>
  <div class="form-group">
    <label for="link">Link</label>
    <textarea class="form-control" id="link" rows="1" name="link" required></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

  <?php
  require 'sql.php';
  $result=$pdo->query('SELECT * FROM forum_data');

  while($record=$result->fetch()){
    echo '  <div class="card" style="width: auto;">
      <div class="card-body">
        <h5 class="card-title">'.$record['title'].'</h5>
        <h6 class="card-subtitle mb-2 text-muted">'.$record['subtitle'].'</h6>
        <p class="card-text">'.$record['text'].'</p>
        <a href="#" class="card-link">'.$record['link'].'</a>
      </div>
    </div>
    <br>';

  }

   ?>


</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
