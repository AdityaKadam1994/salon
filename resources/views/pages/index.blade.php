@extends('layouts.app')
@section('content')
<section class="landing-section margintop">
	<div class="container landing-container">
		<div class="row">
			<div class="col-sm-6">
				<div class="landing-txt-wrapper">
					<h1>HAIR SALON WEBSITE TEMPLATES FREE DOWNLOAD</h1>
					<p>Your Types. Your Style. Your Color.</p>
					<a href=""><button class="btn landing-btn">Your slider buttons</button></a>
				</div>
			</div>
		</div>
		
	</div>
</section>

<section class="services-section">
	<div class="container">
		<h2 class="services-heading">SALON AND BARBAR SERVICE</h2>
		<p class="services-desc">WE HELP YOU LOOK GREAT</p>
		<div class="card-wrapper">
			<div class="row">
			<!-- @foreach($services as $service)
				<div class="col-sm-4">
					<img src="{{asset('uploads/service/'. $service->image)}}" alt="service-icon-1" class="img-fluid">
					<h4 class="service-head">{{$service->heading}}</h4>
					<p class="service-description">{{$service->description}}</p>
					<p class="service-price">$ {{$service->price}}</p>
				</div>
			@endforeach -->
				<div class="col-sm-4">
					<img src="{{asset('images/home/service-icon-1.png')}}" alt="service-icon-1" class="img-fluid">
					<h4 class="service-head">MUSTACHE TRIM</h4>
					<p class="service-description">Free Responsive HTML5 CSS3 Website Template for hair salon and beauty salon.</p>
					<p class="service-price">$45</p>
				</div>
				<div class="col-sm-4">
					<img src="{{asset('images/home/service-icon-2.png')}}" alt="service-icon-2" class="img-fluid">
					<h4 class="service-head">MUSTACHE TRIM</h4>
					<p class="service-description">Free Responsive HTML5 CSS3 Website Template for hair salon and beauty salon.</p>
					<p class="service-price">$45</p>
				</div>
				<div class="col-sm-4">
					<img src="{{asset('images/home/service-icon-3.png')}}" alt="service-icon-3" class="img-fluid">
					<h4 class="service-head">BEARD TRIM</h4>
					<p class="service-description">Responsive website templates free download html with css.</p>
					<p class="service-price">$45</p>
				</div>
			</div>
			<div class="service-btn-wrapper">
				<a href=""><button class="btn service-btn">View All Service</button></a>
			</div>

		</div>
	</div>
</section>

<section class="about-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<img src="{{asset('images/home/about-img.jpg')}}" alt="about-img" class="img-fluid">
			</div>
			<div class="col-lg-6">
				<div class="about-description">
					<h2>MEN’S SALON WEBSITE TEMPLATES</h2>
					<p>BEST EXPERIENCE EVER</p>
					<p>Free Hair Salon Website Templates for your hair salon shop or business. <a href=""> Free Website Template Download It now!</a></p>
					<p>Bootstrap templates free download idcondi mentum utturpis one fuscenec justo idle libero pharetra posuere aliquam tempus is porttitor atfinibus sollicitudin namiam.</p>
					<p>Best Free HTML CSS Website Templates for salon and hair cutting business. All features are clean designed</p>
					<a href=""><button class="btn about-btn">VIEW MORE ABOUT US</button></a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="testimonials-section">
	<div class="container">
		<h2 class="test-head">TESTIMONIALS</h2>
		<p class="test-description">WHAT HAPPY CLIENT SAY</p>
		<div class="card-wrapper">
			<div class="row">
				<div class="col-sm-4">
					<p class="test-content">“Free Beauty Website Templates that help me a lot to build easy and fast my hair shop website in 2 days”</p>
					<p class="author-name">REBA TRUONG</p>
					<p class="author-description">34 YEAR &nbsp;&nbsp; CUSTOMER</p>
				</div>
				<div class="col-sm-4">
					<p class="test-content">“Free bootstrap responsive website templates 2017 its best ever i found for my hair salon”</p>
					<p class="author-name">THOMAS WARREN</p>
					<p class="author-description">34 YEAR &nbsp;&nbsp; CUSTOMER</p>
				</div>
				<div class="col-sm-4">
					<p class="test-content">“Best Free HTML CSS Website Templates for salon and hair cutting business. All features are clean designed”</p>
					<p class="author-name">CARIE WILLIS</p>
					<p class="author-description">34 YEAR &nbsp;&nbsp; CUSTOMER</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="free-section">
	<div class="container cta-container">
		<div class="row">
			<div class="col-sm-10">
				<h1 class="free-head">HAIR SALON WEBSITE TEMPLATES</h1>
				<p class="free-descp">You can download and use these FREE HTML templates for your salon and beauty shop and store.</p>
				<a href=""><button class="btn cta-btn">Call to action buttons</button></a>
			</div>
		</div>
	</div>
</section>
<section class="news-section">
	<div class="container">
		<h2 class="news-head">LATEST NEWS & ARTICLE</h2>
		<div class="row news-row">
			<div class="col-lg-6">
				<img src="{{asset('images/home/post-img.jpg')}}" alt="" class="img-fluid">
			</div>
			<div class="col-lg-6">
				<h2><a href="">COSMETICS WEBSITE TEMPLATES FREE DOWNLOAD</a></h2>
				<p><small>Date</small>&nbsp;&nbsp;|&nbsp;&nbsp;<small>Author</small></p>
				<p>Cras dolor arcu porttitor atfinibus idcondi mentum uttu rpis one fuscenec justo idle libero pharetra posuere aliq uam tempus is porttitor atfinibus.</p>
				<a href=""><button class="btn read-btn">READ MORE</button></a>
			</div>
		</div>
	</div>
</section>
@endsection