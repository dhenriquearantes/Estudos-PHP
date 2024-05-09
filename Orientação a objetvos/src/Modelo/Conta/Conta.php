<?php

namespace Projeto\Banco\Modelo\Conta;



abstract class Conta
{

  private $titular;
  protected $saldo;
  private static $numeroDeContas = 0;


  public function __construct(Titular $titular)
  {

    $this->titular = $titular;
    $this->saldo = 0;


    self::$numeroDeContas++;
  }

  public function sacar(float $valorASacar)
  {

    $tarifaSaque = $valorASacar * $this->percentualTarifa();
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

  public function verSaldo(): float
  {
    return $this->saldo;
  }
  public static function verNumeroDeContas(): int
  {
    return self::$numeroDeContas;
  }

  abstract protected function percentualTarifa(): float;  

  public function __destruct()
  {

    self::$numeroDeContas--;

    // if (self::$numeroDeContas > 2) {
    //   echo "Há mais de uma conta ativa";
    // }

  }
}
