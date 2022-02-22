<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.php">home</a></li>
                        <li>Giỏ hàng</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--shopping cart area start -->
<div class="cart_page_bg">
    <div class="container">
        <div class="shopping_cart_area">
            <form action="#">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="cart_page table-responsive">
                                <table>
                                    <thead>
                                    <tr>
                                        <th class="product_remove">Xóa </th>
                                        <th class="product_thumb">Ảnh</th>
                                        <th class="product_name">Sản phẩm</th>
                                        <th class="product-price">Giá</th>
                                        <th class="product_quantity">Số lượng</th>
                                        <th class="product_total">Tổng</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php if (isset($cartList)) {

                                        foreach ($cartList as $item) {
                                            for ($i = 0; $i < count($cart); $i++) {
                                                if ($item->ID == $cart[$i]['id']) {
                                                    $so_luong = $cart[$i]['num'];
                                                }
                                            }


                                    ?>
                                            <tr>
                                                <td class="product_remove"><a href="javascript:void(0)"><i class="fa fa-trash-o" id="removeFromCart"
                                                                                      onclick="DeleteFromCart(<?= $item->ID ?>)"></i></a>
                                                </td>
                                                <td class="product_thumb"><a href="#"><img
                                                                src="<?= $item->hinh_san_pham ?>" alt=""></a></td>
                                                <td class="product_name"><a href="#"></a><?= $item->ten_san_pham ?></td>
                                                <td class="product-price"><?= number_format($item->don_gia, 0, ',', '.') ?></td>
                                                <td class="product_quantity">
                                                    <input min="1" max="100" value="<?=  $so_luong ?>" type="number" id ="quantity<?= $item->ID ?>">
                                                    <!--</label> <input min="1" max="100" value="" type="number"></td>-->
                                                <td class="product_total"> <?= number_format($so_luong * $item->don_gia, 0, ',', '.') ?>   </td>
                                            </tr>
                                            <?php


                                        }
                                    } ?>


                                    </tbody>
                                </table>
                            </div>

                            <div class="cart_submit">
                                <button type="submit" onclick="UpdateCart()">Cập nhật giỏ hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area start-->
                <div class="coupon_area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code left">
                                <h3>Coupon</h3>
                                <div class="coupon_inner">
                                    <p>Enter your coupon code if you have one.</p>
                                    <input placeholder="Coupon code" type="text">
                                    <button type="submit">Apply coupon</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code right">
                                <h3>Tổng giỏ hàng</h3>
                                <div class="coupon_inner">
                                    <div class="cart_subtotal">
                                        <p>Tiền hàng</p>
                                        <p class="cart_amount">£215.00</p>
                                    </div>
                                    <div class="cart_subtotal ">
                                        <p>Phí ship</p>
                                        <p class="cart_amount"><span>Flat Rate:</span> £255.00</p>
                                    </div>
                                    <a href="#">Tính toán phí ship</a>

                                    <div class="cart_subtotal">
                                        <p>Tổng</p>
                                        <p class="cart_amount">£215.00</p>
                                    </div>
                                    <div class="checkout_btn">
                                        <a href="check_out.php">Xử lý thanh toán</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area end-->
            </form>
        </div>
    </div>
</div>

