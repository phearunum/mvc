
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
        <span class="agile-breadcrumbs"><a href="index.html"><i class="fa fa-home home_1"></i></a> / <span>Register Now </span></span>
    </div>
</div>
<!-- //breadcrumbs -->
<section>
    <div id="agileits-sign-in-page" class="sign-in-wrapper">
        <div class="agileinfo_signin" style="padding-top: -10px">
            <h3>Register</h3>
            <form method="post" class="from" action="/user/Do_register" >
                <div class="form-group">
                    <label for="username">First Name: <span class="required">*</span></label>
                    <input type="text" class="form-control " name="fname" required>

                    <label for="username">Last Name: <span class="required">*</span></label>
                    <input type="text" class="form-control " name="lname" required>

                    <label for="username">Sex : <span class="required">*</span></label>
                    <select class="from-control" name="sex" >
                        <option> Male</option>
                        <option> Female</option>
                        <option> Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="username">Address : <span class="required">*</span></label>
                    <input type="text" class="form-control " name="adds" required >
                </div>
                <div class="form-group">

                    <label for="username">Email  : <span class="required">*
                            <?php
                            echo "<span class='label label-warning'>";
                            if (isset($error_email)) {
                                echo $error_email;
                            }
                            echo validation_errors();
                            echo "</span>";
                            ?>
                           </span></label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="username">Phone : <span class="required">*</span>
                        <?php
                        echo "<span class='label label-warning'>";
                        if (isset($error_phone)) {
                            echo $error_phone;
                        }
                        echo validation_errors();
                        echo "</span>";
                        ?>
                    </label>
                    <input type="text" class="form-control " name="phone" required>
                </div>
                <div class="form-group">
                    <label for="password">Password: <span class="required">*</span></label>
                    <input type="password" name="pwd" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Confirm Password: <span class="required">*</span></label>
                    <input type="password" name="c_pwd" required class="form-control">
                </div>

                <p class="auth-submit">
                <div class="" >
                    <input type="submit" class="btn btn-default" value=">> Sig up >>" name="btn_create" >
                </div>
                <div class="" style="float: right; position:relative; margin-top: -20px">
                    <?php
                    echo "<span class='label label-success'>";
                    if (isset($error_message)) {
                        echo $error_message;
                    }
                    echo validation_errors();
                    echo "</span>";
                    ?>
                </div>
                </p>
            </form>

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