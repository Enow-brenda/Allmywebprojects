<?php
	$conn = new mysqli('localhost', 'root', '', 'voting');
	

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>