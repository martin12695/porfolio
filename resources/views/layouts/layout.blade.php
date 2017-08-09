<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>KON | @yield('page-title')</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="/css/bootstrap.min.css">
		<link rel="stylesheet" href="/css/style.css">
		<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="@yield('customCss')">


		<!-- jQuery -->
		<script src="/js/jquery-3.2.1.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/libs.js"></script>

		<script src="./js/@yield('customJs')"></script>
		

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="loading">
			<div id="LoadingGif">&nbsp;</div>
		</div>
		<div id="menu" style="display: none;">
			<div id="menu_content">
				<div class="close-menu" id="closeMenuBtn">
					<i class="fa fa-remove"></i>
				</div>
				<ul>
					<li><a href="/">Project</a></li>
					<li><a href="./sketch">Sketch</a></li>
					<li><a href="./profile">Profile</a></li>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram"></i></a></li>
				</ul>
			</div>
		</div>
		<section id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-md-4">
						<div class="logo"><a href="/">&nbsp;</a></div>
					</div>
					<div class="col-md-8 navbar hidden-xs hidden-sm">
						<ul>
							<li><a href="/">Project</a></li>
							<li><a href="./sketch">Sketch</a></li>
							<li><a href="./profile">Profile</a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
					<div class="col-xs-4 visible-xs visible-sm xs-nav">
						<a href="javascript:void(0)" id="navBtn" >
							<span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
						</a>
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
				<h3>copyright © 2017 | Kon studio</h3>
			</div>
		</section>

		<div id="backtotop">
			<div class="up-arrow">&nbsp;</div>
		</div>

		<div id="imgDetail">
			<div class="closeImgDetail" id="imgDetailClose">
				<i class="fa fa-remove"></i>
			</div>
			<img src="">
		</div>

		<script>
			window.onload = function(){
				$('#loading').fadeOut();
			};
		</script>
		
		<!-- Main js -->
		@yield('Mainjs')
	</body>
</html>