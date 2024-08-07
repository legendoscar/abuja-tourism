<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-green login-page">
<div class="login-box">
	<div class="login-logo">
		<b class="text-success">Imo Tourism</b>
	</div>

	<div class="login-box-body">
		<p class="login-box-msg">Admin sign in</p>

		<form action="#" method="POST">
			<div class="form-group has-feedback">
				<input type="email" class="form-control" name="username" placeholder=" Email" required autofocus>
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input type="password" class="form-control" name="password" placeholder=" Password" required>
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>
			<div class="row">
				<div class="col-lg-4 col-xs-12">
					<button type="submit" class="btn btn-success btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
				</div>
			</div>
			<div class="row">
                <div class="text-center">
                    <p>Don't have an account? <a href="register.php">Sign up</a></p>
                </div>
            </div>
		</form>
	</div>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>