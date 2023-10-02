<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "AU_HK_USER";


$conn = new mysqli($servername, $username, $password,$dbname );

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$Name = mysqli_real_escape_string($conn, $_POST["Name"]);
	$Password = mysqli_real_escape_string($conn, $_POST["Password"]);


	$sql = "SELECT * FROM HK_USER  WHERE Name='$Name' AND Password='$Password'";
	$result = mysqli_query($conn, $sql);


	if (mysqli_num_rows($result) == 1) {
		
		$row = mysqli_fetch_assoc($result);
		$_SESSION["loggedin"] = true;
		$_SESSION["Name"] = $row["Name"];
        $_SESSION["Password"] = $row["Password"];
		echo '<script>setTimeout(function(){ alert("Login Successfully"); }, 1000);</script>';
		require('../html/home.html');
	
        
	} else {
		
		echo "Invalid username or password";
	}
}


mysqli_close($conn);
?>