
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
                    <img src="<?=base_url()?>images/t1.jpg" class="img-responsive img-thumbnail" style="width: 100px">
                    <?php echo $u->dealer_fname?>
                </h3>

            </div>
        </div>
    <?php }} ?>

<div class="banner-bootom-w3-agileits" style="margin-top: -20px">
    <div class="container">
        <div class="this-container this-black this-padding">
            <i class="fa fa-th"></i> <span>  CHOOSE CATEGORY  > POST </span>
        </div>
        <br/>
       <div class="col-sm-12">
           <div class="col-lg-2"></div>
           <div class="col-lg-8 " style="margin-bottom: 20px">
               <form class="form-horizontal" id="frm_posting" method="post" enctype="multipart/form-data">
                   <div class="row">
                       <p>
                       <div class="input">
                           <label class="col-form-label"> Titel :</label>
                           <input type="text" class="form-control" name="titel" style="100%!important;" required>
                       </div>

                       </p>
                       <p>
                       <div class="input">
                           <label class="col-form-label"> Subcategory : </label>
                           <select class="form-control" name="cat" id="country-list"  onChange="getState(this.value);" required >
                               <option> Select Type :</option>
                               <option value="1"> អាវយឺត T-Shirt </option>
                               <option value="2"> អាវក្រៅ Jacket </option>
                               <option value="3"> រ៉ូប​ Dress </option>
                               <option value="4"> អាវក្រៅ Jacket </option>
                               <option value="5"> សំពត់ Skirt </option>
                               <option value="6"> ឈុតគូស្នេហ៍ Lover</option>
                               <option value="7"> ខូវប៊យ Jeans </option>
                               <option value="8"> ខោជើងខ្លី Shorts </option>
                               <option value="9"> ខោអាវធ្វើការ Working </option>
                               <option value="10"> ខោអាវក្នុង​ Bra & Panties </option>
                           </select>
                       </div>
                       </p>

                       <p>
                       <div class="input">
                           <label class="col-form-label"> Price : </label>
                           <input type="text" class="form-control" name="price" required >
                       </div>
                       </p>
                       <p>
                       <div class="input">
                           <label class="col-form-label"> Description : </label><br/>
                           <textarea class="form-control" rows="8" name="desc" required></textarea>
                       </div>
                       </p>
                       <p>
                       <div class="input">
                           <label class="col-form-label"> Photo : </label><br/>
                           <div class="well" style="background-color: white">
                               <div class="row" >

                                   <div class="col-xs-4 col-sm-3" >
                                       <img src="../asset/img/addphoto.png" class="img-responsive" id="img1" style="position: absolute;width: 130px;height: 100px;">
                                       <input type="file" width="100px" style="width: 130px;height: 100px; background-image: url('../asset/img/addphoto.png'); position: relative;opacity: 0;
                                                    cursor: pointer" id="imgImg1" accept="image/x-png,image/gif,image/jpeg" name="img1">
                                   </div>
                                   <div class="col-xs-4 col-sm-3" >
                                       <img src="../asset/img/addphoto.png" class="img-responsive" id="img2" style="position: absolute;width: 130px;height: 100px;">
                                       <input type="file" width="100px" style="width: 130px;height: 100px; background-image: url('../asset/img/addphoto.png'); position: relative;opacity: 0;
                                                    cursor: pointer" id="imgImg2" accept="image/x-png,image/gif,image/jpeg" name="img2">
                                   </div>
                                   <div class="col-xs-4 col-sm-3" >
                                       <img src="../asset/img/addphoto.png" class="img-responsive" id="img3" style="position: absolute;width: 130px;height: 100px;">
                                       <input type="file" width="100px" style="width: 130px;height: 100px; background-image: url('../asset/img/addphoto.png'); position: relative;opacity: 0;
                                                    cursor: pointer" id="imgImg3" accept="image/x-png,image/gif,image/jpeg" name="img3">
                                   </div>
                                   <div class="col-xs-4 col-sm-3" >
                                       <img src="../asset/img/addphoto.png" class="img-responsive" id="img4" style="position: absolute;width: 130px;height: 100px;">
                                       <input type="file" width="100px" style="width: 130px;height: 100px; background-image: url('../asset/img/addphoto.png'); position: relative;opacity: 0;
                                                    cursor: pointer" id="imgImg4" accept="image/x-png,image/gif,image/jpeg"  name="img4" >
                                   </div>
                                   <div class="col-xs-4 col-sm-3" >
                                       <img src="../asset/img/addphoto.png" class="img-responsive" id="img5" style="position: absolute;width: 130px;height: 100px;">
                                       <input type="file" width="100px" style="width: 130px;height: 100px; background-image: url('../asset/img/addphoto.png'); position: relative;opacity: 0;
                                                    cursor: pointer" id="imgImg5" accept="image/x-png,image/gif,image/jpeg" name="img5">
                                   </div>
                                   <div class="col-xs-4 col-sm-3" >
                                       <img src="../asset/img/addphoto.png" class="img-responsive" id="img6" style="position: absolute;width: 130px;height: 100px;">
                                       <input type="file" width="100px" style="width: 130px;height: 100px; background-image: url('../asset/img/addphoto.png'); position: relative;opacity: 0;
                                                    cursor: pointer" id="imgImg6" accept="image/x-png,image/gif,image/jpeg" name="img6">
                                   </div>
                                   <div class="col-xs-4 col-sm-3" >
                                       <img src="../asset/img/addphoto.png" class="img-responsive" id="img7" style="position: absolute;width: 130px;height: 100px;">
                                       <input type="file" width="100px" style="width: 130px;height: 100px; background-image: url('../asset/img/addphoto.png'); position: relative;opacity: 0;
                                                    cursor: pointer" id="imgImg7" accept="image/x-png,image/gif,image/jpeg" name="img7">
                                   </div>
                                   <div class="col-xs-4 col-sm-3" >
                                       <img src="../asset/img/addphoto.png" class="img-responsive" id="img8" style="position: absolute;width: 130px;height: 100px;">
                                       <input type="file" width="100px" style="width: 130px;height: 100px; background-image: url('../asset/img/addphoto.png'); position: relative;opacity: 0;
                                                    cursor: pointer" id="imgImg8" accept="image/x-png,image/gif,image/jpeg" name="img8">
                                   </div>

                               </div>

                           </div>
                       </div>
                       </p>
                       <p>
                       <div class="input">
                           <label class="col-form-label"> Your Store Number : </label>
                           <input type="text" class="form-control" name="storeID" value="17" required readonly style="display: none" >
                           <input type="text" class="form-control" name="storeNumber" value="001" required readonly >
                       </div>
                       </p>
                       <p>
                       <br/>
                       <div class="input">
                           <button type="submit" class="btn " style="background-color: #ff8900; color: white"> POST NOW </button>
                           <button class="btn btn-danger" type="reset"> Exit </button>
                       </div>
                       </p>


                   </div>
               </form>
           </div>



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
