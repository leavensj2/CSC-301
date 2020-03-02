
<?php
//Variables that are pretty much always needed.  Can copy for future pages :)
require_once('functions.php');
$dogs = jsonToArray('data.json');
$myFile = "data.json";
$title = 'Pet Finder';

//Code to Delete Specified Index in Array
unset($dogs[$_GET['id']]);

//Re-Index The Array
$tempArray = array_values($dogs);
print_r($tempArray);

//Convert updated array to JSON
$jsondata = json_encode($tempArray, JSON_PRETTY_PRINT);

//Write JSON Data into data.json File
if(file_put_contents($myFile, $jsondata)) {
     echo 'Data successfully saved';
 }
else
     echo "error";


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
