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
$abilityName = $_POST['abilityName'];
$abilityDesc = $_POST['abilityDesc'];


    $sql = "INSERT INTO ability_tbl (monsterID, abilityName, abilityDesc)
    VALUES ('$monsterID', '$abilityName', '$abilityDesc')";

$query = mysqli_query($dbCon, $sql);

header( 'Location: create_additional.php' )

?> 