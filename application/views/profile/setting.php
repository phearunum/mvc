
<?php
$user_id=$this->session->userdata('user_id');
if(!$user_id){

    redirect('/login');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Elite Shoppy an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template |Men's :: w3layouts</title>
    <!--/tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <?php
    include ('layout/css.php');
    ?>
    <style>
        .affix {
            top: 20px;
            z-index: 9999 !important;
        }
        input[type=text], input[type=select], input[type=button] {

            border: none;

            text-decoration: none;
            margin: 4px 2px;

            height: 38px!important;
        }
    </style>

</head>
<body>


<!-- header-bot -->
<?php
if(isset($_SESSION['user_email'])){
    include('layout/header_logined.php');
}else{
    include('layout/header.php');
}

?>
<!-- //header-bot -->
<div class="w3layouts-breadcrumbs text-center">
    <div class="container">
        <span class="agile-breadcrumbs"><a href="/"><i class="fa fa-home home_1"></i></a> / <span>Profile </span></span>
    </div>
</div>
<?php
if( !empty($user) ) {
    foreach ($user as $u){
        ?>
        <!-- /banner_bottom_agile_info -->
        <div class="page-head_agile_info_w3l this-border-bottom this-blue" style="background-image: url('/upload/<?php echo $u->picture?>');
                background-position: center; background-size: cover; height: 280px">
            <div class="container" >
                <h3>
                    <img src="/images/fa11.jpg" class="img-responsive img-thumbnail" style="width: 100px">
                    <?php echo $u->dealer_fname?>
                </h3>

            </div>
        </div>

    <?php }} ?>
<div class="total-ads main-grid-border" style="margin-top: -30px">
    <div class="container">

        <div class="ads-grid">
            <div class="container this-center" >
                <div class="row">
                    <div class="col-sm-12" style="padding: 0px;color: white!important; background-color: #2FABE9">
                        <a href="/profile/ads">
                            <div class="col-sm-3  this-padding" style="height: 45px; border: 1px solid white">
                                <i class="fa fa-folder-open-o" style="font-size: 20px"></i> My Ads
                            </div>
                        </a>
                        <a href="/profile/chat">
                            <div class="col-sm-3 this-padding " style="height: 45px;border: 1px solid white">
                                <i class="fa fa-bell-o" style="font-size: 20px"></i> Notification
                            </div>
                        </a>
                        <a href="/profile/setting">
                            <div class="col-sm-3 this-padding this-white " style="height: 45px;border: 1px solid white">
                                <i class="fa fa-cog" style="font-size: 20px"></i> Setting
                            </div>
                        </a>

                        <div class="col-sm-3 this-padding " style="height: 45px;border: 1px solid white">
                            All Ads
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12" style="padding: 0px">

                        <div class=" this-border this-padding" style="text-align: left!important; border-radius: 0px">
                            <div class="" style="padding: 5px">
                                <div id="load_dealer">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="alert alert-info this-padding" style="height: 40px; cursor: pointer" id="show_info">

                                                <span class="glyphicon glyphicon-plus small"></span>

                                                <span class="glyphicon glyphicon-user"></span> Edit Profile
                                            </div>
                                        </div>
                                        <?php
                                        if( !empty($user) ) {
                                            foreach ($user as $u){

                                                ?>
                                                <form method="post" class="form-horizontal" id="dealerProfile" action="/user/update">
                                                    <div class="col-sm-6" id="info">

                                                        <label for="username">Account ID : <span class="required">*</span></label>
                                                        <input type="text" class="form-control" name="accID" value="<?php echo $u->dealer_id?>" required  readonly>

                                                        <p>
                                                            <label for="username">First Name: <span class="required">*</span></label>
                                                            <input type="text" class="form-control " name="fname" value="<?php echo $u->dealer_fname?>" required>
                                                        </p>
                                                        <p>
                                                            <label for="username">Last Name: <span class="required">*</span></label>
                                                            <input type="text" class="form-control " name="lname" value="<?php echo $u->dealer_lname?>" required>
                                                        </p>
                                                        <p>
                                                            <label for="username">Sex : <span class="required">*</span></label>
                                                            <select  name="sex" class="form-control" style="max-width: 300px">
                                                                <option value="<?php echo $u->dealer_sex?>" selected> <?php echo $u->dealer_sex?></option>
                                                                <option></option>
                                                                <option> Male</option>
                                                                <option> Female</option>
                                                                <option> Other</option>

                                                            </select>
                                                        </p>
                                                        <p>
                                                            <label for="username">Address : <span class="required">*</span></label>
                                                            <input type="text" class="form-control " name="adds" value="<?php echo $u->dealer_add?>" required>
                                                        </p>
                                                        <p>
                                                            <label for="username">Email  : <span class="required">*</span></label>
                                                            <input type="text" class="form-control " name="mail" value="<?php echo $u->dealer_email?>" >
                                                        </p>
                                                        <p>
                                                            <label for="username">Phone : <span class="required">*</span></label>
                                                            <input type="text" class="form-control " name="phone" value="<?php echo $u->phone?>" required>
                                                        </p>
                                                        <p class="auth-submit">
                                                        <div class="" style="float: left; margin-top: 10px">
                                                            <input type="submit" class="btn btn-info" value="Save" name="btn_update" id="btn_update" >
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
                                                        <br/>
                                                    </div>
                                                </form>

                                            <?php }} ?>
                                        <!--    end profile --->
                                        <div class="col-sm-12" style="margin-top: 10px">
                                            <div class="alert alert-success this-padding" style="height: 40px;cursor: pointer" id="store">
                                                <span class="glyphicon glyphicon-plus small"></span>
                                                <span class="glyphicon glyphicon-user"></span>  Store Infomation
                                            </div>
                                        </div>
                                        <?php

                                        foreach ($store as $s){

                                            ?>
                                            <?php echo form_open_multipart('user/setting');?>

                                            <div class="col-sm-6" id="store_show">
                                                <p>
                                                    <label for="username">Store Name  : <span class="required">*</span></label>
                                                    <input type="text" class="form-control input-sm" name="store_name" value="<?php echo $s->store_name ?>" required>
                                                </p>
                                                <p>
                                                    <label for="username">Store Number  : <span class="required">*</span></label>
                                                    <input type="text" class="form-control input-sm" name="store_number" value="<?php echo $s->store_number ?>" required>
                                                </p>
                                                <p style="margin-top: 10px;margin-bottom: 10px">
                                                    <label for="username">Banner  : <span class="required">*</span></label>
                                                <div class="span12 m-wrap" >
                                                    <img  id="blah" src="/asset/img/1140x580.png" class="img-responsive">
                                                </div>
                                                <input type="file"  name="picture" id="imgInp"  />
                                                </p>
                                                <br/>

                                                <p>
                                                    <label for="username">Abount  : <span class="required">*</span></label>
                                                    <textarea class="form-control" rows="3" name="note"><?php echo $s->store_note; ?></textarea>
                                                </p>
                                                <p class="auth-submit">
                                                <div class="" style="float: left; margin-top: 10px">
                                                    <input type="submit" class="btn btn-success" value="Save" name="btn_store" >
                                                </div>
                                                <div class="" style="float: right; position:relative; margin-top: -20px">
                                                    <center> <div id="mssg"></div></center>
                                                </div>
                                                </p>
                                            </div>

                                            <?php echo form_close(); ?>
                                        <?php } ?>
                                    </div>
                                    <br/>
                                    <form id="frm_pwd" method="post" action="/user/security">

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="alert alert-danger" style="height: 40px;padding: 8px;cursor: pointer" id="security">
                                                    <span class="glyphicon glyphicon-plus small"></span>
                                                    <span class="glyphicon glyphicon-cog"></span> Security

                                                </div>
                                            </div>
                                            <div class="col-sm-6" id="security_show">
                                                <input type="text" class="form-control input-sm" name="dear_id" value="17" required style="display: none">
                                                <p>
                                                    <label for="username">New Password : <span class="required">*</span></label>
                                                    <input type="password" class="form-control" name="pwd"  id="password" onkeyup='check_password();' >
                                                </p>
                                                <p>
                                                    <label for="username">Confirm Password  : <span class="required">*</span></label>
                                                    <input type="password" class="form-control" name="c_pwd"  id="confirm_password" onkeyup='check_password();'  >
                                                </p>
                                                <center> <span id='message_lrg'></span></center>

                                                <p class="auth-submit">
                                                <div class="" style="float: left; margin-top: 10px">
                                                    <input type="submit" class="btn btn-danger" value="Save" name="btn_security" >
                                                </div>
                                                <div class="" style="float: right; position:relative; margin-top: -20px">
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- footer -->

<!-- footer -->
<?php
include('layout/footer.php');
?>
<!-- //footer -->

<!-- login -->
<?php
include('layout/js.php');
?>
<script>
    $(document).ready(function(){
        $("#info").show();
        $("#store_show").hide();
        $("#security_show").hide();
        $("#show_info").click(function(){
            $("#info").toggle();
        });
        $("#store").click(function(){
            $("#store_show").toggle();
        });
        $("#security").click(function(){
            $("#security_show").toggle();
        });

        var password = document.getElementById("password")
            , confirm_password = document.getElementById("confirm_password");

        function validatePassword(){
            if(password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;

    });

</script>

<script type="text/javascript">
    document.getElementById("imgInp").onchange = function () {
        var reader = new FileReader();
        reader.onload = function (e) {
            // get loaded data and render thumbnail.
            document.getElementById("blah").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    };
</script>
</body>
</html>
