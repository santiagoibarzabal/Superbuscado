<!DOCTYPE html>
<html>

<head>

  <!-- Configuración -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Login</title>

  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

  <!-- styles CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/login_register_contact.css')}}">

  <!-- icons -->
  <link rel="stylesheet" href="{{ asset('css/icons/icons.css')}}">

  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&display=swap" rel="stylesheet">

  <!-- favicon -->
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />

</head>

<body class="bg-grey">

  <section class="container">
    <div class="row d-flex justify-content-center">

      <div class="col-12 d-flex justify-content-center my-5">
        <a href="{{ url('/') }}">
          <img class="logo-navbar-green" src="{{ asset("img/logos/logo-superbuscado-gray.png")}}" alt="">
        </a>
      </div>

      <!-- _____________________ Login _____________________ -->

      <div class="col-12 col-md-8 col-lg-5 mb-5">
        <div class="card card-shadow d-flex align-items-center">

          <div class="row">
            <div class="col-12">

              <div class="icon-happy-container mt-3"></div>

              <p class="title-login">Ingresá tu mail para recuperar tu contraseña</p>

              <div class="mb-2" style="color: #e03232; background-color: color: #f8d7da;">

              </div>

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                <div class="row">

                  <div class="col-12 d-flex justify-content-center form-group">
                    <input class="input-login form-control @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>


                  </div>
                  <div class="col-12 mb-2" style="color: #e03232; background-color: color: #f8d7da;">
                    @error('email')
                            {{ $message }}
                    @enderror
                  </div>


                  <div class="col-12 d-flex justify-content-center form-group">
                    <button class="btn-ingresar" type="submit" name="button">Recuperar contraseña</button>
                  </div>



                </div>
              </form>

            </div>
            <p class="redirect">¿Todavía no tenés una cuenta? <a class="redirect-link" href="{{ url('register') }}">Registrate</a></p>
            <p class="redirect">¿Ya tenés una cuenta? <a class="redirect-link" href="{{ url('login') }}">Ingresá</a></p>
          </div>

        </div>
      </div>

    </div>
  </section>



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
