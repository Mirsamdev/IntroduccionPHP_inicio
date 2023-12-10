<?php include 'includes/header.php';


$autenticado = true;
$admin = false;

if($autenticado || $admin) {
  echo "usuario autenticado correctamente";
} else {
  echo "usuario no autenticado, inicia sesion";
}


// If anidados..
$cliente = [
  'nombre' => 'Monza',
  'saldo' => 200,
  'informacion =>' [
      'tipo' => 'Premium';
  ]
  ];

include 'includes/footer.php';