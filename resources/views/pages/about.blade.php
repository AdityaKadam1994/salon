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
                <div class="choose-img-boxes img-box-1">
                    <p class="img-overlay-txt text-center">Your barber knows that men need a cut that is up to date, and directly reflects who you are. Our Men's Barber Cut is a cut perfect for your needs and desires.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="choose-img-boxes img-box-2">
                    <p class="img-overlay-txt text-center">Using a razor to remove hair as close to the scalp as we can get.</p>
                </div>
            </div>
        </div>
        <div class="row choose-row">
            <div class="col-md-6">
                <div class="choose-img-boxes img-box-3">
                    <p class="img-overlay-txt text-center">Polish your overall appearance. We trim away stray hairs, reshape your favorite design, and condition the hair to give you a polished and handsome appearance.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="choose-img-boxes img-box-4">
                    <p class="img-overlay-txt text-center">A new technology that covers some of your gray hair in ten minutes. The result is naturally blended color that covers your gray hair and turns back the clock. This slowly fades over 4 to 6 weeks allowing you the choice of coloring again.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="staff-section">
    <div class="container">
        <h2 class="staff-head">STYLIST</h2>
        <p class="staff-description">The elite staff welcomes you</p>
        <div class="row staff-row">
            <div class="col-md-3">
                <div class="staff-wrapper">
                    <div class="img-center">    
                        <img src="{{asset('images/about/page-2_img06.jpg')}}" alt="" class="staff-img img-fluid">
                    </div>
                    <h3 class="staff-name">Simon ( manager )</h3>
                    <p class="staff-intro">Simon has been in the hairdressing industry for over 10 years. His career started in his home country, Ireland. Since moving to London in 2011, his friendly demeanour and diversity has helped</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="staff-wrapper">
                    <div class="img-center">    
                        <img src="{{asset('images/about/page-2_img07.jpg')}}" alt="" class="staff-img img-fluid">
                    </div>
                    <h3 class="staff-name">Scott</h3>
                    <p class="staff-intro">Scott is a highly skilled barber with over 15 years of experience, he started training from a very young age and has gone on to work in some of London’s highly reputable barber shop</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="staff-wrapper">
                    <div class="img-center">    
                        <img src="{{asset('images/about/page-2_img08.jpg')}}" alt="" class="staff-img img-fluid">
                    </div>
                    <h3 class="staff-name">Sabrina</h3>
                    <p class="staff-intro">Sabrina is our Barber-ella with over 20 years experience. Throughout her career she has always been in London. She is a South London girl and cuts hair with a Caribbean twist</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="staff-wrapper">
                    <div class="img-center">    
                        <img src="{{asset('images/about/page-2_img09.jpg')}}" alt="" class="staff-img img-fluid">
                    </div>
                    <h3 class="staff-name">Richard</h3>
                    <p class="staff-intro">Richard has been working in the West End for his entire career. He was trained in the West End and has a background with Trevor Sorbie and Vidal Sasoon. He has been a manager for 18</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="history-section">
    <h2 class="history-head">OUR HISTORY</h2>
    <p class="history-description">A cut above the rest</p>
    <div class="container">
        <div class="history-wrapper">
            <div class="content">
                <h2 class="year">1985</h2>
                <p>Founded in 1985, Jonathan & Co is the first Barbershop to be recognized in the "Cut & Dry" International Paul Mitchell magazine. Jonathan & Co has been voted Leading Barbershop in Hippo Press Readers pole from 2007 to 2015. Our barbershop has also been voted as the third best in NH by Channel 9 internet vote in 2014, as well as the Best Barbershop according to Union Leader Readers. Shortly afterwards, we were​ featured on the cover of the National American Barber magazine.</p>
                <p>Jonathan & Co services clients ~mostly men~ of all ages and professions, in a traditional yet upscale barbershop setting.</p>
                <p class="tilde">~</p>
                <p class="money-details">We accept Visa, MC, American Express and Discover <br> No Appointment Necessary</p>
            </div>
        </div>
    </div>
</section>
@endsection