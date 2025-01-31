<?php

$lista_numeros = [1,2,3,4,5,6,7,8,9,10];

$dobra_valores = array_map(function($numero){
    return $numero * 2;
}, $lista_numeros);

//print_r ($dobra_valores);

$eleva_quadrado = array_map(fn($numero) => $numero ** 2, $lista_numeros);

//print_r ($eleva_quadrado);

$somar_valor = function($valor){
    return fn($numero) => $numero + $valor;
};

$somar_cinco = $somar_valor(5);

$soma_resultado = array_map($somar_cinco, $lista_numeros);

print_r ($soma_resultado);

