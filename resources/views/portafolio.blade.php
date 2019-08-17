@extends('layoutFrontend.app')

@section('title')
<title>Portafolio | Techmell Spa</title>
@endsection

@section('content')

	@section('header')
				<li><a href="{{url('/')}}">Inicio</a></li>
				<li><a href="{{url('about')}}">Nosotros</a></li>
				<li><a href="{{url('service')}}">Servicios</a></li>
				<li class="active"><a href="{{url('portafolio')}}">Portafolio</a></li>
				<li><a href="{{url('blog')}}">Blog</a></li>
				<li><a href="{{url('contact')}}">Contacto</a></li>
	@endsection

	<!-- Page header section start -->
	<section class="page-header-section set-bg" data-setbg="img/header-bg.jpg">
		<div class="container">
			<h1 class="header-title">Portafolio<span>.</span></h1>
		</div>
	</section>
	<!-- Page header section end -->


	<!-- Page section start -->
	<div class="page-section spad">
		<div class="container">
			<!-- portfolio filter menu -->
			<ul class="portfolio-filter">
				<li class="filter" data-filter="*">All</li>
				<li class="filter" data-filter=".photo">Photography</li>
				<li class="filter" data-filter=".design">Design</li>
				<li class="filter" data-filter=".iden">Identity</li>
				<li class="filter" data-filter=".corp">Corporate</li>
				<li class="filter" data-filter=".uxui">UI/UX</li>
			</ul>
		</div>
		<!-- portfolio items -->
		<div class="portfolio-warp spad">
			<div id="portfolio">
				<div class="grid-sizer"></div>
				<!-- portfolio item -->
				<div class="grid-item set-bg grid-wide photo" data-setbg="img/portfolio/1.jpg"><a class="img-popup" href="img/portfolio/1.jpg"></a></div>
				<!-- portfolio item -->
				<div class="grid-item set-bg design corp" data-setbg="img/portfolio/2.jpg"><a class="img-popup" href="img/portfolio/2.jpg"></a></div>
				<!-- portfolio item -->
				<div class="grid-item set-bg iden photo uxui" data-setbg="img/portfolio/3.jpg"><a class="img-popup" href="img/portfolio/3.jpg"></a></div>
				<!-- portfolio item -->
				<div class="grid-item set-bg corp design" data-setbg="img/portfolio/4.jpg"><a class="img-popup" href="img/portfolio/4.jpg"></a></div>
				<!-- portfolio item -->
				<div class="grid-item set-bg uxui iden" data-setbg="img/portfolio/5.jpg"><a class="img-popup" href="img/portfolio/5.jpg"></a></div>
				<!-- portfolio item -->
				<div class="grid-item set-bg grid-long design corp" data-setbg="img/portfolio/6.jpg"><a class="img-popup" href="img/portfolio/6.jpg"></a></div>
			</div>
		</div>
		<div class="container">
			<div class="pagination">
				<a href="#">01</a>
				<a href="" class="active">02</a>
				<a href="">03</a>
			</div>
		</div>
	</div>
	<!-- Page section end -->
@endsection