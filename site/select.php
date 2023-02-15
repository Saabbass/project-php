<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht 12</title>
</head>

<body>
    <nav> 
        <ul>
            <li>
                <a href="show.php">Show zonder waarde</a>
            </li>
            <li>
                <a href="show.php?waarde1=Honderd">Show met 1 waarde</a>
            </li>
            <li>
                <a href="show.php?waarde1=TweeHonderd&waarde2=Drie">Show met 2 waardes</a>
            </li>
            <li>
                <a href="show.php?waarde1=Snoop%20Dog&waarde2=Dr%20Dre">Snoop Dog en Dr Dre</a>
            </li>
        </ul>
    </nav>

    <h1>
        <?php

        echo "I am a big fan of the simpsons"

        ?>
    </h1>

    <?php 

    $willekeurigeVariable = 3;
    $willekeurigeVariable = true;
    $willekeurigeVariable = [true, "yes", 4, "Sebas"];

    $bonusGetallen = [5, 16, 19, 32, 56, 99];

    $mijnGegevens = [
        "voornaam" => "Sebas", 
        "achternaam" => "Tenk", 
        "leeftijd" => 21];

        echo $mijnGegevens["leeftijd"];
    ?>


</body>

</html>


<!-- phpinfo();
     echo "<h1>I am a big fan of the Simpsons</h1>"; -->