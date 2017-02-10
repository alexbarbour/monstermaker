<?php
    session_start();
    
    if(isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        $forename = $_SESSION['forename'];
        $surname = $_SESSION['surname'];
        $dob = $_SESSION['dob'];
    } else {
        header('Location: index.html');
        die();
    }


?>

<!DOCTYPE html>

<html>
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">

        <title>Monster Maker</title>
        
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>    
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />     

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,600" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Merriweather:300,700' rel='stylesheet' type='text/css'>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
        <script src="js/script.js"></script>  

    </head>

    <body>
        
        <header>
            <div class="container">
                <h1 class="logo"><i class="fa fa-paw"></i>Monster Maker</h1>
                <i class="fa fa-bars toggle-menu"></i>
                <nav>
                    <ul>
                        <li><a id="modal_trigger" href="create.php">Create Monster</a></li>
                        <li><a id="modal_trigger" href="https://www.youtube.com/embed/_njI2bHmN5A">View Tutorial</a></li>
                        <li><a id="modal_trigger" href="logout.php">Logout</a></li>
                    </ul>
                                        
                </nav>
            </div>
        </header>
            

        <section class="user">
            <div class="containerUser">
                <h1>Welcome <?php echo"{$username}";?>!</h1>
                <div class="profile">
                    <img src="images/profile-picture.png">
                    <ul>        
                        <li class="prof">
                            <h3>Username</h3>
                            <p><?php echo"{$username}";?></p>
                        </li>
                        <li>
                            <h3>Forename</h3>
                            <p><?php echo"{$forename}";?></p>
                        </li>
                        <li>
                            <h3>Surname</h3>
                            <p><?php echo"{$surname}";?></p>
                        </li>
                        <li>
                            <h3>Date of birth</h3>
                            <p><?php echo"{$dob}";?></p>
                        </li>
                        
                    </ul>
                    
                </div>
                <div class="monsterList">
                    <ul>
                      <?php
                        $dbCon = mysqli_connect("localhost", "root", "password", "monster_manual");
					  	$uName = $_SESSION["username"];							

						$sql = "SELECT * FROM monster_tbl WHERE username ='".$uName."';";

						$result = $dbCon->query($sql);							
				        
							while($row = $result->fetch_assoc()) {                                                         
								echo "<ul><li>" . $row["monsterName"]. " </li></ul>
                                <form action='statblock.php' method='post'>
                                <input type='hidden' name='monsterID' value='$row[monsterID]'>
                                <label class='submit'><input type='submit' name='view' value='View' class='btn btn_red'></label></form>" ;                                
							}
							
                        ?>
                        
                    </ul>
                </div>
                <div class="image">
                   <img src="images/website%20photo.png">
                    
                </div>
                
				</div>
        </section>
        
        

        <footer>
            <div class="container">
                <div class="copyright">
                    <p>Monster Maker <a href="http://twitter.com/abarbour747" target="_blank">Follow me on Twitter</a>.</p>
                </div>
                <div class="social">
                    Share This: 
                    <a href="https://twitter.com/home?status=Completely%20Free%20DnD%20Enemy%20Creation%20Tool%20by%20@abarbour747%20at%20https://valloric.github.io/statblock5e/" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://valloric.github.io/statblock5e/" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.reddit.com/submit?title=Completely%20Free,%20DnD,%20Enemy%20Creation%20Tool&url=https://valloric.github.io/statblock5e/" target="_blank"><i class="fa fa-reddit"></i></a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=https://valloric.github.io/statblock5e/&title=Completely%20Free%20DnD%20Enemy%20Creation%20Tool" target="_blank"><i class="fa fa-linkedin"></i></a> <!-- For this prototype I am linking to Valloric's website, in the finished version I would substitute this with my own -->
                </div>
            </div>
        </footer>
        


    </body>
</html>