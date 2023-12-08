<?php include 'includes/header.php';

$clientes = [
  'nombre' => 'Juan',
  'saldo' => 200,
  'informacion' => [
    'tipo' => 'premium',
    'disponible' => 100
  ]
  ];

  echo "<pre>";
var_dump($clientes['nombre']);
echo "</pre>";

// echo $clientes['nombre'];
// echo $clientes['informacion']['tipo'];
// echo $clientes['informacion']['disponible'];

$clientes['codigo'] = 1209102012;
echo $clientes['informacion']['tipo'];

echo "<pre>";
var_dump($clientes);
echo "</pre>";


include 'includes/footer.php';

