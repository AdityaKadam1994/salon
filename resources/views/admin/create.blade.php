@extends('layouts.admin')
@section('content')
<div class="container">
<div class="jumbotron">
<div class="alert alert-danger print-error-msg" style="display:none">
        <ul></ul>
    </div>
<!-- <form method="POST" action="{{route ('admin.store')}}" enctype="multipart/form-data" class="service-form"> -->
<form>

@method('put')
@csrf

  <div class="form-group">
    <label for="Serviceheading">Heading</label>
    <input type="text" class="form-control" name="heading" placeholder="Enter Heading">
  </div>

  <div class="form-group">
    <label for="serviceDescription">Description</label>
    <input type="text" class="form-control" name="description" placeholder="Enter Description">
    
  </div>
  
  <div class="form-group">
    <label for="servicePrice">Price</label>
    <input type="text" class="form-control" name="price" placeholder="Price">
  </div>

  <div class="form-group">
  <label for="serviceImage">Image</label>
  <div class="input-group">
  <div class="custom-file">    
    <input type="file" class="custom-file-input" name="image" placeholder="">
    <label class="custom-file-label">Choose file</label>
  </div>
  </div>
  </div><br>

  <button type="submit" class="btn btn-primary submit-service">Save Service</button>
</form>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

<script type="text/javascript">


    $(document).ready(function() {
        $(".submit-service").click(function(e){
            e.preventDefault();


            var _token = $("input[name='_token']").val();
            var heading = $("input[name='heading']").val();
            var description = $("input[name='description']").val();
            var price = $("input[name='price']").val();
            var image = $("input[name='image']").val();


            $.ajax({
                url: "/admin/store",
                type:'POST',
                data: {_token:_token, heading:heading, description:description, price:price, image:image},
                success: function(data) {
                    if($.isEmptyObject(data.error)){
                        alert(data.success);
                    }else{
                        printErrorMsg(data.error);
                    }
                }
            });


        }); 


        function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }
    });


</script>

@endsection

