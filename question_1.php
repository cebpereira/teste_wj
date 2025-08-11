<?php

$objeto = new stdClass();

$objeto->chave = 2;

print_r($objeto->chave . PHP_EOL);
$objeto = (array) $objeto;

print_r($objeto['chave'] . PHP_EOL);

$array = [0, 1];
$array[5] = 8;

print_r($array[5] . PHP_EOL);
