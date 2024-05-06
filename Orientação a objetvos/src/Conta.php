<?php 

class Conta 
{

  public $cpfTitular;
  public $nomeTitular;
  private $saldo = 0;

  public function setName(string $nameToSet) {
    if (strlen($nameToSet) < 8) {
        echo "Saldo indisponível";
        return;
      }
      $this->nomeTitular = $nameToSet;
  }
  public function setCpf(string $CpfToSet) {
    if (strlen($CpfToSet) < 8) {
        echo "Saldo indisponível";
        return;
      }
      $this->cpfTitular = $CpfToSet;
  }

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

  public function verCpf(): string {
    return $this->cpfTitular;
  }
  public function verNome(): string {
    return $this->nomeTitular;
  }
  public function verSaldo(): float {
    return $this->saldo;
  }

}
?>