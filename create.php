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
                        <li><a id="modal_trigger" href="user.php">Profile</a></li>
                        <li><a id="modal_trigger" href="https://www.youtube.com/embed/_njI2bHmN5A">View Tutorial</a></li>
                        <li><a id="modal_trigger" href="logout.php">Logout</a></li>
                    </ul>
                                        
                </nav>
            </div>
        </header>
            

        <section class="create">
            <div class="containerUser">
                <h2>Welcome <?php echo"{$username}";?>!</h2>
                <h1>Create a Monster!</h1>
                
                    <form action="create_monster.php" method="post">
                        <label class="input"><span>Name</span><input type="text" name="name" required></label>                        
                        <label class="input"><span>Race</span><input type="text" name="race" required></label>         <label class ="input"><span>Languages</span><input type="text" name="lang"></label>                
                        <label class ="input"><span>Alignment</span><select type="select" name="align" required>
                            
                            <option value="neutral neutral">neutral neutral</option>
                            <option value="neutral good">neutral good</option>
                            <option value="neutral evil">neutral evil</option>
                            <option value="chaotic neutral">chaotic neutral</option>
                            <option value="chaotic good">chaotic good</option>
                            <option value="chaotic evil">chaotic evil</option>
                            <option value="lawful neutral">lawful neutral</option>
                            <option value="lawful good">lawful good</option>
                            <option value="lawful evil">lawful evil</option>
                        </select>
                        </label>                        
                        <label class ="inputSmallFirst"><span>Armour Class</span><input type="text" name="AC"></label>                        
                        <label class ="inputSmall"><span>Hit Points</span><input type="text" name="HP"></label>
                        <label class ="inputSmall"><span>Challange Rate</span><input type="text" name="CR"></label>
                        <label class ="inputSmall"><span>Speed</span><input type="text" name="SPD"></label>             <label class ="inputSmall"><span>Size</span><input type="text" name="size"></label>           
                        <label class ="inputSmallFirst"><span>Strength</span><input type="number" name="STR"></label>
                        <label class ="inputSmall"><span>Dexterity</span><input type="number" name="DEX"></label>
                        <label class ="inputSmall"><span>Constitution</span><input type="number" name=" CON"></label>
                        <label class ="inputSmall"><span>Intelligence</span><input type="number" name="INT"></label>
                        <label class ="inputSmall"><span>Wisdom</span><input type="number" name="WIS"></label>
                        <label class ="inputSmall"><span>Charisma</span><input type="number" name="CHA"></label>
                        <label class="input"><span>Saving Throws</span><input type="text" name="saves" ></label>
                        <label class="input"><span>Skills</span><input type="text" name="skills" ></label>
                        <label class="input"><span>Senses</span><input type="text" name="senses" ></label>
                        <label class="input"><span>Damage Vulnerabilities</span><input type="text" name="dmgVuln" ></label>
                        <label class="input"><span>Damage Resistances</span><input type="text" name="dmgRes" ></label>
                        <label class="input"><span>Damage Immunities</span><input type="text" name="dmgImm" ></label>
                        <label class="input"><span>Condition Immunities</span><input type="text" name="conImm" ></label>
                        <label class="submit"><input type="submit" value="Create Monster" class="btn btn_red"></label>
                        
                    </form>
                
                
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