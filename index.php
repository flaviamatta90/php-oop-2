<?php

class User {
    public $nome;
    public $sconto = 0;
    public function setSconto($eta = null)
    {
        if($eta > 65) {
        $this->sconto = 40;
        }
    }
    public function getSconto()
    {
        return $this->sconto;
    }
}

class Employee extends User
{
    public $livello;
    public function setSconto($eta = null)
    {
    $this->sconto = $this->livello * 30;
    }

}

    $flavia = new User();
    $nome= "Flavia";
    $eta = 66;
    $flavia->setSconto($eta);
    $flavia->getSconto();
    echo $flavia->getSconto();

?>

