<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('page-title')</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="./css/bootstrap.min.css">
		<link rel="stylesheet" href="./css/style.css">
		@yield('style.css')

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<section id="header">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="logo">&nbsp;</div>
					</div>
					<div class="col-md-8 navbar">
						<ul>
							<li><a href="#">Dự án</a></li>
							<li><a href="#">Concept</a></li>
							<li><a href="#">Profile</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<section id="content">
			<div class="container">
				@yield('content')
			</div>
		</section>

		<section id="footer">
			<div class="container">
				<h3>copyright © 2017 | @yield('Author')</h3>
			</div>
		</section>
		<!-- jQuery -->
		<script src="./js/jquery-3.2.1.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="./js/bootstrap.min.js"></script>
		<!-- Main js -->
		@yield('Mainjs')
	</body>
</html>