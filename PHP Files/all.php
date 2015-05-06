<?php
	// Corresponds to file ../YesodProjects/Stat/Handler/Write.hs
	$myfile = fopen("/Library/WebServer/Documents/write.txt", "w") or die("Unable to open file!");
	echo fwrite($myfile,"The quick brown fox jumps over the lazy dog.");
	fclose($myfile);
?>
<?php
	// Corresponds to file ../HaskellStatExecutibles/stats.hs
	$myfile = fopen("/Users/Nickolas/Documents/onehundred.txt", "r") or die("Unable to open file!");
	$file = fread($myfile,filesize("/Users/Nickolas/Documents/onehundred.txt"));
	$pos = strpos($file, "(");
	if(!$pos)
	    echo "Not elem\n";
	else
	    echo "Elem\n";
	$array = range(10000, 0);
	$sorted = sort($array);
	echo ($sorted[0] + "\n");
	echo "\nDone";
	fclose($myfile);

	$myfile1 = fopen("/Users/Nickolas/Documents/onehundred.txt", "r") or die("Unable to open file!");
	$file1 = fread($myfile1,filesize("/Users/Nickolas/Documents/onehundred.txt"));
	fclose($myfile1);

	$myfile2 = fopen("/Users/Nickolas/Documents/onehundred.txt", "r") or die("Unable to open file!");
	$file2 = fread($myfile2,filesize("/Users/Nickolas/Documents/onehundred.txt"));
	fclose($myfile2);

	$myfile3 = fopen("/Users/Nickolas/Documents/onehundred.txt", "r") or die("Unable to open file!");
	$file3 = fread($myfile3,filesize("/Users/Nickolas/Documents/onehundred.txt"));
	fclose($myfile3);

	$myfile4 = fopen("/Users/Nickolas/Documents/onehundred.txt", "r") or die("Unable to open file!");
	$file4 = fread($myfile4,filesize("/Users/Nickolas/Documents/onehundred.txt"));
	fclose($myfile4);
?>
<?php
// Corresponds to file ../YesodProjects/Stat/Handler/Register.hs
error_reporting(E_ALL);
if(isset($_POST['name'])) {
	$con = new mysqli("localhost", "root", "rooty", "phpstat") or die("Error");

	$name = $_POST['name'];
	$birthday = $_POST['birthday'];
	$color = $_POST['color'];
	$email = $_POST['email'];
	$website = $_POST['website'];

	$query = "INSERT INTO `person` (name, birthday, color, email, website) VALUES (?,?,?,?,?)";
	$stmt = $con->prepare($query);
	$stmt->bind_param('sssss', $name, $birthday, $color, $email, $website);
	$stmt->execute();
	echo "Success!";
} else {
	echo '<form method="post" action="register.php">
			<label>Name:</label><input type="text" name="name"></input></br>
			<label>Birthday:</label><input type="text" name="birthday"></input></br>
			<label>Color:</label><input type="text" name="color"></input></br>
			<label>Email:</label><input type="text" name="email"></input></br>
			<label>Website:</label><input type="text" name="website"></input></br>	
			<button>Submit</button>
		 </form>';
}
?>
<?php
	// Corresponds to file ../YesodProjects/Stat/Handler/Read.hs
	$myfile = fopen("/Library/WebServer/Documents/write.txt", "r") or die("Unable to open file!");
	echo fread($myfile,filesize("/Library/WebServer/Documents/write.txt"));
	fclose($myfile);
?>
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