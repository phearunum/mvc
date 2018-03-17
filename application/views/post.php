
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

<?php
if( !empty($user) ) {
    foreach ($user as $u){
        ?>
        <!-- /banner_bottom_agile_info -->
        <div class="page-head_agile_info_w3l">
            <div class="container">
                <h3>
                    <img src="images/t1.jpg" class="img-responsive img-thumbnail" style="width: 100px">
                    <?php echo $u->dealer_fname?>
                </h3>

            </div>
        </div>
    <?php }} ?>

        <div class="banner-bootom-w3-agileits" style="margin-top: -20px">
            <div class="container">
                <div class="this-container this-black this-padding">
                    <i class="fa fa-th"></i> <span>  CHOOSE CATEGORY  </span>
                </div>
                <br/>
                <div class="col-sm-4" style="padding: 0px; ">
                    <div class="list-group list-group-alternate" style="border-radius: 0px!important;">
                        <?php
                        foreach ($c as $c){
                            ?>
                            <a href="/post?Id=<?php echo $c->cat_id ?>" class="list-group-item" style="border-radius: 0px"><span class="badge"><i class="fa fa-angle-right"></i></span> <i class="ti ti-email"></i>
                                <span >+ <?php echo $c->cat_name; ?></span>
                            </a>

                        <?php }?>

                    </div>
                </div>
                <div class="col-sm-6 " style="border-left:1px solid silver; min-height: 500px">
                    <ol>
                        <?php
                        if(!empty($sub)){


                        foreach ($sub as $s){
                            ?>
                          <a href="/post/<?php  echo $s->sub_id ?>">
                              <li class="list-group-item1 this-padding" style="border-bottom: 1px solid silver">
                                  <?php echo $s->sub_name ?>
                              </li>
                          </a>

                        <?php    }}else{
                            echo "<h3> Choose Category</h3>";
                        }?>


                    </ol>
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
</body>
</html>
