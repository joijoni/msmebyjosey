<?php
$host = $_SERVER['HTTP_HOST'];

if($host=="localhost"){
	$server="localhost";
	$username="root";
	$password="";
	$database="msme_db";
	 // this will avoid mysql_connect() deprecation error.
	 error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	 // but I strongly suggest you to use PDO or MySQLi.
		 
	 $conn = mysqli_connect($server,$username,$password);
	 $dbcon = mysqli_select_db($conn,$database);
	 
	 if ( !$conn ) {
		 die("Connection failed : " . $mysqli->connect_error);
	 }
}else{
	//Get Heroku ClearDB connection information
	$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
	$cleardb_server = $cleardb_url["host"];
	$cleardb_username = $cleardb_url["user"];
	$cleardb_password = $cleardb_url["pass"];
	$cleardb_db = substr($cleardb_url["path"],1);
	$active_group = 'default';
	$query_builder = TRUE;
	// Connect to DB
	$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
}
?>