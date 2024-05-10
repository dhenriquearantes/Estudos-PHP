<?php 
use Projeto\Banco\Modelo\CPF;
use Projeto\Banco\Modelo\Funcionario\Diretor;
use Projeto\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();

$juca = new Diretor(
  'JucaCanastra',
  new CPF('897.654.652-48'),
  10000
);

$autenticador->tentaLogin($juca, '1234');

