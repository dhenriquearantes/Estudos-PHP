<?php 

namespace Projeto\Banco\Service;

use Projeto\Banco\Autenticavel;

class Autenticador
{
  public function tentaLogin(Autenticavel $autenticavel , string $senha): void
  {
    if ($autenticavel->podeAutenticar($senha)) {
        echo "Ok, usuário autenticado";
    } else {
      echo "Ops.. Senha incorreta";
    }


  }
}