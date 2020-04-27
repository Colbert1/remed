<?php
class User
{

    private $_age = 0;
    private $_login = "Inconnu";
    private $_nom = "Inconnu";
    private $_mdp = "Inconnu";
    private $_connect; //j'ai déplacé le pdo comme vous avez dis ->


    public function __construct($login, $mdp, $nom, $age)
    {
        $this->_nom = $nom;
        $this->_age = $age;
        $this->_login = $login;
        $this->_mdp = $mdp;
        $this->_connect = new PDO('mysql:host=localhost;dbname=remediation;charset=utf8', 'root', '');// ici
    }
    public function getNom()
    {
        return $this->_nom;
    }
    public function setNom($newNom)
    {
        $this->_nom = $newNom;
    }
    public function getAge()
    {
        return $this->_age;
    }
    public function setAge($newAge)
    {
        $this->_age = $newAge;
    }
    public function getLogin()
    {
        return $this->_login;
    }
    public function setLogin($newLogin)
    {
        $this->_login = $newLogin;
    }
    public function getMdp()
    {
        return $this->_mdp;
    }
    public function setMdp($newMdp)
    {
        $this->_mdp = $newMdp;
    }

    public function connect()
    {

        $requete = _connect->query('SELECT * FROM `remed` WHERE `nom`, `mdp`, `age`, `login`'); // l'appel n'a pas l'air de fonctionner
    }
    public function deconnect()
    {
        echo '<form action="deco.php"><input type="submit"></form>'; // j'ai essayé de mettre le bouton de deco dans la fonction 
    }
}
