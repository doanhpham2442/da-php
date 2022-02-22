<div class="page-wrapper">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Small Buttons</h5>
                    <!--                    <button type="button" class="btn btn-primary btn-sm">Primary</button>-->
                    <!--                    <button type="button" class="btn btn-secondary btn-sm">Secondary</button>-->
                    <!--                    <button type="button" class="btn btn-success btn-sm">Success</button>-->
                    <!--                    <button type="button" class="btn btn-danger btn-sm">Danger</button>-->
                    <!--                    <button type="button" class="btn btn-warning btn-sm">Warning</button>-->
                    <!--                    <button type="button" class="btn btn-info btn-sm">Info</button>-->
                    <!--                    <button type="button" class="btn btn-light btn-sm">Light</button>-->
                    <!--                    <button type="button" class="btn btn-dark btn-sm">Dark</button>-->
                    <!--                    <button type="button" class="btn btn-link btn-sm">Link</button>-->
                    <button type="button" class="btn btn-primary btn-sm" onclick="window.open('updateArticle.php')" value="">Thêm 1 bài viết mới</button>

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-b-0">Quản lý tài khoản</h5>
                    </div>
                    <form method="POST">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
<!--                                <th scope="col">STT</th>-->
                                <th scope="col">Loại bài viết</th>
                                <th scope="col">Người tạo</th>
                                <th scope="col">Tiêu đề</th>
                                <th scope="col">Nội dung tóm tắt</th>
                                <th scope="col">Nội dung chi tiết</th>
                                <th scope="col">Ngày gửi bài</th>
                                <th scope="col">Ngày xuất bản</th>
                                <th scope="col">Ngày hết hạn</th>
                                <th scope="col">Lượt xem</th>
                                <th scope="col" colspan="2">Thao tác</th>
                            </tr>
                            </thead>



                            <tbody>
                            <?php $count = 1;
                            foreach ($list as $key=>$value) {

                                ?>

                                <!---->
                                <tr>

<!--                                    <td scope="row">--><?//= $count++?><!--</td>-->

                                    <td scope="row"><?= $value->ten_loai_bai_viet?></td>
                                    <td scope="row"><?= $value->ten_dang_nhap?></td>
                                    <td><?= $value->tieu_de?></td>
                                    <td><?= $value->noi_dung_tom_tat?></td>
                                    <td><?= $value->noi_dung_chi_tiet?></td>
                                    <td scope="row"><?=  date("d-m-Y",strtotime($value->ngay_gui_bai)) ?></td>
                                    <td><?=  date("d-m-Y",strtotime($value->ngay_xuat_bai)) ?></td>
                                    <td><?=  date("d-m-Y",strtotime($value->ngay_het_han)) ?></td>
                                    <td><?= $value->luot_xem ?></td>
                                    <td><button type="button" class="btn btn-success btn-sm" onclick="window.open('updateArticle.php?id=<?= $value->ID?>','__self')">Sửa</button></td>
                                    <td><button type="submit" class="btn btn-danger btn-sm" onclick="deleteArticle('<?= $value->ID?>')">Xóa</button></td>

                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </form>
                    <script type="text/javascript">
                        function deleteTitle(id) {
                            var option = confirm('Bạn có muốn xoá sản phẩm này không');
                            if(!option) {
                                return;
                            }
                            $.post('api/banner/deletebanner.php', {
                                'id': id
                            }, function(data) {
                                alert(data);
                                // location.reload()
                            })
                        }
                    </script>
                </div>

            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div></div>