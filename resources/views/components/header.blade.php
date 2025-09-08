<!-- Header -->
<header class="header">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <!-- Center everything horizontally & stack nicely on mobile -->
        <div class="header_content d-flex flex-wrap align-items-center justify-content-center">

          <!-- Logo -->
          <div class="logo col-12 col-lg-3 text-center mb-3 mb-lg-0">
            <a href="{{ route('home') }}">
              <img src="{{ asset('frontend/images/logo.png') }}" alt="Ceylon 1850 Tourism Experience" class="img-fluid">
            </a>
          </div>

          <!-- Nav -->
          <nav class="main_nav col-12 col-lg-6">
            <ul class="d-flex flex-wrap align-items-center justify-content-center mb-0">
              <li><a href="{{ route('home') }}">Home</a></li>
              <li><a href="{{ route('about') }}">About</a></li>
              <li><a href="{{ route('packages') }}">Packages</a></li>
              <li><a href="{{ route('experiences') }}">Experiences</a></li>
              <li><a href="{{ route('blog') }}">Blog</a></li>
              <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
          </nav>

          <!-- CTA -->
            <div class="col-12 col-lg-3 d-flex justify-content-center align-items-center mt-3 mt-lg-0" style="gap: 15px;">
                <a href="{{ route('contact') }}" class="reservations_phone">Book Now</a>
                @auth
                    <div class="dropdown">
                        <a href="#" class="reservations_phone dropdown-toggle" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="position: relative;">
                            {{ explode(' ', Auth::user()->name)[0] }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown" style="background: #fff; border: 1px solid #e9ecef; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); min-width: 160px; margin-top: 5px;">
                            <a class="dropdown-item" href="#" style="color: #232323; padding: 8px 16px; text-decoration: none; display: block; transition: background-color 0.2s;">Profile</a>
                            <a class="dropdown-item" href="#" style="color: #232323; padding: 8px 16px; text-decoration: none; display: block; transition: background-color 0.2s;">My Bookings</a>
                            <div class="dropdown-divider" style="margin: 4px 0; border-color: #e9ecef;"></div>
                            <form method="POST" action="{{ route('logout') }}" class="d-inline w-100">
                                @csrf
                                <button type="submit" class="dropdown-item" style="background: none; border: none; color: #dc3545; padding: 8px 16px; text-decoration: none; display: block; width: 100%; text-align: left; cursor: pointer; transition: background-color 0.2s;">Logout</button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="reservations_phone">Login</a>
                @endauth
            </div>

        </div>
      </div>
    </div>
  </div>
</header>

<!-- Hamburger -->
<div class="hamburger_bar trans_400 d-flex flex-row align-items-center justify-content-start">
	<div class="hamburger">
		<div class="menu_toggle d-flex flex-row align-items-center justify-content-start">
			<span>menu</span>
			<div class="hamburger_container">
				<div class="menu_hamburger">
					<div class="line_1 hamburger_lines" style="transform: matrix(1, 0, 0, 1, 0, 0);"></div>
					<div class="line_2 hamburger_lines" style="visibility: inherit; opacity: 1;"></div>
					<div class="line_3 hamburger_lines" style="transform: matrix(1, 0, 0, 1, 0, 0);"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Menu -->
<div class="menu trans_800">
	<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
		<ul>
			<li><a href="{{ route('home') }}">home</a></li>
			<li><a href="{{ route('about') }}">about us</a></li>
			<li><a href="{{ route('packages') }}">packages</a></li>
			<li><a href="{{ route('experiences') }}">experiences</a></li>
			<li><a href="{{ route('blog') }}">blog</a></li>
			<li><a href="{{ route('contact') }}">contact</a></li>
			@auth
				<li><a href="#">profile</a></li>
				<li>
					<form method="POST" action="{{ route('logout') }}" class="d-inline">
						@csrf
						<button type="submit" style="background: none; border: none; color: inherit; text-decoration: none; font-family: inherit; cursor: pointer;">logout</button>
					</form>
				</li>
			@else
				<li><a href="{{ route('login') }}">login</a></li>
				<li><a href="{{ route('register') }}">register</a></li>
			@endauth
		</ul>
	</div>
	<div class="menu_reservations_phone ml-auto">Reservations: +94 76 424 6613</div>
</div>
