<?php
session_start();
include("connection.php");
if(isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        $forename = $_SESSION['forename'];
        $surname = $_SESSION['surname'];
        $dob = $_SESSION['dob'];
    } else {
        header('Location: index.html');
        die();
    }


$username = $_SESSION['username'];
$monsterName = $_POST['name'];
$race = $_POST['race'];
$align = $_POST['align'];
$lang = $_POST['lang'];
$ac = $_POST['AC'];
$hp = $_POST['HP'];
$spd = $_POST['SPD'];
$size = $_POST['size'];
$cha = $_POST['CHA'];
$str = $_POST['STR'];
$dex = $_POST['DEX'];
$con = $_POST['CON'];
$int = $_POST['INT'];
$wis = $_POST['WIS'];
$cha = $_POST['CHA'];
$cr = $_POST['CR'];
$saves = $_POST['saves'];
$skills = $_POST['skills'];
$senses = $_POST['senses'];
$dmgVuln = $_POST['dmgVuln'];
$dmgRes = $_POST['dmgRes'];
$dmgImm = $_POST['dmgImm'];
$conImm = $_POST['conImm'];

    $sql = "INSERT INTO monster_tbl (monsterName, monsterRace, monsterAlgn, monsterLanguages, username, monsterAC, monsterHP, monsterSpd, monsterSize, monsterSTR, monsterDEX, monsterCON, monsterINT, monsterWIS, monsterCHA, monsterCR, monsterSave, monsterSkills, monsterSenses, monsterDmgVuln, monsterDmgRes, monsterDmgImm, monsterConImm)
    VALUES ('$monsterName', '$race', '$align', '$lang', '$username', '$ac', '$hp', '$spd', '$size', '$str', '$dex', '$con', '$int', '$wis', '$cha', '$cr', '$saves', '$skills', '$senses', '$dmgVuln', '$dmgRes', '$dmgImm', '$conImm')";

$query = mysqli_query($dbCon, $sql);

$_SESSION['createID'] = $dbCon->insert_id;
header( 'Location: create_additional.php' )

?> 