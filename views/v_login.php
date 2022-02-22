
<?php
var_dump($_SESSION);
if(isset($_SESSION['messege']))
{
    echo '<script>alert("'.$_SESSION['messege'].'")</script>';
    unset($_SESSION['messege']);
}
?>
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.php">Trang chủ</a></li>
                        <li>My account</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!-- customer login start -->
<div class="login_page_bg">
    <div class="container">
        <div class="customer_login">
            <div class="row">
                <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form login">
                        <h2>login</h2>
                        <form action="" method="post">
                            <p>
                                <label style="width: 400px;">Username|| email<span>*</span></label>
                                <input required autocomplete="true" type="text" name = "Username" autocomplete="off" style="width: 250px;">
                            </p>
                            <p>
                                <label style="width: 200px;">Mật khẩu <span>*</span><label>
                                <input required autocomplete="true" type="password" name = "Password" style="width: 250px;" >
                            </p>
                            <div class="login_submit">
                                <a href="#">Quên mật khẩu</a>
                                <label for="remember">
                                    <input id="remember" name = "remember" type="checkbox">
                                   Nhớ tài khoản và mật khẩu
                                </label>
                                <button type="submit" name="login">Đăng nhập</button>

                            </div>

                        </form>
                    </div>
                </div>
                <!--login area start-->

                <!--register area start-->
                <!--register area end-->
            </div>
        </div>
    </div>
</div>
