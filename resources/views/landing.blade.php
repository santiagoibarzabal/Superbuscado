<!DOCTYPE html>
<html>

<head>

    <!-- Configuración -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Superbuscado</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- styles CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/landing_style.css') }}">

    <!-- icons -->
    <link rel="stylesheet" href="{{ asset('css/icons/icons.css') }}">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&display=swap" rel="stylesheet">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />

</head>

<body>

  <!-- _____________________ Nav _____________________  -->

  <nav class="linear-gradient fixed-top">
    <div class="container">
      <div class="row">

        <!-- Logo -->

        <div class="col-3">
          <a href="{{ url('/') }}">
            <img class="logo-navbar-green" src="{{ asset('img/logos/logo-superbuscado-green.png') }}" alt="logo superbuscado">
          </a>
        </div>

        <!-- Botones login -->

        <div class="col-9 navbar">
          <a class="btn-login mr-4" href="login.php">Iniciar sesión</a>
          <a class="btn-register py-1 px-3" href="register.php">Registrate</a>
        </div>

      </div>
    </div>
  </nav>

  <!-- _____________________ Header _____________________  -->

  <header class="bg-img-food">

    <div class="container">
      <div class="row">

        <div class="col-12 titles-description">
          <div class="row">


            <div class="col-12 title">
              <h2>Compará, comprá, ahorrá.</h2>
            </div>

            <div class="col-12 col-md-5 col-lg-5 col-xl-4 mt-2">
              <h5 class="subtitle">Todos los precios de supermercados en un sólo lugar.</h5>
            </div>

            <div class="col-12 mt-3 btn-comprar">
              <a class="btn-comprar-ahora py-2 px-4 mt-2" href="register.php">Comprar ahora</a>
            </div>


          </div>
        </div>

        <!-- _____________________ Cards _____________________  -->

        <section class="col-12 card-box">
          <div class="row d-flex justify-content-center">

            <div class="col-10 col-md-4">
              <div class="card card-landing card-compara">
                <span class="icon-balance icon-landing green"></span>
                <h5 class="card-landing-title d-flex justify-content-center mt-4">Compará</h5>
                <p class="card-landing-text mt-3">El primer paso para ahorrar: comparar antes de comprar. Precios, ofertas y plazos de entrega de cada super en tiempo real.</p>
              </div>
            </div>

            <div class="col-10 col-md-4">
              <div class="card card-landing card-compra">
                <span class="icon-shopping-basket icon-landing green"></span>
                <h5 class="card-landing-title d-flex justify-content-center mt-4">Comprá</h5>
                <p class="card-landing-text mt-3">Armá tu lista de compras del super de forma rápida y sencilla. Podrás crear listas personalizadas y consultarla cuando quieras. </p>
              </div>
            </div>

            <div class="col-10 col-md-4">
              <div class="card card-landing">
                <span class="icon-save-money icon-landing green"></span>
                <h5 class="card-landing-title d-flex justify-content-center mt-4">Ahorrá</h5>
                <p class="card-landing-text mt-3">Enterate de todas las promociones bancarias de tu super más cercano. Seleccioná tu banco preferido y te enviaremos un recordatorio.</p>
              </div>
            </div>

          </div>
        </section>



      </div>
    </div>

  </header>

  <!-- _____________________ Marcas Supermercados _____________________  -->

  <section class="bg-logos-sup d-flex align-items-center">
    <div class="container">
      <div class="row">

        <div class="col-2">
          <img class="logo-sp" src='{{ asset('img/logos/logo_walmart.png') }}' alt="logo walmart">
        </div>

        <div class="col-2">
          <img class="logo-sp" src='{{ asset('img/logos/logo_dia.png') }}' alt="logo dia">
        </div>

        <div class="col-2">
          <img class="logo-sp" src='{{ asset('img/logos/logo_disco.png') }}' alt="logo disco">
        </div>

        <div class="col-2">
          <img class="logo-sp" src='{{ asset('img/logos/logo_jumbo.png') }}' alt="logo jumbo">
        </div>

        <div class="col-2">
          <img class="logo-sp" src='{{ asset('img/logos/logo_coto.png') }}' alt="logo coto">
        </div>

        <div class="col-2">
          <img class="logo-sp" src='{{ asset('img/logos/logo_carrefour.png') }}' alt="logo carrefour">
        </div>

      </div>
    </div>
  </section>

  <!-- _____________________ Device _____________________  -->

  <section class="bg-device">
    <div class="container">
      <div class="row">

        <div class="col-12 col-md-6 margin-device">
          <h3 class="title-2">¿Cómo funciona?</h3>
          <div class="row mt-4">
            <div class="col-12">
              <p class="subtitle">Selecciona tu ubicación, añade productos a tu lista de compras y compara precios. Elige un envío y recibe los productos en tu casa. </p>
            </div>
          </div>
          <p class="subtitle-postal">Empieza a comprar</p>

          <div class="row form-postal">
            <div class="col-6">
              <form action="index.html" method="post">
                <input type="text" class="form-control" id="validationCustom04" placeholder="Código postal">
              </form>
            </div>
          </div>

        </div>

        <div class="col-12 col-md-6 display-device">
          <img class="img-device mt-5" src='{{ asset('img/devices.png') }}' alt="">
        </div>

      </div>
    </div>
  </section>

  <!-- _____________________ Footer _____________________  -->

  <footer class="bg-footer">
    <div class="container">
      <div class="row display-footer">

        <div class="col-12 col-md-1 display-footer">
          <span class="icon-superbuscado-iso-circle green iso-footer"></span>
        </div>

        <div class="col-12 col-md-5 col-lg-4 display-footer">
          <p class="slogan-footer">Todos los precios de <br> supermercados en un sólo lugar.</p>
        </div>

        <div class="col-10 col-md-3 col-lg-4 border-footer">
          <a class="link-footer" href="contact.php"><p>Contactanos</p></a>
          <a class="link-footer" href="faq.php"><p class="mb-0">Preguntas frecuentes</p></a>
        </div>

        <div class="col-8 col-md-3 d-flex justify-content-around align-items-center">
          <a class="icon-social-footer" href="https://www.facebook.com/Superbuscado-109530587096091/"><span class="icon-facebook-circle green icon-social-footer"></span></a>
          <a class="icon-social-footer" href="https://www.instagram.com/superbuscado/"><span class="icon-instagram-circle green icon-social-footer"></span></a>
          <a class="icon-social-footer" href="https://twitter.com/super_buscado"><span class="icon-twitter-circle green icon-social-footer"></span></a>
        </div>

      </div>
    </div>
  </footer>



  <!-- jQuery CDN -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <!-- Popper.JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <!-- Bootstrap CDN -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>
