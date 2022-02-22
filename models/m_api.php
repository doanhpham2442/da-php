<?php
include_once "models/m_product.php";

class m_api extends database
{
    function AddToCart()
    {

        $cart = [];
        $cartUpdate = [];

        if (isset($_POST['id'])) {
            $id = $_POST['id'];
        }
        if (isset($_POST['num'])) {
            $num = $_POST['num'];
        }
        if (isset($_POST['action'])) {
            $action = $_POST['action'];
        }
        if (isset($_POST['cartUpdate'])) {
            $json = $_POST['cartUpdate'];
            $cartUpdate = json_decode($json, true);
        }

        if (isset($_COOKIE['cart'])) {
            $json = $_COOKIE['cart'];
            $cart = json_decode($json, true);
            switch ($action) {
                case 'add':
//                    var_dump($cart);
//                    var_dump($_COOKIE);
                    $isFind = false;
                    for ($i = 0; $i < count($cart); $i++) {
                        if ($cart[$i]['id'] == $id) {
                            $cart[$i]['num'] += $num;
                            $isFind = true;
                            break;
                        }
                    }
                    if (!$isFind) {
                        $cart[] = [
                            'id' => $id,
                            'num' => $num,
                        ];
                    }
                    setcookie('cart', json_encode($cart), time() + 7 * 24 * 30 * 12, '/');
//                    echo "Thêm thành công";
//                    var_dump($cart);
                var_dump($cart);
                $this->QueryFromCart($cart);
                var_dump($_SESSION);
                    break;
                case 'update':
                    var_dump($cartUpdate);
                    setcookie('cart', json_encode($cartUpdate), time() + 7 * 24 * 30 * 12, '/');
                    var_dump($_SESSION);
                    var_dump($_COOKIE);
                    $this->QueryFromCart($cartUpdate);
                    break;


                case 'delete':
                    for ($i = 0; $i < count($cart); $i++) {

                        if ($cart[$i]['id'] == $id) {
                            array_splice($cart, $i, 1);
                            unset($_COOKIE['cart']);
                            setcookie('cart', json_encode($cart), time() + 7 * 24 * 30 * 12, '/');
                            break;
                        }
                    }

                    echo "Xóa thành công";
                    $this->QueryFromCart($cart);

                    break;
            }
        } else {
            $id = $_POST['id'];
            array_push($cart, ['id' => $id, 'num' => $num]);
            setcookie('cart', json_encode($cart), time() + 7 * 24 * 30 * 12, '/');
            $this->QueryFromCart($cart);

        }



    }
    function QueryFromCart($cart = [])
    {
        $listID = [];
        $tong = 0;
        $totalqty = 0;
//        var_dump($_COOKIE);
        if (isset($cart)) {

            if (empty($cart)) {
                unset($_SESSION['cartList']);
                unset($_SESSION['tong']);
                unset($_SESSION['totalqty']);
                die();
            }
            foreach ($cart as $item) {
                $listID[] = $item['id'];
            }
            $sql = "SELECT * FROM san_pham WHERE ID in (" . implode($listID, ',') . ")";
            $m_pro = new m_product();
            $m_pro->setQuery($sql);
            $cartList = $m_pro->loadAllRows();
            $_SESSION['cartList'] = $cartList;

            for ($i = 0; $i < count($cart); $i++) {
                $totalqty += $cart[$i]['num'];
            }

            foreach ($cartList as $item) {
                for ($i = 0; $i < count($cart); $i++) {
                    if ($item->ID == $cart[$i]['id']) {
                        $qty = $cart[$i]['num'];
                        $tong += $item->don_gia * $qty;
                    }
                }
            }
            $_SESSION['tong'] = $tong;
            $_SESSION['totalqty'] = $totalqty;

        }else {
            unset($_SESSION['cartList']);
        }

        }




}