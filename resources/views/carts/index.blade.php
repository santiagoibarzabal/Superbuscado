<!DOCTYPE html>
<html>

<head>

  <!-- Configuración -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Mi primer lista</title>

  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

  <!-- styles CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
  <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
  <link rel="stylesheet" href="{{ asset('css/listings.css') }}">
  <link rel="stylesheet" href="{{ asset('css/cart.css') }}">

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
            <a href="{{ url('/listings') }}"><img class="logo-navbar" src="{{ asset('img/logo-superbuscado-white.png')}}" alt=""></a>
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

    <!-- _____________________ Nav sections _____________________ -->

    <nav class="second-navbar py-2">
      <nav class="container">
        <div class="row">

          <!-- Ubicación -->

          <nav class="display-flex col-12">
            @if(auth()->user()->address != null)
              <a class="btn-location" href="{{url('/addresses/edit')}}">
            @else
                <a class="btn-location" href="{{url('/addresses/new')}}">
            @endif
              <span class="icon-location green"></span>
              <p class="location">{{auth()->user()->address->address . ' (' . auth()->user()->address->zip_code . ')' ?? "Ingresá tu dirección"}}</p>
            </a>
          </nav>


        </div>
      </nav>
    </nav>

  </header>

  <!-- _____________________ Detalle de orden _____________________ -->

  <section class="container container-index">
    <div class="row">

      {{------------- Comparación de precios ------------}}

      <div class="col-12 col-lg-6">

        <h5 class="mb-3 titulo-categoria"><b>Seleccioná un Super</b></h5>

          <div class="row">

            <!-- Producto -->
            @foreach ($query as $q)
              @if(auth()->user()->address->zip_code == $q->store_zip_code)

              @if($list->id == $q->listing_id)

            <!-- Markets -->

            <a class="col-12 mb-3" href="{{ url('/listings/' . $list->id . '/carts/' . $q->store_id) }}">

              <div class="card card-hover">

                  <button class="delete-product" href="producto_descripcion.php">
                    <div class="row py-3 mx-0">

                      <div class="col-3 col-md-2">
                        <div class="icon-market" style="background-image: url({{asset($q->logo)}})"></div>
                      </div>

                      <div class="col-9 col-md-10 pl-0">
                        <p class="mb-0 text-align"><b>{{$q->market_name . '/'}}</b> {{$q->store_address . ' (' . $q->store_zip_code . ')'}}</p>
                        <hr class="my-2">

                        <div class="row">
                          <div class="col-6 pr-0">
                            <p class="preciopromedio text-align">Precio Total</p>
                            <p class="text-align mb-0 total-price">{{'$' . $q->total_price}}</p>
                          </div>
                          <div class="col-6 d-flex justify-content-end">
                            <p class="preciopromedio">{{'Total de productos: ' . $q->total_quantity}}</p>
                          </div>
                        </div>

                      </div>

                    </div>
                  </button>

              </div>
            </a>


            @endif
            @endif

            @endforeach

          </div>
      </div>

      {{------------- Selección de Supermercado ------------}}

      {{-- <div class="col-12 col-lg-6">

        <h5 class="mb-3 titulo-categoria"><b>Supermercado seleccionado</b></h5>

        <div class="card card-market">
          <div class="d-flex align-items-center">
            <div class="icon-market mr-3" style="background-image: url({{asset('img/logos/iso_carrefour.png')}})"></div>
            <p class="mb-0 market-select"><b>Carrefour</b> / Av Rivadavia 569, CABA</p>
          </div>
        </div>

        <h5 class="mb-3 mt-4 titulo-categoria"><b>Detalle de orden</b></h5>

        <div class="detalle-orden">

          <div class="d-flex justify-content-end"> --}}

            {{-- <div class="py-2">
              <b>Cant.</b>
            </div>
            <div class="px-4 py-2">
              <b>Precio</b>
            </div>
            <div class="px-3 py-2">
              <b>Total</b>
            </div>
            <div class="p-2">
            </div>
            <div class="p-2 espacio-vacio"></div>
          </div>

          <div class="p-2">
            <hr class="m-0">
          </div>

          <div class="d-flex">
            <div class="p-2 flex-grow-1">
              Mayonesa Light Doypack Hellmanns 237 Gr.
            </div>
            <div class="p-2">
              2
            </div>
            <div class="p-2">
              $4449,99
            </div>
            <div class="p-2">
              $19002.99
            </div>
            <div class="p-2">
              <button class="delete-product" type="button" name="delete-product">
                <span class="icon-exit-circle m-0" style="color: #69B948;"></span>
              </button>
            </div>
          </div>

          <div class="p-2">
            <hr class="m-0">
          </div>

          <div class="d-flex">
            <div class="p-2 flex-grow-1">
              Mayonesa Light Doypack Hellmanns 237 Gr.
            </div>
            <div class="p-2">
              2
            </div>
            <div class="p-2">
              $4449,99
            </div>
            <div class="p-2">
              $19002.99
            </div>
            <div class="p-2">
              <button class="delete-product" type="button" name="delete-product">
                <span class="icon-exit-circle m-0" style="color: #69B948;"></span>
              </button>
            </div>
          </div>

        </div> --}}

        <!-- Botón checkout -->

        {{-- <form class="card btn-buy btn-border-hover text-center my-3" action="cart.php" method="post">
          <input class="sinbordefondo-green" type="button" name="checkout" value="Proceder al pago y envío">
        </form>

      </div> --}}

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
          <a class="link-footer" href="#"><p class="mb-0">Preguntas frecuentes</p></a>
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


</body>

</html>
