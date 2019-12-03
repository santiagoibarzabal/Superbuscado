@extends('layouts.auth')

@section('content')
      <!-- _____________________ Register _____________________ -->

      <div class="col-12 col-md-8 col-lg-5 mb-5">
        <div class="card card-shadow d-flex align-items-center">
          <div class="row">
            <div class="col-12">

              <div class="icon-piggy-bank mt-3"></div>
              @if (session('resent'))
                  <div class="title-login alert alert-success" role="alert">
                      {{ __('Ya te enviamos un nuevo enlace de verificación.') }}
                  </div>
              @endif

                <div class="row">

                  <p class="redirect mt-4">
                    {{ __('Antes de continuar, revisá si recibiste el link de verificación.') }} <br> <br>
                    <a class="redirect-link mt-4" href="{{ route('verification.resend') }}">{{ __('Clickeá')}}</a>
                    {{ __('si no lo recibiste') }}
                  </p>

                </div>

              </div>

          </div>
      </div>
    </div>
  </section>

@endsection
