<!DOCTYPE html>
<html>
<head>
	<!-- Jquery -->
	<script src="./lib/js/jquery-2.1.1.min.js"></script>
	<script src="./lib/js/jquery-ui-1.10.4.min.js"></script>

	<!-- Main document -->
	<link href="./css/index.css" rel="stylesheet" type="text/css">
	<script src="./js/index.js"></script>
	
	<!-- Bootstrap -->
	<link href="./lib/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<script src="./lib/js/bootstrap.min.js" type="text/javascript"></script>
	
	<title>
		Planespotting
	</title>
</head>
<body>

<div id="wrapper">
	<nav class="navbar-inverse navbar-default navbar-static-top" role="navigation">
		<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">SPOT ON</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
						<ul class="dropdown-menu login">
							<ul class="nav navbar-nav navbar-right">
								<form class="navbar-form navbar-right" role="search">
									<div class="form-group">
										<div class="input-group">
										  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
										  <input type="text" class="form-control" name="username" placeholder="Username">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
											<input type="password" class="form-control" name="password" placeholder="Password">
										</div>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary">Sign In</button>
										<button type="submit" class="btn btn-default"><a href="./password.php" class="forgot">Forgot password?</a></button>
									</div>
								</form>
							</ul>
						</ul>
					</li>
				</ul>
				<form class="navbar-form navbar-left" role="search"></form>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<div id="content">
		<div class="jumbotron">
			<div class="container">
				<h1>Planespotting!</h1>
				<h2><small>Gotta spot 'em all</small></h2>
				
				<p><a class="btn btn-primary btn-lg" role="button">Sign up</a></p>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="./images/plane1.jpg" alt="Plane 1">
					<div class="caption">
				<h3>Plane 1</h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
				<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			  </div>
			</div>
		  </div>
			<div class="col-sm-6 col-md-3">
			<div class="thumbnail">
			  <img src="./images/plane2.jpg" alt="Plane 2">
			  <div class="caption">
				<h3>Plane 2</h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
				<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			  </div>
			</div>
		  </div>
			<div class="col-sm-6 col-md-3">
			<div class="thumbnail">
			  <img src="./images/plane3.jpg" alt="Plane 3">
			  <div class="caption">
				<h3>Plane 3</h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
				<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			  </div>
			</div>
		  </div>
			<div class="col-sm-6 col-md-3">
			<div class="thumbnail">
			  <img src="./images/plane4.jpg" alt="Plane 4">
			  <div class="caption">
				<h3>Plane 4</h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
				<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			  </div>
			</div>
		  </div>
		</div>

		<div class="inline-form">
			<div class="thumbnail stats">
			<ul class="list-inline">
				<li>
					<span>275</span>
					<h3>Planes</h3>
				</li>
				<li>
					<span id="carriers">354</span>
					<h3>Planes</h3>
				</li>
				<li>
					<span id="airplanes">186</span>
					<h3>Planes</h3>
				</li>
			</ul>
			</div>
		</div>
	</div>

	<div id="footer">
	  <div class="container">
		<p class="text-muted credit">Created by <a href="#" class="navbar-link">Thijs Smudde</a>.</p>
	  </div>
	</div>
</div>
<script>

</script>

</body>
</html>