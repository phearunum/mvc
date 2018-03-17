
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
<div class="total-ads main-grid-border" style="margin-top: -20px">
    <div class="container" style="padding: 0px">

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
                                    <div class="col-sm-3 this-padding " style="height: 45px;border: 1px solid white">
                                        <i class="fa fa-cog" style="font-size: 20px"></i> Setting
                                    </div>
                                </a>

                                <div class="col-sm-3 this-padding " style="height: 45px;border: 1px solid white">
                                    All Ads
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
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
                                        <div class="col-sm-6" style="padding: 0px">
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
                                        <div class="col-sm-6" style="padding: 0px" >
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
