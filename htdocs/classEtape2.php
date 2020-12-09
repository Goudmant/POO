<?php
    
    class Form {

        private $data;
        public $surround = 'p';

        public function __construct($data){
        $this->data = $data;
        }

        private function surround ($tag){

        }

        public function input ($name){
        $this->surround('<input type="text" name"' . $name . '">','p');
        }

        public function submit(){
        $this->surround('<button type="submit">Envoyer</button>');
        }

    }







?>