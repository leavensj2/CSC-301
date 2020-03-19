//Connection to MySQL Test

<?php
//Your MySQL user account.
$user = 'root';
 
//Your MySQL password.
$password = 'password';
 
//The server / hostname of your MySQL installation.
$server = 'localhost';
 
//The name of your MySQL database.
$database = 'dogadoption_db';
 
//Connect using PDO.
//$pdo = new PDO("mysql:host=$server;dbname=$database", $user, $password);
if ($pdo = new PDO("mysql:host=$server;dbname=$database", $user, $password))
{
	print '<p>Successfully -> connected to the database! -> </p>';
	mysqli_close($dbc);
}
else
{
	print '<p> -> Could not connect to the -> database </p>';
}


?>

