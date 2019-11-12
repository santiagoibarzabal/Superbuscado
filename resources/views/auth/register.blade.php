{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}



<!DOCTYPE html>
<html>

<head>

    <!-- Configuración -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registro</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- styles CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login_register_contact.css">

    <!-- icons -->
    <link rel="stylesheet" href="assets/icons/icons.css">

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&display=swap" rel="stylesheet">

    <!-- favicon -->
    <link rel="shortcut icon" href="iso-superbuscado.ico" />

</head>

<body class="bg-grey">

  <!-- _____________________ Register _____________________ -->

  <section class="container pt-5">
    <div class="row d-flex justify-content-center">

      <div class="col-12 col-md-8 col-lg-5">
        <div class="card card-shadow d-flex align-items-center">

          <div class="row">
            <div class="col-12">

              <div class="icon-piggy-bank mt-3"></div>

              <p class="title-login">¡Este es tu primer paso <br> para comenzar a ahorrar!</p>

              <form class="" action="{{ route('register') }}" method="post">
                @csrf

                <div class="row">

                  {{-- NAME --}}

                  <div class="col-12 mb-0">
                    <input class="input-login mb-2 form-control @error('first_name') is-invalid @enderror" type="text" id="name" name="first_name" value="{{ old('first_name') }}" placeholder="Nombre" required autocomplete="name">
                  </div>
                  <div class="col-12 mb-2" style="color: #e03232; background-color: color: #f8d7da;">
                    @error('first_name')
                            {{ $message }}
                    @enderror
                  </div>

                  {{-- Lastname --}}

                  <div class="col-12 mb-0">
                    <input class="input-login mb-2 form-control @error('last_name') is-invalid @enderror" type="text" id="lastname" name="last_name" value="{{ old('last_name') }}" placeholder="Apellido" required autocomplete="last_name">
                  </div>
                  <div class="col-12 mb-2" style="color: #e03232; background-color: color: #f8d7da;">
                    @error('last_name')
                            {{ $message }}
                    @enderror
                  </div>

                  {{-- EMAIL --}}

                  <div class="col-12 mb-0">
                    <input class="input-login mb-2 form-control @error('email') is-invalid @enderror" id="email" type="text" name="email" value="{{ old('email') }}" placeholder="E-Mail" required autocomplete="email">
                  </div>
                  <div class="col-12 mb-2" style="color: #e03232; background-color: color: #f8d7da;">
                    @error('email')
                          {{ $message }}
                    @enderror
                  </div>

                  {{-- PASSWORD CONFIRMATION --}}

                  <div class="col-12 mb-0">

                    <input class="input-login mb-2 form-control @error('password') is-invalid @enderror" id="password" type="password" name="password" value="{{old('password')}}" placeholder="Contraseña" required autocomplete="password">
                  </div>
                  <div class="col-12 mb-2" style="color: #e03232; background-color: color: #f8d7da;">
                    @error('password')
                        {{ $message }}
                    @enderror
                  </div>

                  <div class="col-12 mb-0">


                    <input class="input-login mb-2 form-control" type="password" id="password-confirm" name="password_confirmation" value="" placeholder="Confirmar contraseña" required autocomplete"new password">
                  </div>



                  <div class="col-12 d-flex justify-content-center">
                    <button class="btn-ingresar" type="submit" name="button">Registrate</button>
                  </div>

                </div>


              </form>

              <p class="terminos-y-condiciones">Al hacer clic en "Registrate", acepta nuestros <a class="redirect-link" href="#">términos de servicio y política de privacidad.</a>  Ocasionalmente le enviaremos correos electrónicos relacionados con la cuenta.</p>

              <p class="redirect">¿Ya tenes una cuenta? <a class="redirect-link" href="login.php">Iniciar sesión</a></p>

            </div>

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
