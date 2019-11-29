@extends('layouts.auth')

@section('title')
  Superbuscado - Recuperar contraseña
@endsection

@section('content')
      <!-- _____________________ EMAIL _____________________ -->

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

@endsection
