<?php

require 'Personagem.php';


  class Personagem extends Race{

  private $name;
  private $race; 

  
  public function __construct(string $name, Race $race)
  {
    $this->name = $name;
    $this->race = $race;
  }

  public function getName(): string
  {
    return $this->name;

  }



  public function setName(string $name): void
  {
    $this->name = $name;
  }


}

?>