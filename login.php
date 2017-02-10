<?php

session_start();
           
        include("connection.php");
        $userUsername = strip_tags($_POST['check_username']);
        $userPassword = strip_tags($_POST['check_password']);
        $sql = "SELECT username, userPassword, userFName, userSName, userDoB FROM user_tbl WHERE username = '$userUsername' LIMIT 1";
        
        $query = mysqli_query($dbCon, $sql);

         if ($query) {
            $row = mysqli_fetch_row($query);            
            $dbUsername = $row[0];
            $dbPassword = $row[1];
            $dbForename = $row[2];
            $dbSurname = $row[3];
            $dbDoB = $row[4];
         }
         
        if ($userUsername == $dbUsername && $userPassword == $dbPassword) {
            $_SESSION['username'] = $dbUsername;
            $_SESSION['forename'] = $dbForename;
            $_SESSION['surname'] = $dbSurname;
            $_SESSION['dob'] = $dbDoB;
            header('Location: user.php');
        } else {
            echo "Incorrect Password";
        }


?> 