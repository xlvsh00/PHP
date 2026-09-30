<?php
class Placowka
{
    public $adres;
    public $rok;
    private $dane;
    protected $passsword;


    public function __construct()
    {
        $this->adres = $adres;
        $this->rok = $rok;
        $this->dane = $dane;
        $this->password = $password;
    }

    public function getAdres($adres)
    {
        return $this->adres;
    }
    public function setAdres()
    {
        $this->adres = $adres;
    }
    public function getRok($rok)
    {
        return $this->rok;
    }
    public function setRok()
    {
        $this->rok = $rok;
    }

    public function getDane($dane)
    {
        return $this->dane;
    }
    public function setDane($dane)
    {
        $this->dane = $dane;
    }
    public function getPassword($login)
    {
        if ($login === "admin") {
            return $this->password;
        }
        return "Brak dostepu";
    }
    public function setPassword()
    {
        $this->password = $passsword;
    }


    public function __destruct()
    {
        $this->adres = " ";
        $this->rok = 0;
        $this->dane = " ";
        $this->password = " ";

    }
}

$placowka = new Placowka();

echo "Adres: " . getAdres() . "<br>";
echo "Rok: " . getRok() . "<br>";
echo "Dane: " . getDane() . "<br>";
echo "Hasło: " . getPassword() . "<br>";






?>
