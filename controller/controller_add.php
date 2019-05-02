<?php

    // Chưa kịp hoàn thành
    class ControllerAdd extends Controller{

        public function __construct()
        {
            parent::__construct();
            include('./views/add.php');
        }


    }

    new ControllerAdd();
?>