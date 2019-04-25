<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        نظام القبض والصرف
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <!-- Markazi Text font include just for persian demo purpose, don't include it in your project -->
    <link href="https://fonts.googleapis.com/css?family=Cairo&amp;subset=arabic" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- CSS Files -->
    <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
    <link href="../assets/css/dataTables.min.css" rel="stylesheet" />
    <link href="../assets/css/material-dashboard-rtl.css?v=1.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    <style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .h1,
    .h2,
    .h3,
    .h4 {
        font-family: "Cairo";
    }
    </style>
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="azure" data-background-color="white"
            data-image="<?php echo base_url('assets/img/sidebar-1.jpg') ?>">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <center>
                    <img src="<?php echo base_url('asses/images/New Logo OCO-2.png')?>" width="100px" alt="IMG">
                </center>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('dashborde')?>">
                            <i class="material-icons">dashboard</i>
                            <p>لوحة التحكم</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo base_url('usercontroller/list')?>">
                            <i class="material-icons">person</i>
                            <p>المستخدمين</p>
                        </a>
                    </li>
                    <li class="nav-item active ">
                        <a class="nav-link" href="<?php echo base_url('list_controller/shows')?>">
                            <i class="material-icons">content_paste</i>
                            <p>سند صرف</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="./typography.html">
                            <i class="material-icons">library_books</i>
                            <p>سند قبض</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="./icons.html">
                            <i class="material-icons">bubble_chart</i>
                            <p>اصدار شيكات</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="./map.html">
                            <i class="material-icons">location_ons</i>
                            <p>التقارير</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo base_url('login_con/logout') ?>">
                            <i class="material-icons">notifications</i>
                            <p>تسجيل خروج</p>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="#pablo">لوحة التحكم</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <form class="navbar-form">
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="بحث">
                                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                    <i class="material-icons">search</i>
                                    <div class="ripple-container"></div>
                                </button>
                            </div>
                        </form>
                        <ul class="navbar-nav">


                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">person</i>
                                    <p class="d-lg-none d-md-block">
                                        Account
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                    <a class="dropdown-item" href="#">الملف الشخصي</a>
                                    <a class="dropdown-item" href="#">الضبط</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">تسجيل خروج</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="content">
                <a href="<?php echo base_url('recept_controller/create')?>" class="btn btn-primary btn-round">اضافة
                    سند</a>
                <a href="#pablo" class="btn btn-primary btn-round">السندات الموافقه </a>
                <a href="<?php echo base_url('recept_controller/not_apprvel_recept')?>"
                    class="btn btn-primary btn-round">السندات المرفوضه </a>
                <a href="#pablo" class="btn btn-primary btn-round">السندات تحت الاجراء </a>
                <a href="#pablo" class="btn btn-primary btn-round">السندات المحذوفه </a>
                <a href="<?php echo base_url('list_controller/settings')?>" class="btn btn-primary btn-round">لوحة
                    التحكم بالسندات </a>
                  <?php  if(isset($succ)){ ?>
                    <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <span>
                      <b> <?php echo $succ ?> </b></span>
                  </div>
                  <?php  } ?>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">الصندوق</h4>
                                <p class="card-category">الصناديق التابعه للسند الصرف</p>
                                <p align="left"><a href="#pablo" class="btn btn-secondary btn-round" data-toggle="modal"
                                        data-target="#myModal">إضافة صندوق </a></p>
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table table-hover" id="boxtable">
                                    <thead class="text-warning">
                                        <center>
                                            <th>رقم الصندوق</th>
                                            <th> اسم الصندوق</th>
                                            <th>الاجرائات</th>
                                        </center>
                                    </thead>
                                    <tbody>
                                        <?php foreach($box as $boxs){ ?>
                                        <tr>
                                            <td><?php  echo $boxs['rec_type_id']; ?></td>
                                            <td><?php  echo $boxs['rec_type_name']; ?></td>
                                            <td><button type="button" rel="tooltip" title="تعديل الصندوق"
                                                    class="btn btn-primary btn-link btn-sm">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="حذف الصندوق"
                                                    class="btn btn-primary btn-link btn-sm">
                                                    <i class="material-icons">delete</i>
                                                </button></td>
                                        </tr>
                  <?php } ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="card">
                            <div class="card-header card-header-rose">
                                <h4 class="card-title">البنك</h4>
                                <p class="card-category">البنوك التابعه للسند الصرف</p>
                                <p align="left"><a href="#pablo" class="btn btn-secondary btn-round" id="bank"
                                        data-toggle="modal" data-target="#y">إضافة بنك </a></p>
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-warning">
                                        <th>رقم البنك </th>
                                        <th>اسم البنك</th>
                                        <th>رقم حساب البنك</th>
                                        <th>الفرع</th>
                                        <th>SWIFT CODE</th>
                                        <th>الاجرائات</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>بنك مسقط</td>
                                            <td> 150033564542122</td>
                                            <td> فرع مطرح</td>
                                            <td> BQ33330000</td>
                                            <td>
                                                <button type="button" rel="tooltip" title="تعديل البنك"
                                                    class="btn btn-primary btn-link btn-sm">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="حذف البنك"
                                                    class="btn btn-primary btn-link btn-sm">
                                                    <i class="material-icons">delete</i>
                                                </button>

                                            </td>
                                        </tr>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="y">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">اضافة بنك جديد</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">اسم البنك</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">رقم الحساب</label>
                                        <input type="number" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">الفرع</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">SWIFT CODE</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">تابع للصندوق</label>
                                        <div>
                                            <select class="form-control" name="box">
                                                <option>يرجى اختيار الصندوق</option>
                                                <option>eCommerce Bussiness</option>
                                                <option>UI/UX Design</option>
                                                <option>Online Services</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-rose pull-left">اضافة
                        <button type="button" class="btn btn-default" data-dismiss="modal">الغاء</button>

                </div>

            </div>
        </div>
    </div>
    </div>
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">اضافة صندوق جديد</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="card-body">
                    <form method="POST" action="<?php echo base_url('recept_controller/create_box')?>">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">اسم الصندوق</label>
                                        <input type="text" class="form-control" name ="box_name">
                                    </div>
                                </div>

                            </div>
                       
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success pull-left">اضافة
                            <button type="button" class="btn btn-default" data-dismiss="modal">الغاء</button>
                            </form>
                    </div>

                </div>
            </div>
        </div>
        <!--   Core JS Files   -->

        <script src=" <?php echo base_url('assets/js/core/jquery.min.js')?>" type="text/javascript"></script>
        <script src=" <?php echo base_url('assets/js/core/popper.min.js')?>" type="text/javascript"></script>
        <script src=" <?php echo base_url('assets/js/core/bootstrap-material-design.min.js')?>" type="text/javascript">
        </script>
        <script src=" <?php echo base_url('assets/js/dataTables.min.js')?>" type="text/javascript"></script>
        <script src=" <?php echo base_url('assets/js/plugins/perfect-scrollbar.jquery.min.js')?>"></script>
        <!--  Google Maps Plugin    -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
        <!-- Chartist JS -->
        <script src=" <?php echo base_url('assets/js/plugins/chartist.min.js')?>"></script>
        <!--  Notifications Plugin    -->
        <script src=" <?php echo base_url('assets/js/plugins/bootstrap-notify.js')?>"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src=" <?php echo base_url('assets/js/material-dashboard.min.js?v=2.1.0')?>" type="text/javascript">
        </script>
        <!-- Material Dashboard DEMO methods, don't include it in your project! -->
        <script src=" <?php echo base_url('assets/demo/demo.js')?>"></script>
        <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();

        });
        </script>
</body>
<script>
$(document).ready(function() {
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });

  $('#boxtable').DataTable();
});
$(document).ready(function() {
    $('#boxtable').DataTable();
});



</html>