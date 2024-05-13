<?php 
use Projeto\Banco\Modelo\Conta\ContaPoupança;
use Projeto\Banco\Modelo\Conta\SaldoInsuficienteException;
use Projeto\Banco\Modelo\Conta\Titular;
use Projeto\Banco\Modelo\CPF;
use Projeto\Banco\Modelo\Endereco;

require_once 'autoload.php';

$conta = new ContaPoupança(
  new Titular(
    new CPF('364.785.981-15'),
    'Tony tornado',
    new Endereco('Acreuna', 'Sul', 'Av Araguaia', '121')
  )
  );

$conta->depositar(500);

try {
  $conta->sacar(600);
} catch (SaldoInsuficienteException $exception) {
  echo "Voce não tem saldo para realizar este saque." . PHP_EOL;
  echo $exception->getMessage();
}

echo $conta->verSaldo();