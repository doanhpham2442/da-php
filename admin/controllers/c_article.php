<?php
session_start();
include_once("models/m_article.php");
include_once("models/m_account.php");


class c_article
{
    public function show()
    {

        if (isset($_SESSION['message'])) {
            echo "<script type='text/javascript'> alert('" . $_SESSION['message'] . "'); </script>";
            //to not make the error message appear again after refresh:
            unset($_SESSION['message']);
        }
        $m_article = new m_article();
        $m_account = new m_account();
        $list = $m_article->selectAll();
        $loai_bai_viet = $m_article->selectAllType();

        $view = "view/v_article/v_article.php";
        include_once "templates/layouts.php";


    }
    public function update()
    {
//        var_dump($_SESSION);
//        $s_hinh_anh = $s_ten_tieu_de = $s_trang_thai = $s_id = "";
//        var_dump($_POST);
        $s_id = $s_id_loai = $s_tieu_de = $s_ndtt = $s_ndct = $s_ngay_het_han ="";
//        $s_id_loai = getPOST('loai_san_pham');
//        $s_tieu_de = getPOST('tieu_de');
//        $s_ndtt = getPOST('ndtt');
//        $s_ndct = getPOST('ndct');
//        $s_ngay_han = getPOST('ngay_het_han');
        $id_nguoi_dung = $_SESSION['user_admin']->ID;
        $m_article = new m_article();
        $loai_bai_viet = $m_article->selectAllType();
        if (isset($_GET['id'])) {
            $s_id = $_GET['id'];
            $resultSelect = $m_article->selectOne($s_id);
            var_dump($resultSelect);
            if ($resultSelect) {
                $s_id = $resultSelect->ID;
                $s_id_loai = $resultSelect->ID_loai_bai_viet;
                $s_tieu_de = $resultSelect->tieu_de;
                $s_ndtt = $resultSelect->noi_dung_tom_tat;
                $s_ndct = $resultSelect->noi_dung_chi_tiet;
                $s_ngay_het_han =  date("Y-m-d",strtotime($resultSelect->ngay_het_han));


            } else {
                $s_id = "";
            }
        }
            if (isset($_POST['submit'])) {

                $ten_tieu_de = getPOST('ten_tieu_de');
                $id_loai = getPOST('id_loai_bai_viet');
                $tieu_de = getPOST('tieu_de');
                $ndtt = getPOST('ndtt');
                $ndct = getPOST('ndct');
                $ngay_gui = date("Y-m-d");
                $ngay_het_han = getPOST('ngay_het_han') ;
                if (!empty($s_id)) {
                    $id = getPOST('id');
                    $resultUpdate = $m_article->update($id_loai,$tieu_de,$ndtt,$ndct,$ngay_het_han,$id);
                    if ($resultUpdate) {
                        $_SESSION['message'] = "Cập nhật thành công";
                    } else {
                        $_SESSION['message'] = "Cập nhật thất bại";
                    }
//                  header("Location:banner.php");
//                var_dump($_SESSION['message']);

                } else {
                    $resultInsert = $m_article->insert($id_loai,$id_nguoi_dung,$tieu_de,$ndtt,$ndct,$ngay_gui,$ngay_het_han);
                    var_dump($resultInsert == true);
//
//                    if ($resultInsert) {
//                        echo "<script>alert('Thêm thành công');</script>";
//                    } else {
//                        echo "<script>alert('Thêm thất bại');</script>";
//                        return;
//                    }
//                header("Location:banner.php");
                }
        }
        $view = "view/v_article/v_add_article.php";
        include_once "templates/layouts.php";

    }
    public function delete()
    {
        $m_banner = new m_article();
        $deletebanner = $m_banner->delete();

        if ($deletebanner) {
            echo "Xóa thành công";
        } else {
            echo "Không xóa được";
            return;
        }
    }


}
