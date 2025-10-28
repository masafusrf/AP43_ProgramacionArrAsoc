<?php

    // Ejercicio 5.- A partir del string proporcionado, crea un array usando la función explode():

    // $data = "Tokyo, Japan; Mexico City, Mexico; New York City, USA; Mumbai, India; Seoul, Korea; 
    // 
    // Shanghai, China; Lagos, Nigeria; Buenos Aires, Argentina; Cairo, Egypt; London, England.";

    // con la misma estructura del ejercicio anterior y muéstralo con var_dump()


    $data = "Tokyo, Japan; Mexico City, Mexico; New York City, USA; Mumbai, India; Seoul, Korea";

    $data2= explode(";" , $data);

    $capitals=[];

    for ($i=0; $i < count($data2); $i++) { 

        $data3=explode("," , $data2[$i]);

        $capitals[]=[
            'country' => $data3[0],
            'city' => $data3[1]
        ];
    }

    var_dump($capitals);

?>