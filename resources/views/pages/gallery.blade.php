@extends('layouts.app')
@section('content')
<section class="landing-section margintop service-landing">
	<div class="container landing-container">
		<div class="row">
			<div class="col-sm-12">
				<div class="landing-txt-wrapper">
					<h1 class="text-center">GALLERY</h1>
                    <div class="breadcrumb-wrapper">
                        <ul class="breadcrumb-list">
                            <li><a href="/"><small>HOME </small></a>/</li>
                            <li><small>GALLERY</small></li>    
                        </ul>
                    </div>
				</div>
			</div>
		</div>	
	</div>
</section>

<section class="gallery-section">
    <div class="container">
        <h2 class="gallery-head">GALLERY</h2>
        <p class="gallery-description">This is what we do</p>
        <div class="gallery-wrapper">    
            <a href="{{asset('images/gallery/page-4_img01_original.jpg')}}">
                <img src="{{asset('images/gallery/page-4_img01_original.jpg')}}" class="img-fluid"/>
            </a>
            <a href="{{asset('images/gallery/page-4_img01_original.jpg')}}">
                <img src="{{asset('images/gallery/page-4_img01_original.jpg')}}" class="img-fluid"/>
            </a>
            <a href="{{asset('images/gallery/page-4_img01_original.jpg')}}">
                <img src="{{asset('images/gallery/page-4_img01_original.jpg')}}" class="img-fluid"/>
            </a>
            <a href="{{asset('images/gallery/page-4_img01_original.jpg')}}">
                <img src="{{asset('images/gallery/page-4_img01_original.jpg')}}" class="img-fluid"/>
            </a>
            <a href="{{asset('images/gallery/page-4_img01_original.jpg')}}">
                <img src="{{asset('images/gallery/page-4_img01_original.jpg')}}" class="img-fluid"/>
            </a>
            <a href="{{asset('images/gallery/page-4_img01_original.jpg')}}">
                <img src="{{asset('images/gallery/page-4_img01_original.jpg')}}" class="img-fluid"/>
            </a>
            <a href="{{asset('images/gallery/page-4_img01_original.jpg')}}">
                <img src="{{asset('images/gallery/page-4_img01_original.jpg')}}" class="img-fluid"/>
            </a>
            <a href="{{asset('images/gallery/page-4_img01_original.jpg')}}">
                <img src="{{asset('images/gallery/page-4_img01_original.jpg')}}" class="img-fluid"/>
            </a>
            <a href="{{asset('images/gallery/page-4_img01_original.jpg')}}">
                <img src="{{asset('images/gallery/page-4_img01_original.jpg')}}" class="img-fluid"/>
            </a>
            <a href="{{asset('images/gallery/page-4_img01_original.jpg')}}">
                <img src="{{asset('images/gallery/page-4_img01_original.jpg')}}" class="img-fluid"/>
            </a>
            
          
        </div>
 
    </div>
</section>

@endsection