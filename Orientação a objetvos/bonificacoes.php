<?php

require_once 'autoload.php';

use Projeto\Banco\Modelo\Funcionario\EditorDeVideo;
use Projeto\Banco\Service\ControladorDeBonificacoes;
use Projeto\Banco\Modelo\CPF;
use Projeto\Banco\Modelo\Funcionario\Desenvolvedor;
use Projeto\Banco\Modelo\Funcionario\Gerente;


$mari = new EditorDeVideo(
  'Mari  ',
  new CPF('989.645.128-87'),
  2000
);

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
$controlador->addBonificacaoFuncionario($mari);

echo $controlador->verTotal();

echo $mari->verSalario();
