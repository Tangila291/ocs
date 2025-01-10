@extends('backend.master')


@section('pages')
  
  <h1>Wishlist</h1>

<form action="{{route('wishlist-s')}}" method="post">
@csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputname">Product Name</label>
      <input required type="text" name="name" class="form-control" id="inputname" placeholder="Enter your product name">
    </div>
<div class="form-group">
    <label for="inputAddress">Address</label>
    <input required type="text" name="address1" class="form-control" id="inputAddress" placeholder="House,Road & Area">
  </div>

     <!--
      <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp"name="email" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" name="address1" class="form-control" id="inputAddress" placeholder="House,Road & Area">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" name="address2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
   
    <div class="form-group col-md-4">
      <label for="inputCity">City</label>
      <select id="inputCity" class="form-control">
        <option selected>Choose your city</option>
        <option>Dhaka</option>
         <option>Barishal</option>
          <option>Chittagong</option>
           <option>Rajshahi</option>
            <option>Rongpur</option>
             <option>Khulna</option>
              <option>Cumilla</option>
               <option>Sylhet</option>
               
               </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
      <div class="form-group">
    <label for="inputProductName">Product Name</label>
    <input type="text" class="form-control" id="inputProduct" placeholder="Product Name">
  </div>

    <div class="form-group">
    <label for="inputProductSN">Serial Number</label>
    <input type="text" class="form-control" id="inputProductSN" placeholder="Enter product serial number">
  </div>

  </div>  

            -->

       <br>
  <button type="submit" class="btn btn-dark active">Submit</button>
</form>






@endsection