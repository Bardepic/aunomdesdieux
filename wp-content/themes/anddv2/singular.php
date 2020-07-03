<?php get_header(); ?>
<?php wp_head(); ?>
<!-- HEADER -->
  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v4.0"></script>
<!-- -->
<?php the_post(); ?>
<div class="post">
  <div class="container">
  <div class="row">
  <div class="col-lg-3"></div>
  <div class="col-lg-6">
    <img src="<?php echo get_template_directory_uri();?>/dist/img/avatar.png"/>
<h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
  </div>
</div>
<div class="col-lg-3"></div>
</div>
</div>
<?php get_footer(); ?>
