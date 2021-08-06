<?php get_header(); ?>
<?php wp_head(); ?>
<!-- HEADER -->

<div class="example">
  <audio crossorigin>
    <source src="<?php echo get_template_directory_uri();?>/audio/intro.mp3" type="audio/mpeg">
  </audio>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function() {
  new GreenAudioPlayer('.example');
});
  </script>

<section class="promo">
  <div class="container">
    <div class="row">
      <!-- description à gauche -->
      <div class="col-lg-7 promo-content__title">
        <?php the_post(); ?>
        <div id="article">
            <?php
            $id = 109;
            $billetindex = get_post($id);
            $titleindex = $billetindex->post_title;
            $dateindex = $billetindex->post_date;
            $contenuindex = $billetindex->post_content;
            $contenuindex = apply_filters('the_content', $contenuindex);
            $contenuindex = str_replace(']]>', ']]>', $contenuindex);
            ?>

        <h1><?php echo "$titleindex"; ?></h1>
        <?php echo "$contenuindex"; ?>
        <div style="margin-top: 40px; text-align: left;">
         <a style="display: inline-block;" href="https://facebook.com/aunomdesdieux" target="_blank"><div class="social-icons fb-icon"></div></a>
         <a style="display: inline-block;" href="https://instagram.com/aunomdesdieux" target="_blank"><div class="social-icons fb-insta"></div></a>  
      </div>
        </div>
    </div>
    <div class="col-lg-5 promo-left">
        <img src="wp-content/themes/anddv2/assets/img/books_3"/>
      </div>
  </div>
</section>
<section class="argument">
  <div class="inner-argument inner-argument--downright">
  <div class="heroes heroes--heroes1"></div>
  <div class="container">
      <h3>
      des romans <br />d’Urban-Fantasy</h3>
      <p>...où les anciens panthéons mythologiques existent dans l’ombre, intervenant dans le monde moderne par le biais de leurs enfants batards.</h3>
    </div>
  </div>
</section>
<section class="argument">
<div class="heroes heroes--heroes2"></div>
  <div class="inner-argument inner-argument--center">
    <div class="container">
    <div style="float: right; text-align: right;">
      <h3>
      Les guerres ont fait <br />rages - et d’autres <br />sont à venir</h3>
        <p>En tout temps, les enfants des Puissants y prirent part en secret pour servir des intérêts de leurs panthéons ou de leurs familles...</p>
    </div>
  </div>
  </div>
</section>
<section class="argument argument3">
  <div class="inner-argument inner-argument--upright">
  <div class="heroes heroes--heroes3"></div>
    <div class="container">
    <h3>
    Une trame uchronique</h3>
      <p>...où la France et d’autres vieilles nations partiront au secours d'un continent Américain asservi par les afres de la corruption et de la guerre</h3>
  
    </div>
  </div>
</section>
<section class="entertheuniverse">
  <div class="container">
    <h2>Entrer dans l'univers</h2>
    <p>Une hésitation sur le type de roman ou d’écriture ? Jugez par vous même ! <br /> Recevez gratuitement la nouvelle Til Valhall.<br /></p>
 
 <!--   <div>
 <div class="mj-embedded mj-embed-shadow mj-horizontal" style="box-sizing: border-box; display: inline-block; font-family: Ubuntu, Helvetica; line-height: normal; text-align: left; background-color: transparent; box-shadow: none; padding: 20px; padding-bottom: 0; height: auto;">
    <div class="mj-embedded-content" style="padding: 15px;">
     <div class="mj-embedded-footer" style="box-sizing: border-box;">
            <div class="mj-form" style="box-sizing: border-box; display: table; width: 100%;">
                <div class="w-preview-field-table" style="box-sizing: border-box; display: block; width: 100%;">
                    <div class="w-preview-fields-content-row" style="box-sizing: border-box; display: flex; flex-direction: row;">
                        <div class="w-preview-fields-content-cell" style="box-sizing: border-box; vertical-align: top; flex-grow: 1; padding: 0px 10px 10px 0px; display: block; width: 100%;">
                            <input class="w-preview-fields-content-cell-field-email" type="email" placeholder="Adresse E-Mail" name="w-field-field-154377-1000704-1282110-email" required="required" style="box-sizing: border-box; font-family: Raleway, Ubuntu, Helvetica; font-size: 14px; height: 46px; font-weight: 600; padding-left: 27px; margin-right: 5px; border-radius: 8px; background: #f2f2f2; border: none; width: 300px;">
                        </div><div class="w-preview-fields-content-cell" style="box-sizing: border-box; vertical-align: top; flex-grow: 1; padding: 0px 10px 10px 0px; display: block; width: 100%;">
                            <input class="w-preview-fields-content-cell-field-41295" type="text" placeholder="prénom" name="w-field-field-154377-1000704-1282110-41295" style="box-sizing: border-box;font-family: Raleway, Ubuntu, Helvetica; font-size: 14px; height: 46px; font-weight: 600; padding-left: 27px; margin-right: 5px; border-radius: 8px; background: #f2f2f2; border: none; width: 190px;" required="">
                        </div><div class="mj-form-button" style="box-sizing: border-box; font-family: Ubuntu, Helvetica; text-align: center; vertical-align: middle; flex-grow: 1; margin: 0px; width: 35%; padding: 0px;">
                            <div class="mj-subscribe-button" style="box-sizing: border-box; width: auto;font-family: Raleway, Ubuntu, Helvetica; font-size: 14px; height: 46px; font-weight: 900;  text-align: center; line-height: 36px; color: rgb(89, 91, 97); border-radius: 8px; max-width: 100%; white-space: nowrap; background-color: rgb(161, 60, 65); padding: 5px 40px;">
                                <div class="mj-subscribe-button-content" style="box-sizing: border-box; display: inline-block; color: rgb(255, 255, 255);"><b>VALIDER</b></div>
                            </div>
                        </div>
                       
                        
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
<p style="font-size: 0.9rem; color: #999;line-height: 1.2rem;max-width: 500px; margin: auto;">En cliquant sur valider, vous acceptez de recevoir des informations de la part de l'auteur de la saga Au Nom des Dieux, et comprenez que vous pouvez vous désabonner à tout moment.</p>
</div>--> 

<div class="subscribe">
  <iframe class="mj-w-res-iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://app.mailjet.com/widget/iframe/5nxc/E9X" width="100%"></iframe>
</div>
<div class="subscribe-mobile">
  <iframe class="mj-w-res-iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://app.mailjet.com/widget/iframe/5nxc/Ea0" width="100%"></iframe>
</div>

<script type="text/javascript" src="https://app.mailjet.com/statics/js/iframeResizer.min.js"></script>


<p style="font-size: 0.9rem; color: #999;line-height: 1.2rem;max-width: 500px; margin: auto;">En cliquant sur valider, vous acceptez de recevoir des informations de la part de l'auteur de la saga Au Nom des Dieux, et comprenez que vous pouvez vous désabonner à tout moment.</p>


    <div class="flex flex-xs" style="justify-content: center; margin-top: 80px;">
    <div class="book">
      <div class="couv couv1"></div>
      <p class="title">Livre I</p>
      <p><b>Destiné Manifeste</b></p>
      <p class="subtitle">Tome 1/2 de l'arc <br />De L'Eau et du Sang</p>
      <a class="btn btn--yellow" target="_blank" href="https://www.amazon.fr/Au-nom-Dieux-Destin%C3%A9e-Manifeste/dp/2956831917">Acheter sur Amazon</a>
      <a class="btn btn--yellow2" target="_blank" href="https://www.kobo.com/fr/fr/ebook/au-nom-des-dieux-de-l-eau-et-du-sang">Acheter sur Kobo</a>
       
    </div> 
    <div class="book">
      <div class="couv couv2"></div>
      <p class="title title--green">Livre II</p>
      <p><b>Volonté Inébranlable</b></p>
      <p class="subtitle">Tome 2/2 de l'arc <br />De L'Eau et du Sang</p>
      <a class="btn btn--green"  target="_blank" href="https://www.amazon.fr/Au-nom-Dieux-Volonté-inébranlable/dp/2956831925">Acheter sur Amazon</a>
      <a class="btn btn--green2" target="_blank" href="https://www.kobo.com/fr/fr/ebook/au-nom-des-dieux-de-l-eau-et-du-sang-1">Acheter sur Kobo</a>
    </div>
    <div class="book">
      <div class="couv couv3"></div>
      <p class="title title--blue">Livre III</p>
      <p><b>Désirer la ténèbre</b></p>
      <p>(Peut-être lu séparément des 2 précédents)</p>
      <p class="subtitle">Tome 1/2 de l'arc <br />Fracture</p>
      <a class="btn btn--blue"  target="_blank" href="https://www.amazon.fr/Au-nom-Dieux-Fracture-D%C3%A9sirer/dp/2956831941">Acheter sur Amazon</a>
      <a class="btn btn--blue2"  target="_blank" href="https://www.kobo.com/fr/fr/ebook/fracture-62">Acheter sur Kobo</a>
  
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
<section class="partners">
  <div class="container">
    <h2>Partenaires</h2>
    <?php include 'partners.php' ?>
  </div>
</section>
<?php get_footer(); ?>
