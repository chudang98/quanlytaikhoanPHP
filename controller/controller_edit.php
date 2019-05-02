<?php

    class ControllerEdit extends Controller{
        public  function __construct()
        {
            parent::__construct();
            $this->checkLogin();
            if(isset($_POST['ID']) && isset($_POST['user_edit'])){
                $id_edit = $_POST['ID'];
                $name_edit = $_POST['user_edit'];
            }

            if(isset($_GET['id']) && isset($_GET['name'])){
                $id = $_GET['id'];
                $name = $_GET['name'];
            }

            include('./views/edit.php');

            if(isset($_GET['action'])){
                if($_GET['action'] == 'update'){
                    $sql = "UPDATE `user` SET `ten`='" . $name_edit ."' WHERE id=" .$id_edit;
                    $result = $this->model->Success($sql);
                    // var_dump($result);
                    if($result){
                        header("Location: index.php?controll=home&update=true");
                    }
                    else{
                        header("Location: index.php?controll=home&update=false");
                    }
                }
            }
            
        }
    }

    new ControllerEdit();

?>