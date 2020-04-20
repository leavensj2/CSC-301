
<?php

$settings = [
	'host' => 'localhost',
	'db' => 'dogadoption_db',
	'user' => 'root',
	'password' => 'password'
];

$opt = [
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
PDO::ATTR_EMULATE_PREPARES => false
];

//Establish Connection to DB
$pdo = new PDO('mysql:host='.$settings['host'].';dbname='.$settings['db'].';charset=utf8mb4',$settings['user'],$settings['password'], $opt);

//Execute Query
$result=$pdo->query('SELECT * FROM dog_table');


//Process Result
echo '<pre>';
while ($record=$result->fetch()){
	print_r($record);
	echo '<hr>';
	
}








?>

