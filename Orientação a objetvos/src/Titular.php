<?php 

class Titular {
  
  private $cpf;
  private $nome;

  public function __construct(CPF $cpf, string $nome) {

    $this->cpf = $cpf;
    $this->validarNome($nome);
    $this->nome = $nome;

  }


  public function getNome(): string {
    
    return $this->nome;

  }

  public function verCpf(): float {
    return $this->cpf->verNumero();
  }

  private function validarNome(string $nomeTitular) {

    if (strlen($nomeTitular) < 5 ) {
      echo 'Nome deve ter pelo menos 5 caracteres' . PHP_EOL;
      exit();
    }
  }




}

?>