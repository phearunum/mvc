
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
    <!-- Bootstrap -->
    <link href="/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
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
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table  id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th>#ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Sex</th>
                                                <th>Date</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th> Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            if( !empty($user_list) ) {
                                                foreach ($user_list as $list){
                                                    ?>
                                                    <tr>
                                                        <th><?php echo $list->Admin_ID ?></th>
                                                        <th><?php echo $list->F_Name ?></th>
                                                        <th><?php echo $list->L_Name ?></th>
                                                        <th><?php echo $list->Sex ?></th>
                                                        <th><?php echo $list->DOB ?></th>
                                                        <th><?php echo $list->Phone ?></th>
                                                        <th><?php echo $list->Email ?></th>
                                                        <th>
                                                            <a href="/admin/edit/<?php echo $list->Admin_ID ?>">
                                                                <span class="btn btn-default btn-sm" style="color: green" > Edit <span class="glyphicon glyphicon-edit"></span> </span>
                                                            </a>
                                                            <span class="btn btn-default btn-sm" style="color: red" data-toggle="modal" data-target="#<?php echo $list->Admin_ID; ?>"> Delete <span class="glyphicon glyphicon-trash"></span> </span>
                                                        </th>
                                                    </tr>

                                                    <div class="modal fade bs-example-modal-sm" id="<?php echo $list->Admin_ID; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm">
                                                            <div class="modal-content">

                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                                                    </button>
                                                                    <h5 class="modal-title" id="myModalLabel2">Do you want to delete user -> <?php echo $list->F_Name ?> <- ?</h5>
                                                                </div>

                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    <a href="<?=base_url()?>admin/del/<?php echo $list->Admin_ID ?>">
                                                                        <button type="button" class="btn btn-danger">Delete</button>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                <?php }} ?>


                                            </tbody>
                                        </table>


                                    </div>
                                </div>




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
<!-- jQuery -->
<script src="/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="/vendors/nprogress/nprogress.js"></script>
<!-- iCheck -->
<script src="/vendors/iCheck/icheck.min.js"></script>
<!-- Datatables -->
<script src="/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="/vendors/jszip/dist/jszip.min.js"></script>
<script src="/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="/vendors/pdfmake/build/vfs_fonts.js"></script>

<!-- Custom Theme Scripts -->
<script src="/build/js/custom.min.js"></script>



</body>
</html>

