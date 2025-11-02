<?php


    /*Ejercicio 8.- A partir del array $data proporcionado, 
    muestra todos los usuarios de un país en concreto introducido por teclado. 
    Aquí tienes un ejemplo de como queda la salida por pantalla:

    People from Spain
    -----------------------------
    Chastity Mcgowan likes desserts, noodles
    Raven Olsen likes all kinds of food*/

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
        ]
    ];

    $country= $_GET['country'];
    echo "People from $country <br>";
    echo "----------------------------- <br>";

    foreach ($data as $usuario) {

        if ($usuario['Country'] == $country) {
            if ($usuario['Favorites'] == "") {
                echo $usuario['User'] . " doesn't have any preferences. <br>";
            } else {
                echo $usuario['User'] . " likes " . $usuario['Favorites'] . "<br>";
            }
            
        }
        
    }

?>