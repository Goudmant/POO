<?php
    //Lier des Fichiers CSS <link rel="stylesheet" ...>
    //Créer des Balises meta <meta ...>
    //Lier des Images <img src="...">
    //Créer des Liens <a href="...">
    //Lier des Fichiers Javascript
    class myForm {
        
        
        

    }
    echo $myHTML->linkCSS("./index.css");  //Lier des Fichiers CSS <link rel="stylesheet" ...>
    echo $myHTML->meta('testName','testContent'); //Créer des Balises meta <meta ...>
    echo $myHTML->image('cats'); //Lier des Images <img src="...">
    echo $myHTML->a('./HTML.php',"a link");//Créer des Liens <a href="...">
    echo $myHTML->script('./index.js');//Lier des Fichiers Javascript





?>