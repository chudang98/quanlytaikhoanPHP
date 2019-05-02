<?php

    class Controller{
        public $model;
        
        public function __construct(){
            $this->model = new Model();
        }

        public function checkLogin(){
            if(empty($_SESSION)){
                header("Location:index.php?controll=login");
            }
        }
    }

?>