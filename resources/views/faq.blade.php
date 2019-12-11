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

              <a class="icon-contact-list mt-3 text-decoration d-flex justify-content-center" href="{{ url('/') }}">
              </a>

              <p class="title-login">Preguntas frecuentes</p>

              <div class="row d-flex justify-content-center">
                <div class="col-12">
                    <!-- FAQ -->
                    <div class="accordion" id="accordionExample">
                      <div class="card">
                        <div class="card-header" id="headingUno">
                          <h2 class="mb-0">
                            <button class="btn collapsed btn-success btn-md btn-block" type="button" data-toggle="collapse" data-target="#collapseUno" aria-expanded="false" aria-controls="collapseUno">
                              ¿Como me registro?
                            </button>
                          </h2>
                        </div>
                        <div id="collapseUno" class="collapse" aria-labelledby="headingUno" data-parent="#accordionExample">
                          <div class="d-flex justify-content-center card-body">
                            <a class="green text-center text-decoration" href="{{url('/register')}}">Ingresá a nuestro formulario de registro</a>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingDos">
                          <h2 class="mb-0">
                            <button class="btn collapsed btn-success btn-md btn-block" type="button" data-toggle="collapse" data-target="#collapseDos" aria-expanded="false" aria-controls="collapseDos">
                              ¿Como busco un producto?
                            </button>
                          </h2>
                        </div>
                        <div id="collapseDos" class="collapse" aria-labelledby="headingDos" data-parent="#accordionExample">
                          <div class="d-flex justify-content-center card-body text-center">
                            <a class="green text-decoration" href="{{url('/listings/new')}}">Una vez registrado podrás crear tu lista y empezar a buscar productos directamente o filtrar por categoría para luego agregarlos.</a>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingTres">
                          <h2 class="mb-0">
                            <button class="btn collapsed btn-success btn-md btn-block" type="button" data-toggle="collapse" data-target="#collapseTres" aria-expanded="false" aria-controls="collapseTres">
                              ¿Como establezco mi ubicacion?
                            </button>
                          </h2>
                        </div>
                        <div id="collapseTres" class="collapse" aria-labelledby="headingTres" data-parent="#accordionExample">
                          <div class="d-flex justify-content-center card-body text-center">
                            <a class="green text-decoration" href="{{url('/profile')}}">Una vez registrado, ingresá a Mis Datos y establecé tu domicilio.</a>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingCuatro">
                          <h2 class="mb-0">
                            <button class="btn collapsed btn-success btn-md btn-block" type="button" data-toggle="collapse" data-target="#collapseCuatro" aria-expanded="false" aria-controls="collapseCuatro">
                              ¿Puedo cambiar mi direccion?
                            </button>
                          </h2>
                        </div>
                        <div id="collapseCuatro" class="collapse" aria-labelledby="headingCuatro" data-parent="#accordionExample">
                          <div class="d-flex justify-content-center card-body text-center">
                            <a class="green text-decoration" href="{{url('/profile')}}">Una vez registrado, ingresá a Mis Datos y modificá tu domicilio.</a>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingCinco">
                          <h2 class="mb-0">
                            <button class="btn collapsed btn-success btn-md btn-block" type="button" data-toggle="collapse" data-target="#collapseCinco" aria-expanded="false" aria-controls="collapseCinco">
                              ¿Que comercios encuentro en SuperBuscado?
                            </button>
                          </h2>
                        </div>
                        <div id="collapseCinco" class="collapse" aria-labelledby="headingCinco" data-parent="#accordionExample">
                          <div class="d-flex justify-content-center card-body text-center">
                            <a class="green text-decoration" href="{{url('/')}}">Encontrarás supermercados como Coto, Jumbo, Carrefour y Dia, entre otros.</a>
                          </div>
                        </div>
                      </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingSeis">
                          <h2 class="mb-0">
                            <button class="btn collapsed btn-success btn-md btn-block" type="button" data-toggle="collapse" data-target="#collapseSeis" aria-expanded="false" aria-controls="collapseSeis">
                              ¿Como armo mi lista de productos?
                            </button>
                          </h2>
                        </div>
                        <div id="collapseSeis" class="collapse" aria-labelledby="headingSeis" data-parent="#accordionExample">
                          <div class="d-flex justify-content-center card-body text-center">
                            <a class="green text-decoration" href="{{url('/listings/new')}}">Una vez registrado podrás crear tu lista y empezar a buscar productos o filtrar por categoría para luego agregarlos.</a>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingSiete">
                          <h2 class="mb-0">
                            <button class="btn collapsed btn-success btn-md btn-block" type="button" data-toggle="collapse" data-target="#collapseSiete" aria-expanded="false" aria-controls="collapseSiete">
                              ¿Como comparo los precios de distintos comercios?
                            </button>
                          </h2>
                        </div>
                        <div id="collapseSiete" class="collapse" aria-labelledby="headingSiete" data-parent="#accordionExample">
                          <div class="d-flex justify-content-center card-body text-center">
                            <a class="green text-decoration" href="{{url('/listings')}}">No te tenés que preocupar por eso, ya lo hacemos por vos.</a>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingNueve">
                          <h2 class="mb-0">
                            <button class="btn collapsed btn-success btn-md btn-block" type="button" data-toggle="collapse" data-target="#collapseNueve" aria-expanded="false" aria-controls="collapseNueve">
                              ¿No logramos cubrir todas tus dudas?
                            </button>
                          </h2>
                        </div>
                        <!-- Agregar Link hacia contacto -->
                        <div id="collapseNueve" class="collapse" aria-labelledby="headingNueve" data-parent="#accordionExample">
                          <div class="d-flex justify-content-center card-body text-center">
                              <a class="green text-decoration" href="{{url('/contact')}}">Ingresá a nuestro formulario de contacto.</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            </div>
            </div>
            </div>
          </section>

@endsection
