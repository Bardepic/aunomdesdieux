<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/dist/img/favicon.png" />
 <meta property="og:title" content="Au Nom Des Dieux - L'univers uchronique qui dépoussière les mythologies"/>
 <meta property="og:image" content="http://aunomdesdieux.fr/wp-content/uploads/2020/07/ogimage.jpg"/>
 <meta property="og:description" content="Au crépuscule du monde, les anciennes mythologies ont encore leur mot à dire... Une Saga Fantastique à la française, par Gautier Durrieu de Madron, auteur et passionné de mythologie."/>
 <meta property="og:type" content="website"/>
 <meta property="og:url" content="https://aunomdesdieux.fr"/>
 <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,900&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Buenard:300,400,700,900&display=swap" rel="stylesheet">

 <meta name="twitter:card" content="summary" />
 <meta name="twitter:image" content="http://aunomdesdieux.fr/wp-content/uploads/2020/07/ogimage.jpg" />
 <meta name="twitter:image:alt" content="Plongez dans la saga fantastique Au Nom des Dieux"/>
 <meta name="twitter:title" content="Au Nom Des Dieux - L'univers uchronique qui dépoussière les mythologies"/>
 <meta name="twitter:description" content="Au crépuscule du monde, les anciennes mythologies ont encore leur mot à dire... Une Saga Fantastique à la française, par Gautier Durrieu de Madron, auteur et passionné de mythologie."" />

 
<script src="<?php echo get_template_directory_uri();?>/dist/js/green-audio-player.js"></script>
 
</head>
<?php wp_head(); ?>

<body <?php body_class(); ?>>

  <nav id="navbar" class="navbar-top" role="navigation">
    <div class="flex">
      <div class="navbar-top__title">
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
