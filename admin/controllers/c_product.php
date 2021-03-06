<?php
session_start();
include_once ("models/m_product.php");
class c_product
{
    public function show(){
        if (isset($_SESSION['message'])) {
            echo "<script type='text/javascript'> alert('" . $_SESSION['message'] . "'); </script>";
            unset($_SESSION['message']);
        }
        $m_product = new m_product();
        $list = $m_product->selectAll();
        $view = "view/v_product/v_product.php";
        include_once "templates/layouts.php";
    }
    public function update()
    {
        $s_hinh_anh = $s_ten_tieu_de = $s_trang_thai = $s_id = "";
        $m_banner = new m_product();

        if (isset($_GET['id'])) {
            $s_id = $_GET['id'];
            $resultSelect = $m_banner->selectOne($s_id);

            if ($resultSelect) {
                $s_id = $resultSelect->ma_tieu_de;
                $s_ten_tieu_de = $resultSelect->ten_tieu_de;
                $s_hinh_anh = $resultSelect->hinh;
                $s_trang_thai = $resultSelect->trang_thai;

            } else {
                $s_id = "";
            }


        }
        if (isset($_POST['submitForm'])) {

            $ten_tieu_de = $_POST['ten_tieu_de'] != "" ? $_POST['ten_tieu_de'] : "";
            $hinh_anh = ($_FILES['hinh_anh']['error'] == 0) ? $_FILES["hinh_anh"]['name'] : "";
            $status = ($_POST['trang_thai'] != "") ? $_POST['trang_thai'] : "1";
            var_dump($_POST['id']);
            if (!empty($s_id)) {
                $id = $_POST['id'] != "" ? $_POST['id'] : "";
                if (!empty($hinh_anh)) {

                    $resultUpdate = $m_banner->updateBanner($ten_tieu_de, $hinh_anh, $status, $s_id);
                } else {
                    $resultUpdate = $m_banner->updateBanner($ten_tieu_de, $s_hinh_anh, $status, $s_id);
                }

                if ($resultUpdate) {
                    if ($hinh_anh != "") {
                        move_uploaded_file($_FILES['hinh_anh']['tmp_name'], "../public/image/banner/$hinh_anh");
                    }
                    $_SESSION['message'] = "C???p nh???t th??nh c??ng";
                } else {
                    $_SESSION['message'] = "C???p nh???t th???t b???i";
                }
//                  header("Location:banner.php");
//                var_dump($_SESSION['message']);

            } else {
                $resultInsert = $m_banner->insertBanner($ten_tieu_de, $hinh_anh, $status);
                if ($resultInsert) {
                    if ($hinh_anh != "")
                        move_uploaded_file($_FILES['hinh_anh']['tmp_name'], "../public/image/banner/$hinh_anh");
                    echo "<script>alert('Th??m th??nh c??ng');</script>";
                } else {
                    echo "<script>alert('Th??m th???t b???i');</script>";
                    return;
                }
//                header("Location:banner.php");
            }

        }

        $view = "view/v_banner/v_addbanner.php";
        include_once "templates/layouts.php";
    }

    public function delete()
    {
        $m_banner = new m_product();
        $deletebanner = $m_banner->deleteBanner();

        if ($deletebanner) {
            echo "X??a th??nh c??ng";
        } else {
            echo "Kh??ng x??a ???????c";
            return;
        }
    }


}

