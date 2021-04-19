<style>
 .dropdown,
 .dropend,
 .dropstart,
 .dropup {
  position: relative;
  color: #212529;
 }
</style>

<header class="p-3 bg-dark text-white">
 <div class="container">
  <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
   <h1 style="color: white;">Eventro</h1>

   <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
    <li><a href="{{url('/')}}" class="nav-link px-2 text-white">Home</a></li>
    <li><a href="{{url('/pricing')}}" class="nav-link px-2 text-white">Pricing</a></li>
    <li><a href="{{url('/ourteam')}}" class="nav-link px-2 text-white">Our Team</a></li>
    <li><a href="{{url('/joinus')}}" class="nav-link px-2 text-white">Join Us</a></li>
    <li><a href="{{url('/aboutus')}}" class="nav-link px-2 text-white">About Us</a></li>
   </ul>

   @if (Route::has('login'))

   @auth
   <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
     Profile
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
     <form method="POST" action="{{ route('logout') }}">
      @csrf

      <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    this.closest('form').submit();">Logout</a></li>
     </form>

    </ul>
   </li>
   @else
   <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Log in</a>

   @if (Route::has('register'))
   <a href="{{ route('register') }}" class="btn btn-warning ">Register</a>
   @endif
   @endauth

   @endif

  </div>
 </div>
</header>