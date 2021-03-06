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
    $this->sconto = $this->livello * 20;
    }

}

    $user1 = new User();
        $user1->nome= "Flavia";
        $user1->eta = 66;
        $user1->setSconto(66);
        $user1->getSconto();

    $user2 = new User();
        $user2->nome = "Franco";
        $eta= $user2->eta = 40;
        $user2->setSconto(40);
        $user2->getSconto();

    $user3 = new Employee();
        $user3->nome= "Filippo";
        $user3->eta = 23;
        $user3->livello = 1;
        $user3->setSconto(23);
        $user3->getSconto();

    $user4 = new Employee();
        $user4->nome = "Fabiola";
        $user4->eta = 70;
        $user4->livello = 1;
        $user4->setSconto(70);
        $user4->getSconto();
        

    $users = [$user1, $user2, $user3, $user4];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($users as $user){?>
    <ul>
        <li> <strong>NOME: </strong> <?php echo $user->nome; ?></li>
        <li> <strong>ETA': </strong> <?php echo $user->eta; ?></li>
        <li> <strong>SCONTO: </strong> <?php echo $user->getSconto(); ?></li>
    </ul>
    <?php } ?>
</body>
</html>

