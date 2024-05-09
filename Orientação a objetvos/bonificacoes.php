<?php

require_once 'autoload.php';

use Projeto\Banco\Service\ControladorDeBonificacoes;
use Projeto\Banco\Modelo\CPF;
use Projeto\Banco\Modelo\Funcionario\Desenvolvedor;
use Projeto\Banco\Modelo\Funcionario\Gerente;

$juana = new Gerente(
  'Juana',
  new CPF('789.123.456-54'),
  1000
);

$jorge = new Desenvolvedor(
  'Jorge',
  new CPF('874.321.456-65'),
  2000
);


$controlador = new ControladorDeBonificacoes();
$controlador->addBonificacaoFuncionario($juana);
$controlador->addBonificacaoFuncionario($jorge);

// echo $controlador->verTotal();

$jorge->recebeAumento(1000);

echo $jorge->verSalario();
