@extends('layouts.auth')

@section('title')
  Superbuscado - Registro
@endsection

@section('content')
      <!-- _____________________ Register _____________________ -->

      <div class="col-12 col-md-8 col-lg-5 mb-5">
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

              <p class="redirect">¿Ya tenes una cuenta? <a class="redirect-link" href="login">Iniciar sesión</a></p>

            </div>

          </div>

        </div>
      </div>

    </div>
  </section>

@endsection
