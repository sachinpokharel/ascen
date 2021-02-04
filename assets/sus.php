<?php
	$db = mysqli_connect('localhost', 'root','', 'exam');

	// initialize variables

	$email = "";

	

if(isset($_POST["submit"])) {
	
	$email = $_POST["email"];

		mysqli_query($db, "INSERT INTO form ( email) VALUES ( '" . $email. "')");

		
	}
?>
<?php
header('location: ../index.php');
?>
