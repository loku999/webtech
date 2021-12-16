<?php
    $host	= "localhost";
    $dbuser = "root";
    $sbpass="";
	$dbname = "webtecproject";
	
	
	


	function getConnection(){
		global $host,  $dbuser, $dbpass, $dbname ;
	
		$conn = mysqli_connect($host,  $dbuser, $dbpass, $dbname );
		return $conn;
	}

?>