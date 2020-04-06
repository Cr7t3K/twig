<?php
require_once '../vendor/autoload.php';
$root = $_SERVER['DOCUMENT_ROOT'];

$loader = new Twig\Loader\FilesystemLoader( __DIR__ . '/../src/views');
$twig = new Twig\Environment($loader);


$products = ['product1', 'product2', 'product3', 'product4', 'product5'];


echo $twig->render('index.html.twig', ['products' => $products]);
