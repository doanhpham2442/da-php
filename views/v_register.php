<?php
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

                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form register">
                        <h2>Register</h2><span style="color: red"><?= $error ?></span>
                        <form name="myForm" action="" method="post" onsubmit="return validateForm()">
                            <p>
                                <label>Tên đăng nhập<span>*</span></label>
                                <input type="text" name ="username" required>
                            </p>
                            <p>
                                <label>Mật khẩu<span>*</span></label>
                                <input type="password" name ="password" required>
                            </p>
                            <p>
                                <label>Nhập lại mật khẩu<span>*</span></label>
                                <input type="password" name ="repassword" required>
                            </p>
                            <p>
                                <label>Email <span>*</span></label>
                                <input type="text" name = "email" required>
                            </p>
                            <div class="login_submit">
                                <button type="submit" name="register" id="register">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--register area end-->
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function validateForm() {
        let username = document.forms["myForm"]["username"].value;
        let password = document.forms["myForm"]["password"].value;
        let repassword = document.forms["myForm"]["repassword"].value;
        let email = document.forms["myForm"]["email"].value;


        if (password != repassword) {
            alert("Mật khẩu không trùng khớp");
            return false;
        }
        return  true;



    }


</script>
