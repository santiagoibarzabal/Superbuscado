
<header class="fixed-top navbar-principal">

  <nav class="first-navbar">
    <div class="container">
      <div class="row">

        <!-- logo -->
        <div class="col-4 col-sm-4 col-md-3 col-lg-2">
          <a href="{{ url('/') }}"><img class="logo-navbar" src="{{ asset('img/logo-superbuscado-white.png')}}" alt=""></a>
        </div>

        <!-- menu user -->

        <nav class="navbar col-8 col-sm-8 col-md-9 col-lg-10 navbar-expand-lg navbar-dark pl-0">

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <div class="navbar-nav">
              <div class="nav-item dropdown">
                <a class="nav-link btn-account" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="button-account">
                    <p class="my-account">Mi cuenta</p>
                    <p class="user-account"> {{auth()->user()->email}} </p>
                  </div>
                  <span class="icon-arrow-down white"></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                  <li>
                    <a class="dropdown-item" href="{{ url('/listings/{id}') }}">Mis listas</a>
                  </li>

                  <li>
                    <a class="dropdown-item" href="{{ url('/carts') }}">Compras</a>
                  </li>

                  <li>
                    <a class="dropdown-item" href="{{ url('/profile') }}">Mis datos</a>
                  </li>

                  <li>
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Salir') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </li>

                </ul>
              </div>
            </div>
          </div>
        </nav>

      </div>
    </div>
  </nav>

  <!-- _____________________ Nav sections _____________________ -->

  <nav class="second-navbar py-2">
    <nav class="container">
      <div class="row">

        <!-- Ubicación -->

        <nav class="display-flex col-12">
          <a class="btn-location" href="{{url('addresses/edit')}}">
            <span class="icon-location green"></span>
            <p class="location">{{auth()->user()->address->address ?? "Ingresá tu dirección"}}</p>
          </a>
        </nav>


      </div>
    </nav>
  </nav>

</header>
