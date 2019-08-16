<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/dist/img/favicon.png" />
 <meta property="og:title" content="BeLib"/>
 <meta property="og:image" content="https://belib.org/wp-content/themes/belib/dist/img/banner.jpg"/>
 <meta property="og:description" content="Rencontrez des libertins où que vous soyez : au restaurant, au cinéma, à la plage ou dans les embouteillages, sans même toucher à votre smartphone."/>
 <meta property="og:type" content="website"/>
 <meta property="og:url" content="https://belib.org"/>
 <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Buenard:300,400,700,900&display=swap" rel="stylesheet">

 <meta name="twitter:card" content="summary" />
 <meta name="twitter:image" content="https://belib.org/wp-content/themes/belib/dist/img/banner.jpg" />
 <meta name="twitter:image:alt" content="Adoptez le Geo-Libertinage"/>
 <meta name="twitter:title" content="Belib"/>
 <meta name="twitter:description" content="Rencontrez des libertins où que vous soyez : au restaurant, au cinéma, à la plage ou dans les embouteillages, sans même toucher à votre smartphone." />

</head>
<?php wp_head(); ?>

<body <?php body_class(); ?>>

  <nav id="navbar" class="navbar-top" role="navigation">
    <div class="container flex">
      <div class="navbar-top__title">
        <a style="text-decoration: none;" href="<?php echo esc_url( home_url( '/' ) ); ?>"><h2>GAUTIER DURRIEU DE MADRON</h2>
        <h3>AUTEUR FANTASTIQUE</h3></a>
      </div>
      <div class="navbar-top__menu">
        <?php
         wp_nav_menu([
           "theme_location" => "header",
         ])
         ?>
      </div>
    </div>
  </nav>
