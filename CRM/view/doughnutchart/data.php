<?php
	$conn = new mysqli("localhost", "root", "", "sw_project");
 
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	//$cat = array();

	//for Samsung
	$sql="SELECT COUNT(Rate)  FROM solution where Rate = '1'";
	$query=$conn->query($sql);
	$rate_1 = $query->num_rows;

	//for Apple
	$sql="SELECT COUNT(Rate)  FROM solution where Rate = '2'";
	$aquery=$conn->query($sql);
	$rate_2 = $aquery->num_rows;

	//for Vivo0
	$sql= "SELECT COUNT(Rate)  FROM solution where Rate = '3'";
	$vquery=$conn->query($sql);
	$rate_3 = $vquery->num_rows;

	//for Sony
	$sql="SELECT COUNT(Rate)  FROM solution where Rate ='4'";
	$squery=$conn->query($sql);
	$rate_4 = $squery->num_rows;

	//for Nokia
	$sql="SELECT COUNT(Rate)  FROM solution where Rate = '5'";
	$nquery=$conn->query($sql);
	$rate_5 = $nquery->num_rows;

?>