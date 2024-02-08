<?php
    //session_start();
	
	//connect to database
	$db=mysqli_connect("localhost","root","","busonline");


	$dsn = 'mysql:host=localhost;dbname=busonline';
	$username = 'root';
	$password = '';
	$options = [];
  
	try{
	  $connection = new PDO($dsn, $username, $password, $options);
	  //echo "Successfully connected to the database.";
	}catch(PDOException $e){
  
	}

?>