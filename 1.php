<?php


    //Ejercicio 1.- A partir del string proporcionado:
    // $city = "Tokyo,Mexico City,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires, Cairo,London";
    // crea un array con la siguiente estructura y muéstralo con var_dump(): 
    //$capitals = [
    //['city' =>"Tokyo"],
    //['city' =>"Mexico City"],
    //['city' =>"New York City"],
    //['city' =>"Mumbai"],
    //['city' =>"Seoul"],
    //['city' =>"Shanghai"],
    //['city' =>"Lagos"],
    //['city' =>"Buenos Aires"], 
    //['city' =>"Cairo"],
    //['city' =>"London"]
//];



    $city=explode( ",", "Tokyo,Mexico City,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires, Cairo,London");
    $capitals[]=$city;

    foreach ($capitals as $key => $value) {
        
    }

    var_dump($capitals);





?>