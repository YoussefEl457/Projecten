<?php



 ?>

<html>
    <head>
        <title> Sign up </title>
    </head>
      <body>
          <h2>Maak een nieuw account</h2>
          <form action="signup.php" method="post" >
              <input type="text" title="Voornaam" placeholder="Voornaam" required/>
              <input type="text" title="Tussenvoegsel" placeholder="Tussenvoegsel"/><br>
              <input type="text" title="Achternaam" placeholder="Achternaam" required/><br>
              <input type="email" title="Email" placeholder="Email" required/><br>
              <input type="text" title="Gebruikersnaam" placeholder="Gebruikersnaam" required/><br>
              <input type="password" title="Wachtwoord" placeholder="Wachtwoord" required/><br>
              <input type="password" title="Herhaal_Wachtwoord" placeholder="Herhaal Wachtwoord" required/><br>
              <button type="submit" class="btn">Maak account!</button><br>
          </form>
      </body>
</html>
