<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TEW-500</title>
</head>
<body>


    <h1>Practica N|2</h1>
    <h2>ejercicio 1</h2>
    <?php
    // Incluir el archivo de funciones
    include("funciones3.php");

    // Definir el tamaño de la matriz
    $n = 5; // Por ejemplo
    echo"ingrese n: ".$n."<br>";
    // Llamar a la función para generar la matriz J
    $matriz = generarMatrizJ($n);

    // Imprimir la matriz en forma de tabla
    echo '<table border="1">';
    foreach ($matriz as $fila) {
        echo '<tr>';
        foreach ($fila as $valor) {
            echo '<td>' . $valor . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    ?>
    <br>
    <h2>ejercicio 2</h2>
    <?php

// Ejemplo de uso
$n = 10; // Número de filas
$m = 6;  // Número de columnas

$matriz = generarMatrizBinaria($n, $m);

// Imprimir la matriz en forma de tabla
echo "<table border='1' cellpadding='5' cellspacing='0'>";
foreach ($matriz as $fila) {
    echo "<tr>";
    foreach ($fila as $valor) {
        echo "<td>" . $valor . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
    ?>
    <br>
    <h2>ejercicio 3</h2>
    <?php

    // Definir el tamaño de la matriz
    $n = 5; // Cambia el valor de acuerdo a tus necesidades
    echo"ingrese n: ".$n."<br>";
    // Llamar a la función para generar la matriz
    $matriz = generarMatriz3($n);

    // Imprimir la matriz en forma de tabla HTML
    echo "<table border='5'>";
    foreach ($matriz as $fila) {
        echo "<tr>";
        foreach ($fila as $valor) {
            echo "<td>" . $valor . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
    <br>
    <h2>ejercicio 4</h2>
    <?php
    // Definir el tamaño de la matriz
    $n = 5; // Cambia el valor de acuerdo a tus necesidades
    echo"ingrese n: ".$n."<br>";

    // Llamar a la función para generar la matriz
    $matriz = generarMatriz4($n);

    // Imprimir la matriz en forma de tabla HTML
    echo "<table border='5'>";
    foreach ($matriz as $fila) {
        echo "<tr>";
        foreach ($fila as $valor) {
            echo "<td>" . $valor . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
    <br>
    <h2>ejercicio 5</h2>
    <?php

// Definir el tamaño de la matriz
    $n = 5; // Cambia el valor de acuerdo a tus necesidades
    echo"ingrese n: ".$n."<br>";

    // Llamar a la función para generar la matriz
    $matriz = generarMatriz5($n);

    // Imprimir la matriz en forma de tabla HTML
    echo "<table border='5'>";
    for ($i = 0; $i < $n; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $n; $j++) {
            echo "<td>" . $matriz[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
    <br>
    <h2>ejercicio 6</h2>
    <?php


    // Definir las dimensiones de la matriz
    $n = 3; // Número de filas
    $m = 4; // Número de columnas
    echo"ingrese n: ".$n."<br>";
    echo"ingrese m: ".$m."<br>";

    // Llamar a la función para generar la matriz
    $matriz = generarMatriz6($n, $m);

    // Imprimir la matriz en forma de tabla HTML
    echo "<table border='1'>";
    for ($i = 0; $i < $n; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $m; $j++) {
            echo "<td>" . $matriz[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
    <br>
    <h2>ejercicio 7</h2>
    <?php

    // Definir la dimensión de la matriz
    $n = 5; // Número de filas y columnas
    echo"ingrese n: ".$n."<br>";

    // Llamar a la función para generar la matriz
    $matriz = generarMatriz7($n);

    // Imprimir la matriz en forma de tabla HTML
    echo "<table border='1'>";
    for ($i = 0; $i < $n; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $n; $j++) {
            echo "<td>" . str_pad($matriz[$i][$j], 2, '0', STR_PAD_LEFT) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
    <br>
    <h2>ejercicio 8</h2>
    <?php


    // Definir la dimensión de la matriz
    $n = 5; // Número de filas y columnas
    echo"ingrese n: ".$n."<br>";
    // Llamar a la función para generar la matriz
    $matriz = generarMatriz8($n);

    // Imprimir la matriz en forma de tabla HTML
    echo "<table border='1'>";
    for ($i = 0; $i < $n; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $n; $j++) {
            echo "<td>" . $matriz[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
    <br>
    <h2>ejercicio 9</h2>
    <?php

    // Definir la dimensión de la matriz
    $n = 5; // Número de filas y columnas
    echo"ingrese n: ".$n."<br>";

    // Llamar a la función para generar la matriz
    $matriz = generarMatriz9($n);

    // Imprimir la matriz en forma de tabla HTML
    echo "<table border='1'>";
    for ($i = 0; $i < $n; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $n; $j++) {
            echo "<td>" . str_pad($matriz[$i][$j], 2, " ", STR_PAD_LEFT) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
    <br>



</body>
</html>
