
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li>shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--shop  area start-->
<div class="shop_area shop_reverse">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <!--sidebar widget start-->
                <aside class="sidebar_widget">
                    <div class="widget_list widget_categories">
                        <h3>Loại sản phẩm</h3>
                        <ul>
                            <!--                            <li><a href="#">Cameras & Camcoders</a></li>-->
                            <!--                            <li class="widget_sub_categories"><a href="javascript:void(0)">Computer & Networking</a>-->
                            <!--                                <ul class="widget_dropdown_categories">-->
                            <!--                                    <li><a href="#">Computer</a></li>-->
                            <!--                                    <li><a href="#">Networking</a></li>-->
                            <!--                                </ul>-->
                            <!--                            </li>-->
                            <!--                            <li><a href="#">Games & Consoles</a></li>-->
                            <!--                            <li><a href="#">Headphone & Speaker</a></li>-->
                            <!--                            <li><a href="#">Movies & Video Games</a></li>-->
                            <!--                            <li><a href="#">Smartphone</a> </li>-->
                            <!--                            <li><a href="#">Uncategorized</a></li>-->
                            <?php
                            foreach ($types as $key => $value) {
                                echo '<li><a href="?type=' . $value->ID . '">' . $value->ten_loai_san_pham . '</a></li>';
                            }
                            ?>
                            ?>
                        </ul>
                    </div>
                    <div class="widget_list widget_filter">
                        <h3>Filter by price</h3>
                        <form action="#">
                            <div id="slider-range"></div>
                            <button type="submit">Filter</button>
                            <input type="text" name="text" id="amount"/>

                        </form>
                    </div>
                    <div class="widget_list">
                        <h3>Compare Products</h3>
                        <div class="recent_product_container">
                            <article class="recent_product_list">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                    src="public/assets/img/product/product9.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                    src="public/assets/img/product/product10.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4><a href="product-details.html">Aliquam lobortis pellentesque</a></h4>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="old_price">$70.00</span>
                                            <span class="current_price">$65.00</span>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                            <article class="recent_product_list">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                    src="public/assets/img/product/product11.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                    src="public/assets/img/product/product12.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4><a href="product-details.html">Convallis quam sit vitae sodales</a></h4>
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
                                            <span class="old_price">$70.00</span>
                                            <span class="current_price">$65.00</span>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                            <article class="recent_product_list">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img
                                                    src="public/assets/img/product/product14.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img
                                                    src="public/assets/img/product/product13.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h4><a href="product-details.html">Cillum dolore nisl fermentum</a></h4>
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
                                            <span class="old_price">$70.00</span>
                                            <span class="current_price">$65.00</span>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                    </div>
                    <div class="widget_list tags_widget">
                        <h3>Product tags</h3>
                        <div class="tag_cloud">
                            <a href="#">blouse</a>
                            <a href="#">clothes</a>
                            <a href="#">fashion</a>
                            <a href="#">handbag</a>
                            <a href="#">laptop</a>
                        </div>
                    </div>
                </aside>
                <!--sidebar widget end-->
            </div>
            <div class="col-lg-9 col-md-12">

                <!--shop banner area start-->
                <div class="shop_banner_area mb-30">
                    <div class="shop_banner_area mb-30">
                        <div class="row">
                            <div class="col-12">
                                <div class="shop_banner_thumb">
                                    <img src="public/assets/img/bg/banner16.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--shop banner area end-->
                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper">
                        <div class="shop_toolbar_btn">
                            <button data-role="grid_4" type="button" class=" active btn-grid-4" data-toggle="tooltip"
                                    title="4"></button>
                            <button data-role="grid_list" type="button" class="btn-list" data-toggle="tooltip"
                                    title="List"></button>
                        </div>
                        <div class=" ">
                            <button onclick="getData()">Click ne</button>
                            <form class="" id="orderbyForm" action="" method="post" name="orderbyForm">
                                <select name="orderby" id="orderby" class="form-select"
                                        onchange="getData()">

                                    <!--                                <option selected value="1">Sắp xếp theo đánh giá người dùng</option>-->
                                    <option value="ngay_tao" selected>Sắp xếp theo</option>
                                    <option value="luot_xem">Sắp xếp theo độ phổ biến</option>
                                    <option value="ngay_tao">Sắp xếp theo mới nhất</option>
                                    <option value="don_gia DESC">Sắp xếp theo giá : cao đến thấp</option>
                                    <option value="don_gia ">Sắp xếp theo giá : thấp đến cao</option>
                                </select>
                            </form>


                        </div>

                        <div class="page_amount">
                            <p>Xem <?= ($start + 1) . "-" . ($start + MAX_NUMBER) ?> trên <?= MAX_NUMBER ?> kết quả</p>
                        </div>
                    </div>
                    <!--shop toolbar end-->

                    <!--shop wrapper start-->
                    <div class="row no-gutters shop_wrapper">
                        <?php
                        foreach ($products as $key => $value) {
                            ?>

                            <div class="col-lg-3 col-md-4 col-12 ">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product_details.php?id=<?= $value->ID ?>"><img
                                                        src="<?= $value->hinh_san_pham ?>" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img
                                                        src="public/assets/img/product/product6.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale</span>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html"
                                                                            data-tippy-placement="top"
                                                                            data-tippy-arrow="true"
                                                                            data-tippy-inertia="true"
                                                                            data-tippy="Add to Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i></a></li>
                                                    <li class="compare"><a href="#" data-tippy-placement="top"
                                                                           data-tippy-arrow="true"
                                                                           data-tippy-inertia="true"
                                                                           data-tippy="Add to Compare"><i
                                                                    class="ion-ios-settings-strong"></i></a></li>
                                                    <li class="quick_button"><a href="#" data-tippy-placement="top"
                                                                                data-tippy-arrow="true"
                                                                                data-tippy-inertia="true"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#modal_box"
                                                                                data-tippy="quick view"><i
                                                                    class="ion-ios-search-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="product_content grid_content">
                                            <div class="product_content_inner">
                                                <h4 class="product_name"><a
                                                            href="product_details.php?id=<?= $value->ID ?>"><?= $value->ten_san_pham ?></a>
                                                </h4>
                                                <div class="product_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="price_box">
                                                    <span class="old_price"><?= $value->don_gia - 10 ?></span>
                                                    <span class="current_price"><?= number_format($value->don_gia, 0, ".", ",") ?></span>
                                                </div>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="Add to cart">Add to cart</a>
                                            </div>
                                        </div>
                                        <div class="product_content list_content">
                                            <h4 class="product_name"><a href="product-details.html">Natus erro at congue
                                                    massa commodo sit Natus erro</a></h4>
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
                                                <span class="old_price">$80.00</span>
                                                <span class="current_price">$70.00</span>
                                            </div>
                                            <div class="product_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                                    posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed
                                                    sit amet sem vitae urna fringilla tempus.</p>
                                            </div>
                                            <div class="add_to_cart">
                                                <a href="cart.html" title="Add to cart">Add to cart</a>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.html"
                                                                            title="Add to Wishlist"><i
                                                                    class="ion-android-favorite-outline"></i> Add to
                                                            Wishlist</a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i
                                                                    class="ion-ios-settings-strong"></i> Compare</a>
                                                    </li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal"
                                                                                data-target="#modal_box"
                                                                                title="quick view"><i
                                                                    class="ion-ios-search-strong"></i> quick view</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </figure>
                                </article>
                            </div>

                            <?php
                        }
                        ?>


                    </div>

                    <div class="shop_toolbar t_bottom">
                        <div class="pagination">
                            <ul>
                                <?php
                                $before = false;
                                $after = false;
                                if ($page > 1) {
                                    echo '<li><a href="shop.php?page=' . ($page - 1) . '">Trước</li>';
//                                echo '<li onclick="MyFunt('.($page-1).')" >Trước</li>';
                                }
                                $indexAvailable = array(1, 2, $page, $page + 1, $page + 2, $max_page - 2, $max_page - 1, $max_page);
                                for ($i = 1; $i < $max_page + 1; $i++) {
                                    if (in_array($i, $indexAvailable)) {


                                        if ($i == $page) {
                                            echo '<li ><a class="current" >' . $i . '</li>';
//                                        echo '<li onclick="MyFunt('.$i.')" class="current" ><a>'.$i.'</a></li>';

                                        } else {
                                            echo '<li ><a href="?page=' . $i . '&search=' . $search . '">' . $i . '</li>';
//
//                                        echo '<li onclick="MyFunt('.$i.')" ><a>'.$i.'</a></li>';


                                        }
                                        if (!$before && $page > 2) {
                                            echo '<li><a href="?page=' . ($page + 2) . '&search=' . $search . '">...</li>';
//                                        echo '<li onclick="MyFunt('.($page+2).')" ><a>...</a></li>';

                                            $before = true;
                                        }
                                        if (!$after && $page < $max_page) {
                                            echo '<li><a href="?page=' . ($page - 2) . '&search=' . $search . '">...</li>';
//                                        echo '<li onclick="MyFunt('.($page-2).')" >...</li>';
                                            $after = true;
                                        }


                                    }

                                }
                                if ($page < $max_page) {
                                    echo '<li><a href="shop.php?page=' . ($page + 1) . '&search=' . $search . '">Sau</li>';
//                                echo '<li onclick="MyFunt('.($page+1).')" >...</li>';

                                }

                                ?>

                            </ul>
                        </div>
                    </div>
                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        // $('#submit_search').on('click', function(e) {
        //     e.preventDefault(); // Now nothing will happen
        // });
        function MyFunt(page) {
            console.log(page);
            $.get("shop.php", {'page': page}, function (data) {
                // console.log(data);
                location.reload();
            })
        }

        function Search(search) {
            $.get('', {
                    'asdasd': search,
                }, function (data) {
                    console.log("ksajdjsadasd");

                }
            );
        }
    </script>
