<?php

require 'Personagem.php';
// require 'Race.php';

$charOne = new Personagem('Steve', new Race('Humam'));


$charOne->setName('Zeca');
$charOne->setRace('Mamaco');

print $charOne -> getName();

print_r($charOne);



?>


