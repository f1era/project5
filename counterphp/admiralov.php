<?php

	include ('mysqlcon.php');

	$counter_station = 0;

	$admiralov = 0;

	$result_set = $mysqli->query("SELECT * FROM  `stations` ");

	if($conn->connect_error) {
		die('failed. ' . $conn->connect_error);
	}
	else{
		while (($row = $result_set->fetch_assoc()) != false) {
			if($row["name_station"] == "admiralov")
			{
				$admiralov += 1;
			}
		}
		if($admiralov > 0)
		{
			echo $admiralov . "!";
		}
	}

?>
