<?php 

namespace Projeto\Banco;

interface Autenticavel 
{

  public function podeAutenticar(string $senha): bool;
  

}