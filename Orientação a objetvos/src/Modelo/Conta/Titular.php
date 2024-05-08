<?php 

namespace Projeto\Banco\Modelo\Conta;

use Projeto\Banco\Modelo\CPF;
use Projeto\Banco\Modelo\Endereco;
use Projeto\Banco\Modelo\Pessoa;


class Titular extends Pessoa
{
  
  private $endereco;

  public function __construct(CPF $cpf, string $nome, Endereco $endereco) {

    parent::__construct($nome, $cpf);
    $this->endereco = $endereco;
  }


  public function verEndereco(): Endereco{
    
    return $this->endereco;

  }

}

?>