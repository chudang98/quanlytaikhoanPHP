<?php
    class ControllerLogin extends Controller{

        public function __construct()
        {
            parent::__construct();
            include('./views/login.php');
            if(isset($_GET['controll']) && $_GET['controll'] == 'login'){
                if(isset($_GET['action']) && $_GET['action'] == 'check'){
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $pass_cryp = md5($pass);

                    $sql = "SELECT * FROM `user` WHERE ten = '" .$user ."' AND pass = '" .$pass ."'";
                    $result = $this->model->fetch($sql);
                    
                    // var_dump($result);
                    // var_dump($_SESSION);

                    if(!empty($result)){
                        $_SESSION['user'] = $user;
                        header('Location:index.php?controll=home');
                    }
                    else{
                        header('Location:index.php?controll=login&err_login=error');
                    }
                }

            }
        }
    }
    new ControllerLogin();
?>

