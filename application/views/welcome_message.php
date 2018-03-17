
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
if(isset($_SESSION['user_email'])){
    include('layout/header_logined.php');
}else{
    include('layout/header.php');
}
?>
<!-- //header -->
<!-- Slider -->
<div class="slider">
    <ul class="rslides" id="slider">
        <li>
            <div class="w3ls-slide-text">
                <h3>Sell or Advertise anything online</h3>
                <a href="categories.html" class="w3layouts-explore-all">Browse all Categories</a>
            </div>
        </li>
        <li>
            <div class="w3ls-slide-text">
                <h3>Find the Best Deals Here</h3>
                <a href="categories.html" class="w3layouts-explore">Explore</a>
            </div>
        </li>
        <li>
            <div class="w3ls-slide-text">
                <h3>Lets build the home of your dreams</h3>
                <a href="real-estate.html" class="w3layouts-explore">Explore</a>
            </div>
        </li>
        <li>
            <div class="w3ls-slide-text">
                <h3>Find your dream ride</h3>
                <a href="bikes.html" class="w3layouts-explore">Explore</a>
            </div>
        </li>
        <li>
            <div class="w3ls-slide-text">
                <h3>The Easiest Way to get a Job</h3>
                <a href="jobs.html" class="w3layouts-explore">Find a Job</a>
            </div>
        </li>
    </ul>
</div>
<!-- //Slider -->
<!-- content-starts-here -->
<div class="main-content">
    <div class="w3-categories">
        <h3>All Category</h3>
        <div class="container" style="">
            <?php
            if( !empty($list) ) {
                foreach ($list as $list){
                    $__name=$list->cat_name;
                    ?>
                    <div class="col-md-2">
                        <div class="focus-grid w3layouts-boder2">
                            <a class="btn-8" href="categories.html#parentVerticalTab2">
                                <div class="focus-border">
                                    <div class="focus-layout">
                                        <div class="focus-image"><i class="fa fa-laptop"></i></div>
                                        <h4 class="clrchg"> <?php echo $list->cat_name ?></h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                <?php }} ?>
            <div class="clearfix"></div>

        </div>
    </div>
    <!-- most-popular-ads -->
    <div class="trending-ads">
        <div class="container">
            <!-- slider -->
            <div class="agile-trend-ads">
                <h2>Last Ads</h2>
                <ul id="flexiselDemo3">
                    <li>
                        <div class="col-md-3 biseller-column">
                            <a href="single.html">
                                <img src="images/p1.jpg" alt="" />
                                <span class="price">&#36; 450</span>
                            </a>
                            <div class="w3-ad-info">
                                <h5>There are many variations of passages</h5>
                                <span>1 hour ago</span>
                            </div>
                        </div>
                        <div class="col-md-3 biseller-column">
                            <a href="single.html">
                                <img src="images/p2.jpg" alt="" />
                                <span class="price">&#36; 399</span>
                            </a>
                            <div class="w3-ad-info">
                                <h5>Lorem Ipsum is simply dummy</h5>
                                <span>3 hour ago</span>
                            </div>
                        </div>
                        <div class="col-md-3 biseller-column">
                            <a href="single.html">
                                <img src="images/p3.jpg" alt="" />
                                <span class="price">&#36; 199</span>
                            </a>
                            <div class="w3-ad-info">
                                <h5>It is a long established fact that a reader</h5>
                                <span>8 hour ago</span>
                            </div>
                        </div>
                        <div class="col-md-3 biseller-column">
                            <a href="single.html">
                                <img src="images/p4.jpg" alt="" />
                                <span class="price">&#36; 159</span>
                            </a>
                            <div class="w3-ad-info">
                                <h5>passage of Lorem Ipsum you need to be</h5>
                                <span>19 hour ago</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="col-md-3 biseller-column">
                            <a href="single.html">
                                <img src="images/p5.jpg" alt="" />
                                <span class="price">&#36; 1599</span>
                            </a>
                            <div class="w3-ad-info">
                                <h5>There are many variations of passages</h5>
                                <span>1 hour ago</span>
                            </div>
                        </div>
                        <div class="col-md-3 biseller-column">
                            <a href="single.html">
                                <img src="images/p6.jpg" alt="" />
                                <span class="price">&#36; 1099</span>
                            </a>
                            <div class="w3-ad-info">
                                <h5>passage of Lorem Ipsum you need to be</h5>
                                <span>1 day ago</span>
                            </div>
                        </div>
                        <div class="col-md-3 biseller-column">
                            <a href="single.html">
                                <img src="images/p7.jpg" alt="" />
                                <span class="price">&#36; 109</span>
                            </a>
                            <div class="w3-ad-info">
                                <h5>It is a long established fact that a reader</h5>
                                <span>9 hour ago</span>
                            </div>
                        </div>
                        <div class="col-md-3 biseller-column">
                            <a href="single.html">
                                <img src="images/p8.jpg" alt="" />
                                <span class="price">&#36; 189</span>
                            </a>
                            <div class="w3-ad-info">
                                <h5>Lorem Ipsum is simply dummy</h5>
                                <span>3 hour ago</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="col-md-3 biseller-column">
                            <a href="single.html">
                                <img src="images/p9.jpg" alt="" />
                                <span class="price">&#36; 2599</span>
                            </a>
                            <div class="w3-ad-info">
                                <h5>Lorem Ipsum is simply dummy</h5>
                                <span>3 hour ago</span>
                            </div>
                        </div>
                        <div class="col-md-3 biseller-column">
                            <a href="single.html">
                                <img src="images/p10.jpg" alt="" />
                                <span class="price">&#36; 3999</span>
                            </a>
                            <div class="w3-ad-info">
                                <h5>It is a long established fact that a reader</h5>
                                <span>9 hour ago</span>
                            </div>
                        </div>
                        <div class="col-md-3 biseller-column">
                            <a href="single.html">
                                <img src="images/p11.jpg" alt="" />
                                <span class="price">&#36; 2699</span>
                            </a>
                            <div class="w3-ad-info">
                                <h5>passage of Lorem Ipsum you need to be</h5>
                                <span>1 day ago</span>
                            </div>
                        </div>
                        <div class="col-md-3 biseller-column">
                            <a href="single.html">
                                <img src="images/p12.jpg" alt="" />
                                <span class="price">&#36; 899</span>
                            </a>
                            <div class="w3-ad-info">
                                <h5>There are many variations of passages</h5>
                                <span>1 hour ago</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- //slider -->
    </div>
    <!-- most-popular-ads -->
    <div class="w3l-popular-ads">
        <h3>All Product </h3>
        <div class="container">

            <?php
            if( !empty($pro) ) {
                foreach ($pro as $list){
                    ?>
                    <div class="col-md-4 w3ls-portfolio-left bg-info" style="background: white" >
                        <div class="portfolio-img event-img" style="padding: 2px">
                            <img src="images/fa11.jpg" class="img-responsive" alt=""/>
                            <div class="over-image"></div>
                        </div>
                        <div class="portfolio-description" style="margin-top: -30px" >
                            <h4><a href="cars.html">All Product </a></h4>
                            <p>Phone :12345667 </p>
                            <p>Mail :12345667 </p>
                            <a href="cars.html">
                                <span>Explore</span>
                            </a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                <?php }} ?>


           <div class="col-sm-12" style="margin-top: 20px">
               <center> <a class="w3ls-ads btn btn-info" href="product/list_all_pro">View all Ads</a> </center>
           </div>

            <div class="clearfix"> </div>
        </div>
    </div>

    <!--partners-->
    <div class="w3layouts-partners">
        <h3>Our Partners</h3>
        <div class="container">
            <ul>
                <li><a href="#"><img class="img-responsive" src="images/p-1.png" alt=""></a></li>
                <li><a href="#"><img class="img-responsive" src="images/p-2.png" alt=""></a></li>
                <li><a href="#"><img class="img-responsive" src="images/p-3.png" alt=""></a></li>
                <li><a href="#"><img class="img-responsive" src="images/p-4.png" alt=""></a></li>
                <li><a href="#"><img class="img-responsive" src="images/p-5.png" alt=""></a></li>
                <li><a href="#"><img class="img-responsive" src="images/p-6.png" alt=""></a></li>
                <li><a href="#"><img class="img-responsive" src="images/p-7.png" alt=""></a></li>
                <li><a href="#"><img class="img-responsive" src="images/p-8.png" alt=""></a></li>
                <li><a href="#"><img class="img-responsive" src="images/p-9.png" alt=""></a></li>
                <li><a href="#"><img class="img-responsive" src="images/p-10.png" alt=""></a></li>
            </ul>
        </div>
    </div>
    <!--//partners-->
    <!-- mobile app -->
    <div class="agile-info-mobile-app">
        <div class="container">
            <div class="col-md-5 w3-app-left">
                <a href="mobileapp.html"><img src="images/app.png" alt=""></a>
            </div>
            <div class="col-md-7 w3-app-right">
                <h3>Resale App is the <span>Easiest</span> way for Selling and buying second-hand goods</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor Sed bibendum varius euismod. Integer eget turpis sit amet lorem rutrum ullamcorper sed sed dui. vestibulum odio at elementum. Suspendisse et condimentum nibh.</p>
                <div class="agileits-dwld-app">
                    <h6>Download The App :
                        <a href="#"><i class="fa fa-apple"></i></a>
                        <a href="#"><i class="fa fa-windows"></i></a>
                        <a href="#"><i class="fa fa-android"></i></a>
                    </h6>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //mobile app -->
</div>
<!--footer section start-->

<?php
include("layout/footer.php");
include("layout/js.php");
?>
</body>
</html>