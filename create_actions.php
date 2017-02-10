<?php
session_start();
include("connection.php");
if(isset($_SESSION['username'])) {
        $username = $_SESSION['username'];        
    } else {
        header('Location: index.html');
        die();
    }


$monsterID = $_SESSION['createID'];
$actionName = $_POST['actionName'];
$actionDesc = $_POST['actionDesc'];


    $sql = "INSERT INTO action_tbl (monsterID, actionName, actionDesc)
    VALUES ('$monsterID', '$actionName', '$actionDesc')";

$query = mysqli_query($dbCon, $sql);

header( 'Location: create_additional.php' )

?> 