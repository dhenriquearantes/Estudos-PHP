<?php 

namespace Projeto\Banco\Modelo;


class Pessoa
{
  protected $nome;
  private $cpf;


  public function __construct(string $nome, CPF $cpf)
  {

    $this->validarNome($nome);
    $this->nome = $nome;
    $this->cpf = $cpf;
    
  }

  public function verNome(): string
  {
    return $this->nome;
  }

  public function vercpf(): string
  {
    return $this->cpf->verNumero();
  }

  protected function validarNome(string $nomeTitular) {

    if (strlen($nomeTitular) < 5 ) {
      echo 'Nome deve ter pelo menos 5 caracteres' . PHP_EOL;
      exit();
    }
  }

}





?>