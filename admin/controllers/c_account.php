<?php
session_start();
include_once("models/m_account.php");

class c_account
{
    public function show()
    {

        if (isset($_SESSION['message'])) {
            echo "<script type='text/javascript'> alert('" . $_SESSION['message'] . "'); </script>";
            //to not make the error message appear again after refresh:
            unset($_SESSION['message']);
        }
        $m_banner = new m_account();
        $list = $m_banner->selectAll();
        $view = "view/v_account/v_account.php";
        include_once "templates/layouts.php";


    }
    public function update()
    {
        $s_hinh_anh = $s_ten_tieu_de = $s_trang_thai = $s_id = "";
        $m_banner = new m_account();

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
            if (isset($_POST['submitForm'])) {

                $ten_tieu_de = $_POST['ten_tieu_de'] != "" ? $_POST['ten_tieu_de'] : "";
                $hinh_anh = ($_FILES['hinh_anh']['error'] == 0) ? $_FILES["hinh_anh"]['name'] : "";
                $status = ($_POST['trang_thai'] != "") ? $_POST['trang_thai'] : "1";
                var_dump($_POST['id']);
                if (!empty($s_id)) {
                    $id = $_POST['id'] != "" ? $_POST['id'] : "";
                    if (!empty($hinh_anh)) {

                        $resultUpdate = $m_banner->update($ten_tieu_de, $hinh_anh, $status, $s_id);
                    } else {
                        $resultUpdate = $m_banner->update($ten_tieu_de, $s_hinh_anh, $status, $s_id);
                    }

                    if ($resultUpdate) {
                        if ($hinh_anh != "") {
                            move_uploaded_file($_FILES['hinh_anh']['tmp_name'], "../public/image/banner/$hinh_anh");
                        }
                        $_SESSION['message'] = "Cập nhật thành công";
                    } else {
                        $_SESSION['message'] = "Cập nhật thất bại";
                    }
//                  header("Location:banner.php");
//                var_dump($_SESSION['message']);

                } else {
                    $resultInsert = $m_banner->insert($ten_tieu_de, $hinh_anh, $status);
                    if ($resultInsert) {
                        if ($hinh_anh != "")
                            move_uploaded_file($_FILES['hinh_anh']['tmp_name'], "../public/image/banner/$hinh_anh");
                        echo "<script>alert('Thêm thành công');</script>";
                    } else {
                        echo "<script>alert('Thêm thất bại');</script>";
                        return;
                    }
//                header("Location:banner.php");
                }

            }

            $view = "view/v_banner/v_addbanner.php";
            include_once "templates/layouts.php";
        }

    }
    public function delete()
    {
        $m_banner = new m_account();
        $deletebanner = $m_banner->delete();

        if ($deletebanner) {
            echo "Xóa thành công";
        } else {
            echo "Không xóa được";
            return;
        }
    }


}
