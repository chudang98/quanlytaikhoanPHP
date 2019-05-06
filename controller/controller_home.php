<?php
    class ControllerHome extends Controller{
        public function __construct()
        {
            parent::__construct();

            $this->checkLogin();

            $sql = "SELECT id, ten FROM `user`";
            $result = $this->model->fetch($sql);
            if(isset($_GET['update'])){
                if($_GET['update'] == 'true'){            
                    $success = 'alert-primary'; 
                    $mess = 'Sửa thông tin thành công !';
                }
                else{
                    $success = 'alert-danger'; 
                    $mess = 'Lỗi không sửa được !!!!!!!!';
                }
            }
            if(isset($_GET['action']) && $_GET['action'] == 'delete'){
                $sql = "DELETE FROM `user` WHERE id = ".$_GET["id"];
                $result = $this->model->Success($sql);
                header("Location: index.php?controll=home");
            }
            include_once('./views/view.php');
        }
    }

    new ControllerHome();
?>