<?php 

class Race {

  private $race;


  public function __construct(string $race) {
    
    $this->race = $race;
  }

  public function getRace(): string
  {
    return $this->race;
  }
  public function setRace(string $race): void
  {
    $this->race = $race;
  }


}







?>