<?php include 'header.php'?>

<div class="login-container">

	<div class="login-box animated fadeInDown">
		<div class="login-logo">TrocDeal</div>
		<div class="login-body">
			<div class="login-title">
				<strong>Log In</strong> to your account
			</div>
	        <?php if (isset($error) && $error): ?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">
					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
				</button>
				<strong>Error!</strong> Incorrect Username or Password!
			</div>				
	        <?php endif; ?>

	        <?php echo form_open('login/login_user', array('class' => 'form-horizontal'))?>

				<div class="form-group">
				<div class="col-md-12">
					<input id="email" name="email" type="text" class="form-control"
						placeholder="E-mail" />
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-12">
					<input id="password" name="password" type="password"
						class="form-control" placeholder="Password" />
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-6">
					<a href="#" class="btn btn-link btn-block">Forgot your password?</a>
				</div>
				<div class="col-md-6">
					<button type="submit" name="submit" class="btn btn-info btn-block">Log
						In</button>
				</div>
			</div>
			<div class="login-or">OR</div>
			<div class="form-group">
				<div class="col-md-4">
					<button class="btn btn-info btn-block btn-twitter">
						<span class="fa fa-twitter"></span> Twitter
					</button>
				</div>
				<div class="col-md-4">
					<button class="btn btn-info btn-block btn-facebook">
						<span class="fa fa-facebook"></span> Facebook
					</button>
				</div>
				<div class="col-md-4">
					<button class="btn btn-info btn-block btn-google">
						<span class="fa fa-google-plus"></span> Google
					</button>
				</div>
			</div>
			<div class="login-subtitle">
				Don't have an account yet? <a href="#">Create an account</a>
			</div>
			<div class="login-subtitle">
				<p>
					<strong>Admin user email:</strong> admin@example.com
				</p>
				<p>
					<strong>Team 1 user email:</strong> bb@example.com
				</p>
				<p>
					<strong>Team 2 user email:</strong> jj@example.com
				</p>
				<p>The password for each user is 'password'</p>
				<p>The database is reset every night.</p>
			</div>
			</form>
		</div>
		<div class="login-footer">
			<div class="pull-left">&copy; 2014 AppName</div>
			<div class="pull-right">
				<a href="#">About</a> | <a href="#">Privacy</a> | <a href="#">Contact
					Us</a>
			</div>
		</div>
	</div>

</div>

<!--
<div class="container">

	<div class="row">
		<div class="span4 offset4 well">

			<legend>Please Sign In</legend>

        <?php if (isset($error) && $error): ?>
          <div class="alert alert-error">
				<a class="close" data-dismiss="alert" href="#">×</a>Incorrect
				Username or Password!
			</div>
        <?php endif; ?>

        <?php echo form_open('login/login_user')?>

        <input type="text" id="email" class="span4" name="email"
				placeholder="Email Address"> <input type="password" id="password"
				class="span4" name="password" placeholder="Password">
			<button type="submit" name="submit" class="btn btn-info btn-block">Sign
				in</button>

			</form>
		</div>
	</div>

	<div class="row">
		<div class="span6 offset4">
			<p>
				<strong>Admin user email:</strong> admin@example.com
			</p>
			<p>
				<strong>Team 1 user email:</strong> bb@example.com
			</p>
			<p>
				<strong>Team 2 user email:</strong> jj@example.com
			</p>
			<p>The password for each user is 'password'</p>
			<p>The database is reset every night.</p>
		</div>
	</div>
</div>
  -->
  
<?php include 'footer.php' ?>