@extends('layouts.website')

@section('title')
  Mis listas
@endsection

@section('content')

  @if ($listings->isEmpty())

    <!-- _____________________ Sin listas _____________________ -->

    <section class="container container-index list-center">
      <div class="row">

        <div class="col-12">
          <p class="title-create-list">Crea tu primer lista del super!</p>
          <a class="icon-plus-circle d-flex justify-content-center" href="{{asset('listings/new')}}"></a>
        </div>

      </div>
    </section>

  @else
    <section class="container container-index">
      <div class="row">

        <!-- _____________________ create new list _____________________ -->

        <div class="col-12 d-flex justify-content-start">
          <a class="icon-plus-circle mr-2" style="font-size: 1.5rem;" href="{{ url('/listings/new') }}"></a>
          <a href="{{ url('/listings/new') }}">
            <ha class="title-new-list"><b>Nueva Lista</b></h4>
          </a>
        </div>

        @foreach ($listings as $listing)

        <!-- _____________________ lists _____________________ -->

        <div class="col-12 col-md-6 col-lg-4">
          <div class="card card-new-list sinbordefondo-green p-3 mt-4">


            <div class="row">

              <div class="col-10 pr-0">
                <a href="{{ url('/listings/'. $listing->id .'/edit') }}">
                  <div class="row">
                    <div class="col-5 col-sm-4 col-md-5">
                      <div class="card card-quantity d-flex justify-content-center">
                        <p class="quantity-list">
                          {{ $listing->quantity ?? 0 }}
                        </p>
                        <p class="productos-list-1">Productos</p>
                      </div>
                    </div>

                    <div class="col-7 col-sm-8 col-md-7 p-0">
                      <p class="name-list">{{$listing->name}}</p>
                      <p class="date-list">Última modificación {{$listing->updated_at}}</p>
                    </div>

                  </div>
                </a>
              </div>


              <form class="col-2 exit-icon" action="{{ url('/listings', $listing->id) }}" method="POST">
                @csrf
                @method('delete')
                <button class="icon-exit-circle btn-exit p-0" style="background-color: transparent; border: none;"></button>
              </form>

            </div>


          </div>
        </div>

        @endforeach
      </div>
    </section>
  @endif

@endsection
