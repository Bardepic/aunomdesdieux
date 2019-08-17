<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/dist/img/favicon.png" />
 <meta property="og:title" content="Au Nom Des Dieux"/>
 <meta property="og:image" content="http://aunomdesdieux.fr/wp-content/uploads/2019/08/Campagne-Facebook-Ads.png"/>
 <meta property="og:description" content="La saga fantastique par Gautier Durrieu de Madron - comment réagiriez vous au découvrant que toutes les légendes antiques étaient vraies ?"/>
 <meta property="og:type" content="website"/>
 <meta property="og:url" content="https://aunomdesdieux.fr"/>
 <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Buenard:300,400,700,900&display=swap" rel="stylesheet">

 <meta name="twitter:card" content="summary" />
 <meta name="twitter:image" content="http://aunomdesdieux.fr/wp-content/uploads/2019/08/Campagne-Facebook-Ads.png" />
 <meta name="twitter:image:alt" content="Plongez dans la saga fantastique Au Nom des Dieux"/>
 <meta name="twitter:title" content="Au Nom Des Dieux"/>
 <meta name="twitter:description" content="La saga fantastique par Gautier Durrieu de Madron - comment réagiriez vous au découvrant que toutes les légendes antiques étaient vraies ?"" />

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
