<?php
//connect to mysql
$mysqli = new mysqli('localhost', 'mgrassi', '972367', 'mgrassi');

if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}
?>