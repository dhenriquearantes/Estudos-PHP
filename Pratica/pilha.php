<?php
function funcao1()
{

  echo 'Entrei na função 1' . PHP_EOL;
  try {
    funcao2();
  } catch (RuntimeException | DivisionByZeroError $problema) {
    echo $problema->getMessage() . PHP_EOL;
    echo $problema->getLine() . PHP_EOL;
    echo $problema->getTraceAsString() . PHP_EOL;

    // throw new RuntimeException(
    //   'Exceção foi tratada, mais pega ai',
    //   1,
    //   $problema
    // );
  }
  echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
  echo 'Entrei na função 2' . PHP_EOL;
  // $dividsao = intdiv(5, 0);
  // $arrayFIxo = new SplFixedArray(2);
  // $arrayFIxo[3] = 'Valor';

  // $exception = new RuntimeException;
  // throw $exception;


  for ($i = 1; $i < 5; $i++) {
    echo $i . PHP_EOL;
  }
  echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
