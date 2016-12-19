<!DOCTYPE html>
<html>
<head>
	<title>Review MATERI</title>
	<!-- memanggil/mengimport file css (eksternal css) -->
	<link rel="stylesheet" href="dist/css/bootstrap.min.css">

	<!-- memanggil/mengimport fils js (ekternal js) -->
	<script src="dist/js/jquery-3.1.1.min.js"></script>
	<script src="dist/js/bootstrap.min.js"></script>
	<script>
		$(function(){
			$('[data-toggle=tooltip]').tooltip();
		});
	</script>

</head>
<body style="padding-top: 70px;">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<!-- MEMBUAT ICON MENU RESPONSIVE -->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			    </button>
			    <!-- AKHIR ICON -->

				<a href="#" class="navbar-brand">Friedszone</a>
			</div>

			<!-- MEMBUAT MENU NAVIGASI -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="home.php" title="link to home" data-toggle="tooltip" data-placement="bottom">Home</a></li>
					<li><a href="contact.php" title="link to contact" data-toggle="tooltip" data-placement="bottom">Contact</a></li>
					<li><a href="about.php" title="link to about" data-toggle="tooltip" data-placement="bottom">About</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<!-- awal membuat dropdown menu setting -->
					<li class="dropdown">
			          	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Setting <span class="caret"></span></a>
			          	<ul class="dropdown-menu">
				            <li><a href="#">Edit Profil</a></li>
				            <li><a href="#">Privacy</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="#">Logout</a></li>
			          	</ul>
			        </li>  	
			        <!-- akhir dropdown menu -->
				</ul>
			</div>		
		</div>
	</nav>

	<div class="container">
		<!-- buat baris -->
		<div class="row">
			<!-- kotak 1 -->
			<div class="col-md-5 well">
				<h3>Sign In</h3><hr>
				
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" id="email" class="form-control" placeholder="email" >
						<p id="errorMail" style="color: red;"></p>
					</div>

					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" id="password" class="form-control" placeholder="password" >
						<p id="errorPass" style="color: red;"></p>
					</div>

					<button id="login" class="btn btn-info">
						<i class="glyphicon glyphicon-send"></i>
						Login
					</button>
				
			</div>
			<!-- akhir kotak 1 -->

			<!-- kotak 2 -->
			<div class="col-md-6 well" style="margin-left: 20px;">
				<h3>Sign Up</h3><hr>
				<form action="" method="POST">
					<div class="form-group">
						<label for="fullname">Fullname</label>
						<input type="text" name="fullname" id="fullname" class="form-control" placeholder="fullname" required="">
					</div>
					<div class="form-group">
						<label for="e-mail">Email</label>
						<input type="email" name="email" id="e-mail" class="form-control" placeholder="email" required="">
					</div>

					<div class="form-group">
						<label for="pass">Password</label>
						<input type="password" name="pass" id="pass" class="form-control" placeholder="password" required="">
					</div>
					<div class="form-group">
						<label for="repassword">Re-type Password</label>
						<input type="password" name="repassword" id="repassword" class="form-control" placeholder="re-type password" required="">
					</div>

					<div class="form-group">
						<label for="avatar">Avatar</label>
						<input type="file" accept=".jpg/ .png" class="form-control" id="avatar">
					</div>

					<button class="btn btn-success pull-right">
						<i class="glyphicon glyphicon-floppy-disk"></i>
						Register
					</button>
				</form>
			</div>
			<!-- akhir kotak 2 -->
		</div>
	</div>
</body>
</html>