<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require __DIR__ .'/../vendor/autoload.php';

$products = ['Cookies' , 'Chocolat' , 'Tartes' , 'Eclairs' , 'Madeleines'];

$loader = new FilesystemLoader(__DIR__ . '/../src/View');
$twig = new Environment($loader);

echo $twig->render('index.html.twig', ['products' =>$products]);