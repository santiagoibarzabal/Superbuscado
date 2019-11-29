@extends('layouts.auth')

@section('title')
  Superbuscado - Login
@endsection

@section('content')
      <!-- _____________________ Login _____________________ -->

      <div class="col-12 col-md-8 col-lg-5 mb-5">
        <div class="card card-shadow d-flex align-items-center">

          <div class="row">
            <div class="col-12">

              <div class="icon-happy-container mt-3"></div>

              <p class="title-login">¡Bienvenid@! <br> Nos encanta tenerte de vuelta.</p>

              <div class="mb-2" style="color: #e03232; background-color: color: #f8d7da;">

              </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                <div class="row">

                  <div class="col-12 d-flex justify-content-center">
                    <input class="input-login form-control @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                  </div>
                  <div class="col-12 mb-2" style="color: #e03232; background-color: color: #f8d7da;">
                    @error('email')
                            {{ $message }}
                    @enderror
                  </div>

                  <div class="col-12 d-flex justify-content-center">

                    <input class="input-login form-control @error('password') is-invalid @enderror" id="password" type="password" name="password" value="{{ old('password') }}" placeholder="Contraseña">
                  </div>
                  <div class="col-12 mb-2" style="color: #e03232; background-color: color: #f8d7da;">
                    @error('password')
                            {{ $message }}
                    @enderror
                  </div>

                  <div class="col-12 remember">
                    <input value="remember" type="checkbox" name="remember" id="remember3" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember3"> Recordar usuario </label>
                  </div>

                  <div class="col-12 d-flex justify-content-center">
                    <button class="btn-ingresar" type="submit" name="button">Ingresar</button>
                  </div>

                  @if (Route::has('password.request'))
                      <a class="col-12 btn redirect-link justify-content-center" href="{{ route('password.request') }}">
                        Recuperar contraseña
                          {{-- {{ __('Forgot Your Password?') }} --}}
                      </a>
                  @endif

                </div>
              </form>

              <p class="redirect">¿Todavía no tenés una cuenta? <a class="redirect-link" href="register">Registrate</a></p>

            </div>

          </div>

        </div>
      </div>

    </div>
  </section>

@endsection
