<!DOCTYPE html>
<html>

<head>

  <!-- Configuración -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Mi domicilio</title>

  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

  <!-- styles CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
  <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
  <link rel="stylesheet" href="{{ asset('css/listings.css')}}">
  <link rel="stylesheet" href="{{ asset('css/profile.css')}}">
  <link rel="stylesheet" href="{{ asset('css/login_register_contact.css')}}">
  <link rel="stylesheet" href="{{ asset('css/edit_profile.css')}}">

  <!-- icons -->
  <link rel="stylesheet" href="{{ asset('css/icons/icons.css') }}">

  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&display=swap" rel="stylesheet">

  <!-- favicon -->
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />

</head>

<body class="bg-grey">

  <!-- _____________________ Navbar _____________________ -->

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
                      <p class="user-account">{{auth()->user()->email}}</p>
                    </div>
                    <span class="icon-arrow-down white"></span>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                    <li>
                      <a class="dropdown-item" href="{{ url('/listings') }}">Mis listas</a>
                    </li>

                    {{-- <li>
                      <a class="dropdown-item" href="{{ url('/carts') }}">Compras</a>
                    </li> --}}

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

  </header>

  <!-- _____________________ Address _____________________ -->

  <section class="container" style="padding-top:8em;">
    <div class="row d-flex justify-content-center">

      <form class="col-12" action="{{url('/addresses')}}" method="post">
        @csrf

        <div class="row d-flex justify-content-center">



          <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4">
            <div class="card card-profile pb-4">

              <!-- editar direccion -->

              <h6 class="email-profile green brd-bottom-green mb-4">Ingresar domicilio</h6>
              <div class="row email-edit mb-2">
                <div class="col-4 col-lg-3 col-xl-3 d-flex justify-content-start align-items-center">
                  <label for="">Direccion:</label>
                </div>
                <div class="col-8 col-lg-9 col-xl-9 d-flex justify-content-start">
                  <input class="form-control @error('address') is-invalid @enderror" type="text" name="address" value="">
                </div>
                <div class="col-12 mb-2" style="color: #e03232; background-color: color: #f8d7da;">
                  @error('address')
                          {{ $message }}
                  @enderror
                </div>
              </div>

              <!-- editar departamento -->


              <div class="row email-edit mb-2">
                <div class="col-4 col-lg-3 col-xl-3 d-flex justify-content-start align-items-center">
                  <label for="">Depto.:</label>
                </div>
                <div class="col-8 col-lg-9 col-xl-9 d-flex justify-content-start">
                  <input class="form-control @error('apartment') is-invalid @enderror" type="text" name="apartment" value="">
                </div>
                <div class="col-12 mb-2" style="color: #e03232; background-color: color: #f8d7da;">
                  @error('apartment')
                          {{ $message }}
                  @enderror
                </div>
              </div>

              <!-- editar zona/ciudad -->

              <div class="row nombre-edit mb-2">
                <div class="col-4 col-lg-3 col-xl-3 d-flex justify-content-start align-items-center">
                  <label for="">Ciudad</label>
                </div>
                <div class="col-8 col-lg-9 col-xl-9 d-flex justify-content-start">
                  <input class="form-control @error('city') is-invalid @enderror" type="text" name="city" value="">
                </div>
                <div class="col-12 mb-2" style="color: #e03232; background-color: color: #f8d7da;">
                  @error('city')
                          {{ $message }}
                  @enderror
                </div>
              </div>

              <!-- editar provincia -->

              <div class="row apellido-edit mb-2">
                <div class="col-4 col-lg-3 col-xl-3 d-flex justify-content-start align-items-center">
                  <label for="">Provincia:</label>
                </div>
                <div class="col-8 col-lg-9 col-xl-9 d-flex justify-content-start">
                  <input class="form-control @error('province') is-invalid @enderror" type="text" name="province" value="">
                </div>
                <div class="col-12 mb-2" style="color: #e03232; background-color: color: #f8d7da;">
                  @error('province')
                          {{ $message }}
                  @enderror
                </div>
              </div>

              <!-- editar codigo postal -->

              <div class="row dni-edit mb-2">
                <div class="col-4 col-lg-3 col-xl-3 d-flex justify-content-start align-items-center">
                  <label for="">C.Postal:</label>
                </div>
                <div class="col-8 col-lg-9 col-xl-9 d-flex justify-content-start">
                  <input class="form-control @error('zip_code') is-invalid @enderror" type="text" name="zip_code" value="">
                </div>
                <div class="col-12 mb-2" style="color: #e03232; background-color: color: #f8d7da;">
                  @error('zip_code')
                          {{ $message }}
                  @enderror
                </div>
              </div>
              </div>

              <div class="d-flex justify-content-end">
                <input class="btn-ingresar mb-0" type="submit" name="" value="¡Comenzar!">
              </div>

            </div>
          </div>

        </div>
      </form>

    </div>
  </section>


  <!-- _____________________ Footer _____________________  -->

  <footer class="footer-index">
    <div class="container">
      <div class="row display-footer">

        <div class="col-12 col-md-1 display-footer">
          <span class="icon-superbuscado-iso-circle green iso-footer"></span>
        </div>

        <div class="col-12 col-md-5 col-lg-4 display-footer">
          <p class="slogan-footer">Todos los precios de <br> supermercados en un sólo lugar.</p>
        </div>

        <div class="col-10 col-md-3 col-lg-4 border-footer">
          <a class="link-footer" href="{{ url('/contact') }}"><p>Contactanos</p></a>
          <a class="link-footer" href="{{ url('/faq') }}"><p class="mb-0">Preguntas frecuentes</p></a>
        </div>

        <div class="col-8 col-md-3 d-flex justify-content-around align-items-center">
          <a class="icon-social-footer" href="https://www.facebook.com/Superbuscado-109530587096091/"><span class="icon-facebook-circle green icon-social-footer"></span></a>
          <a class="icon-social-footer" href="https://www.instagram.com/superbuscado/"><span class="icon-instagram-circle green icon-social-footer"></span></a>
          <a class="icon-social-footer" href="https://twitter.com/super_buscado"><span class="icon-twitter-circle green icon-social-footer"></span></a>
        </div>

      </div>
    </div>
  </footer>




  <!-- jQuery CDN - Slim version (=without AJAX) -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <!-- Popper.JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

  <!-- jQuery Custom Scroller CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

  <script>
    function cambiar(){
      var pdrs = document.getElementById('img-profile').files[0].name;
      document.getElementById('info').innerHTML = pdrs;
    }
  </script>

</body>

</html>
