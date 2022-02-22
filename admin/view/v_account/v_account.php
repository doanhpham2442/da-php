<div class="page-wrapper">
<!--    <div class="row">-->
<!--        <div class="col-12">-->
<!--            <div class="card">-->
<!--                <div class="card-body">-->
<!--                    <h5 class="card-title">Small Buttons</h5>-->
<!--                                        <button type="button" class="btn btn-primary btn-sm">Primary</button>-->
<!--                                        <button type="button" class="btn btn-secondary btn-sm">Secondary</button>-->
<!--                                        <button type="button" class="btn btn-success btn-sm">Success</button>-->
<!--                                        <button type="button" class="btn btn-danger btn-sm">Danger</button>-->
<!--                                        <button type="button" class="btn btn-warning btn-sm">Warning</button>-->
<!--                                        <button type="button" class="btn btn-info btn-sm">Info</button>-->
<!--                                        <button type="button" class="btn btn-light btn-sm">Light</button>-->
<!--                                        <button type="button" class="btn btn-dark btn-sm">Dark</button>-->
<!--                                        <button type="button" class="btn btn-link btn-sm">Link</button>-->
<!--                    <button type="button" class="btn btn-primary btn-sm" onclick="window.open('form_basic.php')" value="">Thê</button>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
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
                                <th scope="col">STT</th>
                                <th scope="col">Họ tên</th>
                                <th scope="col">Tên đăng nhập</th>
                                <th scope="col">Email</th>
                                <th scope="col">Ngày đăng ký</th>
                                <th scope="col">Lần đăng nhập cuối</th>
                                <th scope="col">Active</th>
                                <th scope="col" colspan="2">Thao tác</th>
                            </tr>
                            </thead>



                            <tbody>
                            <?php $count = 1;
                            foreach ($list as $key=>$value) {

                                ?>

                                <!---->
                                <tr>

                                    <td scope="row"><?= $count++?></td>

                                    <td scope="row"><?= $value->ho_ten?></td>
                                    <td scope="row"><?= $value->ten_dang_nhap?></td>
                                    <td><?= $value->email?></td>
                                    <td scope="row"><?=  date("d-m-Y",strtotime($value->ngay_dang_ky)) ?></td>
                                    <td><?=  date("d-m-Y",strtotime($value->ngay_dang_nhap_cuoi)) ?></td>
                                    <td><?= $value->active == 1 ? "Có":"Không"?></td>
                                    <td><button type="button" class="btn btn-success btn-sm" onclick="window.open('customer.php?id=<?= $value->ID?>','__self')">Chi tiết</button></td>
                                    <td><button type="submit" class="btn btn-danger btn-sm" onclick="deleteAccount('<?= $value->ID?>')">ksđsf</button></td>

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