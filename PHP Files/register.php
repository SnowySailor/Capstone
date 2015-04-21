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