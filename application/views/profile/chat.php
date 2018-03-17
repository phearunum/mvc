
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
        .input[type=text], input[type=select], input[type=button],select {

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
        <div class="page-head_agile_info_w3l this-border-bottom" style="height: 300px;">
            <div class="container">
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

            <div class="agileinfo-ads-display col-md-12">
                <div class="wrapper">
                    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist" style="border-radius: 0px!important;">
                            <li role="presentation" class="active">
                                <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                                    <span class="text">All Ads</span>
                                </a>
                            </li>

                            <li role="presentation">
                                <a href="#samsa" role="tab" id="samsa-tab" data-toggle="tab" aria-controls="samsa">
                                    <span class="text">Notification</span>
                                </a>
                            </li>
                            <li role="presentation" class="next">
                                <a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                    <span class="text">Setting </span>
                                </a>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content" style="border: 0px!important;">
                            <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                <div>
                                    <div id="container">
                                        <div class="sort">
                                            <div class="sort-by">
                                                <label>Sort By : </label>
                                                <select>
                                                    <option value="">Most recent</option>
                                                    <option value="">Price: Rs Low to High</option>
                                                    <option value="">Price: Rs High to Low</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>

                                        <ul class="list">
                                            <div class="col-sm-6">
                                                <a href="single.html">
                                                    <li>
                                                        <img src="images/m13.jpg" title="" alt="" />
                                                        <section class="list-left">
                                                            <h5 class="title">looked up one of the more obscure Latin words</h5>
                                                            <span class="adprice">$599</span>
                                                            <p class="catpath">Mobile Phones » Brand</p>
                                                        </section>
                                                        <section class="list-right">
                                                            <span class="date">Today, 17:02</span>
                                                            <span class="cityname">City name</span>
                                                        </section>
                                                        <div class="clearfix"></div>
                                                    </li>
                                                    <div class="clearfix"></div>
                                                </a>
                                            </div>
                                            <div class="col-sm-6">
                                                <a href="single.html">
                                                    <li>
                                                        <img src="images/m13.jpg" title="" alt="" />
                                                        <section class="list-left">
                                                            <h5 class="title">looked up one of the more obscure Latin words</h5>
                                                            <span class="adprice">$599</span>
                                                            <p class="catpath">Mobile Phones » Brand</p>
                                                        </section>
                                                        <section class="list-right">
                                                            <span class="date">Today, 17:02</span>
                                                            <span class="cityname">City name</span>
                                                        </section>
                                                        <div class="clearfix"></div>
                                                    </li>
                                                    <div class="clearfix"></div>
                                                </a>
                                            </div>
                                        </ul>

                                    </div>
                                    <ul class="pagination pagination-sm">
                                        <li><a href="#">Prev</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">6</a></li>
                                        <li><a href="#">7</a></li>
                                        <li><a href="#">8</a></li>
                                        <li><a href="#">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-sm-12" style="padding: 0px">

                                        <div class="well">
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
                                                            <?php echo form_open_multipart('store/save');?>

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
                                                                <input type="file"  name="picture"  />
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
                                                    <form id="frm_pwd">

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
                                                                    <input type="text" class="form-control input-sm" name="pwd" >
                                                                </p>
                                                                <p>
                                                                    <label for="username">Confirm Password  : <span class="required">*</span></label>
                                                                    <input type="text" class="form-control input-sm" name="c_pwd" >
                                                                </p>
                                                                <p class="auth-submit">
                                                                <div class="" style="float: left; margin-top: 10px">
                                                                    <input type="submit" class="btn btn-danger" value="Save" >
                                                                </div>
                                                                <div class="" style="float: right; position:relative; margin-top: -20px">
                                                                    <center> <div id="mssg"></div></center>
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

                            <div role="tabpanel" class="tab-pane fade" id="samsa" aria-labelledby="samsa-tab">

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

    });

</script>





</body>
</html>
