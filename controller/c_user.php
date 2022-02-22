<?php
session_start();
include_once "models/m_user.php";
include_once "models/m_api.php";

class c_user
{
    public function check_login()
    {

        $tong = $totalqty = 0;
        $user = $pass = "";
//        var_dump($_POST);
        if (isset($_POST['login'])) {
            if (isset($_POST['Username'])) {
                $user = $_POST['Username'];
            }
            if (isset($_POST['Password'])) {
                $pass = $_POST['Password'];
            }
            $this->saveLoginSession($user, $pass);
            if (isset($_SESSION['user'])) {
                $_SESSION['messege'] = "Đăng nhập thành công";

                if (isset($_COOKIE['cart'])) {
                    $json = $_COOKIE['cart'];
                    $cart = json_decode($json, true);
                    $api = new m_api();
                    $api->QueryFromCart($cart);
                }

//                var_dump($_COOKIE);
//                var_dump($_SESSION);
//                die();
                if(isset($_SESSION['old_page']))
                {
                    $a = $_SESSION['old_page'];
                    header("Location: $a");
                    unset( $_SESSION['old_page']);
                    die();
                }
                header('Location: shop.php');
                die();

            } else {
                $_SESSION['messege'] = "Sai thong tin dang nhap";
            }
        }

            $view = "views/v_login.php";
            require_once "templates/login/layouts.php";
            die();


    }

    public function saveLoginSession($user, $pass)
    {
        $m_user = new m_user();
        $user = $m_user->takeUserbyId($user, $pass);
        if (!empty($user)) {
            $_SESSION['user'] = $user;
        }

    }

    public function logout()
    {

        session_destroy();
        session_start();
        $_SESSION['messege'] = "Đăng xuất thành công";
        header('Location: login.php');
        die();

    }

    public function  register()
    {
        $user = $pass = $repass = $email = "";
        $error = "";
        $date_register = "";
        var_dump($_POST);
        if (isset($_POST['register'])) {
            if (isset($_POST['username'])) {
                $user = $_POST['username'];
            }
            if (isset($_POST['password'])) {
                $pass = $_POST['password'];
            }
            if (isset($_POST['repassword'])) {
                $repass = $_POST['repassword'];
            }
            if (isset($_POST['email'])) {
                $email = $_POST['email'];
            }
            $date_register  = date('Y-m-d');

                $m_user = new m_user();
                $userA = $m_user->checkAvailableUser($user);
//                if ($userA)
//                {
//                    $_SESSION['messege'] = "Đã có nguời dùng này,vui lòng đk lại ";
//                }else{
                    $user = $m_user->registerUser($user,$pass,$email,$date_register);
//                    $id = $m_user->getLastItem();
//                    var_dump($user);
//                    var_dump($id);

//                    $m_user->insertEmail($email,$id);
//                    if($user)
//                    {
//                        $_SESSION['messege'] = "Đăng ký thành công";
//                        header("Location:login.php");
//
//                        die();
//                    }
//                }



        }
        $view = "views/v_register.php";
        include_once "templates/register/layouts.php";


    }
}
