<?php
include __DIR__ . '/classes/Usuario.php';
include __DIR__ . '/classes/produto.php';
include __DIR__ . '/classes/carrinhoDeCompra.php';

$produto = new produto();

var_dump($produto);
// cada arquivo representa uma classe
// o nome do arquivo deve ser exatamente igual a classe