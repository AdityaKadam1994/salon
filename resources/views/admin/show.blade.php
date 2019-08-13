@extends('layouts.admin')
@section('content')
<div class="container">
<div class="jumbotron">
<div class="card" style="width: 18rem;">
  <img src="{{asset('uploads/service/'. $services->image)}}" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">{{$services->heading}}</h5>
    <p class="card-text">{{$services->description}}</p>
    <p class="card-text">$ {{$services->price}}</p>
    <a href="{{route('admin.index')}}" class="btn btn-primary">Go Back</a>
  </div>
</div>
</div>
</div>

@endsection