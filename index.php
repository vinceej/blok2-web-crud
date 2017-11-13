<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hier komt mijn eerste php code</h1>

    <?php
      // Dit zijn string variabelen 
      $voornaam = "Arjanus";
      $adres = "Prins Hendrikstraat 17";
      $woonplaats = 'Castricum';

      // Dit is
      // een variabele met daarin een geheel
      // getal (integer)
      $leeftijd = 17.5;
      $nieuwe_leeftijd = $leeftijd + 25;

      $fruit0 = "mango";
      $fruit1 = "ananas";
      $fruit2 = "banaan";

      /* Hieronder staat een 
         een indexed array. */
      $fruit = array("sinaasappel", "appel", "citroen");

      echo "Mijn voornaam is: " . $voornaam . "<br>"; 
      echo "Ik woon in op de: " . $adres . "<br>";
      echo "Mijn woonplaats is: " . $woonplaats . "<br>";
      echo "Mijn leeftijd is: " . $leeftijd . " en over 25 jaar ben ik : " . $nieuwe_leeftijd . "<br>";
      echo "Het beste fruit ter wereld is: " . $fruit[0] ."<br>";
      echo "Daarna vind ik " . $fruit[1] . " het lekkerste.<br>";
      echo "Op de derde plaats komt dan: " . $fruit[2] . "<br>";

      echo "<hr>";
      // Associatief array
      $user = array("voornaam"      => "Arjan",
                    "tussenvoegsel" => "de", 
                    "achternaam"    => "Ruijter",
                    "straatnaam"    => "Prins Hendrikstraat",
                    "huisnummer"    => 17,
                    "woonplaats"    => "Castricum", 
                    "postcode"      => '1901CB',
                    "leeftijd"      => 49);

      var_dump($user);

      $user1 = array("voornaam"      => "Bert",
                     "tussenvoegsel" => "de", 
                     "achternaam"    => "Beer",
                     "straatnaam"    => "Julian van Stolberstraat",
                     "huisnummer"    => 12,
                     "woonplaats"    => "Uitgeest", 
                     "postcode"      => '1051 XM',
                     "leeftijd"      => 82);

      echo "Mijn naam is: " . $user['voornaam'] . " " . $user['tussenvoegsel'] . " " . $user['achternaam'] . "<br>";
      echo "Ik woon op de " . $user['straatnaam'] . " " . $user['huisnummer'] . "<br>";
      echo "Postcode en stad: " . $user['postcode'] . " " . $user['woonplaats'] . "<br>";
      echo "Mijn leeftijd is: " . $user['leeftijd'];

      echo "<hr>";

      echo "Mijn naam is: " . $user1['voornaam'] . " " . $user1['tussenvoegsel'] . " " . $user1['achternaam'] . "<br>";
      echo "Ik woon op de " . $user1['straatnaam'] . " " . $user1['huisnummer'] . "<br>";
      echo "Postcode en stad: " . $user1['postcode'] . " " . $user1['woonplaats'] . "<br>";
      echo "Mijn leeftijd is: " . $user1['leeftijd'];



      /* Hieronder staat een boolean variabele. 
         Een boolean variabele is een variabele die precies twee waarden kan aannemen.
         true / false
         1 / 0 */
      $schrijf_naar_scherm = true;

      if ($schrijf_naar_scherm) {
        echo "<hr>";
        echo "Ik ben een zin die afhankelijk van de waarde van de boolean variabele op het scherm wordt afgebeeld";
      }
      /* 
         Maak een array genaamd user waarin je de volgende data zet.
         voornaam, tussenvoegsel, achternaam, straatnaam, huisnummer, stad, postcode, leeftijd
         en maak een zin die al deze info weergeeft. Echo deze zin naar het scherm.
      */
    ?>

    <hr>
    <?php 
      if (!empty($_POST)) {
        var_dump($_POST);
        echo "Mijn net ingevulde voornaam is: " . $_POST["voornaam"] ."<br>";
      }
    ?>
    <h3>Vul uw gegevens in:</h3>

    <form method="post">
      voornaam: <input type="text" name="voornaam">
      wachtwoord: <input type="password" name="wachtwoord">
      <input type="submit" value="Drukken maar!">    
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>