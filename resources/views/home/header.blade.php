<header class="site-header js-site-header">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-6 col-lg-4 site-logo" data-aos="fade"><a href="/">Hotel</a></div>
        <div class="col-6 col-lg-8">

          <div class="site-menu-toggle js-site-menu-toggle"  data-aos="fade">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="site-navbar js-site-navbar">
            <nav role="navigation">
              <div class="container">
                <div class="row full-height align-items-center">
                  <div class="col-md-6 mx-auto">
                    <ul class="list-unstyled menu">
                      <li class="active"><a href="/">Home</a></li>
                      <li><a href="{{ route('about') }}">About</a></li>
                      <li><a href="{{ route('contact') }}">Contact</a></li>
                      @if(Auth::check() && Auth::user()->usertype == 'admin')
                      <li><a href="/bookings">Admin Panel</a></li>
                      @endif
            
                      @if (Route::has('login'))
                          @auth
                          <x-app-layout>
                          </x-app-layout>
                          @else
                          <li><a href="{{ url('login') }}">Login</a></li>
                            @if (Route::has('register'))
                            <li><a href="{{ url('register') }}">Register</a></li>
                            @endif
                          @endauth
                       @endif
                    </ul>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
</header>