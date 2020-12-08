<?php
    
    class Form {

        private $data;
        public $surround = 

        public function __construct($data){
            $this->data = $data;
        }

        private function surround ($tag){

        }

        public function input ($name){
        $this->surround('<input type="text" name"' . $name . '"'>');
        }

        public function submit(){
        $this->surround('<button type="submit">Envoyer</button>');
        }

    }







?>