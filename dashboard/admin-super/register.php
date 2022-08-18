<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-green register-page">
<div class="register-box">
	<div class="register-logo">
		<b class="text-success">Imo Tourism</b>
	</div>

	<div class="register-box-body">
		<p class="register-box-msg">Admin sign up</p>

		<form action="#" method="POST">
			<div class="form-group has-feedback">
				<input type="text" class="form-control" name="fullname" placeholder=" Fullname" required autofocus>
				<span class="glyphicon glyphicon-user form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input type="email" class="form-control" name="email" placeholder=" Email" required autofocus>
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password" placeholder=" Password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
			<div class="row">
				<div class="col-lg-4 ol-xs-12">
					<button type="submit" class="btn btn-success btn-block btn-flat" name="register"><i class="fa fa-sign-in"></i> Sign Up</button>
				</div>
			</div>
            <div class="row">
                <div class="text-center">
                    <p>Already have an account? <a href="login.php">Sign in</a></p>
                </div>
            </div>
		</form>
	</div>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>