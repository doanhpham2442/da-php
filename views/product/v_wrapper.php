<!--shop wrapper start-->
<div class="row no-gutters shop_wrapper">
    <?php foreach ($product as $key => $value){ ?>
    <div class="col-lg-3 col-md-4 col-12 ">
        <article class="single_product">
            <figure>
                <div class="product_thumb">
                    <a class="primary_img" href="product-details.html"><img src="<?php echo $value->hinh_san_pham; ?>" alt=""></a>
<!--                    <a class="secondary_img" href="product-details.html"><img src="antomi/assets/img/product/product6.jpg" alt=""></a>-->
<!--                    <div class="label_product">-->
<!--                        <span class="label_sale">Sale</span>-->
<!--                    </div>-->
                    <div class="action_links">
                        <ul>
                            <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                            <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                            <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="product_content grid_content">
                    <div class="product_content_inner">
                        <h4 class="product_name"><a href="product-details.html"><?php echo $value->ten_san_pham; ?></a></h4>
                        <div class="product_rating">
                            <ul>
                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                            </ul>
                        </div>
                        <div class="price_box">
<!--                            <span class="old_price">$80.00</span>-->
                            <span class="current_price"><?php echo number_format($value->don_gia)." VNĐ"; ?></span>
                        </div>
                    </div>
                    <div class="add_to_cart">
                        <a href="cart.html" title="Add to cart">Add to cart</a>
                    </div>
                </div>
<!--                <div class="product_content list_content">-->
<!--                    <h4 class="product_name"><a href="product-details.html">Natus erro at congue massa commodo sit Natus erro</a></h4>-->
<!--                    <div class="product_rating">-->
<!--                        <ul>-->
<!--                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>-->
<!--                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>-->
<!--                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>-->
<!--                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>-->
<!--                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                    <div class="price_box">-->
<!--                        <span class="old_price">$80.00</span>-->
<!--                        <span class="current_price">$70.00</span>-->
<!--                    </div>-->
<!--                    <div class="product_desc">-->
<!--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>-->
<!--                    </div>-->
<!--                    <div class="add_to_cart">-->
<!--                        <a href="cart.html" title="Add to cart">Add to cart</a>-->
<!--                    </div>-->
<!--                    <div class="action_links">-->
<!--                        <ul>-->
<!--                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i> Add to Wishlist</a></li>-->
<!--                            <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i> Compare</a></li>-->
<!--                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i> quick view</a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
            </figure>
        </article>
    </div>
    <?php } ?>
</div>
<!--shop toolbar start-->
<div class="shop_toolbar t_bottom">
    <div class="pagination">
        <ul>
            <li class="current">1</li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li class="next"><a href="#">next</a></li>
            <li><a href="#">>></a></li>
        </ul>
    </div>
</div>
<!--shop toolbar end-->
<!--shop wrapper end-->
