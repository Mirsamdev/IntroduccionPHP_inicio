<?php include 'includes/header.php';

$carrito = ['Tablet', 'Television', 'Computadora'];



// Acceder a un elemento del array
echo $carrito[1];

$carrito[3] = 'Nuevo producto';

// Añadir un elemento nuevo al array
array_push($carrito, 'Audifonos');

// Añadir al inicio
array_unshift($carrito, 'Smartwatch');


// Util para ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";

$clientes = array('Cliente 1', 'Cliente 2', 'Cliente 3');
echo "<pre>";
var_dump($clientes);
echo "</pre>";

echo $clientes[1];

include 'includes/footer.php';