@extends('layoutFrontend.app')

@section('content')

<!-- Hero section start -->
<section class="hero-section">
		<!-- left social link ber -->
		<div class="left-bar">
			<div class="left-bar-content">
				<div class="social-links">
					<a href="#"><i class="fa fa-pinterest"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
				</div>
			</div>
		</div>
		<!-- hero slider area -->
		<div class="hero-slider">
			<div class="hero-slide-item set-bg" data-setbg="img/bg.jpg">
				<div class="slide-inner">
					<div class="slide-content">
					<h2>Minimalistic <br>Architecture <br> and more</h2>
					<a href="#" class="site-btn sb-light">See Project</a>
					</div>	
				</div>
			</div>	
			<div class="hero-slide-item set-bg" data-setbg="img/bg.jpg">
				<div class="slide-inner">
					<div class="slide-content">
					<h2>Minimalistic <br>Architecture <br> and more</h2>
					<a href="#" class="site-btn sb-light">See Project</a>
					</div>	
				</div>
			</div>	
		</div>
		<div class="slide-num-holder" id="snh-1"></div>
		<div class="hero-right-text">architecture</div>
	</section>
	<!-- Hero section end -->


	<!-- Intro section start -->
	<section class="intro-section pt100 pb50">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 intro-text mb-5 mb-lg-0">
					<h2 class="sp-title">We are a creative Architecture<span>Studio</span></h2>
					<p>Pellentesque lorem dolor, malesuada eget tortor vitae, tristique lacinia lectus. Pellentesque sed accumsan risus, id aliquam nulla. Integer lorem risus, feugiat at mauris malesuada, accumsan pellentesque ipsum. Nunc dapibus, libero ut pulvinar accumsan, tortor nisl iaculis ligula. Curabitur finibus dolor vel lectus pretium interdum a eget ante. Morbi rhoncus feugiat imperdiet. Curabitur non maximus leo. Nulla in ipsum sed magna egestas bibendum. Integer in sem sagittis, commodo mi sit amet, commodo nibh. Suspendisse potenti. Aliquam erat volutpat. </p>
					<a href="#" class="site-btn sb-dark">See Project</a>
				</div>
				<div class="col-lg-5 pt-4">
					<img src="img/intro.png" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- Intro section end -->


	<!-- Service section start -->
	<section class="service-section spad">
		<div class="container">
			<div class="section-title">
				<h2>Services</h2>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="service-box">
						<div class="sb-icon">
							<div class="sb-img-icon">
								<img src="img/icon/dark/1.png" alt="">
							</div>
						</div>
						<h3>Plans and Projects</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed dui eget lorem tincidunt.</p>
						<a href="#" class="readmore">READ MORE</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="service-box">
						<div class="sb-icon">
							<div class="sb-img-icon">
								<img src="img/icon/dark/2.png" alt="">
							</div>
						</div>
						<h3>Conceptual Architecture</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed dui eget lorem tincidunt.</p>
						<a href="#" class="readmore">READ MORE</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="service-box">
						<div class="sb-icon">
							<div class="sb-img-icon">
								<img src="img/icon/dark/3.png" alt="">
							</div>
						</div>
						<h3>Apartment Buildings</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed dui eget lorem tincidunt.</p>
						<a href="#" class="readmore">READ MORE</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="service-box">
						<div class="sb-icon">
							<div class="sb-img-icon">
								<img src="img/icon/dark/4.png" alt="">
							</div>
						</div>
						<h3>Skyscrapers Buildings</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed dui eget lorem tincidunt.</p>
						<a href="#" class="readmore">READ MORE</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="service-box">
						<div class="sb-icon">
							<div class="sb-img-icon">
								<img src="img/icon/dark/5.png" alt="">
							</div>
						</div>
						<h3>Documentation</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed dui eget lorem tincidunt.</p>
						<a href="#" class="readmore">READ MORE</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="service-box">
						<div class="sb-icon">
							<div class="sb-img-icon">
								<img src="img/icon/dark/6.png" alt="">
							</div>
						</div>
						<h3>Restauration Projects</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed dui eget lorem tincidunt.</p>
						<a href="#" class="readmore">READ MORE</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Service section end -->



	<!-- CTA section start -->
	<section class="cta-section pt100 pb50">
		<div class="cta-image-box"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-7 pl-lg-0 offset-lg-5 cta-content">
					<h2 class="sp-title">Dare to dream of a modern <span>home</span></h2>
					<p>Pellentesque lorem dolor, malesuada eget tortor vitae, tristique lacinia lectus. Pellentesque sed accumsan risus, id aliquam nulla. Integer lorem risus, feugiat at mauris malesuada, accumsan pellentesque ipsum. Nunc dapibus, libero ut pulvinar accumsan, tortor nisl iaculis ligula. Curabitur finibus dolor vel lectus pretium interdum a eget ante. </p>
					<div class="cta-icons">
						<div class="cta-img-icon">
							<img src="img/icon/light/1.png" alt="">
						</div>
						<div class="cta-img-icon">
							<img src="img/icon/light/2.png" alt="">
						</div>
						<div class="cta-img-icon">
							<img src="img/icon/color/3.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- CTA section end -->


	<!-- Milestones section Start -->
	<section class="milestones-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="milestone">
						<h2>14</h2>
						<p>Years <br>of <br>Experience</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="milestone">
						<h2>237</h2>
						<p>Projects <br>Taken</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="milestone">
						<h2>11k</h2>
						<p>Twitter <br>Followers</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="milestone">
						<h2>12</h2>
						<p>Awards <br>Won</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Milestones section end -->

	<!-- Projects section start -->
	<div class="projects-section pb50">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="section-title">
						<h1>Projects</h1>
					</div>
				</div>
				<div class="col-lg-9">
					<ul class="projects-filter-nav">
						<li class="btn-filter" data-filter="*">All</li>
						<li class="btn-filter" data-filter=".rest">Restaurations</li>
						<li class="btn-filter" data-filter=".build">Buildings</li>
						<li class="btn-filter" data-filter=".apart">Apartments</li>
					</ul>
				</div>
			</div>
		</div>                      
		<div id="projects-carousel" class="projects-slider">
			<div class="single-project set-bg rest" data-setbg="img/projects/1.jpg">
				<div class="project-content">
					<h2>Biggest <br> Restaurations</h2>
					<p>Jan 19, 2018</p>
					<a href="#" class="seemore">See Project </a>
				</div>
			</div>
			<div class="single-project set-bg build" data-setbg="img/projects/2.jpg">
				<div class="project-content">
					<h2>Office <br> Building</h2>
					<p>Jan 19, 2018</p>
					<a href="#" class="seemore">See Project </a>
				</div>
			</div>
			<div class="single-project set-bg apart" data-setbg="img/projects/3.jpg">
				<div class="project-content">
					<h2>Nice <br> Apartments</h2>
					<p>Jan 19, 2018</p>
					<a href="#" class="seemore">See Project </a>
				</div>
			</div>
			<div class="single-project set-bg rest" data-setbg="img/projects/4.jpg">
				<div class="project-content">
					<h2>Biggest <br> Restaurations</h2>
					<p>Jan 19, 2018</p>
					<a href="#" class="seemore">See Project </a>
				</div>
			</div>
			<div class="single-project set-bg apart" data-setbg="img/projects/2.jpg">
				<div class="project-content">
					<h2>Office <br> Building</h2>
					<p>Jan 19, 2018</p>
					<a href="#" class="seemore">See Project </a>
				</div>
			</div>
		</div>
	</div>
	<!-- Projects section end -->


	<!-- Clients section start -->
	<div class="client-section spad">
		<div class="container">
			<div id="client-carousel" class="client-slider">
				<div class="single-brand">
					<a href="#">
						<img src="img/clients/1.png" alt="">
					</a>
				</div>
				<div class="single-brand">
					<a href="#">
						<img src="img/clients/2.png" alt="">
					</a>
				</div>
				<div class="single-brand">
					<a href="#">
						<img src="img/clients/3.png" alt="">
					</a>
				</div>
				<div class="single-brand">
					<a href="#">
						<img src="img/clients/4.png" alt="">
					</a>
				</div>
				<div class="single-brand">
					<a href="#">
						<img src="img/clients/5.png" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Clients section end -->


    
@endsection
