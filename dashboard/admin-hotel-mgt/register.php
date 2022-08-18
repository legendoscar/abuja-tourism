<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-green register-page">
<div class="register-box">
	<div class="register-logo">
		<b class="text-success">Imo Tourism</b>
	</div>

	<div class="register-box-body">
		<p class="register-box-msg">Hotel Admin sign up</p>

		<form action="#" method="POST">
			<div class="form-group has-feedback">
                <label for="hname">Hotel name</label>
				<input type="text" class="form-control" id="hname" name="hname" placeholder=" Hotel name" required autofocus>
				<span class="glyphicon glyphicon-hotel form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
                <label for="fullname">Fullname</label>
				<input type="text" class="form-control" id="fullname" name="fullname" placeholder=" Fullname" required autofocus>
				<span class="glyphicon glyphicon-user form-control-feedback"></span>
			</div>
            <div class="form-group has-feedback">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder=" Email" required>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <label for="phone">Phone</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder=" Phone" required>
                <span class="glyphicon glyphicon-phone form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder=" Password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="register-box-">
                    <label for="agree">
                        <input type="checkbox" name="agree" id="agree">
                            I agree to terms & policy
                    </label>
                </div>
            </div>
			<div class="row">
				<div class="col-lg-4 col-xs-12">
					<button type="submit" class="btn btn-success btn-block btn-flat" name="register"><i class="fa fa-lock"></i> Sign Up</button>
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