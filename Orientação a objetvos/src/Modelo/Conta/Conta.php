<?php

namespace Projeto\Banco\Modelo\Conta;



class Conta
{

  private $titular;
  private $saldo;
  private static $numeroDeContas = 0;

  private $tipo;

  public function __construct(Titular $titular, int $tipo)
  {


    $this->titular = $titular;
    $this->saldo = 0;
    $this->tipo = $tipo;


    self::$numeroDeContas++;
  }

  public function sacar(float $valorASacar)
  {

    $tarifaSaque = $valorASacar * 0.05;
    $valorSaque = $valorASacar + $tarifaSaque;
    if ($valorSaque > $this->saldo) {
      echo "Saldo indisponível";
      return;
    }
    $this->saldo -= $valorSaque;
  }

  public function depositar(float $valorADepositar)
  {
    if ($valorADepositar <= 0) {
      echo "Valor precisa ser positivo ou superior a 0";
      return;
    }
    $this->saldo += $valorADepositar;
  }

  public function transferir(float $valorATransferir, Conta $contaDestino): void
  {
    if ($valorATransferir > $this->saldo) {
      echo "saldo indisponível";
      return;
    }
    $this->sacar($valorATransferir);
    $contaDestino->depositar($valorATransferir);
  }

  public function verSaldo(): float
  {
    return $this->saldo;
  }
  public static function verNumeroDeContas(): int
  {
    return self::$numeroDeContas;
  }



  public function __destruct()
  {

    self::$numeroDeContas--;

    // if (self::$numeroDeContas > 2) {
    //   echo "Há mais de uma conta ativa";
    // }

  }
}
