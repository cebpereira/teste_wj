<?php

$posicoesOnas = [
    "primeirona",
    "segundona",
    "terceirona",
    "segundona",
    "primeirona",
    "nona",
    "quarteirona",
    "quintona",
    "setimona",
    "quarteirona"
];

sort($posicoesOnas);

$posicoesOnas = array_unique($posicoesOnas);

print_r("Número de palavras sem contar replicas = " . count($posicoesOnas) . PHP_EOL);

print_r($posicoesOnas);
