



<?php 
	

	$db = mysqli_connect('localhost', 'root','', 'exam');

	// initialize variables
	$name = "";
	$email = "";
	$content="";
	

if(isset($_POST["submit"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$content = $_POST["massege"];
		mysqli_query($db, "INSERT INTO tblcontact (user_name, user_email,content) VALUES ('" . $name. "', '" . $email. "','" . $content. "')");

		
	}
?>
<?php
header('location: ../index.php#contact');
?>

