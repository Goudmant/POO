<?php

class becodekeller {
        private $firstname;
        public $lastname; 
        protected $age;

    public function __CONSTRUCT ($lastname, $firstname, $age)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->setAge = ($age);

    }

    public function setAge ($age)
    {
        if (is_int($age) && $age >= 18 && $age <= 99) {
        $this->age = $age; 
        } else {
            throw new Exception ("l'age d'un junior n'est pas un entier entre 18 et 99 !");
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    public function presentation ()
    {
        var_dump ("Bonjour, je suis Web dev junior à Becode Charleroi je m'appelle $this->firstname , $this->lastname et j'ai $this->age ");
    }
}

class coach  extends becodekeller {

    public $classe;

public function __CONSTRUCT ($lastname, $firstname, $age, $classe)
{
    parent::__construct ($lastname, $firstname, $age);

    $this->classe = $classe;

}
public function presentation ()
{
    var_dump ("Hellooooooo,Moi $this->lastname, $this->firstname , coach de la classe Web dev junior, je m'engage a faire réussir les $this->classe à Becode Charleroi. Au passage je n'ai que {$this->getAge()} ans! ");
}
}

$coach -> presentation();
$coach -> classe ();

$coach1 = new coach ("maitredieusenseimaster", "Pierre", 99, "Keller");

$becodekeller -> presentation ();

$becodekeller1 = new junior ("Koala","Dorian", 37);
$becodekeller2 = new junior ("Poulpe","Yvan", 31);
$becodekeller3 = new junior ("ecureuil","Julien", 22);
$becodekeller4 = new junior ("chinchilla","Joann", 34);
$becodekeller5 = new junior ("lemurien","Abderrahman", 32);
$becodekeller6 = new junior ("kangourou","Thomas", 28);
$becodekeller7 = new junior ("grenouille","Yannick", 29);
$becodekeller8 = new junior ("rougegorge","Florence", 34);
$becodekeller9 = new junior ("taupe","Antoine", 29);
$becodekeller10 = new junior ("suricate","Olivia", 22);
$becodekeller11 = new junior ("girafe","Gaeatano", 55);
$becodekeller12 = new junior ("rhinocéros","Philippe", 26);
$becodekeller13 = new junior ("tigre","Pauline", 27);
$becodekeller14 = new junior ("hibou","Frederic", 29);
$becodekeller15 = new junior ("lion","Nathanael", 25);
$becodekeller16 = new junior ("ours","Kutligin", 28);
$becodekeller17 = new junior ("puma","Jonathan", 35);
$becodekeller18 = new junior ("renard","Henrique", 30);
$becodekeller19 = new junior ("pingouin","Manon", 22);
$becodekeller20 = new junior ("chameau","Valentin", 28);

?>