 <?php
$servername = "localhost";
$username = "root";
$password = "password";
$database = "monster_manual";

$userUsername = $_POST['post_username'];
$userPassword = $_POST['post_password'];
$userFName = $_POST['post_fName'];
$userSName = $_POST['post_sName'];
$userDoB;
if (!empty($_POST['post_DoB'])) {
      $userDoB = $_POST['post_DoB'];  
    }





// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (!empty($userUsername) and !empty($userPassword)) {
    if (!empty($userDoB)) {      
	$sql = "INSERT INTO user_tbl (username, userPassword, userFName, userSName, userDoB)
	VALUES ('$userUsername', '$userPassword', '$userFName', '$userSName', '$userDoB')";
    }else{
    $sql = "INSERT INTO user_tbl (username, userPassword, userFName, userSName)
	VALUES ('$userUsername', '$userPassword', '$userFName', '$userSName')"; 
    }

	if (!($conn->query($sql))) {
		echo "<center>";
			die("Username is already in use");
		echo "</center>";		
	}else{
            session_start();
            $_SESSION['username'] = $userUsername;
            $_SESSION['forename'] = $userFName;
            $_SESSION['surname'] = $userSName;
            $_SESSION['dob'] = $userDoB;
		header('Location: user.php');
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