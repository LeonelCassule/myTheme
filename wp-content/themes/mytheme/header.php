<!doctype html>
<html <?php language_attributes();?>>
  <head>
    <!-- Required meta tags -->
    <meta <?php bloginfo('charset');?>>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="css/bootstrap.css">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    
<title>My Theme</title>
   <?php wp_head();?>

  </head>

  <body>

    <div class="container">

      <div class="row my-5 align-items-center">

        <div class="col-md-8 col-sm-12">
          <h1>WordPress Theme</h1>
          <p class="lead">Theme || WordPress</p>
        </div>

        <div class="col-md-4 col-sm-12">
          <form>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="O que procura?">
              <div class="input-group-append">
                <button class="btn btn-my-color-5" type="button">Procurar</button>
              </div>
            </div>
          </form>
        </div>

      </div>

      <div class="row">

        <div class="col mb-5">

          <nav class="navbar navbar-expand-lg navbar-dark bg-primary rounded">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#meuNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>

            <nav class="navbar navbar-expend-lg navbar-dark bg-primary rounded">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#meuNavbar">
                  <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="meuNavbar">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="">Pesquisa</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="">Evento</a>
                </li>
                </li>
            </ul>
            </div>
          </nav>

        </div>

      </div>