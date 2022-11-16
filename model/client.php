<?php

class Client{

    public $cliendId;
    public $name;
    public $lastName;
    public $age;
    public $weight;
    public $coachId;

    public function __construct($clientId, $name, $lastName, $age, $weight, $coachId)
    {
        $this->cliendId = $clientId;
        $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->weight = $weight;
        $this->coachId = $coachId;
    }

    public static function getAll($coachUserName, mysqli $conn){
        $q = "SELECT * FROM client WHERE coachId = (SELECT coachId FROM coach where userName = '$coachUserName')";
        return $conn->query($q);
    }

    public static function add($name, $lastName, $age, $weight, $coachId, mysqli $conn){
        $q = "INSERT INTO `client` (`name`, `lastName`, `age`, `weight`, `coachId`) VALUES ('$name', '$lastName', '$age', '$weight', '$coachId');";
        return $conn->query($q);
    }

    public static function getLastClient(mysqli $conn)
    {
        $q = "SELECT * FROM client ORDER BY clientId DESC LIMIT 1";
        return $conn->query($q);
    }

}

?>