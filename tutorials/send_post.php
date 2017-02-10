 <?php
$servername = "localhost";
$username = "root";
$password = "password";
$database = "monster_manual";

$userUsername = $_POST['post_username'];
$userPassword = $_POST['post_password'];
$userFName = $_POST['post_fName'];
$userSName = $_POST['post_sName'];
$userAge = $_POST['post_age'];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (!empty($userUsername) and !empty($userPassword)) {
	$sql = "INSERT INTO user_tbl (username, userPassword, userFName, userSName, userAge)
	VALUES ('$userUsername', '$userPassword', '$userFName', '$userSName', '$userAge')";

	if (!($conn->query($sql))) {
		echo "<center>";
			die("Username is already in use");
		echo "</center>";		
	}else{
		echo "New account created successfully";
	}
}
else {
	echo "<center>";
        die("Please input a username and password");
    echo "</center>";	
}

/**if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}**/

$conn->close();

?> 