@extends('templates.master')

@section('content')

<!doctype html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <title>Plans & Pricing</title>

 <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/pricing/">



 <!-- Bootstrap core CSS -->


 <style>
  .bd-placeholder-img {
   font-size: 1.125rem;
   text-anchor: middle;
   -webkit-user-select: none;
   -moz-user-select: none;
   user-select: none;
  }

  @media (min-width: 768px) {
   .bd-placeholder-img-lg {
    font-size: 3.5rem;
   }
  }
 </style>



 <link href="{{asset('assets/css/pricing.css')}}" rel="stylesheet">


<body>

 <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
   <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
  </symbol>
 </svg>

 <div class="container py-3">

  <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
   <h1 class="display-4 fw-normal">Pricing</h1>
   <p class="fs-5 text-muted">Details of the plans and their comparison we are offering right now. Making your life easier</p>
  </div>

  <main>
   <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    <div class="col">
     <div class="card mb-4 rounded-3 shadow-sm  border-warning">
      <div class="card-header py-3 bg-warning border-warning">
       <h4 class="my-0 fw-normal">Conference or Party</h4>
      </div>
      <div class="card-body">
       <h1 class="card-title pricing-card-title">$300<small class="text-muted fw-light">/Day</small></h1>
       <ul class="list-unstyled mt-3 mb-4">
        <li>100 Attenders</li>
        <li>Food Suggestions</li>
        <li>Dressing Theme</li>
        <li>Lighting</li>
       </ul>
       <button type="button" class="w-100 btn btn-lg btn btn-warning">Place an Order</button>
      </div>
     </div>
    </div>
    <div class="col">
     <div class="card mb-4 rounded-3 shadow-sm  border-warning">
      <div class="card-header py-3 bg-warning border-warning">
       <h4 class="my-0 fw-normal">Birthday</h4>
      </div>
      <div class="card-body">
       <h1 class="card-title pricing-card-title">$400<small class="text-muted fw-light">/Day</small></h1>
       <ul class="list-unstyled mt-3 mb-4">
        <li>50 Attenders</li>
        <li>Free Cake</li>
        <li>Full Decoration</li>
        <li>Catering</li>
        <li>Lighting</li>
       </ul>
       <button type="button" class="w-100 btn btn-lg btn-warning">Place an Order</button>
      </div>
     </div>
    </div>
    <div class="col">
     <div class="card mb-4 rounded-3 shadow-sm  border-warning">
      <div class="card-header py-3 bg-warning border-warning">
       <h4 class="my-0 fw-normal">Wedding</h4>
      </div>
      <div class="card-body">
       <h1 class="card-title pricing-card-title">$1500<small class="text-muted fw-light">/3</small></h1>
       <ul class="list-unstyled mt-3 mb-4">
        <li>200 Attenders</li>
        <li>Mehndi</li>
        <li>Barat</li>
        <li>Walima</li>
       </ul>
       <button type="button" class="w-100 btn btn-lg btn-warning">Place an Order</button>
      </div>
     </div>
    </div>
   </div>

   <h2 class="display-6 text-center mb-4">Compare plans</h2>

   <div class="table-responsive">
    <table class="table text-center">
     <thead>
      <tr>
       <th style="width: 34%;"></th>
       <th style="width: 22%;">Conference or Party</th>
       <th style="width: 22%;">Birthday</th>
       <th style="width: 22%;">Wedding</th>
      </tr>
     </thead>
     <tbody>
      <tr>
       <th scope="row" class="text-start">Dressing Theme</th>
       <td><svg class="bi" width="24" height="24">
         <use xlink:href="#check" />
        </svg></td>
       <td><svg class="bi" width="24" height="24">
         <use xlink:href="#check" />
        </svg></td>
       <td><svg class="bi" width="24" height="24">
         <use xlink:href="#check" />
        </svg></td>
      </tr>
      <tr>
       <th scope="row" class="text-start">Food Suggestions</th>
       <td></td>
       <td><svg class="bi" width="24" height="24">
         <use xlink:href="#check" />
        </svg></td>
       <td><svg class="bi" width="24" height="24">
         <use xlink:href="#check" />
        </svg></td>
      </tr>
     </tbody>

     <tbody>
      <tr>
       <th scope="row" class="text-start">Hall Fragrance</th>
       <td><svg class="bi" width="24" height="24">
         <use xlink:href="#check" />
        </svg></td>
       <td><svg class="bi" width="24" height="24">
         <use xlink:href="#check" />
        </svg></td>
       <td><svg class="bi" width="24" height="24">
         <use xlink:href="#check" />
        </svg></td>
      </tr>
      <tr>
       <th scope="row" class="text-start">Reception</th>
       <td></td>
       <td><svg class="bi" width="24" height="24">
         <use xlink:href="#check" />
        </svg></td>
       <td><svg class="bi" width="24" height="24">
         <use xlink:href="#check" />
        </svg></td>
      </tr>
      <tr>
       <th scope="row" class="text-start">Free Cake</th>
       <td></td>
       <td><svg class="bi" width="24" height="24">
         <use xlink:href="#check" />
        </svg></td>
       <td><svg class="bi" width="24" height="24">
         <use xlink:href="#check" />
        </svg></td>
      </tr>
      <tr>
       <th scope="row" class="text-start">Security</th>
       <td></td>
       <td></td>
       <td><svg class="bi" width="24" height="24">
         <use xlink:href="#check" />
        </svg></td>
      </tr>
     </tbody>
    </table>
   </div>
  </main>


 </div>



</body>

</html>


@endsection