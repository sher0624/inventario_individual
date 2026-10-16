
<?php

require_once __DIR__ . '/../src/validaciones.php';

// VALIDACIONES DE NOMBRE

$casos = [
    ["nombre válido: Teclado", "Teclado", true],
    ["nombre vacío", "", false],
    ["nombre con espacios", "  ", false],
    ["nombre válido: Mouse", "Mouse", true],
    ["nombre válido: Monitor", "Monitor", true]
];

$correctas = 0;
$fallidas = 0;

echo "\n----- PRUEBAS DE NOMBRE -----\n";

foreach ($casos as [$descripcion, $entrada, $esperado]) {

    $obtenido = validarNombreProducto($entrada);

    if ($obtenido === $esperado) {
        echo "PASS - $descripcion\n";
        $correctas++;
    } else {
        echo "FAIL - $descripcion\n";
        echo "Esperado: " . var_export($esperado, true) . "\n";
        echo "Obtenido: " . var_export($obtenido, true) . "\n";
        $fallidas++;
    }
}

// VALIDACIONES DE CANTIDAD

$casos2 = [
    ["cantidad válida: 1", 1, true],
    ["cantidad decimal", 3.5, false],
    ["cantidad con espacios", "  ", false],
    ["cantidad negativa", -1, false],
    ["cantidad cero", 0, false],
    ["cantidad válida: 2", 2, true]
];

echo "\n----- PRUEBAS DE CANTIDAD -----\n";

foreach ($casos2 as [$descripcion, $entrada, $esperado]) {

    $obtenido = validarCantidadProducto($entrada);

    if ($obtenido === $esperado) {
        echo "PASS - $descripcion\n";
        $correctas++;
    } else {
        echo "FAIL - $descripcion\n";
        echo "Esperado: " . var_export($esperado, true) . "\n";
        echo "Obtenido: " . var_export($obtenido, true) . "\n";
        $fallidas++;
    }
}

// RESUMEN GENERAL

echo "\n----- RESUMEN GENERAL -----\n";
echo "Total: " . (count($casos) + count($casos2)) . "\n";
echo "Correctas: $correctas\n";
echo "Fallidas: $fallidas\n";

exit($fallidas > 0 ? 1 : 0);
