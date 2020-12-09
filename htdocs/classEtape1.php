<?php
    // Cette classe devra avoir des méthodes et des propriétés afin de pouvoir générer :

    //Le début d'un formulaire <form ...>
    //Un input text <input type="text"...>
    //Un select <select ...> ...</select>
    //Un bouton submit <button type="submit"></button>
    //Un textarea <textarea ...> ...</textarea>
    //Un radio button <input type="radio"...>
    //Une checkbox <input type="checkbox">

    //echo $form->input('username');
    //echo $form->input('password');
    //echo $form->submit();
    //echo $form = new Form();
    //echo $form->create($action); // créer le début du formulaire
    //echo $form->text('nom',$nom); // créer un input de type texte avec comme valeur par défaut $nom
    //echo $form->text('prenom',$prenom); // créer un input de type texte avec comme valeur par défaut $prenom
    //echo $form->submit('Modifier'); //Créer un bouton pour soumettre le formulaire se nommant Modifier
    //echo $form->end(); //fermer le formulaire


    require 'classEtape2.php';

    $myHTML = new Html();
    echo $myHTML->linkCSS("./Etape.css");
    echo $myHTML->meta('testName','testContent');

    $myForm = new Form();
    $myForm->input('test','testtest','text');
    $myForm->select('testSelect',array('option1','option2','option3'));
    $myForm->textArea('textA',5,30);
    $myForm->input('test','testtest','radio');
    $myForm->input('test','testtest','checkbox');
    echo $myForm->getForm();


    echo $myHTML->image('./');
    echo $myHTML->a('./generateHTML.php',"a link");

    echo $myHTML->script('./Etape.js');




?>

