<?php include 'includes/header.php';

// in_array - buscar elementos en un arreglo
$carrito = ['Tablet', 'Computadora', 'Television'];

var_dump( in_array('Tablet', $carrito) );
var_dump( in_array('Audifonos', $carrito) );

// Ordenar elementos de un arreglo
$numeros = array(1,3,4,5,1,2);
sort($numeros); 

echo "<pre>";
var_dump($numeros);
echo "</pre>";



include 'includes/footer.php';