@extends('layouts.auth')

@section('title')
  Superbuscado - Recuperar contraseña
@endsection

@section('content')
<!-- _____________________ RESET _____________________ -->

<div class="col-12 col-md-8 col-lg-5 mb-5">
  <div class="card card-shadow d-flex align-items-center">

    <div class="row">
      <div class="col-12">

        <div class="icon-happy-container mt-3"></div>

        <p class="title-login">Ingresá tu mail para recuperar tu contraseña</p>

        <div class="mb-2" style="color: #e03232; background-color: color: #f8d7da;">

        </div>

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">
          <div class="row">

            {{-- EMAIL --}}

            <div class="col-12 d-flex justify-content-center">
              <input id="email" type="email" class="input-login form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
            </div>

            <div class="col-12 mb-2" style="color: #e03232; background-color: color: #f8d7da;">
              @error('email')
                      {{ $message }}
              @enderror
            </div>

            {{-- PASSWORD --}}

            <div class="col-12 mb-2">
                <input id="password" type="password" class="input-login mb-2 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">
            </div>
            <div class="col-12 mb-2" style="color: #e03232; background-color: color: #f8d7da;">
              @error('password')
                      {{ $message }}
              @enderror
            </div>

            {{-- PASSWORD CONFIRM --}}
            <div class="col-12 mb-2">
                <input class="input-login mb-2 form-control" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar contraseña">
            </div>



            <div class="col-12 d-flex justify-content-center form-group">
              <button class="btn-ingresar" type="submit" name="button">Actualizar contraseña</button>
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
