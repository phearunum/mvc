
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Resale_v2 a Classified ads Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <?php
    include("layout/css.php");
    ?>
    <!-- meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //meta tags -->
    <!--fonts-->
    <link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!--//fonts-->
</head>
<body>
<!-- Navigation -->
<div class="agiletopbar">
    <div class="wthreenavigation">
        <?php
        include("layout/navbar.php");
        ?>
    </div>
    <div class="clearfix"></div>
</div>
<!-- //Navigation -->
<!-- header -->
<?php
include("layout/header.php");
?>
<!-- //header -->
<!-- breadcrumbs -->
<div class="w3layouts-breadcrumbs text-center">
    <div class="container">
        <span class="agile-breadcrumbs"><a href="index.html"><i class="fa fa-home home_1"></i></a> / <span>Login Account</span></span>
    </div>
</div>
<!-- //breadcrumbs -->
<section>
    <div id="agileits-sign-in-page" class="sign-in-wrapper">
        <div class="agileinfo_signin">
            <h3>Sign In</h3>
            <form method="post" action="/user/Do_login" >
                <input type="email" name="user_email" placeholder="Your Email" required="">

                <input type="password" name="user_password" placeholder="Password" required="">
                <input type="submit" value="Login" name="btn_create">
                <?php
                echo "<span class='label label-warning'>";
                if (isset($error_msg)) {
                    echo $error_msg;
                }
                echo validation_errors();
                echo "</span>";
                ?>
                <?php
                echo "<span class='label label-success'>";
                if (isset($error_message)) {
                    echo $error_message;
                }
                echo validation_errors();
                echo "</span>";
                ?>

                <div class="forgot-grid">
                    <div class="forgot">
                        <a href="#" data-toggle="modal" data-target="#myModal2">Forgot Password?</a>
                    </div>
                    <!-- Modal -->

                    <div class="clearfix"> </div>
                </div>
            </form>
            <h6> Not a Member Yet? <a href="/register">Sign Up Now</a> </h6>
        </div>
    </div>
    <div class="modal fade" id="myModal2" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="w3ls-password">Get Password</h3>
                        <p class="get-pw">Enter your email address below and we'll send you an email with instructions.</p>
                        <form action="#" method="post">
                            <input type="text" class="user" name="email" placeholder="Email" required="">
                            <input type="submit" value="Submit" >
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
include("layout/footer.php");
include("layout/js.php");
?>
</body>
</html>