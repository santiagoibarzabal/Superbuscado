<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Configuración -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Listado Categorías</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- styles CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sidebar_style.css">
    <link rel="stylesheet" href="css/landing_style.css">

    <!-- icons -->
    <link rel="stylesheet" href="css/icons/icons.css">

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&display=swap" rel="stylesheet">

    <!-- favicon -->
    <link rel="shortcut icon" href="iso-superbuscado.ico" />

  </head>

  <body class="bg-grey">

    <nav id="sidebar">

      <div id="dismiss">
        <span class="icon-arrow-left"></span>
      </div>

      <div class="sidebar-header">
        <p class="title-sidebar">Categorías</p>
      </div>

      {{-- <ul>

      @foreach ($categorias as $categoria)

        @if ($categoria->subcategory_id == 0)

        <li>{{ $categoria->name }}
          @if ($categoria->children->count())
            <ul>
              @foreach ($categoria->children as $child)
                <li>{{ $child->name }}</li>
              @endforeach
            </ul>
          @endif
        </li>

        @endif

      @endforeach

      </ul> --}}

      <ul class="list-unstyled">

        @foreach ($categorias as $categoria)
          @if ($categoria->subcategory_id == 0)

          <li>
            <a href="#{{ $categoria->name }}" data-toggle="collapse" aria-expanded="false">{{ $categoria->name }}</a>

            <ul class="collapse list-unstyled" id="{{ $categoria->name }}">
              @if ($categoria->children->count())
                @foreach ($categoria->children as $child)
                <li>
                  <a href="#">{{ $child->name }}</a>
                </li>
                @endforeach
              @endif
            </ul>
          </li>

          @endif
        @endforeach
      </ul>
    </nav>

    <div class="overlay"></div>

    <!-- _____________________ Navbar _____________________ -->

    <header class="fixed-top navbar-principal">

      <nav class="first-navbar">
        <div class="container">
          <div class="row">

            <!-- logo -->
            <div class="col-4 col-sm-4 col-md-3 col-lg-2">
              <a href="{{ url('/') }}"><img class="logo-navbar" src="{{ asset('img/logos/logo-superbuscado-white.png') }}" alt=""></a>
            </div>

            <!-- search -->
            <div class="display-flex col-7 col-sm-7 col-md-8 col-lg-6">
              <form class="form-search" action="index.html" method="post">

                <input class="input-search" type="search" name="buscar" placeholder="Nombre de producto o marca">
                <button class="icon-search" type="button" name="button"></button>

              </form>
            </div>

            <!-- menu user -->

            <nav class="navbar col-1 col-sm-1 col-md-1 col-lg-4 navbar-expand-lg navbar-dark pl-0">

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <div class="navbar-nav">
                  <div class="nav-item dropdown">
                    <a class="nav-link btn-account" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div class="button-account">
                        <p class="my-account">Mi cuenta</p>
                        <p class="user-account"><?=$_SESSION['user']['email'] ?? ''?></p>
                      </div>
                      <span class="icon-arrow-down white"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                      <li>
                        <a class="dropdown-item" href="mis_listas.php">Mis listas</a>
                      </li>

                      <li>
                        <a class="dropdown-item" href="#">Compras</a>
                      </li>

                      <li>
                        <a class="dropdown-item" href="profile.php">Mis datos</a>
                      </li>

                      <li>
                        <a class="dropdown-item" href="landing.php">Salir</a>
                      </li>

                    </ul>
                  </div>
                </div>
              </div>
            </nav>

          </div>
        </div>
      </nav>

      <!-- _____________________ Nav sections _____________________ -->

      <nav class="second-navbar py-2">
        <nav class="container">
          <div class="row">

            <nav class="display-flex col-6 col-md-3 col-lg-2">
              <a class="btn-category" id="sidebarCollapse" href="#">
                <span class="icon-star green"></span>
                <div class="btn-sections">
                  <p class="category-lists">Categoría</p>
                  <p class="products-lists">Destacados</p>
                </div>
                <span class="icon-arrow-down green"></span>
              </a>
            </nav>

            <!-- Ubicación -->

            <nav class="display-flex col-6 col-md-9 col-lg-10 border-left">
              <a class="btn-location" href="#">
                <span class="icon-location green"></span>
                <p class="location">Capital Federal 1429</p>
              </a>
            </nav>


          </div>
        </nav>
      </nav>

    </header>

  </body>

  <!-- jQuery CDN - Slim version (=without AJAX) -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <!-- Popper.JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

  <!-- jQuery Custom Scroller CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

  <!-- Sidebar JS -->
  <script type="text/javascript">
      $(document).ready(function () {
          $("#sidebar").mCustomScrollbar({
              theme: "minimal"
          });

          $('#dismiss, .overlay').on('click', function () {
              $('#sidebar').removeClass('active');
              $('.overlay').removeClass('active');
          });

          $('#sidebarCollapse').on('click', function () {
              $('#sidebar').addClass('active');
              $('.overlay').addClass('active');
              $('.collapse.in').toggleClass('in');
              $('a[aria-expanded=true]').attr('aria-expanded', 'false');
          });
      });
  </script>

</html>
