@extends('layoutFrontend.app')


@section('title')
<title>Blog | Techmell Spa</title>
@endsection

@section('content')
	
	@section('header')
				<li><a href="{{url('/')}}">Inicio</a></li>
				<li><a href="{{url('about')}}">Nosotros</a></li>
				<li><a href="{{url('service')}}">Servicios</a></li>
				<li><a href="{{url('portafolio')}}">Portafolio</a></li>
				<li class="active"><a href="{{url('blog')}}">Blog</a></li>
				<li><a href="{{url('contact')}}">Contacto</a></li>
    @endsection
<section class="page-header-section set-bg" data-setbg="img/header-bg-1.jpg">
		<div class="container">
			<h1 class="header-title">Blog<span>.</span></h1>
		</div>
	</section>
	<!-- Page header section end -->


	<!-- Page section start -->	
	<section class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-12">
					<!-- Blog post -->
					<div class="blog-post">
						<div class="thumb">
							<a href="#">
								<img src="img/blog/1.jpg" alt="">
							</a>
						</div>
						<div class="blog-content">
							<div class="post-date">29 February 2018</div>
							<h2><a href="">This is an architecture news post</a></h2>
							<div class="post-meta">
								<a href="#">John Doe <i class="fa fa-star-o"></i></a> 
								<a href="#">News <i class="fa fa-newspaper-o"></i></a> 
								<a href="#">23 <i class="fa fa-heart-o"></i></a> 
								<a href="#">6 <i class="fa fa-comment-o"></i></a> 
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam commodo efficitur turpis vitae efficitur. Etiam a accumsan libero. Mauris eu nisl odio. Vestibulum sodales purus urna, non auctor neque viverra non. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum et mauris rutrum, scelerisque orci id, rutrum erat...</p>
						</div>
					</div>
					<!-- Blog post -->
					<div class="blog-post">
						<div class="thumb">
							<a href="#">
								<img src="img/blog/2.jpg" alt="">
							</a>
						</div>
						<div class="blog-content">
							<div class="post-date">29 February 2018</div>
							<h2><a href="">This is an architecture news post</a></h2>
							<div class="post-meta">
								<a href="#">John Doe <i class="fa fa-star-o"></i></a> 
								<a href="#">News <i class="fa fa-newspaper-o"></i></a> 
								<a href="#">23 <i class="fa fa-heart-o"></i></a> 
								<a href="#">6 <i class="fa fa-comment-o"></i></a> 
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam commodo efficitur turpis vitae efficitur. Etiam a accumsan libero. Mauris eu nisl odio. Vestibulum sodales purus urna, non auctor neque viverra non. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum et mauris rutrum, scelerisque orci id, rutrum erat...</p>
						</div>
					</div>
					<!-- Blog post -->
					<div class="blog-post">
						<div class="thumb">
							<a href="#">
								<img src="img/blog/3.jpg" alt="">
							</a>
						</div>
						<div class="blog-content">
							<div class="post-date">29 February 2018</div>
							<h2><a href="">This is an architecture news post</a></h2>
							<div class="post-meta">
								<a href="#">John Doe <i class="fa fa-star-o"></i></a> 
								<a href="#">News <i class="fa fa-newspaper-o"></i></a> 
								<a href="#">23 <i class="fa fa-heart-o"></i></a> 
								<a href="#">6 <i class="fa fa-comment-o"></i></a> 
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam commodo efficitur turpis vitae efficitur. Etiam a accumsan libero. Mauris eu nisl odio. Vestibulum sodales purus urna, non auctor neque viverra non. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum et mauris rutrum, scelerisque orci id, rutrum erat...</p>
						</div>
					</div>
					<div class="pagination">
						<a href="#">01</a>
						<a href="" class="active">02</a>
						<a href="">03</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-5 mt-5 mt-lg-0 sidebar">
					<!-- widget -->
					<div class="widget-area">
						<form class="search">
							<input type="text" placeholder="enter keywords">
							<button><i class="fa fa-search"></i></button>
						</form>
					</div>
					<!-- widget -->
					<div class="widget-area">
						<h3 class="widget-title">Categories</h3>
						<ul>
							<li><a href="">Trending Posts </a></li>
							<li><a href="">Fashion</a></li>
							<li><a href="">Beauty & Hair</a></li>
							<li><a href="">Design</a></li>
							<li><a href="">Living & Travel</a></li>
							<li><a href="">Uncategorized</a></li>
						</ul>
					</div>
					<!-- widget -->
					<div class="widget-area">
						<h3 class="widget-title">Recent Posts</h3>
						<div class="rp-widget">
							<div class="rp-widget-item">
								<div class="thumb">
									<img src="img/blog/recent-post/1.jpg" alt="#">
								</div>
								<div class="rp-content">
									<h4>The new lookbook for sale.</h4>
									<p>29 February 2018</p>
								</div>
							</div>
							<div class="rp-widget-item">
								<div class="thumb">
									<img src="img/blog/recent-post/2.jpg" alt="#">
								</div>
								<div class="rp-content">
									<h4>Design trends in 2018</h4>
									<p>29 February 2018</p>
								</div>
							</div>
							<div class="rp-widget-item">
								<div class="thumb">
									<img src="img/blog/recent-post/3.jpg" alt="#">
								</div>
								<div class="rp-content">
									<h4>Devices to buy now</h4>
									<p>29 February 2018</p>
								</div>
							</div>
							<div class="rp-widget-item">
								<div class="thumb">
									<img src="img/blog/recent-post/4.jpg" alt="#">
								</div>
								<div class="rp-content">
									<h4>Minimal design in here</h4>
									<p>29 February 2018</p>
								</div>
							</div>
						</div>
					</div>
					<!-- widget -->
					<div class="widget-area">
						<h3 class="widget-title">Quote of the day</h3>
						<div class="quote-widget">
							<span>“</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam commodo efficitur turpis vitae efficitur. Etiam a accumsan libero. Mauris eu nisl odio. </p>
						</div>
					</div>
					<!-- widget -->
					<div class="widget-area">
						<h3 class="widget-title">Instagram</h3>
						<div class="instagram-widget">
							<a href="#"><img src="img/blog/instagram/1.jpg" alt="#"></a>
							<a href="#"><img src="img/blog/instagram/2.jpg" alt="#"></a>
							<a href="#"><img src="img/blog/instagram/3.jpg" alt="#"></a>
							<a href="#"><img src="img/blog/instagram/4.jpg" alt="#"></a>
							<a href="#"><img src="img/blog/instagram/5.jpg" alt="#"></a>
							<a href="#"><img src="img/blog/instagram/1.jpg" alt="#"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page section end -->

@endsection