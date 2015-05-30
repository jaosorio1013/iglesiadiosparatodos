<header id="header-1" class="header">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 header-info-wrapper">
				<ul class="list-inline">
					{{--<li><i class="icon-mobile-phone"></i> Teléfono: 278 2121</li>
					<li><i class="icon-envelope"></i> Email: <a href="mailto:icdpt@yahoo.es">icdpt@yahoo.es</a></li>--}}
					<li>
						<strong>
							2015: VIVIMOS POR LA FÉ.
						</strong>
					</li>
				</ul>
				<!-- /.list-inline -->
			</div>
			<!-- /.header-info-wrapper -->
			<div class="col-xs-12 col-sm-4 social-link-wrapper">
				<ul class="social-links">
					<li><a href="https://www.facebook.com/iglesiadiosparatodos" target="_blank"><i class="icon-facebook"></i></a></li>
					{{--<li><a href="#"><i class="icon-google-plus"></i></a></li>
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-pinterest"></i></a></li>
					<li><a href="#"><i class="icon-linkedin"></i></a></li>
					<li><a href="#"><i class="icon-dribbble"></i></a></li>--}}
				</ul>
				<!-- /.social-links -->
			</div>
			<!-- /.social-link-wrapper -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</header>
<!-- /.header-1 -->
<header id="header-2" class="header">
	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ route('home') }}" alt="ICDPT" style="padding: 5px 15px;">
					{{--Flat<span>Point.</span>--}}
					<img src="/assets/img/logo.png" class="hidden-xs" height="90px"/>
					<img src="/assets/img/logo-solo.png" class="visible-xs" height="90px"/>
				</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="{{ @$data['active']['home'] }}">
						<a href="{{ route('home') }}">Inicio</a>
					</li>
					<li class="{{ @$data['active']['about'] }}">
						<a href="{{ route('about') }}">Nosotros</a>
					</li>
					<li class="{{ @$data['active']['team'] }}">
						<a href="{{ route('team') }}">Lideres</a>
					</li>
					{{--<li class="{{ @$data['active']['blog'] }}">--}}
						{{--<a href="{{ route('blog') }}">Blog</a>--}}
					{{--</li>--}}
					<li class="{{ @$data['active']['contact'] }}">
						<a href="{{ route('contact') }}">Contacto</a>
					</li>
				</ul>
				<!-- /.nav -->
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>
	<!-- /.navbar -->
</header>
<!-- /#header-2 -->