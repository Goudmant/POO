<?php
    
    require_once "connect.php";
    $pdo = DataBase::connect("my_database");
    var_dump($pdo);
    $count = new DataBase;
    echo $count -> countTable($pdo, "*", "participant");
    
    

    require 'POO2.php';

    
    echo $myForm = new Form();
    echo $myForm->input('test','testtest','text');
    echo $myForm->select('testSelect',array('option1','option2','option3'));
    echo $myForm->textArea('textA',5,30);
    echo $myForm->input('test','testtest','radio');
    echo $myForm->input('test','testtest','checkbox');
    echo $myForm->getForm();

?>

