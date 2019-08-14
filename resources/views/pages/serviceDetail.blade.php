@extends('layouts.app')
@section('content')
<section class="landing-section margintop service-landing">
	<div class="container landing-container">
		<div class="row">
			<div class="col-sm-12">
				<div class="landing-txt-wrapper">
					<h1 class="text-center">SALON AND BARBAR SERVICE DETAILS</h1>
                    <div class="breadcrumb-wrapper">
                        <ul class="breadcrumb-list">
                            <li><a href="/"><small>HOME </small></a>/</li>
                            <li><small>SERVICE DETAILS</small></li>    
                        </ul>
                    </div>
				</div>
			</div>
		</div>	
    </div>
</section>
<section class="service-details">
    <div class="container">
        <h2 class="services-heading text-center">SALON AND BARBAR SERVICE DETAILS</h2>
        <p class="services-desc text-center">WE HELP YOU LOOK GREAT</p>
        <div class="service-wrapper">
            <div class="img-box">
                <img src="{{asset('images/service_details/page-3_img01.jpg')}}" alt="hair-cut-img" class="img-fluid">
            </div>
            <div class="service-description">
                <h3 class="service-head">Scissor cutting and styling</h3>
                <p class="info">You will experience precision cutting and styling at its finest from our top stylists. This treatment offers a consultation, a complimetary shampoo and condition. The experience concludes with your hair being styled by our trained staff with our very own</p>
                <p class="price">$ 45</p>
                <button class="readmore-btn btn"><a href="">READ MORE</a></button>
            </div>
        </div>
        <div class="service-wrapper">
            <div class="service-description">
                <h3 class="service-head">Short back and sides</h3>
                <p class="info">Short back and sides
                The never-out-of-fashion crew cut. This is performed by using clippers on the back and sides of your head and scissors on top. Styled at the end of our service with a product to suit your look.</p>
                <p class="price">$ 20 (with wash $ 45)</p>
                <button class="readmore-btn btn"><a href="">READ MORE</a></button>
            </div>
            <div class="img-box">
                <img src="{{asset('images/service_details/page-3_img02.jpg')}}" alt="hair-cut-img" class="img-fluid">
            </div>

        </div>
        <div class="service-wrapper">
            <div class="img-box">
                <img src="{{asset('images/service_details/page-3_img03.jpg')}}" alt="hair-cut-img" class="img-fluid">
            </div>
            <div class="service-description">
                <h3 class="service-head">Clipper back and sides</h3>
                <p class="info">This service is for someone who requires a refresher cut between haircuts. The back and sides service gives the barber some time to precisely clipper the back and sides to the length that you desire, expertly line out the haircut with the trimmers and blend into</p>
                <p class="price">$ 20</p>
                <button class="readmore-btn btn"><a href="">READ MORE</a></button>
            </div>
            

        </div>
        <div class="service-wrapper">
            <div class="service-description">
                <h3 class="service-head">Re-style</h3>
                <p class="info">This is for people who fancy a total change of style, from long hair to short hair and everything in between . We hold a detailed consultation with you to see what you like and dislike about your hair and what will suit your face shape. A complimentary hair</p>
                <p class="price">$ 40</p>
                <button class="readmore-btn btn"><a href="">READ MORE</a></button>
            </div>
            <div class="img-box">
                <img src="{{asset('images/service_details/page-3_img04.jpg')}}" alt="hair-cut-img" class="img-fluid">
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