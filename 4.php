<?php

    // Ejercicio 4.- A partir de los strings proporcionados, crea un array usando la función explode():

    // $city = "Tokyo,Mexico City,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires, Cairo,London";
    // $country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";

    // con la misma estructura del ejercicio anterior y muéstralo con var_dump(). En este caso, ya no lo haremos "a mano". Debes aplicar código PHP para que arme el array automaticamente, y de la misma forma los siguientes ejercicios.



    $city = "Tokyo,Mexico City,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires, Cairo,London";
    $country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";

    $cities=explode("," , $city);
    $countries=explode("," , $country);

    $capitals=[];

    for ($i=0; $i < count($countries); $i++) { 
        $capitals[]=[
            'country'=> $countries[$i],
            'city'=> $cities[$i]
        ];
    }

    var_dump($capitals);

?>