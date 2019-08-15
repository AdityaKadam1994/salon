@extends('layouts.app')
@section('content')
<section class="landing-section margintop service-landing">
	<div class="container landing-container">
		<div class="row">
			<div class="col-sm-12">
				<div class="landing-txt-wrapper">
					<h1 class="text-center">ABOUT US</h1>
                    <div class="breadcrumb-wrapper">
                        <ul class="breadcrumb-list">
                            <li><a href="/"><small>HOME </small></a>/</li>
                            <li><small>ABOUT</small></li>    
                        </ul>
                    </div>
				</div>
			</div>
		</div>	
	</div>
</section>

<section class="aboutus-section">
    <div class="container">
    <h2 class="about-head">ABOUT</h2>
    <p class="about-description">More than just a haircut</p>
        <div class="row about-row">
            <div class="col-md-7">
                <img src="{{asset('images/home/about-img.jpg')}}" alt="about-img" class="img-fluid">
            </div>
            <div class="col-md-5">
                <p class="about-img-description">Jonathan & Co is an old school men-only barbershop in the heart of the working class city of Rotterdam. The shop specializes in the classic cuts that have proven themselves over the decades: pompadours, flattops, contours and the other styles featured on Jonathan & Co famous barbershop posters.</p>
            </div>
        </div>
    </div>
</section>

<section class="choose-us-section">
    <div class="container">
        <h2 class="choose-head">WHY CHOOSE US</h2>
        <p class="choose-description">Friendly atmosphere</p>
        <div class="row choose-row">
            <div class="col-md-6">
                <div class="choose-img-boxes img-box">
                    <p class="img-overlay-txt text-center">Your barber knows that men need a cut that is up to date, and directly reflects who you are. Our Men's Barber Cut is a cut perfect for your needs and desires.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="choose-img-boxes img-box">
                    <p class="img-overlay-txt text-center">Your barber knows that men need a cut that is up to date, and directly reflects who you are. Our Men's Barber Cut is a cut perfect for your needs and desires.</p>
                </div>
            </div>
        </div>
        <div class="row choose-row">
            <div class="col-md-6">
                <div class="choose-img-boxes img-box">
                    <p class="img-overlay-txt text-center">Your barber knows that men need a cut that is up to date, and directly reflects who you are. Our Men's Barber Cut is a cut perfect for your needs and desires.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="choose-img-boxes img-box">
                    <p class="img-overlay-txt text-center">Your barber knows that men need a cut that is up to date, and directly reflects who you are. Our Men's Barber Cut is a cut perfect for your needs and desires.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection