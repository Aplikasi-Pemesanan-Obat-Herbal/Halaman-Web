<!DOCTYPE html>
<head>
<title>Login</title>
  <link rel="icon" href="IMG/Logo1.png" type="IMG/Logo1.png">
</head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#login-form').submit(function(e) {
                e.preventDefault();
                
                var username = $('#username').val();
                var password = $('#password').val();

                $.ajax({
                    url: '/login',
                    method: 'POST',
                    data: JSON.stringify({ username: username, password: password }),
                    contentType: 'application/json',
                    success: function(response) {
                        alert(response.message);
                    },
                    error: function(error) {
                        alert('Maaf Terjadi masalah');
                    }
                });
            });
        });
    </script>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="login-layout blur-login" style="background-image: url('IMG/logobackground.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;" >//backround login
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<span class="red">TOKO HERBAL</span>
									<span class="white" id="id-text2">LOGIN</span>
								</h1>
							</div>

							<div class="space-8"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main" style="background-color: #c0c0c0">
										<center>
										<img src="IMG/iconlogin.png" alt="Logo" align="center"  height="100" width="100">	
											<h4 class="header white lighter bigger">
												Login
											</h4>
										</center>
											<div class="space-6"></div>

											<form action="" method="post">
												<fieldset>
												  <span class="error" style="color:red"><?php  if(isset($_GET['code'])) echo "Anda berhasil logout!" ?><?php  if(isset($errorall)) echo $errorall ?><?php  if(isset($errorusername)) echo "* ".$errorusername ?></span>
            
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" style="background-color: gray" name="username" placeholder="Email/username" value="<?php if(isset($_POST['username'])) echo $_POST['username'] ?>" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>
														<span class="error" style="color:red"><?php if(isset($errorpassword)) echo "* ".$errorpassword ?></span>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" style="background-color: gray"name="password" placeholder="Password" value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													
													<div class="clearfix">
													
														<center>
														<button type="submit" class="width-35 btn btn-sm btn-success" >
														
															<span class="bigger-110">Masuk</span>
														</button>
														</center>
														<p>
													</div>
													
													<center>
														<button class="width-35 btn btn-sm btn-success" > 
														
															<a href="Registrasi.php" style="color:white;">Daftar</a>	
														</button>
														</center>

													<div class="space-4"></div>
												</fieldset>
											</form>

									
										</div><!-- /.widget-main -->
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

							<!-- /.forgot-box -->

							<!-- /.signup-box -->
							</div><!-- /.position-relative -->

						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery.2.1.1.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->

	

		<!-- inline scripts related to this page -->
	
	</body>
</html>
