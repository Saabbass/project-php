<?php
$best_soccer_players = [
    "goalkeeper" => [
        "Manuel Neuer" => ["Country" => "Germany", "Years Active" => "2006-present"],
        "Jan Oblak" => ["Country" => "Slovenia", "Years Active" => "2010-present"],
        "David de Gea" => ["Country" => "Spain", "Years Active" => "2008-present"],

    ],
    "defenders" => [
        "Sergio Ramos" => ["Country" => "Spain", "Years Active" => "2002-present"],
        "Virgil van Dijk" => ["Country" => "Netherlands", "Years Active" => "2011-present"],
        "Marcelo" => ["Country" => "Brazil", "Years Active" => "2005-present"],

    ],
    "midfielders" => [
        "Luka Modric" => ["Country" => "Croatia", "Years Active" => "2003-present"],
        "Kevin de Bruyne" => ["Country" => "Belgium", "Years Active" => "2008-present"],
        "N'Golo Kante" => ["Country" => "France", "Years Active" => "2011-present"],

    ],
    "forwards" => [
        "Christiano Ronaldo" => ["Country" => "Portugal", "Years Active" => "2002-present"],
        "Lionel Messi" => ["Country" => "Argentina", "Years Active" => "2004-present"],
        "Robert Lewandowski" => ["Country" => "Poland", "Years Active" => "2008-present"],

    ],

];


foreach ($best_soccer_players as $key => $groepSpelers) {
    echo "<h1>" . $key . "</h1>";

    foreach ($groepSpelers as $name => $data) {
        echo $name . "<br>";
    }
}
