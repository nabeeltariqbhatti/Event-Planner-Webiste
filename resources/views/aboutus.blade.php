@extends('templates.master')

@section('content')

<title>Contact us</title>
<style>
 body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
 }

 html {
  box-sizing: border-box;
 }

 *,
 *:before,
 *:after {
  box-sizing: inherit;
 }

 .column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
 }

 .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
 }

 .about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
 }

 .container {
  padding: 0 16px;
 }

 .container::after,
 .row::after {
  content: "";
  clear: both;
  display: table;
 }

 .title {
  color: grey;
 }

 .button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
 }

 .button:hover {
  background-color: #555;
 }

 @media screen and (max-width: 650px) {
  .column {
   width: 100%;
   display: block;
  }
 }

 input[type=number]::-webkit-inner-spin-button,
 input[type=number]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
 }

 form {
  width: 50%;
 }

 .form-control {
  line-height: 2;
  border: 1px solid #ddd;
  border-radius: 2px;
 }

 .form-control:focus {
  box-shadow: none;
  border-color: #130f40;
 }

 .form-control:hover {
  border-color: #241f61;
 }

 .bg-custom {
  background-color: #130f40;
 }

 .btn-custom {
  border-color: #130f40;
  color: #130f40;
 }

 .btn-custom:hover {
  background-color: #241f61;
  color: #fff;
  box-shadow: 0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%);
 }
</style>



<h2 class="my-4" style="text-align:center">Contact US</h2>




<div class="row my-4 " style="margin-top: 20px;overflow:hidden;width:100%; margin-bottom:20px;">
 <div class="col-lg-12">
  <form class="bg-white m-auto" action="#">
   <div class="row">
    <div class="col-md-12">
     <div class="mb-3">
      <input type="text" class="form-control" placeholder="Full Name" required>
     </div>
    </div>
    <div class="col-md-12">
     <div class="mb-3">
      <input type="email" class="form-control" placeholder="Email" required>
     </div>
    </div>
    <div class="col-md-12">
     <div class="mb-3">
      <input type="number" class="form-control" placeholder="Number" required>
     </div>
    </div>
    <div class="col-md-12">
     <div class="mb-3">
      <textarea class="form-control" placeholder="Message" required rows="3"></textarea>
     </div>
    </div>
    <button type="button" class="btn btn-warning">Send Now</button>
  </form>
 </div>
</div>
<div class="my-3"></div>



<div class="about-section">
 <h1 class="text-warning">About Us Page</h1>

 <p style="text-align: left;">If you’re looking for that perfect, beautiful website design template for your event management, wedding planning, and styling business – you’re in the right place. Flothemes websites were created with visual portfolios in mind. Photographers, videographers, wedding event planners, florists, make-up artists and so many more creative businesses from all around the world use Flothemes websites to present their work online, get noticed, and get booked! Here’s a selection of 8 beautiful examples of wedding & event planners using Flothemes for their website.</p>
</div>
<div class="my-3"></div>
@endsection