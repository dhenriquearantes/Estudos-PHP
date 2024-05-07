<?php 

class Conta 
{

  private $titular;
  private $saldo;
  private static $numeroDeContas = 0;

  public function __construct(Titular $titular) {

    
    $this->titular = $titular;
    $this->saldo = 0;


    self::$numeroDeContas++;

  }


  // public function setNome(string $nameToSet) : void {
  //     $this->nomeTitular = $nameToSet;
  // }
  // public function setCpf(string $CpfToSet) : void{
  //     $this->cpfTitular = $CpfToSet;
  // }

  public function sacar(float $valorASacar) {
    if ($valorASacar > $this->saldo) {
        echo "Saldo indisponível";
        return;
      }
      $this->saldo -= $valorASacar;
  }

  public function depositar(float $valorADepositar) {
    if ($valorADepositar <= 0) {
        echo "Valor precisa ser positivo ou superior a 0";
        return;
      }
      $this->saldo += $valorADepositar;
  }

  public function transferir(float $valorATransferir , Conta $contaDestino): void {
    if ($valorATransferir > $this->saldo) {
      echo "saldo indisponível";
      return;
    }
      $this->sacar($valorATransferir);
      $contaDestino->depositar($valorATransferir);
  }

  public function verNome(): string {
    return $this->titular->getNome();
  }

  // public function verCpf(): string {
  //   return $this->cpfTitular;
  // }
  // public function verNome(): string {
  //   return $this->nomeTitular;
  // }

  public function verSaldo(): float {
    return $this->saldo;
  }
  public static function verNumeroDeContas(): int {
    return self::$numeroDeContas;
  }



  public function __destruct(){

    self::$numeroDeContas--;
    
    // if (self::$numeroDeContas > 2) {
    //   echo "Há mais de uma conta ativa";
    // }

  }


}
?>