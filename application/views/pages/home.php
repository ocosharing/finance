<!--===============================================================================================-->	
<link rel="icon" type="image/png" href=" <?php echo base_url('asses/images/icons/favicon.ico')?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asses/vendor/bootstrap/css/bootstrap.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asses/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asses/vendor/animate/animate.css')?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asses/vendor/css-hamburgers/hamburgers.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asses/vendor/select2/select2.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asses/css/util.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asses/css/main.css')?>">
<!--===============================================================================================-->
</head>

<body class="">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?php echo base_url('asses/images/New Logo OCO-1.png')?>" alt="IMG">
				</div>
				
				<form class="login100-form validate-form" action="<?php echo base_url('login_con/login'); ?>" method="post">
				<span class="login100-form-title">
						<h1>نظام الصرف والقبض </h1>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="number" name="id" placeholder="الرقم الوظيفي">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "كلمة المرور مطلوبة">
						<input class="input100" type="password" name="pass" placeholder="كلمة المرور">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							تسجيل دخول</button>
							
					</div>
					<?php if(isset($errors)) {?>
							<h6><?= $errors ?> </h6>
					<?php }?>
					<div class="text-center p-t-12">
						<span class="txt1">
							نسيت
						</span>
						<a class="txt2" href="#">
							كلمة المرور
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							الهيئة العمانية للأعمال الخيرية
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="<?php echo base_url('asses/vendor/jquery/jquery-3.2.1.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('asses/vendor/bootstrap/js/popper.js')?>"></script>
	<script src="<?php echo base_url('asses/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('asses/vendor/select2/select2.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('asses/vendor/tilt/tilt.jquery.min.js')?>"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('js/main.js')?>"></script>

</body>
</html>