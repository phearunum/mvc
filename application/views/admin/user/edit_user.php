<?php
$user_id=$this->session->userdata('user_id');
if(!$user_id){

    redirect('admin/login_view');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Admin </title>
    <?php
    include "admin_layout/css.php";
    ?>
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">

        <?php
        include ('admin_layout/aside.php');
        ?>

        <!-- top navigation -->
        <?php
        include ('admin_layout/header.php');
        ?>
        <!-- /top navigation -->

        <!-- page content -->
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>User Management </h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>

                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <?php
                                            if( !empty($edit) ) {
                                                foreach ($edit as $list){ ?>

                                <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/update'); ?>"  >
                                    <input type="text" name="ID" style="display: none" value="<?php echo $list->Admin_ID ?>">
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Photo <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input  class="form-control col-md-7 col-xs-12" name="photo" placeholder="First name" type="file" value="<?php echo $list->photo ?>">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">First Name <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input  class="form-control col-md-7 col-xs-12" name="fname" placeholder="First name" required="required" type="text" value="<?php echo $list->F_Name ?>">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Last Name <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input  class="form-control col-md-7 col-xs-12"
                                                    name="lname" placeholder="Last name" required="required"  type="text" value="<?php echo $list->L_Name ?>">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Gender  <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select class="form-control" style="width: 100px" name="sex">
                                                <option value="Male"> Male </option>
                                                <option value="Female"> Female</option>
                                                <option value="<?php echo $list->Sex ?>" selected> <?php echo $list->Sex ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Date Of Birth <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12 xdisplay_inputx form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left" id="single_cal4" value="<?php echo $list->DOB ?>" name="dob" placeholder="First Name" aria-describedby="inputSuccess2Status4">
                                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                            <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Address  <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input  class="form-control col-md-7 col-xs-12" data-validate-length-range="6" value="<?php echo $list->Address ?>"
                                                    data-validate-words="2" name="address" placeholder="Address ... " required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Phone   <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input  class="form-control col-md-7 col-xs-12" data-validate-length-range="6" value="<?php echo $list->Phone ?>"
                                                    data-validate-words="2" name="phone" placeholder="Phone ... " required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Email   <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input  class="form-control col-md-7 col-xs-12" data-validate-length-range="6" value="<?php echo $list->Email ?>"
                                                    data-validate-words="2" name="email" placeholder="Email ... " required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Description <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea  required="required" name="desc" class="form-control col-md-7 col-xs-12"><?php echo $list->Discription ?></textarea>
                                        </div>
                                    </div>

                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <button type="reset" class="btn btn-primary">Cancel</button>
                                            <input  type="submit" name="btn_save" class="btn btn-success" value="Update">

                                            <?php
                                            echo "<span class='label label-success'>";
                                            if (isset($error_message)) {
                                                echo $error_message;
                                            }
                                            echo validation_errors();
                                            echo "</span>";
                                            ?>
                                        </div>



                                    </div>
                                </form>
                                                <?php }} ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
        <!-- /page content -->

    </div>
</div>

<!-- jQuery -->
<?php
include ('admin_layout/js.php');
?>

</body>
</html>

