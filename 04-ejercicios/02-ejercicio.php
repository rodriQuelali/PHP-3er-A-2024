<?php
//problema: forma un array indexado datos personales de estudiante y 
//otro array indexado de las nuevas notas mas 20 punto.
//salida [alan birto Molesto, av. siempre Molesto]
//salida [22,23,27,54]

//mostra una array asociativa con los nuevos datos
//utilizando foreach, array_map
$datos = array(
    [
    "nombre" => "alan brito",
    "direccion" => "av. siempre viva",
    "notas" => array(
        5, 25, 7,34
        )
    ],
    [
    "nombre" => "alan brito malo",
    "direccion" => "av. siempre triste",
    "notas" => array(
        2, 3, 46,34
        )
    ],
    [
    "nombre" => "alan brito enojado",
    "direccion" => "av. siempre eneojado",
    "notas" => array(
        2, 48, 78,34
        )
    ],
    [
    "nombre" => "alan brito feliz",
    "direccion" => "av. siempre feliz",
    "notas" => array(
        2, 3, 7,34
        )
    ],
);


//echo json_encode($datos);