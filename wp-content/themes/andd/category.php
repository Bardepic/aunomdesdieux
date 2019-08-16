<?php get_header(); ?>
<?php wp_head(); ?>
<!-- TRONQUER -->
<?php
function tronquer($texte)
{
$max_caractere=15;
if(strlen($texte)>$max_caractere) {
  $texte = substr($texte, 0, $max_caractere);
  $position_espace = strrpos($texte, " ");
  $texte = substr($texte, 0, $position_espace);
}
return $texte;
}
?>
<!-- LOOP-->
<?php
$cat = get_the_category()[0];
$catName = $cat->name;
$catDescription = $cat->description;
?>
    <div class="container chroniques">
      <h1><?php echo $catName;?></h1>
      <h2><?php echo $catDescription; ?></h2>
        <a class="soumettre" href="<?php echo the_permalink(); ?>">Me soumettre une lecture</a>
<?php
$isFirstPost = true;
while (have_posts()) {
  the_post();
  if ($isFirstPost) {
    $isFirstPost = false;
    ?>
    <div class="row">
      <div class="col-lg-12">
      <div class="row" style="position: relative;">
        <div class="chroniques__inner">
          <div class="col-lg-12 chroniques__block">
          <a class="chroniques-link" href="<?php the_permalink(); ?>"></a>
            <div class="chronique__block--image" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
            </div>
            <div class="chronique__block--content">
              <h3><?php the_title() ?><span class="author">, de <?php the_author() ?></span></h3>
              <span class="date"><?php the_date() ?></span>
              <p>
                <?php $content = get_the_content(); echo mb_strimwidth($content, 0, 830, '...');?> <span style="font-size: 1rem;color: rgb(200,200,200);"> [Lire la Suite]</span> <span style="display: none;">--></span> <!-- HAck poubelle pour CORRIGEr UN Bug DE WORDPRESS -->

              </p>
            </div>
          </div>
        </div>
      </div>
      </div>
</div>
<div class="row">
<div class="col-lg-12">
  <div class="row">
    <?php
  } else {
    ?>
      <div class="col-lg-6 chroniques__inner">

          <div class="chroniques__block chroniques__block-min">
        <a class="chroniques-link" href="<?php the_permalink(); ?>"></a>
          <div class="chronique__block--image chronique__block--image-min" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
          </div>
          <div class="chronique__block--content chronique__block--content-min">
            <h3 style="font-size: 1.1rem;"><?php the_title() ?><span class="author">, de <?php the_author() ?></span></h3>
            <span class="date"><?php $date = get_the_date() ; echo $date ?></span>
            <div class="excerpt">
              <p><?php $content = get_the_excerpt(); echo mb_strimwidth($content, 0, 180, '... ');?><span style="font-size: 1rem;color: rgb(200,200,200);"> [Lire la Suite]</span> <span style="display: none;">--></span> <!-- HAck poubelle pour CORRIGEr UN Bug DE WORDPRESS --></p>
            </div>
          </div>
      </div>
    </div>
    <?php
  }
}
?>
</div>
</div>
</div>
</div>
<?php get_footer(); ?>
