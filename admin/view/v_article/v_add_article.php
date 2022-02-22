<div class="page-wrapper">
    <div class="container-fluid">

        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <h4 class="card-title">Thêm bài viết</h4>
                            <input type="number" class="form-control" id="fname" value="<?=$s_id?>" name = "id" style="display: none" >

                            <div class="form-group row">
                                <?$s_id = $s_id_loai = $s_tieu_de = $s_ndtt = $s_ndct = $s_ngay_het_han ="";?>
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Loaị bài viết</label>
                                <div class="col-sm-9">
                                    <select name="id_loai_bai_viet" required>
                                        <option value="">----Chọn-----</option>
                                        <?php
                                        foreach ($loai_bai_viet as $value)
                                        {
                                            ?>
                                            <option value="<?= $value->ID?>" <?php if($s_id_loai == $value->ID){
                                                echo "selected";
                                            }?>><?=$value->ten_loai_bai_viet?></option>';
                                        <?php
                                        }

                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên tiêu đề</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="fname" value="<?=$s_tieu_de?>" required name = "tieu_de" placeholder="Thêm tiêu đề">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nội dung tóm tắt</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="fname" value="<?=$s_ndtt?>" required name = "ndtt" placeholder="Nội dung tóm tắt"><?=$s_ndtt?></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nội dung chi tiết</label>
                                <div class="col-sm-9">
                                    <textarea type="text" class="form-control" id="fname" value="<?=$s_ndct?>" required name = "ndct" placeholder="Nội dung chi tiết"><?=$s_ndct?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ngày hết hạn</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="fname" value="<?=$s_ngay_het_han?>" required name = "ngay_het_han" >
                                </div>
                            </div>



                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" name = "submit" class="btn btn-primary">Submit</button>

                            </div>
                        </div>
                    </form>
                </div>


            </div>

        </div>
        <!-- editor -->

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
    </div>
</div>