<?php 
//turn on output buffering: save output of any data while program is running
ob_start();

try {
	//Connection variable used to connect to database
	$con = new PDO("mysql:dbname=weblooker;host=localhost", "root", "");
	//set error mode to error mode warning
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

}
catch(PDOException $e){
	echo "Connection failed: " . $e->getMessage();
}

 ?>
