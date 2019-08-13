@extends('layouts.admin')
@section('content')
<div class="container">
<div class="jumbotron">  
<a href="{{ route('admin.create') }}" class="btn btn-primary">Add Service</a>
<br><br>
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Image</th>
      <th scope="col">Heading</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Show</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($services as $service)
    <tr>
      <th scope="row">{{ ++$i }}</th>
      <td><img src="{{asset('uploads/service/'. $service->image)}}" width="40px" height="40px" alt="Image"</td>
      <td>{{$service->heading}}</td>
      <td>{{$service->description}}</td>
      <td>{{$service->price}}</td>
      <form action="{{ route('admin.destroy',$service->id) }}" method="POST">
      <td><a class="btn btn-outline-primary" href="{{ route('admin.show',$service->id) }}">Show</a></td>
      
      <td><a class="btn btn-outline-primary" href="{{ route('admin.edit',$service->id) }}">Edit</a></td>
   
      @csrf
      @method('DELETE')
      <td><button type="submit" class="btn btn-outline-danger">Delete</button></td>
      </form>
    </tr>  
    @endforeach  
  </tbody>
</table>
{{$services->links()}}
</div>
</div>

@endsection