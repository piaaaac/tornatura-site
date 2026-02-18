<?php
$ass = $kirby->url("assets") . "/images";

$openingImageMob = $page->openingImageMob()->toFiles()->first();
$openingImageMobUrl = ($openingImageMob) ? $openingImageMob->url() : "https://placehold.co/800x1400/000000/666666/png";
$openingImageDsk = $page->openingImageDsk()->toFiles()->first();
$openingImageDskUrl = ($openingImageDsk) ? $openingImageDsk->url() : "https://placehold.co/1400x800/000000/666666/png";


// $openingImageMobUrl = "$ass/hp-opening-image-t.jpg";
// $openingImageDskUrl = "$ass/hp-opening-image-t.jpg";

$photographUrl = "$ass/vines.jpg";
?>

<section class="home-opening-image" data-role="opening-image">
  <div class="image only-mob" style="background-image: url('<?= $openingImageMobUrl ?>');"></div>
  <div class="image only-dsk" style="background-image: url('<?= $openingImageDskUrl ?>');"></div>
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
          <div class="col-xl-4 offset-xl-4 mt-4 d-flex justify-content-end">
            <a href="https://app.tornatura.it" target="_blank" class="megabutton-v2">
              <span class="layer layer-main">Accedi<br />alla web-app</span>
              <span class="layer layer-middle"></span>
              <span class="layer layer-below"></span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12 space-4"></div>
    </div>
  </div>
</section>

<section class="p-0">
  <img src="<?= $photographUrl ?>" class="img-fluid d-block" alt="<?= $page->title()->html() ?>" />
</section>