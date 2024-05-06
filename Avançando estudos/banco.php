<?php

require 'functions.php';

$contas = [
  '123.456.789-10' => [
    'titular' => 'Jose',
    'saldo' => 1500
  ],
  '123.456.489-11' => [
    'titular' => 'Maria',
    'saldo' => 2500
  ],
  '123.256.789-10' => [
    'titular' => 'Pedro',
    'saldo' => 1000
  ]
];

$contas['123.456.789-10'] = sacar(
  $contas['123.456.789-10'],
  500);

$contas['123.456.489-11'] = depositar(
  $contas['123.456.489-11'],
  5000);

titularUpper($contas['123.456.789-10']);

// echo "<ul>";

// foreach ($contas as $cpf => $conta) {
//   exibeConta($conta);
// };

// echo "</ul>";

// foreach ($contas as $cpf => $conta) {
//   ['titular' => $titular, 'saldo' => $saldo] = $conta;
//   exibeMensagem(
//     "$cpf $titular $saldo"
//   );
// };

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Contas correntes</h1>

  <dl>
      <?php foreach($contas as $cpf => $conta) { ?>
      <dt>
        <h3><?php echo $conta['titular']; ?> - <?php echo $cpf; ?></h3>
      </dt>
      <dd>
        Saldo: <?php echo  $conta['saldo']; ?> 
      </dd>
      <?php } ?>
  </dl>

</body>
</html>



