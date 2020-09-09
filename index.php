<?php



 ?>

<html>
    <head>
        <title> Inloggen </title>
    </head>
        <body>
            <h2>Login</h2>
            <form action="index.php" method="post">
                <input type="text" title="Gebruikersnaam" placeholder="Gebruikersnaam" required/><br>
                <input type="password" title="Wachtwoord" placeholder="Wachtwoord" required/><br>
                <button type="submit" class="btn">Login</button><br>
                <a class="forgot" href="lostpsw.php">Wachtwoord vergeten?</a><br>
                <a class="forgot" href="signup.php">Maak een nieuw account</a>
            </form>
        </body>
</html>
