<!doctype html>
<html <?php language_attributes();?>>
  <head>
    <!-- Required meta tags -->
    <meta <?php bloginfo('charset');?>>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="css/bootstrap.css">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    
   <?php wp_head();?>

  </head>

  <body>

    <div class="container">

      <div class="row my-5 align-items-center">

        <div class="col-md-8 col-sm-12">

        <div class="col-md-6 col-sm-12">

<?php

  $custom_logo_id = get_theme_mod( 'custom_logo' );
  $logo = wp_get_attachment_image_src( $custom_logo_id, 'full' );

  if ( has_custom_logo() ) {
    echo '<img src="' . esc_url( $logo[0] ) . '" class="img-fluid">';
  } else {
    echo '<h1>' . get_bloginfo('name') . '</h1>';
    echo '<p class="lead">' . get_bloginfo('description') . '</p>';
  }

?>

</div>
          
        </div>

        <div class="col-md-4 col-sm-12">
          <form>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="O que procura?">
              <div class="input-group-append">
               <button type="button" class="btn btn-primary" type="button">Procurar</button>
              </div>
            </div>
          </form>
        </div>

      </div>

      <div class="row">

        <div class="col mb-5">
       
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary rounded" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
     <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </div>
</nav>

        </div>

</div>