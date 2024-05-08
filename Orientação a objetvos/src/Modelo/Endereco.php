<?php 

namespace Projeto\Banco\Modelo;

class Endereco {

  private string $cidade;
  private string $bairro;
  private string $rua;
  private string $numero;


  function __construct(string $cidade, string $bairro, string $rua, string $numero){

    $this->cidade = $cidade;
    $this->bairro = $bairro;
    $this->rua = $rua;
    $this->numero = $numero;

  }

  public function verCidade(): string {
    return $this->cidade;
  }
  public function verBairro(): string {
    return $this->bairro;

  }
  public function verRua(): string {
    return $this->rua;
  }
  public function verNumero(): string {
    return $this->numero;
  }

}  

?>