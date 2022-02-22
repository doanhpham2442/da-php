<div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.php">Trang chủ</a></li>
                            <li>Thanh toán</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--Checkout page section-->
    <div class="checkout_page_bg">
        <div class="container">
            <div class="Checkout_section">
                <div class="row">
<!--                    <div class="col-12">-->
<!--                        <div class="user-actions">-->
<!--                            <h3>-->
<!--                                <i class="fa fa-file-o" aria-hidden="true"></i>-->
<!--Returning customer?-->
<!--                                <a class="Returning" href="#checkout_login" data-bs-toggle="collapse" aria-expanded="true">Click here to login</a>-->
<!---->
<!--                            </h3>-->
<!--                             <div id="checkout_login" class="collapse" data-parent="#accordion">-->
<!--                                <div class="checkout_info">-->
<!--                                    <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing & Shipping section.</p>-->
<!--                                    <form action="#">-->
<!--                                        <div class="form_group">-->
<!--                                            <label>Username or email <span>*</span></label>-->
<!--                                            <input type="text">-->
<!--                                        </div>-->
<!--                                        <div class="form_group">-->
<!--                                            <label>Password  <span>*</span></label>-->
<!--                                            <input type="text">-->
<!--                                        </div>-->
<!--                                        <div class="form_group group_3 ">-->
<!--                                            <button type="submit">Login</button>-->
<!--                                            <label for="remember_box">-->
<!--                                                <input id="remember_box" type="checkbox">-->
<!--                                                <span> Remember me </span>-->
<!--                                            </label>-->
<!--                                        </div>-->
<!--                                        <a href="#">Lost your password?</a>-->
<!--                                    </form>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="user-actions">-->
<!--                            <h3>-->
<!--                                <i class="fa fa-file-o" aria-hidden="true"></i>-->
<!--Returning customer?-->
<!--                                <a class="Returning" href="#checkout_coupon" data-bs-toggle="collapse"  aria-expanded="true">Click here to enter your code</a>-->
<!---->
<!--                            </h3>-->
<!--                             <div id="checkout_coupon" class="collapse" data-parent="#accordion">-->
<!--                                <div class="checkout_info coupon_info">-->
<!--                                    <form action="#">-->
<!--                                        <input placeholder="Coupon code" type="text">-->
<!--                                        <button type="submit">Apply coupon</button>-->
<!--                                    </form>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                   </div>-->
                </div>
                <div class="checkout_form">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="checkout_form_left">
                                <form action="" method="post" name ="formUserInfo">
                                    <h3>Chi tiết đặt hàng</h3>
                                    <div class="row">
                                        <div class="col-lg-6 mb-20">
                                            <label>Họ và tên<span>*</span></label>
                                            <input  required type="text" name="fullName" id="fullName">
                                        </div>
<!--                                        <div class="col-12 mb-20">-->
<!--                                            <label>Company Name</label>-->
<!--                                            <input type="text">-->
<!--                                        </div>-->
                                        <div class="col-12 mb-20">
                                            <label for="country">Tỉnh/Thành phố <span>*</span></label>
                                            <select required class="niceselect_option" name="province" id="province">
                                                <option value="An Giang">An Giang
                                                <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu
                                                <option value="Bắc Giang">Bắc Giang
                                                <option value="Bắc Kạn">Bắc Kạn
                                                <option value="Bạc Liêu">Bạc Liêu
                                                <option value="Bắc Ninh">Bắc Ninh
                                                <option value="Bến Tre">Bến Tre
                                                <option value="Bình Định">Bình Định
                                                <option value="Bình Dương">Bình Dương
                                                <option value="Bình Phước">Bình Phước
                                                <option value="Bình Thuận">Bình Thuận
                                                <option value="Bình Thuận">Bình Thuận
                                                <option value="Cà Mau">Cà Mau
                                                <option value="Cao Bằng">Cao Bằng
                                                <option value="Đắk Lắk">Đắk Lắk
                                                <option value="Đắk Nông">Đắk Nông
                                                <option value="Điện Biên">Điện Biên
                                                <option value="Đồng Nai">Đồng Nai
                                                <option value="Đồng Tháp">Đồng Tháp
                                                <option value="Đồng Tháp">Đồng Tháp
                                                <option value="Gia Lai">Gia Lai
                                                <option value="Hà Giang">Hà Giang
                                                <option value="Hà Nam">Hà Nam
                                                <option value="Hà Tĩnh">Hà Tĩnh
                                                <option value="Hải Dương">Hải Dương
                                                <option value="Hậu Giang">Hậu Giang
                                                <option value="Hòa Bình">Hòa Bình
                                                <option value="Hưng Yên">Hưng Yên
                                                <option value="Khánh Hòa">Khánh Hòa
                                                <option value="Kiên Giang">Kiên Giang
                                                <option value="Kon Tum">Kon Tum
                                                <option value="Lai Châu">Lai Châu
                                                <option value="Lâm Đồng">Lâm Đồng
                                                <option value="Lạng Sơn">Lạng Sơn
                                                <option value="Lào Cai">Lào Cai
                                                <option value="Long An">Long An
                                                <option value="Nam Định">Nam Định
                                                <option value="Nghệ An">Nghệ An
                                                <option value="Ninh Bình">Ninh Bình
                                                <option value="Ninh Thuận">Ninh Thuận
                                                <option value="Phú Thọ">Phú Thọ
                                                <option value="Quảng Bình">Quảng Bình
                                                <option value="Quảng Bình">Quảng Bình
                                                <option value="Quảng Ngãi">Quảng Ngãi
                                                <option value="Quảng Ninh">Quảng Ninh
                                                <option value="Quảng Trị">Quảng Trị
                                                <option value="Sóc Trăng">Sóc Trăng
                                                <option value="Sơn La">Sơn La
                                                <option value="Tây Ninh">Tây Ninh
                                                <option value="Thái Bình">Thái Bình
                                                <option value="Thái Nguyên">Thái Nguyên
                                                <option value="Thanh Hóa">Thanh Hóa
                                                <option value="Thừa Thiên Huế">Thừa Thiên Huế
                                                <option value="Tiền Giang">Tiền Giang
                                                <option value="Trà Vinh">Trà Vinh
                                                <option value="Tuyên Quang">Tuyên Quang
                                                <option value="Vĩnh Long">Vĩnh Long
                                                <option value="Vĩnh Phúc">Vĩnh Phúc
                                                <option value="Yên Bái">Yên Bái
                                                <option value="Phú Yên">Phú Yên
                                                <option value="Tp.Cần Thơ">Tp.Cần Thơ
                                                <option value="Tp.Đà Nẵng">Tp.Đà Nẵng
                                                <option value="Tp.Hải Phòng">Tp.Hải Phòng
                                                <option value="Tp.Hà Nội">Tp.Hà Nội
                                                <option value="TP  HCM">TP HCM
                                            </select>
                                        </div>

                                        <div class="col-12 mb-20">
                                            <label>Tên đường<span>*</span></label>
                                            <input required placeholder="Số nhà và tên đường" type="text" name = "street">
                                        </div>
<!--                                        <div class="col-12 mb-20">-->
<!--                                            <input placeholder="Apartment, suite, unit etc. (optional)" type="text">-->
<!--                                        </div>-->
<!--                                        <div class="col-12 mb-20">-->
<!--                                            <label>Town / City <span>*</span></label>-->
<!--                                            <input type="text">-->
<!--                                        </div>-->
<!--                                        <div class="col-12 mb-20">-->
<!--                                            <label>State / County <span>*</span></label>-->
<!--                                            <input type="text">-->
<!--                                        </div>-->
                                        <div class="col-lg-6 mb-20">
                                            <label>Số điện thoại<span>*</span></label>
                                            <input name = "phone" type="text" value="" required>
<?//= $user['']?>
                                        </div>
                                        <div class="col-lg-6 mb-20">
                                            <label> Email <span>*</span></label>
                                            <input type="email" name = "email" required>

                                        </div>
<!--                                        <div class="col-12 mb-20">-->
<!--                                            <input id="account" type="checkbox" data-target="createp_account" />-->
<!--                                            <label for="account" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne">Create an account?</label>-->
<!---->
<!--                                            <div id="collapseOne" class="collapse one" data-parent="#accordion">-->
<!--                                                <div class="card-body1">-->
<!--                                                    <label> Account password <span>*</span></label>-->
<!--                                                    <input placeholder="password" type="password">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
                                        <div class="col-12 mb-20">
<!--                                            <input id="address" type="checkbox" data-target="createp_account" />-->
                                            <label class="righ_0" for="address" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-controls="collapseOne">Ship to a different address?</label>

                                            <div id="collapsetwo" class="collapse one" data-parent="#accordion">
                                                <div class="row">
                                                    <div class="col-lg-6 mb-20">
                                                        <label>Họ và tên<span>*</span></label>
                                                        <input type="text" name="full_name" id="full_name">
                                                    </div>
<!--                                                    <div class="col-lg-6 mb-20">-->
<!--                                                        <label>Tên <span>*</span></label>-->
<!--                                                        <input type="text">-->
<!--                                                    </div>-->
                                                    <div class="col-12 mb-20">
                                                        <label>Company Name</label>
                                                        <input type="text">
                                                    </div>
                                                    <div class="col-12 mb-20">
                                                        <label for="country">Tỉnh/Thành phố <span>*</span></label>
                                                        <select class="niceselect_option" name="province" id="province">
                                                            <option value="An Giang">An Giang
                                                            <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu
                                                            <option value="Bắc Giang">Bắc Giang
                                                            <option value="Bắc Kạn">Bắc Kạn
                                                            <option value="Bạc Liêu">Bạc Liêu
                                                            <option value="Bắc Ninh">Bắc Ninh
                                                            <option value="Bến Tre">Bến Tre
                                                            <option value="Bình Định">Bình Định
                                                            <option value="Bình Dương">Bình Dương
                                                            <option value="Bình Phước">Bình Phước
                                                            <option value="Bình Thuận">Bình Thuận
                                                            <option value="Bình Thuận">Bình Thuận
                                                            <option value="Cà Mau">Cà Mau
                                                            <option value="Cao Bằng">Cao Bằng
                                                            <option value="Đắk Lắk">Đắk Lắk
                                                            <option value="Đắk Nông">Đắk Nông
                                                            <option value="Điện Biên">Điện Biên
                                                            <option value="Đồng Nai">Đồng Nai
                                                            <option value="Đồng Tháp">Đồng Tháp
                                                            <option value="Đồng Tháp">Đồng Tháp
                                                            <option value="Gia Lai">Gia Lai
                                                            <option value="Hà Giang">Hà Giang
                                                            <option value="Hà Nam">Hà Nam
                                                            <option value="Hà Tĩnh">Hà Tĩnh
                                                            <option value="Hải Dương">Hải Dương
                                                            <option value="Hậu Giang">Hậu Giang
                                                            <option value="Hòa Bình">Hòa Bình
                                                            <option value="Hưng Yên">Hưng Yên
                                                            <option value="Khánh Hòa">Khánh Hòa
                                                            <option value="Kiên Giang">Kiên Giang
                                                            <option value="Kon Tum">Kon Tum
                                                            <option value="Lai Châu">Lai Châu
                                                            <option value="Lâm Đồng">Lâm Đồng
                                                            <option value="Lạng Sơn">Lạng Sơn
                                                            <option value="Lào Cai">Lào Cai
                                                            <option value="Long An">Long An
                                                            <option value="Nam Định">Nam Định
                                                            <option value="Nghệ An">Nghệ An
                                                            <option value="Ninh Bình">Ninh Bình
                                                            <option value="Ninh Thuận">Ninh Thuận
                                                            <option value="Phú Thọ">Phú Thọ
                                                            <option value="Quảng Bình">Quảng Bình
                                                            <option value="Quảng Bình">Quảng Bình
                                                            <option value="Quảng Ngãi">Quảng Ngãi
                                                            <option value="Quảng Ninh">Quảng Ninh
                                                            <option value="Quảng Trị">Quảng Trị
                                                            <option value="Sóc Trăng">Sóc Trăng
                                                            <option value="Sơn La">Sơn La
                                                            <option value="Tây Ninh">Tây Ninh
                                                            <option value="Thái Bình">Thái Bình
                                                            <option value="Thái Nguyên">Thái Nguyên
                                                            <option value="Thanh Hóa">Thanh Hóa
                                                            <option value="Thừa Thiên Huế">Thừa Thiên Huế
                                                            <option value="Tiền Giang">Tiền Giang
                                                            <option value="Trà Vinh">Trà Vinh
                                                            <option value="Tuyên Quang">Tuyên Quang
                                                            <option value="Vĩnh Long">Vĩnh Long
                                                            <option value="Vĩnh Phúc">Vĩnh Phúc
                                                            <option value="Yên Bái">Yên Bái
                                                            <option value="Phú Yên">Phú Yên
                                                            <option value="Tp.Cần Thơ">Tp.Cần Thơ
                                                            <option value="Tp.Đà Nẵng">Tp.Đà Nẵng
                                                            <option value="Tp.Hải Phòng">Tp.Hải Phòng
                                                            <option value="Tp.Hà Nội">Tp.Hà Nội
                                                            <option value="TP  HCM">TP HCM
                                                        </select>
                                                    </div>

                                                    <div class="col-12 mb-20">
                                                        <label>Street address <span>*</span></label>
                                                        <input placeholder="House number and street name" type="text">
                                                    </div>
                                                    <div class="col-12 mb-20">
                                                        <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                                    </div>
                                                    <div class="col-12 mb-20">
                                                        <label>Town / City <span>*</span></label>
                                                        <input type="text">
                                                    </div>
                                                    <div class="col-12 mb-20">
                                                        <label>State / County <span>*</span></label>
                                                        <input type="text">
                                                    </div>
                                                    <div class="col-lg-6 mb-20">
                                                        <label>Số điện thoại<span>*</span></label>
                                                        <input type="text" >

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label> Email Address <span>*</span></label>
                                                        <input type="text">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="order-notes">
                                                <label for="order_note">Ghi chú cho shop</label>
                                                <textarea name="order_note" id="order_note" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                            </div>
                                        </div>
                                        <div class="order_button">
                                            <button type="submit">Cập nhật thông tin </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="checkout_form_right">
                                <form action="#">
                                    <h3>Chi tiết đơn hàng</h3>
                                    <div class="order_table table-responsive">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Sản phẩm</th>
                                                    <th>Tổng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php

                                            foreach ($cartList as $item)
                                            {
                                                    for ($i = 0; $i < count($cart); $i++) {
                                                        if ($item->ID == $cart[$i]['id']) {
                                                            $qty = $cart[$i]['num'];
                                                            break;
                                                    }

                                                }
                                                    echo '<tr>
                                                    <td>'.$item->ten_san_pham.'<strong> × '.$qty.'</strong></td>
                                                    <td> '.  number_format($qty * $item->don_gia,
                                                            0,',','.').'</td>
                                                </tr>';
                                            }


                                            ?>

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Tiền hàng</th>
                                                    <td><?= number_format($tong, 0,',','.') ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Phí ship</th>
                                                    <td><strong>$5.00</strong></td>
                                                </tr>
                                                <tr class="order_total">
                                                    <th>Tổng tiền</th>
                                                    <td><strong><?= number_format($tong, 0,',','.') ?></strong></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="payment_method">
                                        <div class="panel-default">
                                            <input id="payment" name="check_method" type="radio" data-target="createp_account" />
                                            <label for="payment" data-bs-toggle="collapse" data-bs-target="#method" aria-controls="method">Create an account?</label>

                                            <div id="method" class="collapse one" data-parent="#accordion">
                                                <div class="card-body1">
                                                    <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-default">
                                            <input id="payment_defult" name="check_method" type="radio" data-target="createp_account" />
                                            <label for="payment_defult" data-bs-toggle="collapse" data-bs-target="#collapsedefult" aria-controls="collapsedefult">PayPal <img src="assets/img/icon/papyel.png" alt=""></label>

                                            <div id="collapsedefult" class="collapse one" data-parent="#accordion">
                                                <div class="card-body1">
                                                    <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="order_button">
                                            <button type="submit">Proceed to PayPal</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Checkout page section end-->