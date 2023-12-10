<?php include 'includes/header.php';

// While 

// $i = 0;

// while($i <10) {

//   echo $i . "<br>";

//   $i++; // Incremento
// }

// echo $i . "<br>";

// // Do while
// $i = 0;

// do {
//   echo $i . "<br>";

//   $i++;
// } while($i < 10);




// For loop.
// for($i = 0;$i < 10; $i++ ) {
//   if($i % 3 === 0) {
//     echo $i . " - fizz ";
//   }
// };

// For each 
$clientes = array('Pedro', 'Juan', 'Karen');

foreach( $clientes as $cliente ) {
  echo $cliente . "<br>";
}

for($i = 0; $i < count($clientes); $i++) {
echo $clientes[$i] . '<br/>';
}

$prueba = [
  'nombre' => 'Samuel',
  'saldo' => '200',
  'tipo' => 'Premium'
];

foreach( $prueba as $key => $valor ):
  echo $key . " - " . $valor . "<br>";
endforeach;





// // Ejercicios
// $pruebas = array('monza', 'prueba', 'foreach');

// foreach( $pruebas as $prueba) {
//   echo $cliente . "<br>";
// }

// for($i = 0; $i < count($pruebas); $i++) {
//   echo $pruebas[$i] . '<br/>';
// }



include 'includes/footer.php';