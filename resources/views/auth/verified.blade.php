@extends('layouts.auth')

@section('content')
      <!-- _____________________ Register _____________________ -->

      <div class="col-12 col-md-8 col-lg-5 mb-5">
        <div class="card card-shadow d-flex align-items-center justify">



              <div class="icon-piggy-bank mt-3">

              </div>



                    <div class="redirect-link mt-4">
                        {{ __('Tu email se ha verificado') }}
                    </div>

                    <p class="redirect mt-4">
                      {{ __('Añadí productos a tu lista y nosotros te ofrecemos las mejores opciones al mejor precio para tu compra .')}}
                    </p>

                    <button class="btn-ingresar">
                      <a class="redirect-link mt-4" href="{{ url('/listings') }}">
                        {{ __('Comenzar compra')}}
                      </a>
                    </button>


                  </div>
                </div>
      </div>
    </div>
  </section>

@endsection
