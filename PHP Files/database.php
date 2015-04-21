<?php
	// Corresponds to file ../YesodProjects/Stat/Handler/Database.hs
	echo "<html><body>";
	$con = new mysqli("localhost", "root", "rooty", "yesod");
	$query = "SELECT * FROM `person`";
	$stmt = $con->prepare($query);
	$stmt->execute();
	$stmt->bind_result($personId, $personName, $personBirth, $personColor, $personEmail, $personWebsite);
	while($stmt->fetch()) {
		echo $personId." ".$personName." ".$personBirth." ".$personColor." ".$personEmail." ".$personWebsite."</br>";
	}
	echo "</body><html>";
?>