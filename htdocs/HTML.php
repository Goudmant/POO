<?php
    include 'POO2.php';

    $myHTML = new Html();
    echo $myHTML->linkCSS("./index.css");
    echo $myHTML->meta('testName','testContent');

    $myForm = new Form();
    $myForm->input('test','testtest','text');
    $myForm->select('testSelect',array('option1','option2','option3'));
    $myForm->textArea('textA',5,30);
    $myForm->input('test','testtest','radio');
    $myForm->input('test','testtest','checkbox');
    echo $myForm->getForm();


    echo $myHTML->image('cats');
    echo $myHTML->a('./HTML.php',"a link");

    echo $myHTML->script('./index.js');
?>