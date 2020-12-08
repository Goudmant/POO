<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    <form action="<?php echo $action; ?>" method="POST">
        <input name="nom" value="<?php echo $nom ?>" >
        <input name="prenom" value="<?php echo $prenom ?>" >
        <input type="submit" value="Modifier" >
    </form>

    echo $form = new Form();
    echo $form->create($action); // créer le début du formulaire
    echo $form->text('nom',$nom); // créer un input de type texte avec comme valeur par défaut $nom
    echo $form->text('prenom',$prenom); // créer un input de type texte avec comme valeur par défaut $prenom
    echo $form->submit('Modifier'); //Créer un bouton pour soumettre le formulaire se nommant Modifier
    echo $form->end(); //fermer le formulaire

    Le début d'un formulaire <form ...>
    Un input text <input type="text"...>
    Un select <select ...> ...</select>
    Un bouton submit <button type="submit"></button>
    Un textarea <textarea ...> ...</textarea>
    Un radio button <input type="radio"...>
    Une checkbox <input type="checkbox">

    ?>
</body>
</html>
