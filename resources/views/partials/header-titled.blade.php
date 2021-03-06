@include('partials.search')
<div class="hero">
  <div class="hero-overlay">
    <div class="container">
      <header class="header">
        <div class="float-left">
          <a href="{{ url('/') }}" class="logo" >
            <img src="{{ asset('images/logo.png') }}"alt="Stan Logo">
          </a>
        </div>
        <div class="float-right relative">
          <ul class="navigation">
            <li><a href="{{ url('/nieuws') }}" class="navigation-item">Nieuws</a></li>
            <li><a href="{{ url('/getuigenissen') }}" class="navigation-item">Getuigenissen</a></li>
            <li><a href="{{ url('/scholen') }}" class="navigation-item">Scholen</a></li>
            <li><a href="{{ url('/bezienswaardigheden') }}" class="navigation-item">Bezienswaardigheden</a></li>
            @if(Auth::check())
              <li><a href="{{ url('/admin') }}" class="navigation-item">Admin</a></li>
            @endif
          </ul>
          <div class="menu-holder">
            <div class="menu-search" id="menu-search-button">
              <i class="fa fa-search"></i>
            </div>
            <div class="menu-account" id="menu-account-button">
              <i class="fa fa-user"></i>
            </div>
            <div class="menu-navigation" id="menu-navigation">
              <i class="fa fa-bars"></i>
            </div>
          </div>
          <div class="select-options-holder select-account" id="select-account">
              @if(Auth::check())
                <div class="select-option"><a href='{{ url('/profiel') }}'>{{ Auth::user()->firstName }} {{ Auth::user()->lastName }}</a></div>
                <div class="select-option"><a href="{{ url('/logout') }}">Uitloggen</a></div>
              @else
                <div class="select-option"><a href="{{ url('/registreer') }}">Registreer</a></div>
                <div class="select-option"><a href="{{ url('/login') }}">Inloggen</a></div>
              @endif
          </div>
      </header>
    </div>
    <div class="header-underlined"></div>
    <div class="container">
      <div class="title">
        <h1>{{ $title }}</h1>
      </div>
    </div>
  </div>
</div>
