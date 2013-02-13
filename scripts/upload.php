<?php
	
	// Before uploading anything check that the id and password are correct.
	// There's no point to even get the JSON if it's not correct
	$id = $_POST["id"];
	$pwd = $_POST["password"];
	
	// Check that shit, yo
	
	// If all that's good, then get the JSON data
	$json = $_POST["json"];
	
	// Then upload shit
?>