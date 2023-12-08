<?php include 'includes/header.php';

$nombreCliente = "Obed Miranda";

// Conocer extension de un string
echo strlen($nombreCliente);
var_dump($nombreCliente);

// Eliminar espacios en blanco 
$texto = trim($nombreCliente);
echo strlen($texto);

//  Convertirlo a mayusculas
echo strtoupper($nombreCliente);

// Minusculas
echo strtolower($nombreCliente);

$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump(strtolower($mail1) === strtolower($mail2));

echo str_replace('Obed','O', $nombreCliente);

// Revisar si un string existe o no
echo strpos($nombreCliente, 'Obed');

$tipoCliente = "Premium";

echo "El Cliente " . $nombreCliente . " es " . $tipoCliente;

echo "El Cliente {$nombreCliente} es {$tipoCliente}";


include 'includes/footer.php';