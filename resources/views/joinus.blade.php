@extends('templates.master')

@section('content')
<link href="{{asset('assets/css/form-validation.css')}}" rel="stylesheet">


<style>
 .imageupload {
  margin: 20px 0;
 }
</style>

<div class="container mt-5">
 @if ($errors->any())
 <div class="alert alert-danger">
  <ul>
   @foreach ($errors->all() as $error)
   <li>{{ $error }}</li>
   @endforeach
  </ul>
 </div>
 @endif
 <main>

  <div class="row g-5">

   <div class="col-md-5 col-lg-4 order-md-last">
    <div class="container">

     <div class="col-lg-4">
      <form class="needs-validation" method="post" enctype="multipart/form-data" action="{{route('joinus.store')}}" mul>
       @csrf
       <img style="border-radius:50%;" src="https://www.tutorialrepublic.com/examples/images/clients/1.jpg" alt="" srcset="">

       <div class="d-flex ">
        <label for="myfile">Select files:</label>
        <input type="file" id="myfile" name="imageaddress" multiple><br><br>
        <button class="btn btn-warning" style="margin-right:20px;" href="#">Select</button>
        <button class="btn btn-warning" href="#">Upload</button>
       </div>

     </div><!-- /.col-lg-4 -->
    </div>
   </div>
   <div class="col-md-7 col-lg-8">
    <h4 class="mb-3">Billing address</h4>

    <div class="row g-3">
     <div class="col-sm-6">
      <label for="firstName" class="form-label">First name</label>
      <input type="text" class="form-control" value="{{old('firstname')}}" id="firstName" name="firstname" placeholder="" value="" required>
      <div class="invalid-feedback">
       Valid first name is required.
      </div>
     </div>

     <div class="col-sm-6">
      <label for="lastName" class="form-label">Last name</label>
      <input type="text" class="form-control" value="{{old('lastname')}}" id="lastName" name="lastname" placeholder="" value="" required>
      <div class="invalid-feedback">
       Valid last name is required.
      </div>
     </div>


     <div class="col-12">
      <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
      <input type="email" class="form-control" id="email" value="{{old('email')}}" name="email" placeholder="you@example.com">
      <div class="invalid-feedback">
       Please enter a valid email address for shipping updates.
      </div>
     </div>

     <div class="col-12">
      <label for="address" class="form-label">Address</label>
      <input type="text" class="form-control" id="address" value="{{old('address')}}" name="address" name="address" placeholder="1234 Main St" required>
      <div class="invalid-feedback">
       Please enter your shipping address.
      </div>
     </div>

     <div class="col-12">
      <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
      <input type="text" class="form-control" id="address2" value="{{old('address2')}}" name="address2" placeholder="Apartment or suite">
     </div>

     <div class="col-md-5">
      <label for="country" class="form-label">Country</label>
      <select class="form-select" name="country" value="{{old('country')}}" id="country" required>
       <option value="">Choose...</option>
       <option>United States</option>
      </select>
      <div class="invalid-feedback">
       Please select a valid country.
      </div>
     </div>

     <div class="col-md-4">
      <label for="state" class="form-label">State</label>
      <select class="form-select" name="state" value="{{old('state')}}" id="state" required>
       <option value="">Choose...</option>
       <option>California</option>
      </select>
      <div class="invalid-feedback">
       Please provide a valid state.
      </div>
     </div>

     <div class="col-md-3">
      <label for="zip" class="form-label">Zip</label>
      <input type="text" name="zip" class="form-control" value="{{old('zip')}}" id="zip" placeholder="">
      <div class="invalid-feedback">
       Zip code required.
      </div>
     </div>
     <div class="col-md-4">
      <label for="state" class="form-label">Service</label>
      <select class="form-select" selected="{{old('designation')}}" name="designation" id="state" required>
       <option value="">Choose...</option>
       <option>Helper</option>
       <option>Assistant</option>
       <option>Team Lead</option>
       <option>Security Incharge</option>
       <option>Open for anything</option>

      </select>
      <div class="invalid-feedback">
       Please provide a valid state.
      </div>
     </div>
     <div class="col-8">
      <label for="age" class="form-label">Age <span class="text-muted">(Optional)</span></label>
      <input type="number" value="{{old('age')}}" class="form-control" id="age" name="age" placeholder="24">

     </div>
     <div class="col-l8">
      <label for="city" class="form-label">City <span class="text-muted">*</span></label>
      <input type="text" class="form-control" value="{{old('city')}}" name="city" placeholder="city">
     </div>
    </div>

    <hr class="my-4">



    <div class="form-check my-10 ">
     <input type="checkbox" class="form-check-input" id="save-info">
     <label class="form-check-label" for="save-info">Save this information for next time</label>
    </div>



    <hr class="my-4">

    <button class="w-100 btn btn-warning btn-lg" type="submit">Continue to checkout</button>
    </form>
   </div>
  </div>

 </main>


</div>
<hr class="my-4">
<script src="{{asset('assets/js/form-validation.js')}}"></script>


@endsection