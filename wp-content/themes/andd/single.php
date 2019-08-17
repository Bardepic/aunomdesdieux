<?php get_header(); ?>
<?php wp_head(); ?>
<!-- HEADER -->
  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v4.0"></script>
<!-- -->
<?php the_post(); ?>
<div class="container post">
  <div class="row">
    <div class="col-lg-4 post-left">
        <div class="post-left__couverture" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
<div style="flex: none; width: 100%;">
          <a href="<?php  the_author_url(); ?>" target="_blank"><div class="post-left__btn post-left__btn--more">EN SAVOIR PLUS</div></a>
        <div class="fb-share-button" style="margin-top: 10px;" data-href="<?php echo get_permalink(); ?>" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Partager</a>
          PARTAGER CETTE CHRONIQUE
</div>
        </div><br />
        <label style="font-family: 'Lato';">A propos de l'Auteur</label>
        <p style="font-family: 'Lato'; font-size: 0.9rem; margin-top: -10px; padding-bottom: 40px;"><?php  the_author_description(); ?></p>
      </div>
    <div class="col-lg-8 post-right">

        <h1><?php the_title(); ?></h1>
        <h2>Un livre de <?php the_author(); ?></h2>
        <p><?php the_content(); ?></p>

    </div>
  <br />
  <div class="col-lg-12">
    <div class="row">
  <label style="display: block;">Article publié par Gautier Durrieu de Madron, le <?php the_date(); ?></label>
</div>
</div>
  <br />
  <div style="display: none;">
    <h4>COMMENTAIRES</h4>
  <div id="comment-template" class="comment">
    <?php comments_template(); ?>
  </div>
</div>
</div>
</div>
<?php get_footer(); ?>
