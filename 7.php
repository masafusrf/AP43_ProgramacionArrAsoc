<?php

    //Ejercicio 7.- A partir del array $data proporcionado, 
    // muestra todos los usuarios junto con su edad, 
    // siempre que cumplan el criterio de estar entre 35 y 65 años. 
    // Aquí tienes un ejemplo de como queda la salida por pantalla:

    // Lillith Herring is 62 years old


    $data = [
        [
            "User" => "Ishmael Porter",
            "Country" => "Vietnam",
            "Age" => "55",
            "Favorites" => "pasta"
        ],
        [
            "User" => "Denton Lee",
            "Country" => "Costa Rica",
            "Age" => "31",
            "Favorites" => "cereals, pies"
        ],
        [
            "User" => "Ferdinand Donovan",
            "Country" => "New Zealand",
            "Age" => "68",
            "Favorites" => "cereals, soups"
        ],
         [
            "User" => "Chastity Mcgowan",
            "Country" => "Spain",
            "Age" => "85",
            "Favorites" => "desserts, noodles"
        ],
        [
            "User" => "Hasad Page",
            "Country" => "Sweden",
            "Age" => "42",
            "Favorites" => "desserts"
        ],
        [
            "User" => "Thane Moon",
            "Country" => "Mexico",
            "Age" => "68",
            "Favorites" => "cereals"
        ],
        [
            "User" => "Neville Marks",
            "Country" => "New Zealand",
            "Age" => "77",
            "Favorites" => "noodles"
        ],
        [
            "User" => "Laurel Buckner",
            "Country" => "Austria",
            "Age" => "73",
            "Favorites" => "sandwiches, seafood"
        ],
        [
            "User" => "Zia Bullock",
            "Country" => "Austria",
            "Age" => "25",
            "Favorites" => "salads"
        ],
        [
            "User" => "Wanda Hines",
            "Country" => "Australia",
            "Age" => "80",
            "Favorites" => "pies"
        ],
        [
            "User" => "Addison Campbell",
            "Country" => "Sweden",
            "Age" => "42",
            "Favorites" => ""
        ],
        [
            "User" => "Joshua Kane",
            "Country" => "Russian Federation",
            "Age" => "76",
            "Favorites" => ""
        ],
        [
            "User" => "Mufutau Fitzgerald",
            "Country" => "United States",
            "Age" => "24",
            "Favorites" => "noodles, desserts"
        ],
        [
            "User" => "Isadora Durham",
            "Country" => "New Zealand",
            "Age" => "71",
            "Favorites" => "desserts, pies"
        ],
        [
            "User" => "Nomlanga Howard",
            "Country" => "Canada",
            "Age" => "31",
            "Favorites" => "noodles, soups, pasta"
        ],
        [
            "User" => "Brittany Mccall",
            "Country" => "Chile",
            "Age" => "34",
            "Favorites" => ""
        ],
        [
            "User" => "Eleanor Alston",
            "Country" => "Chile",
            "Age" => "20",
            "Favorites" => "soups"
        ],
        [
            "User" => "Lillith Herring",
            "Country" => "Russian Federation",
            "Age" => "62",
            "Favorites" => "cereals, pies"
        ],
        [
            "User" => "Aileen Kemp",
            "Country" => "Italy",
            "Age" => "53",
            "Favorites" => "salads"
        ],
        [
            "User" => "Aurora Freeman",
            "Country" => "Chile",
            "Age" => "33",
            "Favorites" => "salads"
        ],
        [
            "User" => "David Schneider",
            "Country" => "Ireland",
            "Age" => "85",
            "Favorites" => "pies, cereals"
        ]
    ];



    $info=[];

foreach ($data as $persona => $dato) {

    $usuario=[];
    
    foreach ($dato as $key => $value) {
        if ($key == "User" || $key == "Age") {
            $usuario[$key] = $value;
        }
    }


    if ($usuario['Age'] >= 35 && $usuario['Age'] <= 65) {
        $info[] = $usuario;
    }
}

    foreach ($info as $usuario) {
        echo $usuario['User'] . " is " . $usuario['Age'] . " years old. </br>";
    }
?>