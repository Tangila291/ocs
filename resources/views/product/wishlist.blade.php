@extends('master')


@section('pages')




<!-- Product Req Form -->



<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="select" class="form-control" id="inputCity">
    </div>
   

    </div>
  <div class="form-group">
    <label for="inputproductreq">Product Request</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Model number / Serial number">
  </div>

  </div>
  <div class="form-group">
    <label for="inputAddress">Product Picture</label>
    <input type="file" class="form-control" id="inputAddress" placeholder="">
  </div>

  </div>
  <div class="form-group">
  </div> <br>



  <button type="Submit" class="btn btn-dark">Submit</button>
  

</form>






@endsection