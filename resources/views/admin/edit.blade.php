@extends('layouts.admin')
@section('content')
<div class="container">
<div class="jumbotron">
<form action="{{ route('admin.update',$services->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')

<input type="hidden" name="id" id="id" value="{{$services->id}}">
  <div class="form-group">
    <label for="Serviceheading">Heading</label>
    <input type="text" class="form-control" name="heading" value="{{$services->heading}}" placeholder="Enter Heading">
  </div>

  <div class="form-group">
    <label for="serviceDescription">Description</label>
    <input type="text" class="form-control" name="description" value="{{$services->description}}" placeholder="Enter Description">
    
  </div>
  
  <div class="form-group">
    <label for="servicePrice">Price</label>
    <input type="text" class="form-control" name="price" value="{{$services->price}}" placeholder="Price">
  </div>

  <div class="form-group">
  <label for="serviceImage">Image</label>
  <div class="input-group">
  <div class="custom-file">    
    <input type="file" class="custom-file-input" name="image" value="{{$services->image}}" placeholder="">
    <label class="custom-file-label">Choose file</label>
  </div>
  </div>
  </div><br>

  <button type="submit" class="btn btn-primary">Save Service</button>
</form>
</div>
</div>
@endsection