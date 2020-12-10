<?php

interface transpiration 
{
    public function transpirer();
}

class becodekeller implements transpiration
{
    public $firstname;
    public $lastname; 
    protected $age;

    public function __CONSTRUCT ($lastname, $firstname, $age)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->setAge($age);

    }

    public function transpirer () 
    {
        return "je suis un junior et je sue !";
    }

    public function setAge ($age) // Permet de fermer l'age a un nombres entier entre 18 et 99 
    {
        if (is_int($age) && $age >= 18 && $age <= 99) {
        $this->age = $age; 
        } else { // affiche un message d'erreur si la function n'est pas correct
            throw new Exception ("l'age d'un Becodeur n'est pas un entier entre 18 et 99 !");
        }
    }

    public function getAge() // va appeler la function age proteger 
    {
        return $this->age;
    }

    public function presentation () // structure des membres
    {
        var_dump ("Bonjour, je suis Web dev junior à Becode Charleroi je m'appelle $this->firstname , $this->lastname et j'ai $this->age ");
    }
}

class coach extends becodekeller {

    private $classe;

    public function __CONSTRUCT ($lastname, $firstname, $age, $classe)
    {
        parent::__construct ($lastname, $firstname, $age);

        $this->classe = $classe;

    }
    public function presentation () // structure Coachs
    {
        var_dump ("Hellooooooo,Moi $this->lastname, $this->firstname , coach de la classe Web dev junior, je m'engage a faire réussir les $this->classe à Becode Charleroi. Au passage je n'ai que {$this->getAge()} ans! ");
    }

}

    fairetranspirer($coach);
    fairetranspirer($becodekeller);

    function transpirer (transpirer $objet) {
        var_dump("Je vais vous faire suer avec l'auto-apprentisage :{$objet->transpirer()}");
    }

// Les membres 
$becodekeller1 = new junior ("Koala","Dorian", 37);
$becodekeller2 = new junior ("Poulpe","Yvan", 31);
$becodekeller3 = new junior ("Ecureuil","Julien", 22);
$becodekeller4 = new junior ("Chinchilla","Joann", 34);
$becodekeller5 = new junior ("Lemurien","Abderrahman", 32);
$becodekeller6 = new junior ("Kangourou","Thomas", 28);
$becodekeller7 = new junior ("Grenouille","Yannick", 29);
$becodekeller8 = new junior ("Rougegorge","Florence", 34);
$becodekeller9 = new junior ("Taupe","Antoine", 29);
$becodekeller10 = new junior ("Suricate","Olivia", 22);
$becodekeller11 = new junior ("Girafe","Gaeatano", 55);
$becodekeller12 = new junior ("Rhinocéros","Philippe", 26);
$becodekeller13 = new junior ("Tigre","Pauline", 27);
$becodekeller14 = new junior ("Hibou","Frederic", 29);
$becodekeller15 = new junior ("Lion","Nathanael", 25);
$becodekeller16 = new junior ("Ours","Kutligin", 28);
$becodekeller17 = new junior ("Puma","Jonathan", 35);
$becodekeller18 = new junior ("Renard","Henrique", 30);
$becodekeller19 = new junior ("Pingouin","Manon", 22);
$becodekeller20 = new junior ("Chameau","Valentin", 28);

// Partie visible Membres voir var_dump
$becodekeller -> presentation ();

// les Coachs 
$coach1 = new coach ("maitredieusenseimaster", "Pierre", 99, "Keller");

// Partie visible Coachs voir var_dump
$coach -> presentation();


?>