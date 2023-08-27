<?php
	header("Content-Type:application/json");
	header("Access-Control-Allow-Origin:*");
	include("dbConnection.php");

	$selectPage = "SELECT * FROM cms_pages WHERE for_menu='active' ORDER BY page_order ASC";
	
	$query = mysqli_query($conn, $selectPage);
	$run = mysqli_fetch_all($query, MYSQLI_ASSOC);
	echo json_encode($run);
	// echo $run
?>