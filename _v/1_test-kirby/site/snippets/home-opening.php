<?php
$openingImage = $page->openingImage()->toFiles()->first();
$openingImageUrl = ($openingImage) ? $openingImage->url() : "https://placehold.co/1400x800/000000/666666/png";

$ass = $kirby->url("assets") . "/images";
$openingImageUrlMob = "$ass/hp-opening-image.jpg";
$openingImageUrlDsk = "$ass/hp-opening-image.jpg";
?>

<section class="home-opening-image">
  <div class="image only-mob" style="background-image: url('<?= $openingImageUrlMob ?>');"></div>
  <div class="image only-dsk" style="background-image: url('<?= $openingImageUrlDsk ?>');"></div>
</section>

<section>
  <div class="container-fluid no-max-width">
    <div class="row">
      <div class="col-xl-8">
        <h2><?= $page->openingText1()->kti() ?></h2>
      </div>
      <div class="col-md-6 col-xl-12">
        <div class="row">
          <div class="col-xl-4"><?= $page->openingText2()->kt() ?></div>
          <div class="col-xl-4 offset-xl-4 d-flex justify-content-end">
            <a href="https://forms.office.com/e/6S3YN6rpqS" target="_blank" class="megabutton">Compila il form<br />e&nbsp;scarica l’App</a>
          </div>
        </div>
      </div>
      <div class="col-12 space-4">
      </div>
    </div>
  </div>
</section>