@extends('layouts.app')
@section('content')
<section class="landing-section margintop service-landing">
	<div class="container landing-container">
		<div class="row">
			<div class="col-sm-12">
				<div class="landing-txt-wrapper">
					<h1 class="text-center">SALON AND BARBAR SERVICE</h1>
                    <div class="breadcrumb-wrapper">
                        <ul class="breadcrumb-list">
                            <li><a href="/"><small>HOME </small></a>/</li>
                            <li><small>SERVICE LIST</small></li>    
                        </ul>
                    </div>
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
				<div class="col-sm-4">
					<img src="{{asset('images/home/service-icon-1.png')}}" alt="service-icon-1" class="img-fluid">
					<h4 class="service-head">TRADITIONAL CUT</h4>
					<p class="service-description">Responsive website templates free download html5 with css3 for Hair Salon and Shop website template.</p>
					<p class="service-price">$45</p>
				</div>
				<div class="col-sm-4">
					<img src="{{asset('images/home/service-icon-2.png')}}" alt="service-icon-1" class="img-fluid">
					<h4 class="service-head">MUSTACHE TRIM</h4>
					<p class="service-description">Free Responsive HTML5 CSS3 Website Template for hair salon and beauty salon.</p>
					<p class="service-price">$45</p>
				</div>
				<div class="col-sm-4">
					<img src="{{asset('images/home/service-icon-3.png')}}" alt="service-icon-1" class="img-fluid">
					<h4 class="service-head">BEARD TRIM</h4>
					<p class="service-description">Responsive website templates free download html with css.</p>
					<p class="service-price">$45</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="service-appointment">
    <div class="container">
        <div class="row appointment-row">
            <div class="col-lg-8">
                <h1 class="appoint-head"> <strong>BOOK YOUR ONLINE APPOINTMENT</strong></h1>
                <p>Call to action button example for booking appointment for patients.</p>
            </div>
            <div class="col-lg-4">
               <button class="btn cta-btn"> <a href="" class="ml-auto">Call to action Button</a></button>
            </div>
        </div>  
    </div>
</section>
@endsection