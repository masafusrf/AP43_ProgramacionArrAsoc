<?php

    //Ejercicio 2.- A partir del string proporcionado:
    // $country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";
    // crea un array con la siguiente estructura y muéstralo con var_dump():

//$capitals = [
    //['country' =>"Japan"],
    //['country' =>"Mexico"],
    //['country' =>"USA"],
    //['country' =>"India"],
    //['country' =>"Korea"],
    //['country' =>"China"],
    //['country' =>"Nigeria"],
    //['country' =>"Argentina"], 
    //['country' =>"Egypt"],
    //['country' =>"England]"
//];

    $country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";
    $countries= explode(",", $country);

    $capitals=[];

    foreach ($countries as $value) {
        $capitals[]=['country' => $value];
    }


    var_dump($capitals);


?>