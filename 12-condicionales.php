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
  'informacion' => [
      'tipo' => 'Premium'
      ]
  ];

  if( !empty($cliente)) {
    echo "El arreglo de cliente esta vacio";

    if($cliente['saldo'] > 0) {
      echo "El saldo del cliente esta disponible";
    } else {
      echo "El saldo del cliente no esta disponible";
    }
  } 


// else if
if($cliente['saldo'] > 0) {
  echo "el cliente tiene plata";
} else if ($liente['informacion'] ['tipo'] === 'Premium') {
  echo "El cliente es Premium";
} else {
  echo " no hay cliente definido o no tiene saldo o no es premium";
}

// Switch
$tecnologia = 'PHP';

switch ($tecnologia) {
  case 'PHP':
    echo "PHP, un exelente lenguaje!";
    break;

    default:
    echo "No lo conozco papa";
    break;
}


include 'includes/footer.php';