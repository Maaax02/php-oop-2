<?php 

class Utente{
    private string $name;
    private string $surname;
    private string $cardNumber;
    private int $expire;
    private int $cvv;
    private bool $login;

    function __construct(string $name, string $surname, string $cardNumber, string $expire, int $cvv, bool $login)
    {
        $this->setName($name);
        $this->setsurname($surname);
        $this->setCardNumber($cardNumber);
        $this->setExpire($expire);
        $this->setCvv($cvv);
        $this->setLogin($login);
    }
     
    public function getName()
    {
        return $this->name;
    }

    
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
 
    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    public function getCardNumber()
    {
        return $this->cardNumber;
    }

   
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    public function getExpire()
    {
        return $this->expire;
    }

   
    public function setExpire($expire)
    {
        $this->expire = $expire;

        return $this;
    }
  
    public function getCvv()
    {
        return $this->cvv;
    }

   
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;

        return $this;
    }

     
    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }
}

?>