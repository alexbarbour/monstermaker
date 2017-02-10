<?php
        session_start();

    if(isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
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
            

        <section class="contact">
            <div class="container">
                <h2>Welcome <?php echo"{$username}";?>!</h2>
                <h1>Add actions and abilities</h1>
                
                <form action="create_abilities.php" method="post">
                    <label class="input"><span>Ability Name</span><input type="text" name="abilityName" required></label>
                    <label class="message"><span>Ability Description</span><textarea name="abilityDesc" required></textarea></label>
                    <label class="submit"><input type="submit" value="Add Ability" class="btn btn_red"></label>   
                </form>
                <br />
                <form action="create_actions.php" method="post">
                    <label class="input"><span>Action Name</span><input type="text" name="actionName" required></label>
                    <label class="message"><span>Action Description</span><textarea name="actionDesc" required></textarea></label>
                    <label class="submit"><input type="submit" value="Add Action" class="btn btn_red"></label>
                    
                </form>
                <form action="user.php"><label class="submit"><input type="submit" action="user.php" value="Finish" class="btn btn_red"></label></form>
                
                
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