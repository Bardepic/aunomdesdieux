<?php get_header(); ?>
<?php wp_head(); ?>
<!-- HEADER -->
<section class="container promo">
    <div class="row">
      <!-- description à gauche -->
      <div class="col-lg-7 promo-content__title">
        <?php the_post(); ?>
        <div id="article">
        <?php the_content(); ?>
        </div>
        <div class="col-lg-12 col-xs-6" style="margin-top: 40px; height: 120px;">
          <div class="row">
            <a href="https://www.amazon.fr/Au-nom-Dieux-Destin%C3%A9e-Manifeste/dp/2956831917/ref=sr_1_1?__mk_fr_FR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&keywords=au+nom+des+dieux&qid=1565798033&s=gateway&sr=8-1" target="_blank"><div class="btn" style="float: left;">Découvrir sur <img style="padding-left: 7px;" src="wp-content/themes/andd/assets/img/amazon.png" /></div></a>
            <a href="https://www.facebook.com/AunomdesDieux/" target="_blank"><div class="social-icons fb-icon"></div></a>
            <a href="https://www.instagram.com/AunomdesDieux/" target="_blank"><div class="social-icons fb-insta"></div></a>
          </div>
        </div>
        <h4>Ils en parlent...</h4>
        <div class="col-lg-12 col-xs-6">
          <div class="row">
            <div class="chroniqueurs">
              <div class="chroniqueurs__img lectricecompulsive"><img src="wp-content/themes/andd/assets/img/chroniquer1.png" /></div>
              <div class="chroniqueurs__img helariapedia"><img src="wp-content/themes/andd/assets/img/chroniquer2.png" /></div>
              <div class="chroniqueurs__img fildediane"><img src="wp-content/themes/andd/assets/img/chroniquer3.png" /></div>
              <div class="chroniqueurs__img instantlecteur"><img src="wp-content/themes/andd/assets/img/chroniquer4.png" /></div>
              <div class="chroniqueurs__img passionconfidences"><img src="wp-content/themes/andd/assets/img/chroniquer5.png" /></div>
            </div>
          </div>
        </div>
  </div>
      <!-- Image à droite -->
      <div class="col-lg-5 promo-content__image">
        <div class="couverture-block">
          <a href="https://www.amazon.fr/Au-nom-Dieux-Destin%C3%A9e-Manifeste/dp/2956831917/ref=sr_1_1?__mk_fr_FR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&keywords=au+nom+des+dieux&qid=1565798033&s=gateway&sr=8-1" target="_blank">
            <div class="couverture">
          </div></a>
          <div class="notes">
            <img src="wp-content/themes/andd/assets/img/stars5.png" />
            <p>(4.6/5) NOTE MOYENNE<br />
            <span class="subtitle">Lecteurs papiers et livres électroniques</span></p>
          </div>
        </div>
      </div>
      <!-- AUTEUR -->
      <div class="col-sm-12 auteur">
        <div class="row">
            <div class="col-sm-4" style="text-align: center; padding-bottom: 40px;"><img src="wp-content/themes/andd/assets/img/avatar.png" /></div>
            <div class="col-sm-8">
            <h4>Quelques mots sur l'auteur</h4>
            <h3>Gautier Durrieu de Madron</h3>
            <p>
              Nordique d’apparence, sudiste d’état mais écrivain avant tout, Gautier a d’abord cru vouloir embrasser une carrière scientifique. Mais hélas, après la biologie, la géologie puis l’archéologie, il s’est rendu compte qu’il était meilleur conteur que chercheur. Aussi, depuis maintenant 3 ans, il écrit et développe un univers littéraire, Au nom des Dieux, ainsi que d’autres projets, et s’est même lancé dans la chronique littéraire (les Chroniques d’un Berserker).
            <br /><br/>
            Et, depuis peu, est sorti le premier roman de cet univers : Au nom des Dieux - de l'Eau et du Sang. Ce premier tome est disponible sur Amazon. Le roman mêle mythologies et modernité pour offrir une revisite des mythes anciens dans une guerre mondiale à laquelle les dieux décident de prendre part. Il a choisi la voie héroïque, mais dangereuse, de l’autoédition, pour rester pleinement maître de ses écrits. Maintenant il ne lui reste plus qu’à trouver un anneau, quatre hobbits, deux hommes, un elfe, un nain et un magicien pour poursuivre la mission qu’il s’est confiée : réenchanter le monde !
            </p>
            </div>
            </div>
        </div>
     </div>
  </div>
</section>
<?php get_footer(); ?>
