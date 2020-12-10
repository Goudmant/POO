<?php
    //Lier des Fichiers CSS <link rel="stylesheet" ...>
    //Créer des Balises meta <meta ...>
    //Lier des Images <img src="...">
    //Créer des Liens <a href="...">
    //Lier des Fichiers Javascript
    class Html {
        
        public $myHTML = new Html();
        

    }
    echo $myHTML->linkCSS("./index.css");  //Lier des Fichiers CSS <link rel="stylesheet" ...>
    echo $myHTML->meta('testName','testContent'); //Créer des Balises meta <meta ...>
    echo $myHTML->image('cats'); //Lier des Images <img src="...">
    echo $myHTML->a('./HTML.php',"a link");//Créer des Liens <a href="...">
    echo $myHTML->script('./index.js');//Lier des Fichiers Javascript

    class Validator {
        // chaine de caractere 
        public function __stristr ( string $haystack , string $needle [, bool $before_needle = FALSE ] ) : string|false

        // nombre entier 
        public function __INT ($b = '24');
        if ($b = filter_var($b, FILTER_VALIDATE_INT)) {
            var_dump($b); //Affiche int(24).
        }
        // nombre flottant
        $a = 1.23456789;
        $b = 1.23456780;
        $epsilon = 0.00001;

        if(abs($a-$b) < $epsilon) {
        echo "true";
        }
        

    }





?>