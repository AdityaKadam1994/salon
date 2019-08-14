@extends('layouts.app')
@section('content')
<section class="landing-section margintop service-landing">
	<div class="container landing-container">
		<div class="row">
			<div class="col-sm-12">
				<div class="landing-txt-wrapper">
					<h1 class="text-center">CONTACT US</h1>
                    <div class="breadcrumb-wrapper">
                        <ul class="breadcrumb-list">
                            <li><a href="/"><small>HOME </small></a>/</li>
                            <li><small>CONTACT US</small></li>    
                        </ul>
                    </div>
				</div>
			</div>
		</div>	
	</div>
</section>

<section class="contact-us-section">
    <div class="container">
        <div class="row contact-form-row">
            <div class="col-md-4">
                <div class="contact-info-wrapper">
                    <h5>CONTACT INFO</h5>
                    <p class="contact-head">Flower.</p>
                    <p class="contact-address">
                    1355 Market Street, Suite 900 San Francisco, CA 94103</p> 
                    <p class="phone-no">P: (123) 456-7890</p>
                    <p class="contact-head">Contact Name </p> 
                    <a href="mailto:yourdomain@gmail.com">yourdomain@gmail.com</a>
                </div>
            </div>
            <div class="col-md-8">
                <form action="" id="contact-form">
                    <h3 class="form-head">CONTACT FORM</h3>
                    <p>Please complete the form below. We'll do everything we can to respond to you as quickly as possible.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">NAME</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="email">EMAIL</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">PHONE</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="name">SUBJECT</label>
                                <input type="text" class="form-control" id="subject" name="subject">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">MESSAGE</label>
                        <textarea class="form-control" id="message" name="message"></textarea>
                    </div>
                    <button class="btn contact-submit-btn" type="submit">SEND MESSAGE</button>
                </form>
                
            </div>
        </div>
    </div>
</section>
@endsection