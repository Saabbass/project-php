<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht 12</title>
</head>

<body>
    <h1>
        <?php

        echo "I am a big fan of the simpsons"

        ?>
    </h1>

    <?php

    $willekeurigeVariable = 3;
    $willekeurigeVariable = true;
    $willekeurigeVariable = [true, "yes", 4, "sb"];

    $mijnGegevens = [
        "voornaam" => "sb",
        "achternaam" => "s",
        "leeftijd" => 1
    ];

    echo $mijnGegevens["leeftijd"];
    ?>


</body>

</html>


<!-- phpinfo();
     echo "<h1>I am a big fan of the Simpsons</h1>"; -->
