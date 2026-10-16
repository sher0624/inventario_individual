<?php

require_once __DIR__ . '/../src/validaciones.php';
/*
$casos = [
    ["nombre válido: Teclado", "Teclado", true],
    ["nombre vacío:", "", false],
    ["nombre con espacios", "  ", false],
    ["nombre válido: Mouse", "Mouse", true],
    ["nombre válido: Monitor", "Monitor", true]
];

$correctas = 0;
$fallidas = 0;

foreach ($casos as [$descripcion, $entrada, $esperado]){

    $obtenido = validarNombreProducto($entrada);

    if($obtenido === $esperado){
        echo " - $descripcion \n";
        $correctas++;
    }else{
        echo "FAIL - $descripcion\n";
        echo " Esperado: ". var_export($esperado, true) . "\n";
        echo " Obtenido: ". var_export($obtenido, true) . "\n";

        $fallidas++;
    }

}   

echo "\n -------RESUMEN-**--------\n";
echo "Total: ". count($casos) . "\n";
echo "Correctas: $correctas\n";
echo "Fallidas: $fallidas\n";



/***VALIDACIONES CANTIDAD */

$casos2 = [
    ["cantidad válido: 1", 1, true],
    ["cantidad decimal:", 3.5, false],
    ["cantidad con espacios", "  ", false],
    ["cantidad negativo", -1, false],
    ["cantidad cero", 0, false],
    ["cantidad válido: 2", 2, true],
    
];

$correctas2 = 0;
$fallidas2 = 0;

foreach ($casos2 as [$descripciones, $entradas, $esperados]){

    $obtenidos = validarNombreProducto($entradas);

    if($obtenidos === $esperados){
        echo " - $descripciones \n";
        $correctas2++;
    }else{
        echo "FAIL - $descripciones\n";
        echo " Esperado: ". var_export($esperados, true) . "\n";
        echo " Obtenido: ". var_export($obtenidos, true) . "\n";

        $fallidas2++;
    }

}   

echo "\n -------RESUMEN-**--------\n";
echo "Total: ". count($casos2) . "\n";
echo "Correctas: $correctas2\n";
echo "Fallidas: $fallidas2\n";

exit($fallidas2 > 0 ? 1 : 0);