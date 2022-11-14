<?php

class Coach{

    public $coachId;
    public $userName;
    public $email;
    public $password;
    
    public function __construct($coachId, $email, $userName, $password)
    {
        $this->coachId = $coachId;
        $this->userName = $userName;
        $this->password = $password;
        $this->email = $email;
    }
}

?>