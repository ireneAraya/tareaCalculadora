<?php

// Incluye todo el contenido de CalculatorService.php en este archivo
require("CalculatorService.php");

/**
 * Existe una variable superglobal llamada `$_GET` que contiene un diccionario
 * con todos los datos enviados en el URL.
 */
$firstValue = $_GET['firstValue'];
$secondValue =  $_GET['secondValue'];
$operation = $_GET['operation'];

// Obtenemos una instancia del servicio de calculadora
$calculator = new CalculatorService();

// Verificamos si la operacion solicitada se encuentra dentro de las disponibles
if ($operation == $calculator::ADD) {
    $result = $calculator->adding($firstValue, $secondValue);
} else {
    $result = 'null';
}

// Enviamos de vuelta el resultado
echo($result);