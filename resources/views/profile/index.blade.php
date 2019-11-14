<!DOCTYPE html>
<html>

<head>

  <!-- Configuración -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Mis datos</title>

  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

  <!-- styles CSS -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/sidebar_style.css">
  <link rel="stylesheet" href="css/landing_style.css">
  <link rel="stylesheet" href="css/lists_style.css">
  <link rel="stylesheet" href="css/profile.css">
  <link rel="stylesheet" href="css/login_register_contact.css">

  <!-- icons -->
  <link rel="stylesheet" href="assets/icons/icons.css">

  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&display=swap" rel="stylesheet">

  <!-- favicon -->
  <link rel="shortcut icon" href="iso-superbuscado.ico" />

</head>

<body class="bg-grey">

  <!-- _____________________ Navbar _____________________ -->

  <header class="fixed-top navbar-principal">

    <nav class="first-navbar">
      <div class="container">
        <div class="row">

          <!-- logo -->
          <div class="col-4 col-sm-4 col-md-3 col-lg-2">
            <a href="index.php"><img class="logo-navbar" src="assets/img/logo-superbuscado-white.png" alt=""></a>
          </div>

          <!-- menu user -->

          <nav class="navbar col-8 col-sm-8 col-md-9 col-lg-10 navbar-expand-lg navbar-dark pl-0">

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
                      <a class="dropdown-item" href="logout.php">Salir</a>
                    </li>

                  </ul>
                </div>
              </div>
            </div>
          </nav>

        </div>
      </div>
    </nav>

  </header>

  <!-- _____________________ Profile _____________________ -->

  <section class="container" style="padding-top:6em;">
    <div class="row d-flex justify-content-center">

      <div class="col-12">
        <div class="row d-flex justify-content-center">

          <!-- personal info -->

          <div class="col-12 col-md-6 col-lg-4">
            <div class="row d-flex justify-content-center">

              <div class="avatar" style="background-image: url(files/img_profile.jpg)"></div>

              <div class="col-12">
                <div class="card card-profile pb-4">
                  <div class="row">

                    <div class="col-12">
                      <h6 class="email-profile green brd-bottom-green"><?=$_SESSION['user']['email'] ?? ''?></h6>
                      <p class="personal-info mt-3 brd-bottom-grey"><b>Nombre: </b><?=$_SESSION['user']['name'] ?? ''?></p>
                      <p class="personal-info brd-bottom-grey"><b>Apellido: </b> <?=$_SESSION['user']['lastname'] ?? ''?></p>
                      <p class="personal-info brd-bottom-grey"><b>DNI: </b><?=$_SESSION['user']['dni'] ?? ''?></p>
                      <p class="personal-info"><b>Teléfono: </b> <?=$_SESSION['user']['tel'] ?? ''?></p>
                    </div>

                    <div class="col-12">
                      <a class="btn-ingresar" href="edit_profile.php">Editar</a>
                    </div>

                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- Address -->

          <div class="col-12 col-md-6 col-lg-4">
            <div class="row">

              <div class="col-12 mb-4">
                <div class="card card-address pb-4">

                   <p class="card-title-address brd-bottom-green"><b>Domicilio de envío</b></p>
                   <p class="address-info mt-3 mb-1"><b>Av. Monrroe 860</b> <br>Capital Federal (1428), CABA</p>

                   <div class="">
                     <a class="btn-ingresar" href="edit_address_shipping.php">Editar</a>
                   </div>

                </div>
              </div>

              <div class="col-12 mb-4">
                <div class="card card-address2 pb-4">

                   <p class="card-title-address brd-bottom-green"><b>Domicilio de facturación</b></p>
                   <p class="address-info mt-3 mb-1"><b>Av. Monrroe 860</b> <br>Capital Federal (1428), CABA</p>

                   <div class="">
                     <a class="btn-ingresar" href="edit_address_fact.php">Editar</a>
                   </div>

                </div>
              </div>

            </div>
          </div>

        </div>
      </div>

      <!-- credit cards -->

      <div class="col-12">
        <div class="row d-flex justify-content-center">

          <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card card-bank pb-4">
              <div class="row">

                <div class="col-12">
                  <h6 class="card-title-info brd-bottom-white"><b>Mis bancos</b></h6>
                </div>

                <div class="col-12 info-card-bank">
                  <div class="info-card-bank2 d-flex align-items-center">
                    <div class="logo-bank" style="background-image: url(assets/img/icbc.jpg)"></div>
                    <div class="">
                      <p class="text-card-bank">Terminada en 3033</p>
                      <p class="text-card-bank">Vence: 04/2022</p>
                    </div>
                  </div>
                </div>

                <div class="col-12 info-card-bank">
                  <div class="info-card-bank2 d-flex align-items-center">
                    <div class="logo-bank" style="background-image: url(assets/img/bbva.jpg)"></div>
                    <div class="">
                      <p class="text-card-bank">Terminada en 1552</p>
                      <p class="text-card-bank">Vence: 09/2020</p>
                    </div>
                  </div>
                </div>

                <div class="col-12 mt-2">
                  <a class="btn-ingresar" href="edit_bank.php">Editar</a>
                </div>

              </div>
            </div>
          </div>

          <!-- Tarjetas de fidelización -->

          <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card card-bank pb-4">
              <div class="row">

                <div class="col-12">
                  <h6 class="card-title-info brd-bottom-white"><b>Tarjetas de fidelización</b></h6>
                </div>

                <div class="col-12 info-card-bank">
                  <div class="info-card-bank2 d-flex align-items-center">
                    <div class="logo-bank" style="background-image: url(assets/img/club_la_nacion.jpg)"></div>
                    <div class="">
                      <p class="text-card-bank"><b>Club La Nación</b></p>
                      <p class="text-card-bank">Premium</p>
                    </div>
                  </div>
                </div>

                <div class="col-12 info-card-bank">
                  <div class="info-card-bank2 d-flex align-items-center">
                    <div class="logo-bank" style="background-image: url(assets/img/club_dia.jpg)"></div>
                    <div class="">
                      <p class="text-card-bank"><b>Club día</b></p>
                    </div>
                  </div>
                </div>

                <div class="col-12 mt-2">
                  <a class="btn-ingresar" href="edit_card.php">Editar</a>
                </div>

              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>

  <!-- _____________________ Footer _____________________  -->

  <footer class="footer-index">
    <div class="container">
      <div class="row display-footer">

        <div class="col-12 col-md-1 display-footer">
          <span class="icon-superbuscado-iso-circle green iso-footer"></span>
        </div>

        <div class="col-12 col-md-5 col-lg-4 display-footer">
          <p class="slogan-footer">Todos los precios de <br> supermercados en un sólo lugar.</p>
        </div>

        <div class="col-10 col-md-3 col-lg-4 border-footer">
          <a class="link-footer" href="contact_index.php"><p>Contactanos</p></a>
          <a class="link-footer" href="#"><p class="mb-0">Preguntas frecuentes</p></a>
        </div>

        <div class="col-8 col-md-3 d-flex justify-content-around align-items-center">
          <a class="icon-social-footer" href="https://www.facebook.com/Superbuscado-109530587096091/"><span class="icon-facebook-circle green icon-social-footer"></span></a>
          <a class="icon-social-footer" href="https://www.instagram.com/superbuscado/"><span class="icon-instagram-circle green icon-social-footer"></span></a>
          <a class="icon-social-footer" href="https://twitter.com/super_buscado"><span class="icon-twitter-circle green icon-social-footer"></span></a>
        </div>

      </div>
    </div>
  </footer>



  <!-- jQuery CDN - Slim version (=without AJAX) -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <!-- Popper.JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

  <!-- jQuery Custom Scroller CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>


</body>

</html>
