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
    $this->sconto = $this->livello * 1;
    }

}

    $user1 = new User();
        $user1->nome= "Flavia";
        $user1->eta = 66;
        $user1->setSconto($eta);
        $user1->getSconto();

    $user2 = new Employee();
        $user2->nome = "Franco";
        $user2->eta = 40;
        $livello = 2;
        $user2->setSconto();
        $user2->getSconto();

    $users = [$user1, $user2];
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

