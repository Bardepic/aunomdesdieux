<?php get_header(); ?>
<?php wp_head(); ?>
<!-- HEADER -->
<section class="container promo">
    <div class="row">
      <!-- description à gauche -->
      <div class="col-lg-12 promo-content__title">
        <?php the_post(); ?>
        <div id="article">
        <h1><?php the_title(); ?></h1>
        <img src="wp-content/themes/anddv2/assets/img/logo.png" alt="AU Nom Des Dieux - Saga Fantastique Mythologie et Urban-Fantasy"/>
        <?php the_content(); ?>
        </div>
  </div>
</section>
<section class="argument">
  <div class="inner-argument inner-argument--downright">
  <div class="container">
      <h3>
      Un univers d’Urban-Fantasy où les anciens panthéons mythologiques existent dans l’ombre, agissant par le biais de leurs enfants batards.</h3>
    </div>
  </div>
</section>
<section class="argument">
  <div class="inner-argument container">
    <h3 style="float: right; text-align: right;">
    Des guerres ont fait rages - et d’autres sont à venir. En tout temps, les enfants des Puissants y prirent part, pour rétablir l’équilibre.
    </h3>
  </div>
</section>
<section class="argument">
  <div class="inner-argument inner-argument--upright">
    <div class="container">
      <h3>
      Une trame uchronique où la France et d’autres vieilles nations partiront au secours de l’Amérique toute entière, asservie par un homme voulant faire le bien...  </h3>
    </div>
  </div>
</section>
<section class="entertheuniverse">
  <div class="container">
    <h2>Entrer dans l'univers</h2>
    <p>Une hésitation sur le type de roman ou d’écriture ? Jugez par vous même ! <br /> Recevez gratuitement la nouvelle Til Valhall.<br /></p>
  <div class="flex" style="justify-content: center; margin-top: 80px;">
    <div class="book">
      <div class="couv couv1"></div>
      <p class="title">Livre I<br />Destiné Manifeste</p>
      <p>Tome 1/2 de l'arc <br />De L'Eau et du Sang</p>
      <a class="btn btn--yellow" href="">Acheter sur Amazon</a>
    </div>
    <div class="book">
      <div class="couv couv2"></div>
      <p class="title">Livre II<br />Volonté Inébranlable</p>
      <p>Tome 2/2 de l'arc <br />De L'Eau et du Sang</p>
      <a class="btn btn--green" href="">Acheter sur Amazon</a>
    </div>
  </div>
  </div>
</section>
<section class="presse">
  <div class="container">
    <h2>Apparition presse et lectorat</h2>
    <?php include 'presse.php' ?>
  </div>
</section>
<?php get_footer(); ?>
