<?php

require_once __DIR__ . '/../config/twig.php';

$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe',];




$name = 'Wilder';

echo $twig->render('products.html.twig', ['products' => $products]);

