<?php

    //Ejercicio 3.- A partir de los arrays proporcionados:
    // $city = ["Tokyo", "Mexico City", "New York City", "Mumbai", 
    // "Seoul", "Shanghai", "Lagos", "Buenos Aires", " Cairo", "London"];

    // $country = ["Japan", "Mexico", "USA", "India", "Korea", "China", 
    // "Nigeria", "Argentina", "Egypt", "England"];
    // crea un array con la siguiente estructura y muéstralo con var_dump():
    //$capitals = [
    // [
    //     'country' =>"Japan",
    //     'city' =>"Tokyo"
    // ],


    $city = [
        "Tokyo", "Mexico City", "New York City", "Mumbai", 
        "Seoul", "Shanghai", "Lagos", "Buenos Aires", " Cairo", "London"
    ];

    $country = [
        "Japan", "Mexico", "USA", "India", "Korea", "China", 
        "Nigeria", "Argentina", "Egypt", "England"
    ];

    $capitals=[];

    for ($i=0; $i < count($city); $i++) { 
        $capitals[]=[
            'country' => $country[$i],
            'city' => $city[$i]
        ];
    }

    var_dump($capitals);

?>