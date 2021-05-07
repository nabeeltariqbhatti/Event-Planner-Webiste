@extends('templates.master')

@section('content')

<title>Event Planner</title>
<link rel="stylesheet" href="{{asset('/assets/css/eventplanner.css')}}">
<div class="container">
 <div class="main-body">
  <div class="row gutters-sm">
   <div class="col-md-4 mb-3">
    <div class="card">
     <div class="card-body">
      <div class="d-flex flex-column align-items-center text-center">
       <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
       <div class="mt-3">
        <h4>John Doe</h4>
        <p class="text-secondary mb-1">Team Lead, John Doe</p>
        <p class="text-muted font-size-sm">Gujranwala</p>
        <button class="btn btn-outline-warning">Call Me</button>
       </div>
      </div>
     </div>
    </div>
    <div class="card mt-3">
     <ul class="list-group list-group-flush">

      <li class="list-group-item">
       <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
         Decoration
        </label>
       </div>
      </li>
      <li class="list-group-item">
       <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
         Food Suggestions
        </label>
       </div>
      </li>
      <li class="list-group-item">
       <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
         Dance Party
        </label>
       </div>
      </li>
      <li class="list-group-item">
       <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
         Photography
        </label>
       </div>
      </li>
      <li class="list-group-item">
       <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
         Security Services
        </label>
       </div>
      </li>

     </ul>
    </div>
   </div>
   <div class="col-md-8">
    <div class="card mb-3">
     <div class="card-body">
      <div class="row">
       <div class="col-sm-3">
        <h6 class="mb-0">Full Name</h6>
       </div>
       <div class="col-sm-9 text-secondary">
        John Doe
       </div>
      </div>
      <hr>
      <div class="row">
       <div class="col-sm-3">
        <h6 class="mb-0">Email</h6>
       </div>
       <div class="col-sm-9 text-secondary">
        John@Doe.com
       </div>
      </div>
      <hr>
      <div class="row">
       <div class="col-sm-3">
        <h6 class="mb-0">Phone</h6>
       </div>
       <div class="col-sm-9 text-secondary">
        (239) 816-9029
       </div>
      </div>
      <hr>
      <div class="row">
       <div class="col-sm-3">
        <h6 class="mb-0">Mobile</h6>
       </div>
       <div class="col-sm-9 text-secondary">
        (320) 380-4539
       </div>
      </div>
      <hr>
      <div class="row">
       <div class="col-sm-3">
        <h6 class="mb-0">Address</h6>
       </div>
       <div class="col-sm-9 text-secondary">
        Bay Area, San Francisco, CA
       </div>
      </div>
     </div>
    </div>
    <div class="row gutters-sm bg-light p-5 d-flex mt-5" style="justify-content: space-between;border-radius:20px;">

     <div class="bg-warning p-4" style="  border-radius: 15px 50px 30px;
 
  padding: 20px;
  width: 200px;
  height: 150px; ">
      <p class="caption text-black h3">Projects Completed</p>
      <p class=" h2 text-center mt-4"> 20</p>
     </div>
     <div class="bg-warning p-4" style=" border-radius: 15px 50px 30px;
 
  padding: 20px;
  width: 200px;
  height: 150px;  ">
      <p class="caption text-black h3">Projects Handeling</p>
      <p class=" h2 text-center mt-4"> 0</p>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
@endsection