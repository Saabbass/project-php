<?php

    $spongebob_main_characters = [
        "SpongeBob" => [
            "age" => 12,
            "job" => "fry cook"
        ],
        "Patrick" => [
            "age" => 12,
            "job" => "unemployed"
        ],
        "Sandy" => [
            "age" => 25,
            "job" => "scientist"
        ],
        "Squidward" => [
            "age" => 35,
            "job" => "cashier"
        ],
    ];

    
    foreach ($spongebob_main_characters as $name => $characters){

        //print_r($characters);

        echo $name;
        echo $characters["age"] , $characters["job"], "<br>";

    }

    $simpleArray = [3, 4, 5, 65];