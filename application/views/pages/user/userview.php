<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.png')?>">
  <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/favicon.png')?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    نظام القبض والصرف
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'
  />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"
  />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

  <!-- Markazi Text font include just for persian demo purpose, don't include it in your project -->
  <link href="https://fonts.googleapis.com/css?family=Cairo&amp;subset=arabic" rel="stylesheet">

  <!-- CSS Files -->
  <link href="<?php echo base_url('assets/css/material-dashboard.css?v=2.1.0')?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/css/material-dashboard-rtl.css?v=1.1')?>" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<<?php echo base_url('assets/demo/demo.css')?>" rel="stylesheet" />

  <!-- Style Just for persian demo purpose, don't include it in your project -->
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
  <div class="sidebar" data-color="azure" data-background-color="white" data-image="<?php echo base_url('assets/img/sidebar-1.jpg') ?>">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <center>
        <img src="<?php echo base_url('asses/images/New Logo OCO-2.png')?>" width="150px"  alt="IMG">
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
          <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url('usercontroller/list')?>">
              <i class="material-icons">person</i>
              <p>المستخدمين</p>
            </a>
          </li>
          <li class="nav-item  ">
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
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false"
            aria-label="Toggle navigation">
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
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    آمارها
                  </p>
                </a>
              </li>
              
              <li class="nav-item dropdown">
                  <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
<a href="<?php echo base_url('recept_controller/create')?>" class="btn btn-success btn-round">اضافة مستخدم</a>
<a href="#pablo" class="btn btn-success btn-round">صلاحيات المتسخدمين </a>

        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-rose">
                  <h4 class="card-title ">المستخدمين  </h4>
                  <p class="card-category">جميع المستخدمين في نظام القبض والصرف </p>
                 
                </div>
                <div class="card-body">
                <input class="form-control" id="myInput" type="text" placeholder="..بحث">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-rose">
								<tr class="row100 head">
									<th class="cell100 column1">رقم المستخدم </th>
									<th class="cell100 column2"> اسم المستخدم</th>
									<th class="cell100 column3">البريدالاكتروني</th>
									<th class="cell100 column4">الصلاحية</th>
                  <th class="cell100 column5">الهاتف</th>
                  <th class="cell100 column5">الاجرائات</th>
								</tr>
							</thead>

							<tbody  id="myTable">
              <?php foreach ($user as $users): ?>
								<tr class="row100 body">
									<td class="cell100 column1"> <?php echo $users['user_id'] ?></td>
									<td class="cell100 column2"><?php echo $users['username'] ?></td>
									<td class="cell100 column3"><?php echo $users['email'] ?></td>
									<td class="cell100 column4"></td>
									<td class="cell100 column5"><?php echo $users['password'] ?></td>
                <td class="cell100 column5"> 
                  <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm" >
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="view" class="btn btn-success btn-link btn-sm" data-toggle="modal" data-target="#myModal">
                                <i class="material-icons">visibility</i>
                              </button></td>
                </tr>	
                <?php endforeach ?>

								
                <tbody> 
						</table>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
   <!-- The Modal -->
   <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">عرض السند</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
      <center>
      <img src="<?php echo base_url('asses/images/haed.jpg')?>" width="700px"  alt="IMG">
        <table style="width: 400px;" border="0">
<tbody>
<tr>

<td style="padding-left: 30px; width: 532.4px;">
<h2 style="text-align: center;  font-family:'Droid Arabic Naskh', serif; line-height:60px; ">سند صرف (للصندوق)</h2>
</td>
</tr>
</tbody>
</table>
  </center>
<table align="left">
<tbody>
<tr>
<td>
<br>
<br>
<p class="text-left">:الرقم</p>
<p style="">:التاريخ</p>
</td>
</tr>
</tbody>

</table>
<Br>
<Br>
<table style="width: 564.4px;">
<tbody>
<tr>
<td style="width: 557.4px;">
<p style="text-align: right;">اسم المستفيد</p>
<p style="text-align: right;">عنوان المستفيد</p>
</td>
</tr>
</tbody>
</table>
<center>
<table style="width: 586px;" border="1">
<tbody>
<tr>
<td style="width: 445px;" rowspan="2">
<h3 style="font-family: 'Lateef', serif; line-height:60px; font-size:30px" align="center" >البيــــــــــــــــــــــــان</h3>
</td>
<td style="width: 168px; text-align: center;" colspan="2">
<h3>المبلغ</h3>
</td>
</tr>
<tr>
<td style="width: 76px;">&nbsp;</td>
<td style="width: 92px;">&nbsp;</td>
</tr>
<tr>
<td style="width: 445px;">البان1</td>
<td style="width: 76px;">السعر</td>
<td style="width: 92px;">البيان3</td>
</tr>
<tr>
<td style="width: 445px;">&nbsp;</td>
<td style="width: 76px;">&nbsp;</td>
<td style="width: 92px;">&nbsp;</td>
</tr>
</tbody>
</table>
  </center>
  <h5 style="text-align: right;"><strong>المبلغ بالحروف</strong></h5>
  <center>
  <table style="height: 64px;" border="1" width="586px">
<tbody>
<tr>
<td style="width: 180.8px; text-align: center;">رقم الشيك/ التحويل</td>
<td style="width: 182.4px; text-align: center;">تاريخ الشيك/ التحويل</td>
<td style="width: 183.2px; text-align: center;">مسحوب على /بنك</td>
</tr>
<tr>
<td style="width: 180.8px;">&nbsp;</td>
<td style="width: 182.4px;">&nbsp;</td>
<td style="width: 183.2px;">&nbsp;</td>
</tr>
</tbody>
</table>
<br>
<br>
<table border="0" style="height: 20px; width: 100%; border-collapse: collapse;">
<tbody>
<tr style="height: 20px;">
<td style="width: 33.3333%; height: 20px; text-align: center;"><strong>اعده&nbsp;</strong></td>
<td style="width: 33.3333%; height: 20px; text-align: center;"><strong>تصديق المالي</strong></td>
<td style="width: 33.3333%; height: 20px; text-align: center;"><strong>المراجعة والتدقيق</strong></td>
</tr>
</tbody>
</table>
</center>
<div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  

    <!--   Core JS Files   -->
   
    <script src=" <?php echo base_url('assets/js/core/jquery.min.js')?>" type="text/javascript"></script>
    <script src=" <?php echo base_url('assets/js/core/popper.min.js')?>" type="text/javascript"></script>
    <script src=" <?php echo base_url('assets/js/core/bootstrap-material-design.min.js')?>" type="text/javascript"></script>
    <script src=" <?php echo base_url('assets/js/plugins/perfect-scrollbar.jquery.min.js')?>"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chartist JS -->
    <script src=" <?php echo base_url('assets/js/plugins/chartist.min.js')?>"></script>
    <!--  Notifications Plugin    -->
    <script src=" <?php echo base_url('assets/js/plugins/bootstrap-notify.js')?>"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src=" <?php echo base_url('assets/js/material-dashboard.min.js?v=2.1.0')?>" type="text/javascript"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src=" <?php echo base_url('assets/demo/demo.js')?>"></script>
    <script>
      $(document).ready(function () {
        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();

      });
    </script>
				
</body>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</html>